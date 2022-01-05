<?php
/**
 * @author    JaJuMa GmbH <info@jajuma.de>
 * @copyright Copyright (c) 2022-present JaJuMa GmbH <https://www.jajuma.de>. All rights reserved.
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 */

declare(strict_types=1);

namespace Jajuma\AwesomeHyva\Model\Template;

use Jajuma\AwesomeHyva\ViewModel\AwesomeSvgIcons;
use Magento\Framework\Filter\SimpleDirective\ProcessorInterface;
use Magento\Framework\View\Asset\File\NotFoundException;

/**
 * A custom directive to parse {{awesome}} variables to inline SVGs
 */
class IconProcessor implements ProcessorInterface
{
    /**
     * @var SvgIcons
     */
    protected $svgIcons;

    public function __construct(
        AwesomeSvgIcons $svgIcons
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
        return 'awesome';
    }

    /**
     * Processes {{awesome}} directives and turns them into inline SVG elements
     *
     * Valid formats:
     * {{awesome "solid/address-book" classes="w-6 h-6" width=12 height=12}}
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
