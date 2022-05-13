<?php
/**
 * @author    JaJuMa GmbH <info@jajuma.de>
 * @copyright Copyright (c) 2022-present JaJuMa GmbH <https://www.jajuma.de>. All rights reserved.
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 */


namespace Jajuma\AwesomeHyva\Plugin\Backend\Model\Menu\Item;

use Magento\Backend\Model\Menu\Item;

class ExtensionsLinkPlugin
{
    /**
     * @param Item $subject
     * @param string $url
     * @return string
     */
    public function afterGetUrl(Item $subject, $url)
    {
        if ($subject->getId() === 'Jajuma_Extensions::extensions_link') {
            return 'https://www.jajuma.de/en/jajuma-develop/magento-extensions?mtm_campaign=Extensions-Menu';
        }

        if ($subject->getId() === 'Jajuma_AwesomeHyva::jajuma_awesomehyva_demo') {
            return 'https://hyva.extension.jajuma.de/awesomehyva/iconv6/list?mtm_campaign=Extensions-Menu';
        }

        return $url;
    }
}