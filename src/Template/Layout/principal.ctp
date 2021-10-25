<?php $cakeDescription = 'Bueno & Diaz Services Corp'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->
        Html->charset() ?>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <title>
                <?= $cakeDescription ?>
                :
                <?= $this->
                fetch('title') ?>
            </title>
            <?= $this->
            Html->meta('icon') ?>
            <?= $this->
            Html->css(['https://fonts.googleapis.com/css?family=Open+Sans:400,600', 'bootstrap.min', 'swiper', 'fontawesome-all.min', 'animate.min', 'astra', 'astra2', 'astra3', 'astra4', 'sites', 'sites2', 'sites3', 'sites4', 'sites5', 'wpcontent', 'wpcontent2', 'wpincludes', 'dist', 'beaver', 'beaver2']) ?>
            <?= $this->
            fetch('meta') ?>
            <?= $this->
            fetch('css') ?>

            <script type="text/javascript">
                setTimeout(function() {
                       $('.alert').fadeOut('slow');
                }, 800); // <-- time in milliseconds
            </script>
            <!--<link href="https://websitedemos.net/organic-shop-01/wp-content/themes/astra/assets/css/minified/style.min.css?ver=2.5.0" id="astra-theme-css-css" media="all" rel="stylesheet"/>-->
            <!--<link href="https://websitedemos.net/organic-shop-01/wp-content/uploads/sites/469/bb-plugin/cache/95-layout.css?ver=8942450fe80feae6b18bf7f13d2fd469" id="fl-builder-layout-95-css" media="all" rel="stylesheet"/>-->
            <style id="astra-theme-css-inline-css">
                html{font-size:100%;}a,.page-title{color:#8bc34a;}a:hover,a:focus{color:#8bc34a;}body,button,input,select,textarea,.ast-button,.ast-custom-button{font-family:'Open Sans',sans-serif;font-weight:400;font-size:16px;font-size:1rem;}blockquote{color:#000000;}h1,.entry-content h1,.entry-content h1 a,h2,.entry-content h2,.entry-content h2 a,h3,.entry-content h3,.entry-content h3 a,h4,.entry-content h4,.entry-content h4 a,h5,.entry-content h5,.entry-content h5 a,h6,.entry-content h6,.entry-content h6 a,.site-title,.site-title a{font-family:'Merriweather',serif;font-weight:700;}.site-title{font-size:25px;font-size:1.5625rem;}header .site-logo-img .custom-logo-link img{max-width:155px;}.astra-logo-svg{width:155px;}.ast-archive-description .ast-archive-title{font-size:40px;font-size:2.5rem;}.site-header .site-description{font-size:15px;font-size:0.9375rem;}.entry-title{font-size:30px;font-size:1.875rem;}.comment-reply-title{font-size:26px;font-size:1.625rem;}.ast-comment-list #cancel-comment-reply-link{font-size:16px;font-size:1rem;}h1,.entry-content h1,.entry-content h1 a{font-size:52px;font-size:3.25rem;font-family:'Merriweather',serif;}h2,.entry-content h2,.entry-content h2 a{font-size:34px;font-size:2.125rem;font-family:'Merriweather',serif;}h3,.entry-content h3,.entry-content h3 a{font-size:24px;font-size:1.5rem;font-family:'Merriweather',serif;}h4,.entry-content h4,.entry-content h4 a{font-size:20px;font-size:1.25rem;}h5,.entry-content h5,.entry-content h5 a{font-size:17px;font-size:1.0625rem;}h6,.entry-content h6,.entry-content h6 a{font-size:15px;font-size:0.9375rem;}.ast-single-post .entry-title,.page-title{font-size:30px;font-size:1.875rem;}#secondary,#secondary button,#secondary input,#secondary select,#secondary textarea{font-size:16px;font-size:1rem;}::selection{background-color:#8bc34a;color:#000000;}body,h1,.entry-title a,.entry-content h1,.entry-content h1 a,h2,.entry-content h2,.entry-content h2 a,h3,.entry-content h3,.entry-content h3 a,h4,.entry-content h4,.entry-content h4 a,h5,.entry-content h5,.entry-content h5 a,h6,.entry-content h6,.entry-content h6 a{color:#282828;}.tagcloud a:hover,.tagcloud a:focus,.tagcloud a.current-item{color:#000000;border-color:#8bc34a;background-color:#8bc34a;}.main-header-menu a,.ast-header-custom-item a{color:#282828;}.main-header-menu li:hover > a,.main-header-menu li:hover > .ast-menu-toggle,.main-header-menu .ast-masthead-custom-menu-items a:hover,.main-header-menu li.focus > a,.main-header-menu li.focus > .ast-menu-toggle,.main-header-menu .current-menu-item > a,.main-header-menu .current-menu-ancestor > a,.main-header-menu .current_page_item > a,.main-header-menu .current-menu-item > .ast-menu-toggle,.main-header-menu .current-menu-ancestor > .ast-menu-toggle,.main-header-menu .current_page_item > .ast-menu-toggle{color:#8bc34a;}input:focus,input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="reset"]:focus,input[type="search"]:focus,textarea:focus{border-color:#8bc34a;}input[type="radio"]:checked,input[type=reset],input[type="checkbox"]:checked,input[type="checkbox"]:hover:checked,input[type="checkbox"]:focus:checked,input[type=range]::-webkit-slider-thumb{border-color:#8bc34a;background-color:#8bc34a;box-shadow:none;}.site-footer a:hover + .post-count,.site-footer a:focus + .post-count{background:#8bc34a;border-color:#8bc34a;}.ast-small-footer{color:#c6c6c6;}.ast-small-footer > .ast-footer-overlay{background-color:#001524;background-image:none;}.ast-small-footer a{color:#415161;}.ast-small-footer a:hover{color:#ff5a44;}.footer-adv .footer-adv-overlay{border-top-style:solid;border-top-color:#7a7a7a;}.ast-comment-meta{line-height:1.666666667;font-size:13px;font-size:0.8125rem;}.single .nav-links .nav-previous,.single .nav-links .nav-next,.single .ast-author-details .author-title,.ast-comment-meta{color:#8bc34a;}.entry-meta,.entry-meta *{line-height:1.45;color:#8bc34a;}.entry-meta a:hover,.entry-meta a:hover *,.entry-meta a:focus,.entry-meta a:focus *{color:#8bc34a;}.ast-404-layout-1 .ast-404-text{font-size:200px;font-size:12.5rem;}.widget-title{font-size:22px;font-size:1.375rem;color:#282828;}#cat option,.secondary .calendar_wrap thead a,.secondary .calendar_wrap thead a:visited{color:#8bc34a;}.secondary .calendar_wrap #today,.ast-progress-val span{background:#8bc34a;}.secondary a:hover + .post-count,.secondary a:focus + .post-count{background:#8bc34a;border-color:#8bc34a;}.calendar_wrap #today > a{color:#000000;}.ast-pagination a,.page-links .page-link,.single .post-navigation a{color:#8bc34a;}.ast-pagination a:hover,.ast-pagination a:focus,.ast-pagination > span:hover:not(.dots),.ast-pagination > span.current,.page-links > .page-link,.page-links .page-link:hover,.post-navigation a:hover{color:#8bc34a;}.ast-header-break-point .ast-mobile-menu-buttons-minimal.menu-toggle{background:transparent;color:#8bc34a;}.ast-header-break-point .ast-mobile-menu-buttons-outline.menu-toggle{background:transparent;border:1px solid #8bc34a;color:#8bc34a;}.ast-header-break-point .ast-mobile-menu-buttons-fill.menu-toggle{background:#8bc34a;color:#ffffff;}@media (max-width:782px){.entry-content .wp-block-columns .wp-block-column{margin-left:0px;}}@media (max-width:921px){#secondary.secondary{padding-top:0;}.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single{padding:1.5em 2.14em;}.ast-separate-container #primary,.ast-separate-container #secondary{padding:1.5em 0;}.ast-separate-container.ast-right-sidebar #secondary{padding-left:1em;padding-right:1em;}.ast-separate-container.ast-two-container #secondary{padding-left:0;padding-right:0;}.ast-page-builder-template .entry-header #secondary{margin-top:1.5em;}.ast-page-builder-template #secondary{margin-top:1.5em;}#primary,#secondary{padding:1.5em 0;margin:0;}.ast-left-sidebar #content > .ast-container{display:flex;flex-direction:column-reverse;width:100%;}.ast-author-box img.avatar{margin:20px 0 0 0;}.ast-pagination{padding-top:1.5em;text-align:center;}.ast-pagination .next.page-numbers{display:inherit;float:none;}}@media (max-width:921px){.ast-page-builder-template.ast-left-sidebar #secondary{padding-right:20px;}.ast-page-builder-template.ast-right-sidebar #secondary{padding-left:20px;}.ast-right-sidebar #primary{padding-right:0;}.ast-right-sidebar #secondary{padding-left:0;}.ast-left-sidebar #primary{padding-left:0;}.ast-left-sidebar #secondary{padding-right:0;}.ast-pagination .prev.page-numbers{padding-left:.5em;}.ast-pagination .next.page-numbers{padding-right:.5em;}}@media (min-width:922px){.ast-separate-container.ast-right-sidebar #primary,.ast-separate-container.ast-left-sidebar #primary{border:0;}.ast-separate-container.ast-right-sidebar #secondary,.ast-separate-container.ast-left-sidebar #secondary{border:0;margin-left:auto;margin-right:auto;}.ast-separate-container.ast-two-container #secondary .widget:last-child{margin-bottom:0;}.ast-separate-container .ast-comment-list li .comment-respond{padding-left:2.66666em;padding-right:2.66666em;}.ast-author-box{-js-display:flex;display:flex;}.ast-author-bio{flex:1;}.error404.ast-separate-container #primary,.search-no-results.ast-separate-container #primary{margin-bottom:4em;}}@media (min-width:922px){.ast-right-sidebar #primary{border-right:1px solid #eee;}.ast-right-sidebar #secondary{border-left:1px solid #eee;margin-left:-1px;}.ast-left-sidebar #primary{border-left:1px solid #eee;}.ast-left-sidebar #secondary{border-right:1px solid #eee;margin-right:-1px;}.ast-separate-container.ast-two-container.ast-right-sidebar #secondary{padding-left:30px;padding-right:0;}.ast-separate-container.ast-two-container.ast-left-sidebar #secondary{padding-right:30px;padding-left:0;}}.elementor-button-wrapper .elementor-button{border-style:solid;border-top-width:0;border-right-width:0;border-left-width:0;border-bottom-width:0;}body .elementor-button.elementor-size-sm,body .elementor-button.elementor-size-xs,body .elementor-button.elementor-size-md,body .elementor-button.elementor-size-lg,body .elementor-button.elementor-size-xl,body .elementor-button{border-radius:60px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;}.elementor-button-wrapper .elementor-button{border-color:#8bc34a;background-color:#8bc34a;}.elementor-button-wrapper .elementor-button:hover,.elementor-button-wrapper .elementor-button:focus{color:#ffffff;background-color:#67c100;border-color:#67c100;}.wp-block-button .wp-block-button__link,.elementor-button-wrapper .elementor-button,.elementor-button-wrapper .elementor-button:visited{color:#ffffff;}.elementor-button-wrapper .elementor-button{font-family:inherit;font-weight:500;line-height:1;text-transform:uppercase;}body .elementor-button.elementor-size-sm,body .elementor-button.elementor-size-xs,body .elementor-button.elementor-size-md,body .elementor-button.elementor-size-lg,body .elementor-button.elementor-size-xl,body .elementor-button{font-size:14px;font-size:0.875rem;}.wp-block-button .wp-block-button__link{border-style:solid;border-top-width:0;border-right-width:0;border-left-width:0;border-bottom-width:0;border-color:#8bc34a;background-color:#8bc34a;color:#ffffff;font-family:inherit;font-weight:500;line-height:1;text-transform:uppercase;font-size:14px;font-size:0.875rem;border-radius:60px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;}.wp-block-button .wp-block-button__link:hover,.wp-block-button .wp-block-button__link:focus{color:#ffffff;background-color:#67c100;border-color:#67c100;}.menu-toggle,button,.ast-button,.ast-custom-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"]{border-style:solid;border-top-width:0;border-right-width:0;border-left-width:0;border-bottom-width:0;color:#ffffff;border-color:#8bc34a;background-color:#8bc34a;border-radius:60px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;font-family:inherit;font-weight:500;font-size:14px;font-size:0.875rem;line-height:1;text-transform:uppercase;}button:focus,.menu-toggle:hover,button:hover,.ast-button:hover,.button:hover,input[type=reset]:hover,input[type=reset]:focus,input#submit:hover,input#submit:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus{color:#ffffff;background-color:#67c100;border-color:#67c100;}@media (min-width:921px){.ast-container{max-width:100%;}}@media (min-width:544px){.ast-container{max-width:100%;}}@media (max-width:544px){.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single{padding:1.5em 1em;}.ast-separate-container #content .ast-container{padding-left:0.54em;padding-right:0.54em;}.ast-separate-container #secondary{padding-top:0;}.ast-separate-container.ast-two-container #secondary .widget{margin-bottom:1.5em;padding-left:1em;padding-right:1em;}.ast-separate-container .comments-count-wrapper{padding:1.5em 1em;}.ast-separate-container .ast-comment-list li.depth-1{padding:1.5em 1em;margin-bottom:1.5em;}.ast-separate-container .ast-comment-list .bypostauthor{padding:.5em;}.ast-separate-container .ast-archive-description{padding:1.5em 1em;}.ast-search-menu-icon.ast-dropdown-active .search-field{width:170px;}.ast-separate-container .comment-respond{padding:1.5em 1em;}}@media (max-width:544px){.ast-comment-list .children{margin-left:0.66666em;}.ast-separate-container .ast-comment-list .bypostauthor li{padding:0 0 0 .5em;}}@media (max-width:921px){.ast-mobile-header-stack .main-header-bar .ast-search-menu-icon{display:inline-block;}.ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon{margin:0;}.ast-comment-avatar-wrap img{max-width:2.5em;}.comments-area{margin-top:1.5em;}.ast-separate-container .comments-count-wrapper{padding:2em 2.14em;}.ast-separate-container .ast-comment-list li.depth-1{padding:1.5em 2.14em;}.ast-separate-container .comment-respond{padding:2em 2.14em;}}@media (max-width:921px){.ast-header-break-point .main-header-bar .ast-search-menu-icon.slide-search .search-form{right:0;}.ast-header-break-point .ast-mobile-header-stack .main-header-bar .ast-search-menu-icon.slide-search .search-form{right:-1em;}.ast-comment-avatar-wrap{margin-right:0.5em;}}@media (min-width:545px){.ast-page-builder-template .comments-area,.single.ast-page-builder-template .entry-header,.single.ast-page-builder-template .post-navigation{max-width:1240px;margin-left:auto;margin-right:auto;}}@media (max-width:921px){.ast-archive-description .ast-archive-title{font-size:40px;}.entry-title{font-size:30px;}h1,.entry-content h1,.entry-content h1 a{font-size:40px;}h2,.entry-content h2,.entry-content h2 a{font-size:30px;}h3,.entry-content h3,.entry-content h3 a{font-size:22px;}h4,.entry-content h4,.entry-content h4 a{font-size:20px;font-size:1.25rem;}h5,.entry-content h5,.entry-content h5 a{font-size:16px;font-size:1rem;}h6,.entry-content h6,.entry-content h6 a{font-size:15px;font-size:0.9375rem;}.ast-single-post .entry-title,.page-title{font-size:30px;}#masthead .site-logo-img .custom-logo-link img{max-width:120px;}.astra-logo-svg{width:120px;}.ast-header-break-point .site-logo-img .custom-mobile-logo-link img{max-width:120px;}}@media (max-width:544px){.ast-archive-description .ast-archive-title{font-size:40px;}.entry-title{font-size:30px;}h1,.entry-content h1,.entry-content h1 a{font-size:30px;}h2,.entry-content h2,.entry-content h2 a{font-size:26px;}h3,.entry-content h3,.entry-content h3 a{font-size:20px;}h4,.entry-content h4,.entry-content h4 a{font-size:18px;font-size:1.125rem;}h5,.entry-content h5,.entry-content h5 a{font-size:16px;font-size:1rem;}h6,.entry-content h6,.entry-content h6 a{font-size:15px;font-size:0.9375rem;}.ast-single-post .entry-title,.page-title{font-size:30px;}.ast-header-break-point .site-branding img,.ast-header-break-point #masthead .site-logo-img .custom-logo-link img{max-width:120px;}.astra-logo-svg{width:120px;}.ast-header-break-point .site-logo-img .custom-mobile-logo-link img{max-width:120px;}}@media (max-width:921px){html{font-size:91.2%;}}@media (max-width:544px){html{font-size:91.2%;}}@media (min-width:922px){.ast-container{max-width:1240px;}}@font-face {font-family: "Astra";src: url(https://websitedemos.net/organic-shop-01/wp-content/themes/astra/assets/fonts/astra.woff) format("woff"),url(https://websitedemos.net/organic-shop-01/wp-content/themes/astra/assets/fonts/astra.ttf) format("truetype"),url(https://websitedemos.net/organic-shop-01/wp-content/themes/astra/assets/fonts/astra.svg#astra) format("svg");font-weight: normal;font-style: normal;font-display: fallback;}@media (max-width:921px) {.main-header-bar .main-header-bar-navigation{display:none;}}.ast-desktop .main-header-menu.submenu-with-border .sub-menu,.ast-desktop .main-header-menu.submenu-with-border .children,.ast-desktop .main-header-menu.submenu-with-border .astra-full-megamenu-wrapper{border-color:#eaeaea;}.ast-desktop .main-header-menu.submenu-with-border .sub-menu,.ast-desktop .main-header-menu.submenu-with-border .children{border-top-width:1px;border-right-width:1px;border-left-width:1px;border-bottom-width:1px;border-style:solid;}.ast-desktop .main-header-menu.submenu-with-border .sub-menu .sub-menu,.ast-desktop .main-header-menu.submenu-with-border .children .children{top:-1px;}.ast-desktop .main-header-menu.submenu-with-border .sub-menu a,.ast-desktop .main-header-menu.submenu-with-border .children a{border-bottom-width:1px;border-style:solid;border-color:#eaeaea;}@media (min-width:922px){.main-header-menu .sub-menu li.ast-left-align-sub-menu:hover > ul,.main-header-menu .sub-menu li.ast-left-align-sub-menu.focus > ul{margin-left:-2px;}}.ast-small-footer{border-top-style:solid;border-top-width:1px;border-top-color:#3f3f3f;}@media (max-width:920px){.ast-404-layout-1 .ast-404-text{font-size:100px;font-size:6.25rem;}}.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo .astra-logo-svg{width:157px;}.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo img{ max-width:157px;}@media (min-width:922px){.ast-theme-transparent-header #masthead{position:absolute;left:0;right:0;}.ast-theme-transparent-header .main-header-bar,.ast-theme-transparent-header.ast-header-break-point .main-header-bar{background:none;}body.elementor-editor-active.ast-theme-transparent-header #masthead,.fl-builder-edit .ast-theme-transparent-header #masthead,body.vc_editor.ast-theme-transparent-header #masthead,body.brz-ed.ast-theme-transparent-header #masthead{z-index:0;}.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .custom-mobile-logo-link{display:none;}.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .transparent-custom-logo{display:inline-block;}.ast-theme-transparent-header .ast-above-header{background-image:none;background-color:transparent;}.ast-theme-transparent-header .ast-below-header{background-image:none;background-color:transparent;}}.ast-theme-transparent-header .site-title a,.ast-theme-transparent-header .site-title a:focus,.ast-theme-transparent-header .site-title a:hover,.ast-theme-transparent-header .site-title a:visited{color:#000000;}.ast-theme-transparent-header .site-header .site-description{color:#000000;}.ast-theme-transparent-header .main-header-menu,.ast-theme-transparent-header .main-header-menu a,.ast-theme-transparent-header .ast-masthead-custom-menu-items,.ast-theme-transparent-header .ast-masthead-custom-menu-items a,.ast-theme-transparent-header .main-header-menu li > .ast-menu-toggle,.ast-theme-transparent-header .main-header-menu li > .ast-menu-toggle{color:#333333;}.ast-theme-transparent-header .main-header-menu li:hover > a,.ast-theme-transparent-header .main-header-menu li:hover > .ast-menu-toggle,.ast-theme-transparent-header .main-header-menu .ast-masthead-custom-menu-items a:hover,.ast-theme-transparent-header .main-header-menu .focus > a,.ast-theme-transparent-header .main-header-menu .focus > .ast-menu-toggle,.ast-theme-transparent-header .main-header-menu .current-menu-item > a,.ast-theme-transparent-header .main-header-menu .current-menu-ancestor > a,.ast-theme-transparent-header .main-header-menu .current_page_item > a,.ast-theme-transparent-header .main-header-menu .current-menu-item > .ast-menu-toggle,.ast-theme-transparent-header .main-header-menu .current-menu-ancestor > .ast-menu-toggle,.ast-theme-transparent-header .main-header-menu .current_page_item > .ast-menu-toggle{color:#8bc34a;}@media (max-width:921px){.ast-theme-transparent-header #masthead{position:absolute;left:0;right:0;}.ast-theme-transparent-header .main-header-bar,.ast-theme-transparent-header.ast-header-break-point .main-header-bar{background:none;}body.elementor-editor-active.ast-theme-transparent-header #masthead,.fl-builder-edit .ast-theme-transparent-header #masthead,body.vc_editor.ast-theme-transparent-header #masthead,body.brz-ed.ast-theme-transparent-header #masthead{z-index:0;}.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .custom-mobile-logo-link{display:none;}.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .transparent-custom-logo{display:inline-block;}.ast-theme-transparent-header .ast-above-header{background-image:none;background-color:transparent;}.ast-theme-transparent-header .ast-below-header{background-image:none;background-color:transparent;}}.ast-theme-transparent-header .main-header-bar,.ast-theme-transparent-header.ast-header-break-point .main-header-bar{border-bottom-width:1px;border-bottom-style:solid;}.ast-breadcrumbs .trail-browse,.ast-breadcrumbs .trail-items,.ast-breadcrumbs .trail-items li{display:inline-block;margin:0;padding:0;border:none;background:inherit;text-indent:0;}.ast-breadcrumbs .trail-browse{font-size:inherit;font-style:inherit;font-weight:inherit;color:inherit;}.ast-breadcrumbs .trail-items{list-style:none;}.trail-items li::after{padding:0 0.3em;content:"\00bb";}.trail-items li:last-of-type::after{display:none;}h1,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6{color:#001524;}.ast-header-break-point .main-header-bar{border-bottom-width:1px;}@media (min-width:922px){.main-header-bar{border-bottom-width:1px;}}.ast-flex{-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center;-webkit-box-align:center;-webkit-align-items:center;-moz-box-align:center;-ms-flex-align:center;align-items:center;}.main-header-bar{padding:1em 0;}.ast-site-identity{padding:0;}.header-main-layout-1 .ast-flex.main-header-container,.header-main-layout-3 .ast-flex.main-header-container{-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center;-webkit-box-align:center;-webkit-align-items:center;-moz-box-align:center;-ms-flex-align:center;align-items:center;}.header-main-layout-1 .ast-flex.main-header-container,.header-main-layout-3 .ast-flex.main-header-container{-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center;-webkit-box-align:center;-webkit-align-items:center;-moz-box-align:center;-ms-flex-align:center;align-items:center;}
            </style>
            <!--<link href="https://websitedemos.net/organic-shop-01/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-layout.min.css?ver=2.5.0" id="woocommerce-layout-css" media="all" rel="stylesheet"/>-->
            <!--<link href="https://websitedemos.net/organic-shop-01/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce.min.css?ver=2.5.0" id="woocommerce-general-css" media="all" rel="stylesheet"/>-->
            <style id="woocommerce-general-inline-css">
                .woocommerce span.onsale, .wc-block-grid__product .wc-block-grid__product-onsale{background-color:#8bc34a;color:#000000;}.woocommerce a.button, .woocommerce button.button, .woocommerce .woocommerce-message a.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button,.woocommerce input.button:disabled, .woocommerce input.button:disabled[disabled], .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover, .woocommerce #respond input#submit, .woocommerce button.button.alt.disabled, .wc-block-grid__products .wc-block-grid__product .wp-block-button__link, .wc-block-grid__product-onsale{color:#ffffff;border-color:#8bc34a;background-color:#8bc34a;}.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce .woocommerce-message a.button:hover,.woocommerce #respond input#submit:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce input.button:hover, .woocommerce button.button.alt.disabled:hover, .wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover{color:#ffffff;border-color:#67c100;background-color:#67c100;}.woocommerce-message, .woocommerce-info{border-top-color:#8bc34a;}.woocommerce-message::before,.woocommerce-info::before{color:#8bc34a;}.woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .widget_layered_nav_filters ul li.chosen a, .woocommerce-page ul.products li.product .ast-woo-product-category, .wc-layered-nav-rating a{color:#282828;}.woocommerce nav.woocommerce-pagination ul,.woocommerce nav.woocommerce-pagination ul li{border-color:#8bc34a;}.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{background:#8bc34a;color:#ffffff;}.woocommerce-MyAccount-navigation-link.is-active a{color:#8bc34a;}.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{background-color:#8bc34a;}.woocommerce a.button, .woocommerce button.button, .woocommerce .woocommerce-message a.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button,.woocommerce-cart table.cart td.actions .button, .woocommerce form.checkout_coupon .button, .woocommerce #respond input#submit, .wc-block-grid__products .wc-block-grid__product .wp-block-button__link{border-radius:60px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;}.woocommerce .star-rating, .woocommerce .comment-form-rating .stars a, .woocommerce .star-rating::before{color:#8bc34a;}.woocommerce div.product .woocommerce-tabs ul.tabs li.active:before{background:#8bc34a;}.ast-site-header-cart a{color:#282828;}.ast-site-header-cart a:focus, .ast-site-header-cart a:hover, .ast-site-header-cart .current-menu-item a{color:#8bc34a;}.ast-cart-menu-wrap .count, .ast-cart-menu-wrap .count:after{border-color:#8bc34a;color:#8bc34a;}.ast-cart-menu-wrap:hover .count{color:#000000;background-color:#8bc34a;}.ast-site-header-cart .widget_shopping_cart .total .woocommerce-Price-amount{color:#8bc34a;}.woocommerce a.remove:hover, .ast-woocommerce-cart-menu .main-header-menu .woocommerce-custom-menu-item li:hover > a.remove:hover{color:#8bc34a;border-color:#8bc34a;background-color:#ffffff;}.ast-site-header-cart .widget_shopping_cart .buttons .button.checkout, .woocommerce .widget_shopping_cart .woocommerce-mini-cart__buttons .checkout.wc-forward{color:#ffffff;border-color:#67c100;background-color:#67c100;}.site-header .ast-site-header-cart-data .button.wc-forward, .site-header .ast-site-header-cart-data .button.wc-forward:hover{color:#ffffff;}.below-header-user-select .ast-site-header-cart .widget, .ast-above-header-section .ast-site-header-cart .widget a, .below-header-user-select .ast-site-header-cart .widget_shopping_cart a{color:#282828;}.below-header-user-select .ast-site-header-cart .widget_shopping_cart a:hover, .ast-above-header-section .ast-site-header-cart .widget_shopping_cart a:hover, .below-header-user-select .ast-site-header-cart .widget_shopping_cart a.remove:hover, .ast-above-header-section .ast-site-header-cart .widget_shopping_cart a.remove:hover{color:#8bc34a;}@media (min-width:545px) and (max-width:921px){.woocommerce.tablet-columns-6 ul.products li.product, .woocommerce-page.tablet-columns-6 ul.products li.product{width:calc(16.66% - 16.66px);}.woocommerce.tablet-columns-5 ul.products li.product, .woocommerce-page.tablet-columns-5 ul.products li.product{width:calc(20% - 16px);}.woocommerce.tablet-columns-4 ul.products li.product, .woocommerce-page.tablet-columns-4 ul.products li.product{width:calc(25% - 15px);}.woocommerce.tablet-columns-3 ul.products li.product, .woocommerce-page.tablet-columns-3 ul.products li.product{width:calc(33.33% - 14px);}.woocommerce.tablet-columns-2 ul.products li.product, .woocommerce-page.tablet-columns-2 ul.products li.product{width:calc(50% - 10px);}.woocommerce.tablet-columns-1 ul.products li.product, .woocommerce-page.tablet-columns-1 ul.products li.product{width:100%;}.woocommerce div.product .related.products ul.products li.product{width:calc(33.33% - 14px);}}@media (min-width:545px) and (max-width:921px){.woocommerce[class*="columns-"].columns-3 > ul.products li.product, .woocommerce[class*="columns-"].columns-4 > ul.products li.product, .woocommerce[class*="columns-"].columns-5 > ul.products li.product, .woocommerce[class*="columns-"].columns-6 > ul.products li.product{width:calc(33.33% - 14px);margin-right:20px;}.woocommerce[class*="columns-"].columns-3 > ul.products li.product:nth-child(3n), .woocommerce[class*="columns-"].columns-4 > ul.products li.product:nth-child(3n), .woocommerce[class*="columns-"].columns-5 > ul.products li.product:nth-child(3n), .woocommerce[class*="columns-"].columns-6 > ul.products li.product:nth-child(3n){margin-right:0;clear:right;}.woocommerce[class*="columns-"].columns-3 > ul.products li.product:nth-child(3n+1), .woocommerce[class*="columns-"].columns-4 > ul.products li.product:nth-child(3n+1), .woocommerce[class*="columns-"].columns-5 > ul.products li.product:nth-child(3n+1), .woocommerce[class*="columns-"].columns-6 > ul.products li.product:nth-child(3n+1){clear:left;}.woocommerce[class*="columns-"] ul.products li.product:nth-child(n), .woocommerce-page[class*="columns-"] ul.products li.product:nth-child(n){margin-right:20px;clear:none;}.woocommerce.tablet-columns-2 ul.products li.product:nth-child(2n), .woocommerce-page.tablet-columns-2 ul.products li.product:nth-child(2n), .woocommerce.tablet-columns-3 ul.products li.product:nth-child(3n), .woocommerce-page.tablet-columns-3 ul.products li.product:nth-child(3n), .woocommerce.tablet-columns-4 ul.products li.product:nth-child(4n), .woocommerce-page.tablet-columns-4 ul.products li.product:nth-child(4n), .woocommerce.tablet-columns-5 ul.products li.product:nth-child(5n), .woocommerce-page.tablet-columns-5 ul.products li.product:nth-child(5n), .woocommerce.tablet-columns-6 ul.products li.product:nth-child(6n), .woocommerce-page.tablet-columns-6 ul.products li.product:nth-child(6n){margin-right:0;clear:right;}.woocommerce.tablet-columns-2 ul.products li.product:nth-child(2n+1), .woocommerce-page.tablet-columns-2 ul.products li.product:nth-child(2n+1), .woocommerce.tablet-columns-3 ul.products li.product:nth-child(3n+1), .woocommerce-page.tablet-columns-3 ul.products li.product:nth-child(3n+1), .woocommerce.tablet-columns-4 ul.products li.product:nth-child(4n+1), .woocommerce-page.tablet-columns-4 ul.products li.product:nth-child(4n+1), .woocommerce.tablet-columns-5 ul.products li.product:nth-child(5n+1), .woocommerce-page.tablet-columns-5 ul.products li.product:nth-child(5n+1), .woocommerce.tablet-columns-6 ul.products li.product:nth-child(6n+1), .woocommerce-page.tablet-columns-6 ul.products li.product:nth-child(6n+1){clear:left;}.woocommerce div.product .related.products ul.products li.product:nth-child(3n){margin-right:0;clear:right;}.woocommerce div.product .related.products ul.products li.product:nth-child(3n+1){clear:left;}}@media (min-width:922px){.woocommerce #reviews #comments{width:55%;float:left;}.woocommerce #reviews #review_form_wrapper{width:45%;float:right;padding-left:2em;}.woocommerce form.checkout_coupon{width:50%;}}@media (max-width:921px){.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack.ast-no-menu-items .ast-site-header-cart, .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack.ast-no-menu-items .ast-site-header-cart{padding-right:0;padding-left:0;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .main-header-bar{text-align:center;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .ast-site-header-cart, .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .ast-mobile-menu-buttons{display:inline-block;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-2.ast-mobile-header-inline .site-branding{flex:auto;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack .site-branding{flex:0 0 100%;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack .main-header-container{display:flex;justify-content:center;}.woocommerce-cart .woocommerce-shipping-calculator .button{width:100%;}.woocommerce div.product div.images, .woocommerce div.product div.summary, .woocommerce #content div.product div.images, .woocommerce #content div.product div.summary, .woocommerce-page div.product div.images, .woocommerce-page div.product div.summary, .woocommerce-page #content div.product div.images, .woocommerce-page #content div.product div.summary{float:none;width:100%;}.woocommerce-cart table.cart td.actions .ast-return-to-shop{display:block;text-align:center;margin-top:1em;}}@media (max-width:544px){.ast-separate-container .ast-woocommerce-container{padding:.54em 1em 1.33333em;}.woocommerce-message, .woocommerce-error, .woocommerce-info{display:flex;flex-wrap:wrap;}.woocommerce-message a.button, .woocommerce-error a.button, .woocommerce-info a.button{order:1;margin-top:.5em;}.woocommerce.mobile-columns-6 ul.products li.product, .woocommerce-page.mobile-columns-6 ul.products li.product{width:calc(16.66% - 16.66px);}.woocommerce.mobile-columns-5 ul.products li.product, .woocommerce-page.mobile-columns-5 ul.products li.product{width:calc(20% - 16px);}.woocommerce.mobile-columns-4 ul.products li.product, .woocommerce-page.mobile-columns-4 ul.products li.product{width:calc(25% - 15px);}.woocommerce.mobile-columns-3 ul.products li.product, .woocommerce-page.mobile-columns-3 ul.products li.product{width:calc(33.33% - 14px);}.woocommerce.mobile-columns-2 ul.products li.product, .woocommerce-page.mobile-columns-2 ul.products li.product{width:calc(50% - 10px);}.woocommerce.mobile-columns-1 ul.products li.product, .woocommerce-page.mobile-columns-1 ul.products li.product{width:100%;}.woocommerce .woocommerce-ordering, .woocommerce-page .woocommerce-ordering{float:none;margin-bottom:2em;width:100%;}.woocommerce ul.products a.button, .woocommerce-page ul.products a.button{padding:0.5em 0.75em;}.woocommerce div.product .related.products ul.products li.product{width:calc(50% - 10px);}.woocommerce table.cart td.actions .button, .woocommerce #content table.cart td.actions .button, .woocommerce-page table.cart td.actions .button, .woocommerce-page #content table.cart td.actions .button{padding-left:1em;padding-right:1em;}.woocommerce #content table.cart .button, .woocommerce-page #content table.cart .button{width:100%;}.woocommerce #content table.cart .product-thumbnail, .woocommerce-page #content table.cart .product-thumbnail{display:block;text-align:center !important;}.woocommerce #content table.cart .product-thumbnail::before, .woocommerce-page #content table.cart .product-thumbnail::before{display:none;}.woocommerce #content table.cart td.actions .coupon, .woocommerce-page #content table.cart td.actions .coupon{float:none;}.woocommerce #content table.cart td.actions .coupon .button, .woocommerce-page #content table.cart td.actions .coupon .button{flex:1;}.woocommerce #content div.product .woocommerce-tabs ul.tabs li a, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a{display:block;}}@media (max-width:544px){.woocommerce[class*="columns-"].columns-3 > ul.products li.product, .woocommerce[class*="columns-"].columns-4 > ul.products li.product, .woocommerce[class*="columns-"].columns-5 > ul.products li.product, .woocommerce[class*="columns-"].columns-6 > ul.products li.product{width:calc(50% - 10px);margin-right:20px;}.woocommerce-page[class*=columns-] ul.products li.product:nth-child(n), .woocommerce[class*=columns-] ul.products li.product:nth-child(n){margin-right:20px;clear:none;}.woocommerce-page[class*=columns-].columns-3>ul.products li.product:nth-child(2n), .woocommerce-page[class*=columns-].columns-4>ul.products li.product:nth-child(2n), .woocommerce-page[class*=columns-].columns-5>ul.products li.product:nth-child(2n), .woocommerce-page[class*=columns-].columns-6>ul.products li.product:nth-child(2n), .woocommerce[class*=columns-].columns-3>ul.products li.product:nth-child(2n), .woocommerce[class*=columns-].columns-4>ul.products li.product:nth-child(2n), .woocommerce[class*=columns-].columns-5>ul.products li.product:nth-child(2n), .woocommerce[class*=columns-].columns-6>ul.products li.product:nth-child(2n){margin-right:0;clear:right;}.woocommerce[class*="columns-"].columns-3 > ul.products li.product:nth-child(2n+1), .woocommerce[class*="columns-"].columns-4 > ul.products li.product:nth-child(2n+1), .woocommerce[class*="columns-"].columns-5 > ul.products li.product:nth-child(2n+1), .woocommerce[class*="columns-"].columns-6 > ul.products li.product:nth-child(2n+1){clear:left;}.woocommerce[class*="columns-"] ul.products li.product:nth-child(n), .woocommerce-page[class*="columns-"] ul.products li.product:nth-child(n){margin-right:20px;clear:none;}.woocommerce.mobile-columns-6 ul.products li.product:nth-child(6n), .woocommerce-page.mobile-columns-6 ul.products li.product:nth-child(6n), .woocommerce.mobile-columns-5 ul.products li.product:nth-child(5n), .woocommerce-page.mobile-columns-5 ul.products li.product:nth-child(5n), .woocommerce.mobile-columns-4 ul.products li.product:nth-child(4n), .woocommerce-page.mobile-columns-4 ul.products li.product:nth-child(4n), .woocommerce.mobile-columns-3 ul.products li.product:nth-child(3n), .woocommerce-page.mobile-columns-3 ul.products li.product:nth-child(3n), .woocommerce.mobile-columns-2 ul.products li.product:nth-child(2n), .woocommerce-page.mobile-columns-2 ul.products li.product:nth-child(2n), .woocommerce div.product .related.products ul.products li.product:nth-child(2n){margin-right:0;clear:right;}.woocommerce.mobile-columns-6 ul.products li.product:nth-child(6n+1), .woocommerce-page.mobile-columns-6 ul.products li.product:nth-child(6n+1), .woocommerce.mobile-columns-5 ul.products li.product:nth-child(5n+1), .woocommerce-page.mobile-columns-5 ul.products li.product:nth-child(5n+1), .woocommerce.mobile-columns-4 ul.products li.product:nth-child(4n+1), .woocommerce-page.mobile-columns-4 ul.products li.product:nth-child(4n+1), .woocommerce.mobile-columns-3 ul.products li.product:nth-child(3n+1), .woocommerce-page.mobile-columns-3 ul.products li.product:nth-child(3n+1), .woocommerce.mobile-columns-2 ul.products li.product:nth-child(2n+1), .woocommerce-page.mobile-columns-2 ul.products li.product:nth-child(2n+1), .woocommerce div.product .related.products ul.products li.product:nth-child(2n+1){clear:left;}.woocommerce ul.products a.button.loading::after, .woocommerce-page ul.products a.button.loading::after{display:inline-block;margin-left:5px;position:initial;}.woocommerce.mobile-columns-1 ul.products li.product:nth-child(n), .woocommerce-page.mobile-columns-1 ul.products li.product:nth-child(n){margin-right:0;}.woocommerce #content div.product .woocommerce-tabs ul.tabs li, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li{display:block;margin-right:0;}}@media (min-width:922px){.woocommerce #content .ast-woocommerce-container div.product div.images, .woocommerce .ast-woocommerce-container div.product div.images, .woocommerce-page #content .ast-woocommerce-container div.product div.images, .woocommerce-page .ast-woocommerce-container div.product div.images{width:50%;}.woocommerce #content .ast-woocommerce-container div.product div.summary, .woocommerce .ast-woocommerce-container div.product div.summary, .woocommerce-page #content .ast-woocommerce-container div.product div.summary, .woocommerce-page .ast-woocommerce-container div.product div.summary{width:46%;}.woocommerce.woocommerce-checkout form #customer_details.col2-set .col-1, .woocommerce.woocommerce-checkout form #customer_details.col2-set .col-2, .woocommerce-page.woocommerce-checkout form #customer_details.col2-set .col-1, .woocommerce-page.woocommerce-checkout form #customer_details.col2-set .col-2{float:none;width:auto;}}@media (min-width:922px){.woocommerce.woocommerce-checkout form #customer_details.col2-set, .woocommerce-page.woocommerce-checkout form #customer_details.col2-set{width:55%;float:left;margin-right:4.347826087%;}.woocommerce.woocommerce-checkout form #order_review, .woocommerce.woocommerce-checkout form #order_review_heading, .woocommerce-page.woocommerce-checkout form #order_review, .woocommerce-page.woocommerce-checkout form #order_review_heading{width:40%;float:right;margin-right:0;clear:right;}}
            </style>
            <style id="woocommerce-inline-inline-css">
                .woocommerce form .form-row .required { visibility: visible; }
            </style>
            <style type="text/css">
                .text {
              font-size:20px;
              font-family:helvetica;
              font-weight:bold;
              color: white;
              text-transform:uppercase;
            }
            .parpadea {
              
              animation-name: parpadeo;
              animation-duration: 2s;
              animation-timing-function: linear;
              animation-iteration-count: infinite;

              -webkit-animation-name:parpadeo;
              -webkit-animation-duration: 2s;
              -webkit-animation-timing-function: linear;
              -webkit-animation-iteration-count: infinite;
            }

            @-moz-keyframes parpadeo{  
              0% { opacity: 1.0; }
              50% { opacity: 0.0; }
              100% { opacity: 1.0; }
            }

            @-webkit-keyframes parpadeo {  
              0% { opacity: 1.0; }
              50% { opacity: 0.0; }
               100% { opacity: 1.0; }
            }

            @keyframes parpadeo {  
              0% { opacity: 1.0; }
               50% { opacity: 0.0; }
              100% { opacity: 1.0; }
            }
            </style>
        </meta>
    </head>
    <body>
        <?= $this->Flash->render() ?>
        <header class="site-header header-main-layout-1 ast-primary-menu-enabled ast-hide-custom-menu-mobile ast-menu-toggle-icon ast-mobile-header-inline" id="masthead" itemid="#masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
            <div class="main-header-bar-wrap">
                <div class="main-header-bar">
                    <div class="ast-container">
                        <div class="ast-flex main-header-container">
                            <div class="site-branding">
                                <div class="ast-site-identity" itemscope="itemscope" itemtype="https://schema.org/Organization">
                                    <span class="site-logo-img">
                                        
                                         <?= $this->html->link('<img class="logo">'. $this->html->image("logo-white2.png") . '</img>', ['controller' => 'Principal', 'action' => 'index'], ['class' => 'custom-logo-link transparent-custom-logo','itemprop'=>"url", 'rel'=>"home", 'tabindex' => '-1','escape' => false]); ?>

                                            
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="ast-mobile-menu-buttons">
                                <div class="ast-button-wrap">
                                    <button aria-controls="primary-menu" aria-expanded="false" class="menu-toggle main-header-menu-toggle ast-mobile-menu-buttons-fill " type="button">
                                        <span class="screen-reader-text">
                                            Main Menu
                                        </span>
                                        <span class="fas fa-bars"> <!--class -> menu-toggle-icon  -->
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="ast-main-header-bar-alignment">
                                <div class="main-header-bar-navigation">
                                    <nav aria-label="Site Navigation" class="ast-flex-grow-1 navigation-accessibility" id="site-navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                                        <div class="main-navigation">
                                            <ul class="main-header-menu ast-nav-menu ast-flex ast-justify-content-flex-end submenu-with-border" id="primary-menu">
                                                <li>
                                                    <?= $this->
                                                    html->link('Home', ['controller' => 'Principal', 'action' => 'index']); ?>
                                                </li>
                                                <!------------------------------------MENU DESPLEGABLE------------------------------------------->
                                                <ul class="main-header-menu ast-nav-menu ast-flex ast-justify-content-flex-end submenu-with-border" id="primary-menu">
                                                    <li id="menu-item-470">
                                                       <?= $this->html->link('Products', ['controller' => 'Principal', 'action' => 'menu']); ?>
                                                        <ul class="sub-menu">
                                                             <?php foreach ($grupos as $key) {  ?>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-472" id="menu-item-472">
                                                                    <?= $this->html->link($key['denominacion'] , ['controller' => 'Principal', 'action' => 'Menu', $key['id']], ['style' => 'color: black']) ?> 
                                                                </li>
                                                            <?php } ?> 
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <!------------------------------------------------------------------------------------------------>
                                                <!-- <li>
                                                    <?= $this->
                                                    html->link('Products', ['controller' => 'Principal', 'action' => 'menu']); ?>
                                                </li> -->
                                                <li>
                                                    <?= $this->
                                                    html->link('About Us', ['controller' => 'Principal', 'action' => 'informacion']); ?>
                                                </li>
                                                <li>
                                                    <?= $this->
                                                    html->link('Contact Us', ['controller' => 'Principal', 'action' => 'contacto']); ?>
                                                </li>

                                                 <?php if(@$this->request->session()->read("Auth.User.privilegio") == 2){ ?>
                                                    <li>

                                                         <?= $this->html->link('Purchase History', ['controller' => 'Principal', 'action' => 'tramites']); ?>

                                                    </li>
                                                    <!--<li>

                                                         <?= $this->html->link('Cart', ['controller' => 'Principal', 'action' => 'carrito']); ?>

                                                    </li>
                                                    <li>

                                                        <span> <?= 'Sr(a). ' . @$this->request->session()->read("Auth.User.nombres") ?> </span> 

                                                    </li>-->
                                                    
                                                 <?php } ?>


                                                 <?php if(@$this->request->session()->read("Auth.User.privilegio") == 0){ ?>
                                                <li id="menu-item-470"> <!--class -> class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-470"-->
                                                    <a >
                                                        Account
                                                    </a>
                                                    <button aria-expanded="false" class="ast-menu-toggle">
                                                        <span class="screen-reader-text">
                                                            Menu Toggle
                                                        </span>
                                                    </button>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-472" id="menu-item-472">
                                                            <a data-target="#login" data-toggle="modal">
                                                                Sign in
                                                            </a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-471" id="menu-item-471">
                                                            <a data-target="#registrar" data-toggle="modal">
                                                                Create Account
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                    <?php } ?>
                                                <?php if(@$this->request->session()->read("Auth.User.id") != null){ ?>
                                                 <li>
                                                    <?= $this->html->link('Profile', ['controller' => 'Principal', 'action' => 'perfil']); ?>
                                                </li>
                                                <li class="ast-masthead-custom-menu-items woocommerce-custom-menu-item">
                                                    <div class="ast-site-header-cart ast-menu-cart-with-border" id="ast-site-header-cart">
                                                        <div class="ast-site-header-cart-li ">
                                                            <?= $this->html->link('<div class="ast-cart-menu-wrap"><span class="count">'.@$items.'</span></div>
                                                            ', ['controller' => 'Principal', 'action' => 'carrito'], ['class' => 'cart-container', 'tabindex' => '-1','escape' => false]); ?>
                                                        </div>
                                                    </div>
                                                </li>

                                                <?php } ?>
                                                <?php if(@$this->request->session()->read("Auth.User.privilegio") == 2){ ?>
                                                <li>

                                                  <?= $this->html->link('logout', ['controller' => 'Principal', 'action' => 'logout'], ['class' => 'single_add_to_cart_button button alt', 'style' => 'color: white; text-align: center;     border-radius: 60px; padding-top: 15px; padding-right: 30px; padding-bottom: 15px; text-transform: capitalize; padding-left: 30px;', 'confirm' => 'Are you sure you want to log out?']); ?>

                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        
        
        <?= $this->fetch('content') ?>

        <footer class="page-footer font-small indigo" style="font-family: initial; background: #001524">
            <div class="container text-center text-md-left">
                <div class="row">
                        <div class="col-md-3 mx-auto" style="text-align: center">
                            <h5 class="font-weight-bold mt-3 mb-4" style="font-size: 25px; color: white">
                                Quick Links
                            </h5>
                            <ul class="list-unstyled" style="margin: 0 0 1.5em 0em;">
                                <li>
                                    <?= $this->html->link('Know More about Us', ['controller' => 'Principal', 'action' => 'informacion'], ['style' => 'color: #c6cc11; font-size: 18px']); ?>
                                </li>
                                <li>
                                    <?= $this->html->link('Visit Store', ['controller' => 'Principal', 'action' => 'menu'], ['style' => 'color: #c6cc11; font-size: 18px']); ?>
                                </li>
                                <li>
                                    <?= $this->html->link('Lets Connect', ['controller' => 'Principal', 'action' => 'contacto'], ['style' => 'color: #c6cc11; font-size: 18px']); ?>
                                </li>
                            </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                                <div class="col-md-3 mx-auto" style="text-align: center">
                                    <h5 class="font-weight-bold mt-3 mb-4">
                                        <a>
                                            <?= $this->html->link($this->html->image('logo-white.png', ['style' => 'width: 170px']), ['controller' => 'Principal', 'action' => 'index'], ['tabindex' => '-1','escape' => false]); ?>
                                        </a>
                                    </h5>
                                   <!--  <h5 class="font-weight-bold mt-3 mb-4">
                                        <a style="color: white">↓ Developers ↓</a>
                                    </h5>
                                    <h5 class="font-weight-bold mt-3 mb-4">
                                        <button class="single_add_to_cart_button button alt">CONTACT</button>
                                    </h5> -->
                                </div>
                        <hr class="clearfix w-100 d-md-none">
                            <div class="col-md-3 mx-auto" style="text-align: center">
                                <h5 class="font-weight-bold mt-3 mb-4" style="font-size: 25px; color: white">
                                    Site Links
                                </h5>
                                <ul class="list-unstyled" style="margin: 0 0 1.5em 0em;">
                                    <li>
                                        <a data-toggle="modal" href="#Privacy_Policy"  style="color: #c6cc11; font-size: 18px">Privacy Policy</a>
	                                </li>
	                                <li>
	                                     <a data-toggle="modal" href="#Cookies_Policy"  style="color: #c6cc11; font-size: 18px">Cookies Policy</a>
	                                </li>
                                    <li>
                                        <a data-toggle="modal" href="#Terms_And_Conditions" style="color: #c6cc11; font-size: 18px">Terms And Conditions</a>
                                    </li>
                                </ul>
                            </div>
                            </hr>
                        </hr>
                    </hr>
                </div>
            </div>
             <div class="footer-copyright text-center py-3" style="font-size: 14px; color: white">
             	<a class="btn-floating btn-lg btn-fb" type="button" href="http://www.facebook.com" target="_blank" style="color:white"><i class="fab fa-facebook-f"></i></a>
                <a class="btn-floating btn-lg btn-tw" type="button" href="http://www.twitter.com" target="_blank" style="color:white"><i class="fab fa-twitter"></i></a>
                <a class="btn-floating btn-lg btn-yt" type="button" href="http://www.youtube.com" target="_blank" style="color:white"><i class="fab fa-youtube"></i></a>
                <a class="btn-floating btn-lg btn-ins" type="button" href="https://www.instagram.com/buenodiazcorp/" target="_blank" style="color:white"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="footer-copyright text-center py-3" style="font-size: 14px; color: white">
                Bueno & Diaz Services Corp ©
                <?= date('Y') ?>
            </div>
        </footer>
        <?= $this->
        element('login') ?>
        <?= $this->
        element('registro') ?>
        <?= $this->
        element('olvido') ?>
        <?= $this->
        Html->script(['jquery-3.2.1.min', 'funciones', 'bootstrap.min', 'swiper', 'scripts2']) ?>
        <?= $this->
        fetch('script') ?>
        <!-- #page -->
        <script type="text/javascript">
            var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
        </script>
        <script>
            var astra = {"break_point":"921","isRtl":""};
        </script>
        <!--<script src="http://www.buenodiaz.com/wp-content/themes/astra/assets/js/minified/style.min.js?ver=2.4.3">
        </script>-->
        <!--<script src="http://www.buenodiaz.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70">
        </script>
        <script>
            var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Ver carrito","cart_url":"http:\/\/www.buenodiaz.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
        </script>
        <script src="http://www.buenodiaz.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=4.1.0">
        </script>
        <script src="http://www.buenodiaz.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4">
        </script>
        <script>
            var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
        </script>
        <script src="http://www.buenodiaz.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.1.0">
        </script>
        <script>
            var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_076d70d1a6143e38018f84e2bda57103","fragment_name":"wc_fragments_076d70d1a6143e38018f84e2bda57103","request_timeout":"5000"};
        </script>
        <script src="http://www.buenodiaz.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.1.0">
        </script>
        <script src="http://www.buenodiaz.com/wp-includes/js/wp-embed.min.js?ver=5.4.2">
        </script>
        <script src="http://www.buenodiaz.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=2.9.8">
        </script>
        <script src="http://www.buenodiaz.com/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4">
        </script>
        <script src="http://www.buenodiaz.com/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.7.6">
        </script>
        <script src="http://www.buenodiaz.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2">
        </script>
        <script src="http://www.buenodiaz.com/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6">
        </script>
        <script src="http://www.buenodiaz.com/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=2.9.8">
        </script>
        <script>
            var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Compartir en Facebook","shareOnTwitter":"Compartir en Twitter","pinIt":"Pinear","downloadImage":"Descargar imagen"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.9.8","urls":{"assets":"http:\/\/www.buenodiaz.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_lightbox_enable_counter":"yes","elementor_lightbox_enable_fullscreen":"yes","elementor_lightbox_enable_zoom":"yes","elementor_lightbox_enable_share":"yes","elementor_lightbox_title_src":"title","elementor_lightbox_description_src":"description"},"editorPreferences":[]},"post":{"id":95,"title":"Bueno%20%26%20Diaz%20Services%20Corp.%20%E2%80%93%20SERVICES%20%2F%20CORPORATION","excerpt":"\n\t\t\t\t\t\t","featuredImage":false}};
        </script>
        <script src="http://www.buenodiaz.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=2.9.8">
        </script>
        <script>
            /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
        </script>-->





        
        	<?= $this->Html->script(['astra']) ?>
    </body>
</html>

<?= @$this->element('PrivacyPolicy') ?>
<?= @$this->element('CookiesPolicy') ?>
<?= @$this->element('TermsAndConditions') ?>