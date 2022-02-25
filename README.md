# Awesome Hyvä by [JaJuMa](https://www.jajuma.de/)

<img align="right" width="300" height="300" src="https://www.jajuma.de/sites/default/files/ckfinder/userfiles/images/jajuma-develop/font-awesome-svg-icons-for-hyva-themes/Awesome-Hyva-Module-Magento-2-small.png">

Awesome Hyvä extension by [JaJuMa](https://www.jajuma.de/) allows to use [Font Awesome 5](https://fontawesome.com/v5.15/icons) icons as SVGs on Magento 2 sites using Hyvä Themes.

The module includes:
* Font Awesome 5
  * Solid Style Icons
  * Regular Style Icons &
  * Brands Icons
* Font Awesome 6
  * Solid Style Icons
  * Regular Style Icons &
  * Brands Icons
  
## Further Info, Demo, Extension Description & Manual

* [Extension Website EN](https://www.jajuma.de/en/jajuma-develop/extensions/font-awesome-icons-for-hyva-themes-extension)
* [Extension Website DE](https://www.jajuma.de/de/jajuma-develop/extensions/font-awesome-icons-fuer-hyva-themes-extension)
* [Demo & List of all included icons](https://hyva.extension.jajuma.de/awesomehyva/icon/list)

<img src="https://www.jajuma.de/sites/default/files/ckfinder/userfiles/images/jajuma-develop/font-awesome-svg-icons-for-hyva-themes/awesome-hyva-icon-list-demo-small.jpg">

## Installation

Install via composer as any other Magento extension from github:
```
composer require jajuma/awesomehyva
```

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

## Demo

### [Font Awesome 5 SVG icons for Hyvä Themes Demo](https://hyva.extension.jajuma.de/)

With [list of all included icons](https://hyva.extension.jajuma.de/awesomehyva/icon/list) and detail view for copy & paste the code to use the icons in your project.

## License

The code is licensed under the [MIT License (MIT)](https://github.com/JaJuMa/AwesomeHyva/blob/master/LICENSE)

## Other [Magento 2 Extensions](ttps://www.jajuma.de/en/jajuma-develop/magento-extensions) by [JaJuMa](https://www.jajuma.de/)

  * :framed_picture: Performance & UX:<br>[WebP Optimized Images for Magento 2](https://www.jajuma.de/en/jajuma-develop/extensions/webp-optimized-images-extension-for-magento-2#portfolio-content)<br>
  The #1 WebP Images Solution for Magento 2
   
  * :see_no_evil: SEO:<br>[PRG Pattern Link Masking for Magento 2](https://www.jajuma.de/en/jajuma-develop/extensions/prg-pattern-link-masking-for-magento-2)<br>
  Link Masking for Layered Navigation
  
  * :cop: User Experience:<br>[Shariff Social Share for Magento 2](https://www.jajuma.de/en/jajuma-develop/extensions/shariff-social-share-buttons-extension-for-magento-2)<br>
  GDPR compliant and customizable Sharing Buttons
  
  * :ok_man: User Experience:<br>[Customer Navigation Manager for Magento 2](https://www.jajuma.de/en/jajuma-develop/extensions/customer-navigation-manager-extension-for-magento-2)<br>
  Easily manage the links in your Customer Account
  
  * :movie_camera: Content Management:<br>[Video Widget for Magento 2](https://www.jajuma.de/en/jajuma-develop/extensions/video-widget-gdpr-extension-for-magento-2)<br>
  Embedding YouTube videos, GDPR compliant with auto preview image & fully responsive
  
  * :rocket: Performance & UX:<br>[Page Preload for Magento 2](https://www.jajuma.de/en/jajuma-develop/extensions/page-preload-extension-for-magento-2)<br>
  Faster faster page transitions and subsequent page-loads by preloading / prefetching

  * :chart_with_upwards_trend: Marketing:<br>[Matomo Analytics for Magento 2](https://www.jajuma.de/en/jajuma-develop/extensions/honey-spam-anti-spam-extension-for-magento-2)<br>
  Web Analytics - GDPR Compliant

  * :honey_pot: Site Optimization:<br>[Honey Spam Anti-Spam for Magento 2](https://www.jajuma.de/en/jajuma-develop/extensions/honey-spam-anti-spam-extension-for-magento-2)<br>
  Spam Protection - Reliable & GDPR Compliant

  * :bell: Marketing:<br>[Customer Registration Reminder & Cleanup for Magento 2](https://www.jajuma.de/en/jajuma-develop/extensions/customer-registration-reminder-and-cleanup-extension-for-magento-2)<br>
  Increase Your Customer Engangement & Cleanup your Customer Account Data Automatically

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