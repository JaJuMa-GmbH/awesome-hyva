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
 * @method string addressBookHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string addressCardHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string angryHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string arrowAltCircleDownHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string arrowAltCircleLeftHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string arrowAltCircleRightHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string arrowAltCircleUpHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string bellSlashHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 * @method string bellHtml(string $classnames = '', ?int $width = null, ?int $height = null)
 */

class AwesomeiconsRegular extends AwesomeSvgIcons
{
    private const AWESOME_REGULAR   = 'awesomeicons/regular';

    public function __construct(
        Asset\Repository $assetRepository,
        CacheInterface $cache,
        DesignInterface $design
    ) {
        parent::__construct($assetRepository, $cache, $design, self::AWESOME_REGULAR);
    }
}