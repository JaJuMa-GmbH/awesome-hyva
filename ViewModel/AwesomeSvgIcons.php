<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2020-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Jajuma\AwesomeHyva\ViewModel;

use Magento\Framework\App\CacheInterface;
use Magento\Framework\View\Asset;
use Magento\Framework\View\DesignInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * This generic AwesomeSvgIcons view model can be used to render any icon set (i.e. subdirectory in web/svg).
 *
 * The icon set can be configured with di.xml or by extending the class. The module ships with Awesomeicons
 * and two preconfigured view models:
 *
 * @see AwesomeiconsSolid
 * @see AwesomeiconsBrands
 * @see AwesomeiconsRegular
 */
class AwesomeSvgIcons implements ArgumentInterface
{
    private const CACHE_TAG = 'HYVA_ICONS';

    /**
     * @var string Path relative to asset directory Jajuma_AwesomeHyva::svg/
     */
    private $iconSet;

    /**
     * @var Asset\Repository
     */
    private $assetRepository;

    /**
     * @var CacheInterface
     */
    private $cache;

    /**
     * @var DesignInterface
     */
    private $design;

    public function __construct(
        Asset\Repository $assetRepository,
        CacheInterface $cache,
        DesignInterface $design,
        string $iconSet = ''
    ) {
        $this->iconSet = $iconSet;
        $this->assetRepository = $assetRepository;
        $this->cache = $cache;
        $this->design = $design;
    }

    /**
     * Renders an inline SVG icon from the configured icon set
     *
     * The method ends with Html instead of Svg so that the Magento code sniffer understands it is safe HTML and does
     * not need to be escaped.
     *
     * @param string $icon The SVG file name without .svg suffix
     * @param string $classNames CSS classes to add to the root element, space separated
     * @param int|null $width Width in px (recommended to render in correct size without CSS)
     * @param int|null $height Height in px (recommended to render in correct size without CSS)
     * @param array $attributes Additional attributes you can set on the SVG as key => value, like :class for AlpineJS
     * @return string
     */
    public function renderHtml(
        string $icon,
        string $classNames = '',
        ?int $width = 24,
        ?int $height = 24,
        array $attributes = []
    ): string {
        $cacheKey = $this->design->getDesignTheme()->getCode() .
            '/' . $this->iconSet .
            '/' . $icon .
            '/' . $classNames .
            '#' . $width .
            '#' . $height;
        if ($result = $this->cache->load($cacheKey)) {
            return $result;
        }
        $svg = \file_get_contents($this->getFilePath($icon)); // phpcs:disable
        $svgXml = new \SimpleXMLElement($svg);
        if (trim($classNames)) {
            $svgXml['class'] = $classNames;
        }
        if ($width) {
            $svgXml['width'] = (string) $width;
        }
        if ($height) {
            $svgXml['height'] = (string) $height;
        }

        if (!empty($attributes)) {
            foreach ($attributes as $key => $value) {
                if (!empty($key) && !isset($svgXml[strtolower($key)])) {
                    $svgXml[strtolower($key)] = (string)$value;
                }
            }
        }

        $result = \str_replace("<?xml version=\"1.0\"?>\n", '', $svgXml->asXML());
        $this->cache->save($result, $cacheKey, [self::CACHE_TAG]);
        return $result;
    }

    /**
     * Magic method to allow iconNameHtml() instead of renderHtml('icon-name'). Subclasses may
     * use @method doc blocks to provide autocompletion for available icons.
     */
    public function __call($method, $args)
    {
        if (\preg_match('/^(.*)Html$/', $method, $matches)) {
            return $this->renderHtml(self::camelCaseToKebabCase($matches[1]), ...$args);
        }
        return '';
    }

    /**
     * Convert a CamelCase string into kebab-case
     *
     * For example ArrowUp => arrow-up
     *
     * @SuppressWarnings(PHPMD.ShortVariable)
     */
    private static function camelCaseToKebabCase(string $in): string
    {
        return strtolower(preg_replace('/(.|[0-9])([A-Z]|[0-9])/', "$1-$2", $in));
    }

    /**
     * Return full path to icon file, respecting theme fallback
     */
    private function getFilePath(string $icon): string
    {
        $assetFileId = 'Jajuma_AwesomeHyva::svg/' . ($this->iconSet === '' ? '' : $this->iconSet . '/') . $icon . '.svg';
        return $this->assetRepository->createAsset($assetFileId)->getSourceFile();
    }
}
