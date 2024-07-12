# Awesome Hyvä for Magento 2 & Mage-OS with Hyvä Themes by [JaJuMa](https://www.jajuma.de/)

<img align="right" width="300" height="auto" src="https://www.jajuma.de/media/wysiwyg/jajuma-develop/font-awesome-icons-for-hyva-themes-extension-for-magento-2/Awesome-Hyva-Module-Magento-2-small.png">

Awesome Hyvä extension by [JaJuMa](https://www.jajuma.de/de/jajuma-shop/online-shop-mit-magento-2-und-hyva-themes) allows using [Font Awesome 5](https://fontawesome.com/v5/search?m=free) & [Font Awesome 6](https://fontawesome.com/search?m=free) icons as SVGs on Magento 2 & Mage-OS sites using [Hyvä Themes](https://www.jajuma.de/en/jajuma-shop/online-shop-with-magento-2-and-hyva-themes).

<br><br>

### Compatible with

<td>
    <table>
     <tr>
        <td><b>Hyvä Themes</b></td>
        <td><b>Mage-OS</b></td>
        <td><b>Magento</b></td>
     </tr>
     <tr>
       <td><a href="https://www.jajuma.de/en/jajuma-shop/online-shop-with-magento-2-and-hyva-themes"><img align="left" width="80" src="https://www.jajuma.de/media/wysiwyg/jajuma-shop/magento-with-hyva/JaJuMa-Hyvanaut-small.png"></a></td>
       <td><a href="https://www.jajuma.de/en/jajuma-shop/demo-shop-with-mage-os-and-hyva-themes"><img align="left" width="80" src="https://www.jajuma.de/media/wysiwyg/jajuma-develop/Mage-OS-Compatible.svg"></a></td>
       <td><a href="https://www.jajuma.de/en/jajuma-shop"><img align="left" height="60" src="https://www.jajuma.de/media/wysiwyg/jajuma-develop/magento-icon.svg"></a></td>
    </tr>
    </table>
</td>

## Features
Awesome Hyvä for Magento & Mage-OS with Hyvä Themes
* includes 3500+ icons:
  * Font Awesome 5
    * Solid Style Icons
    * Regular Style Icons &
    * Brands Icons
  * Font Awesome 6
    * Solid Style Icons
    * Regular Style Icons &
    * Brands Icons
* provides 6 ViewModels for adding icons in code
* allows adding Font Awesome Icons in CMS content from Backend.

## Further Info, Extension Description & Manual

* [Extension Website EN](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/font-awesome-icons-for-hyva-themes-extension)
* [Extension Website DE](https://www.jajuma.de/de/jajuma-develop/hyva-extensions/font-awesome-icons-fuer-hyva-themes-extension)

## Demo
Font Awesome 5 & 6 SVG icons for Hyvä Themes Demo:

* [On Hyvä Theme with Magento](https://www.jajuma.de/en/jajuma-shop/demo-shop-with-magento-2-and-hyva-themes)
* [On Hyvä Theme with Mage-OS](https://www.jajuma.de/en/jajuma-shop/demo-shop-with-mage-os-and-hyva-themes)

## Icon List
List view and detail view with all included icons for copy & paste the code to use the icons in your project:

* [Demo & List of all included icons Font Awesome v5](https://www.jajuma.de/en/font-awesome-icons-for-hyva-themes-extension/demo-icon-list-font-awesome-5)
* [Demo & List of all included icons Font Awesome v6](https://www.jajuma.de/en/font-awesome-icons-for-hyva-themes-extension/demo-icon-list-font-awesome-6)

<img src="https://www.jajuma.de/media/wysiwyg/jajuma-develop/font-awesome-icons-for-hyva-themes-extension-for-magento-2/awesome-hyva-icon-list-demo-large.jpg">

## Installation

Install via composer as any other Magento extension from github:
```
composer require jajuma/awesomehyva
```

or get it from [Extension Website](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/font-awesome-icons-for-hyva-themes-extension)
for manual installation in `app/code/` as any other Magento extension.  

:warning: Version 2.0.0+ requires Hyvä Theme Version >=1.1.12 

## Using Font Awesome icons in Hyvä Themes with JaJuMa "Awesome Hyvä" module

### How to use Font Awesome icons in Hyvä Themes in view models

JaJuMa "Awesome Hyvä" module provides 6 view models:

* For Font Awesome v5:
  * `AwesomeiconsSolid`
  * `AwesomeiconsRegular`
  * `AwesomeiconsBrands`
  
* For Font Awesome v6:
  * `Awesomeicons6Solid`
  * `Awesomeicons6Regular`
  * `Awesomeicons6Brands`  

Require one of the view models in your template:

* For Font Awesome v5:
```
/** @var \Jajuma\AwesomeHyva\ViewModel\AwesomeiconsSolid $awesomeiconsSolid */
$awesomeiconsSolid = $viewModels->require(\Jajuma\AwesomeHyva\ViewModel\AwesomeiconsSolid::class);
```
```
/** @var \Jajuma\AwesomeHyva\ViewModel\AwesomeiconsRegular $awesomeiconsRegular */
$awesomeiconsRegular = $viewModels->require(\Jajuma\AwesomeHyva\ViewModel\AwesomeiconsRegular::class);
```
```
/** @var \Jajuma\AwesomeHyva\ViewModel\AwesomeiconsBrands $awesomeiconsBrands */
$awesomeiconsBrands = $viewModels->require(\Jajuma\AwesomeHyva\ViewModel\AwesomeiconsBrands::class);
```

* For Font Awesome v6:
```
/** @var \Jajuma\AwesomeHyva\ViewModel\Awesomeicons6Solid $awesomeicons6Solid */
$awesomeicons6Solid = $viewModels->require(\Jajuma\AwesomeHyva\ViewModel\Awesomeicons6Solid::class);
```
```
/** @var \Jajuma\AwesomeHyva\ViewModel\Awesomeicons6Regular $awesomeicons6Regular */
$awesomeicons6Regular = $viewModels->require(\Jajuma\AwesomeHyva\ViewModel\Awesomeicons6Regular::class);
```
```
/** @var \Jajuma\AwesomeHyva\ViewModel\Awesomeicons6Brands $awesomeicons6Brands */
$awesomeicons6Brands = $viewModels->require(\Jajuma\AwesomeHyva\ViewModel\Awesomeicons6Brands::class);
```

Then render the icons like this:
```
<?= $awesomeiconsRegular->addressBookHtml('text-red-100', 24, 24) ?>
```
```
<?= $awesomeicons6Regular->addressBookHtml('text-red-100', 24, 24) ?>
```

* The method name is the camel cased icon name, followed by Html. 
* In an IDE you should have autocompletion for all available methods.
* The parameters are optional, and change the class (in single quotes) followed by 2 values for width and height attributes of the SVG element. 
* It is recommended to set all of them, so that the images are not rendered in huge sizes if CSS fails to load.

or you may also pass additional attributes like this as an array:
```
<?= $awesomeiconsRegular->addressBookHtml('text-red-100', 24, 24, ['style'=>'position:relative']) ?>
```
```
<?= $awesomeicons6Regular->addressBookHtml('text-red-100', 24, 24, ['style'=>'position:relative']) ?>
```

### How to use Font Awesome icons in Hyvä Themes in CMS content

Awesome Hyvä module adds an icon directive to render icons in filtered content like CMS blocks or pages.
So you may add icons in text / code blocks like this:

Release <= 1.0.1
```
{{awesome "solid/address-book" classes="text-red-100" width=12 height=12}}
```
Release >= 2.0.0
```
{{icon "awesomeicons/solid/address-book" classes="text-red-100" width=12 height=12}}
```
```
{{icon "awesomeicons6/solid/address-book" classes="text-red-100" width=12 height=12}}
```

* "classes" parameter is used for setting any css class.
* "width"/"height" parameters are used for setting width/height attributes for icons.
* Hint: You may get the code snippets for copy & paste for each icon on the demo - see link below.


## License

The code is licensed under the [MIT License (MIT)](https://github.com/JaJuMa/AwesomeHyva/blob/master/LICENSE)

## Other [Magento 2](https://www.jajuma.de/en/jajuma-develop/magento-extensions) & [Hyvä Themes Extensions](https://www.jajuma.de/en/jajuma-develop/hyva-extensions) by [JaJuMa](https://www.jajuma.de/)

* :framed_picture: Performance & UX:<br>[Ultimate Image Optimizer for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/ultimate-image-optimizer-extension-for-magento-2)<br>
  AVIF & WebP Images, Lazy Loading, High-Resolution / Retina images

* :framed_picture: Performance & UX:<br>[WebP Optimized Images for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/webp-optimized-images-extension-for-magento-2#portfolio-content)<br>
  The #1 WebP Images Solution for Magento 2

* :see_no_evil: SEO:<br>[PRG Pattern Link Masking for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/prg-pattern-link-masking-for-magento-2)<br>
  Link Masking for Layered Navigation

* :cop: User Experience:<br>[Shariff Social Share for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/shariff-social-share-buttons-extension-for-magento-2)<br>
  GDPR compliant and customizable Sharing Buttons

* :movie_camera: Content Management:<br>[Video Widget for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/video-widget-gdpr-extension-for-magento-2)<br>
  Embedding YouTube videos, GDPR compliant with auto preview image & fully responsive

* :rocket: Performance & UX:<br>[Page Preload for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/page-preload-extension-for-magento-2)<br>
  Faster faster page transitions and subsequent page-loads by preloading / prefetching

* :chart_with_upwards_trend: Marketing:<br>[Matomo Analytics for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/honey-spam-anti-spam-extension-for-magento-2)<br>
  Web Analytics - GDPR Compliant

* :honey_pot: Site Optimization:<br>[Honey Spam Anti-Spam for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/honey-spam-anti-spam-extension-for-magento-2)<br>
  Spam Protection - Reliable & GDPR Compliant

* :bell: Marketing:<br>[Customer Registration Reminder & Cleanup for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/customer-registration-reminder-and-cleanup-extension-for-magento-2)<br>
  Increase Your Customer Engangement & Cleanup your Customer Account Data Automatically

* :mega: UX & Marketing:<br>[Category Grid Callouts for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/category-grid-callouts-extension-for-magento-2)<br>
  Enrich Your Category Grids With Eye-Catching Callouts

* :thought_balloon: UX & Marketing:<br>[Customer Satisfaction Feedback for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/category-grid-callouts-extension-for-magento-2)<br>
  Collect Valuable Feedback From Your Customers & Understand How To Satisfy Your Customers

* :sparkler: UX:<br>[Auto Select Options for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/auto-select-options-extension-for-magento-2)<br>
  Automatically Select Configurable & Custom Options Based On Your Customer's Preferences

* :left_right_arrow: UX & Performance:<br>[Back Forward Cache - bfcache for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/back-forward-cache-extension-for-magento-2)<br>
  Enable bfcache for Magento 2 for improved UX & Core Web Vitals

* :heavy_division_sign: Accounting:<br>[Dynamic Shipping Tax Plus for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/proportional-pro-rata-dynamic-shipping-tax-plus-extension-for-magento-2)<br>
  Dynamic Shipping Tax Calculation incl. pro-rata/proportional tax rates

* :mag: Search:<br>[MySQL Search for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/magento-without-elasticsearch-mysql-search-extension-for-magento-2)<br>
  MySQL Search for Magento 2 without Elasticsearch

* :bangbang: Performance:<br>[Preload Critical Resources & Assets](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/resource-hints-preload-critical-resources-assets-extension-for-magento-2)<br>
  Resource Hints for preloading important and critical resources

* :octocat: Content Management:<br>[git 4 Page Builder](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/git-4-page-builder-extension-for-magento-2)<br>
  Manage & deploy Magento 2 Page Builder content via git

* :rocket: Performance:<br>[Hyvä Inline CSS](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/hyva-inline-css-extension-for-magento-with-hyva-themes)<br>
  Run Magento 2 without CSS file by inline all CSS

* :zap: Performance:<br>[Smart Speculations Rules](https://www.jajuma.de/en/jajuma-develop/magento-extensions/smart-speculations-rules-extension-for-magento-2)<br>
  Instant Page Navigations With Smart Data-Driven Prerendering Via Speculations Rules API

* :man_technologist: :free: Content Management:<br>[Syntax Highlighter 4 Page Builder](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/syntax-highlighter-4-page-builder-extension-for-magento-2)<br>
  Syntax Highlighting and more for Magento 2 Page Builder

* :triangular_flag_on_post: :free: UI & UX:<br>[Awesome Hyvä for Hyvä Themes](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/font-awesome-icons-for-hyva-themes-extension)<br>
  Font Awesome 5 & 6 Icons for your [Hyvä Themes](https://www.jajuma.de/de/jajuma-shop/online-shop-mit-magento-2-und-hyva-themes) Store

* :triangular_flag_on_post: :free: UI & UX:<br>[Hyvä Flags for Hyvä Themes](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/country-language-flag-icons-for-hyva-themes-extension)<br>
  Country & Language Flag Icons for your [Hyvä Themes](https://www.jajuma.de/de/jajuma-shop/online-shop-mit-magento-2-und-hyva-themes) Store

* :ok_man: :free: User Experience:<br>[Customer Navigation Manager for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/customer-navigation-manager-extension-for-magento-2)<br>
  Easily manage the links in your Customer Account

* :heavy_division_sign: :free: Accounting:<br>[Dynamic Shipping Tax for Magento 2](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/dynamic-shipping-tax-extension-for-magento-2)<br>
  Dynamic Shipping Tax Calculation

* :question: :free: Content:<br>[Hyvä FAQ Widget for Hyvä Themes](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/hyva-faq-widget-extension-for-hyva-themes)<br>
  FAQ Widget for your [Hyvä Themes](https://www.jajuma.de/de/jajuma-shop/online-shop-mit-magento-2-und-hyva-themes) Store

* :jigsaw: :free: Admin Tools:<br>[Magento Power Toys](https://www.jajuma.de/en/jajuma-develop/hyva-extensions/power-toys-for-magento-2)<br>
  Tools and helpers, a.k.a "Toys", for Magento Admins

## Other [Services](https://www.jajuma.de/en/jajuma/company-magento-ecommerce-agency-stuttgart) by [JaJuMa](https://www.jajuma.de/)

* :shopping: [JaJuMa-Market: Marketplace Software](https://www.jajuma.de/en/jajuma-market)<br>
  Complete Online Marketplace Software Solution. For Professional Demands. Feature Rich. Flexibly Customizable.

* :shopping_cart: [JaJuMa-Shop](https://www.jajuma.de/en/jajuma-shop)<br>
  Customized Magento Shop Solutions.

* :rocket: [JaJuMa-Shop: Hyvä Magento Shop Development](https://www.jajuma.de/de/jajuma-shop/online-shop-mit-magento-2-und-hyva-themes)<br>
  Hyvä Magento Shop Development.

* :orange_book: [JaJuMa-Shop: Magento Handbuch in Deutsch](https://www.jajuma.de/de/jajuma-shop/magento-2-handbuch/)<br>
  Magento Handbuch in Deutsch.

* :card_index_dividers: [JaJuMa-PIM](https://www.jajuma.de/en/jajuma-pim)<br>
  Product Information Management. Simple. Better.

* :heavy_plus_sign: [JaJuMa-Develop: Magento 2 Extensions](https://www.jajuma.de/en/jajuma-develop/magento-extensions)<br>
  Individual Solutions For Your Business Case.

* :paintbrush: [JaJuMa-Design](https://www.jajuma.de/en/jajuma-design)<br>
  Designs That Inspire.

* :necktie: [JaJuMa-Consult](https://www.jajuma.de/en/jajuma-consult)<br>
  We Show You New Perspectives.

© JaJuMa GmbH | [www.jajuma.de](www.jajuma.de)