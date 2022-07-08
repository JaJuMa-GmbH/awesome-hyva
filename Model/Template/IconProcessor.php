<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2020-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Jajuma\AwesomeHyva\Model\Template;

use Jajuma\AwesomeHyva\ViewModel\SvgIcons;
use Magento\Framework\Filter\SimpleDirective\ProcessorInterface;
use Magento\Framework\View\Asset\File\NotFoundException;

/**
 * A custom directive to parse {{awesomeicon}} variables to inline SVGs
 */
class IconProcessor implements ProcessorInterface
{
    /**
     * @var SvgIcons
     */
    protected $svgIcons;

    public function __construct(
        SvgIcons $svgIcons
    ) {
        $this->svgIcons = $svgIcons;
    }

    /**
     * Unique name of this directive.
     *
     * @return string
     */
    public function getName(): string
    {
        return 'awesomeicon';
    }

    /**
     * Processes {{awesomeicon}} directives and turns them into inline SVG elements
     *
     * Valid formats:
     * {{awesomeicon "awesomeicon/brands/accessible-icon" classes="w-6 h-6" width=12 height=12}}
     *
     * Custom icons stored in `web/svg/` like `web/svg/cart.svg`:
     * {{awesomeicon "cart"}}
     *
     * @param mixed $path Template var, scalar or null if nothing has been passed to the directive.
     * @param string[] $parameters Additional parameters.
     * @param string|null $html HTML inside the directive.
     * @return string
     */
    public function process(
        $path,
        array $parameters,
        ?string $html
    ): string {
        // if no path provided -> remove the directive code
        if (!$path) {
            return '';
        }
        $classes = $parameters['classes'] ?? '';
        $width = isset($parameters['width']) ? (int)$parameters['width'] : null;
        $height = isset($parameters['height']) ? (int)$parameters['height'] : null;

        try {
            return $this->svgIcons->renderHtml($path, $classes, $width, $height);
        } catch (NotFoundException $error) {
            // if source file not found -> remove the directive code
            return '';
        }
    }

    /**
     * Default filters to apply if none provided in a template.
     *
     * @return string[]|null
     */
    public function getDefaultFilters(): ?array
    {
        return [];
    }
}
