<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2020-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Hyva\Awesome\ViewModel;

use Magento\Framework\App\CacheInterface;
use Magento\Framework\View\Asset;
use Magento\Framework\View\DesignInterface;

// phpcs:disable Magento2.NamingConvention.InterfaceName.WrongInterfaceName

/**
 * This class exists to offer autocompletion, it could have been a virtual type otherwise
 *
 * @method string adHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string addressBookHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string addressCardHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string adjustHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string airFreshenerHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string alignCenterHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string alignJustifyHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string alignLeftHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string alignRightHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 */

class AwesomeiconsSolid extends AwesomeSvgIcons
{
    private const AWESOME_SOLID   = 'awesomeicons/solid';

    public function __construct(
        Asset\Repository $assetRepository,
        CacheInterface $cache,
        DesignInterface $design
    ) {
        parent::__construct($assetRepository, $cache, $design, self::AWESOME_SOLID);
    }
}