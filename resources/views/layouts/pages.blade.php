<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="robots" content="max-image-preview:large">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="{{ asset('xmlrpc.php') }}">
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px;
        }
    </style>
    <link rel="alternate" type="application/rss+xml" title="Fluxco » Feed" href="{{ asset('goViralHtml/feed/index.html') }}">
    <link rel="alternate" type="application/rss+xml" title="Fluxco » Comments Feed" href="{{ asset('goViralHtml/comments/feed/index.html') }}">
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": { "concatemoji": "https:\/\/kitpro.site\/fluxco\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.2" }
        };
        /* ... (rest of the emoji script remains unchanged) ... */
    </script>
    <link rel="stylesheet" id="hfe-widgets-style-css" href="{{ asset('goViralHtml/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend3c94.css?ver=2.1.0') }}" media="all">
    <link rel="stylesheet" id="jkit-elements-main-css" href="{{ asset('goViralHtml/wp-content/plugins/jeg-elementor-kit/assets/css/elements/maina19e.css?ver=2.6.9') }}" media="all">
    <style id="wp-emoji-styles-inline-css">
        img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="fontawesome-gutenverse-css" href="{{ asset('goViralHtml/wp-content/plugins/gutenverse/lib/framework/assets/fonts/fontawesome/css/all.min1576.css?ver=1.2.1') }}" media="all">
    <link rel="stylesheet" id="gutenverse-iconlist-css" href="{{ asset('goViralHtml/wp-content/plugins/gutenverse/lib/framework/assets/fonts/gtnicon/gtnicon1576.css?ver=1.2.1') }}" media="all">
    <link rel="stylesheet" id="gutenverse-frontend-style-css" href="{{ asset('goViralHtml/wp-content/plugins/gutenverse/lib/framework/assets/css/frontend1576.css?ver=1.2.1') }}" media="all">
    <style id="classic-theme-styles-inline-css">
        /* ... (unchanged classic theme styles) ... */
    </style>
    <style id="global-styles-inline-css">
        /* ... (unchanged global styles) ... */
    </style>
    <link rel="stylesheet" id="template-kit-export-css" href="{{ asset('goViralHtml/wp-content/plugins/template-kit-export/assets/public/template-kit-export-public982a.css?ver=1.0.23') }}" media="all">
    <link rel="stylesheet" id="hfe-style-css" href="{{ asset('goViralHtml/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor3c94.css?ver=2.1.0') }}" media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/css/frontend.min5422.css?ver=3.25.9') }}" media="all">
    <link rel="stylesheet" id="swiper-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5') }}" media="all">
    <link rel="stylesheet" id="e-swiper-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min5422.css?ver=3.25.9') }}" media="all">
    <link rel="stylesheet" id="elementor-post-3-css" href="{{ asset('goViralHtml/wp-content/uploads/sites/292/elementor/css/post-31c5e.css?ver=1736325156') }}" media="all">
    <link rel="stylesheet" id="widget-heading-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/css/widget-heading.min5422.css?ver=3.25.9') }}" media="all">
    <link rel="stylesheet" id="widget-text-editor-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/css/widget-text-editor.min5422.css?ver=3.25.9') }}" media="all">
    <link rel="stylesheet" id="e-animation-grow-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-grow.min5422.css?ver=3.25.9') }}" media="all">
    <link rel="stylesheet" id="elementor-post-490-css" href="{{ asset('goViralHtml/wp-content/uploads/sites/292/elementor/css/post-4904de8.css?ver=1736495822') }}" media="all">
    <link rel="stylesheet" id="elementor-post-299-css" href="{{ asset('goViralHtml/wp-content/uploads/sites/292/elementor/css/post-299c0d3.css?ver=1736732002') }}" media="all">
    <link rel="stylesheet" id="elementor-post-305-css" href="{{ asset('goViralHtml/wp-content/uploads/sites/292/elementor/css/post-3051142.css?ver=1736325157') }}" media="all">
    <link rel="stylesheet" id="text-editor-style-css" href="{{ asset('goViralHtml/wp-content/plugins/metform/public/assets/css/text-editor3b71.css?ver=3.5.0') }}" media="all">
    <link rel="stylesheet" id="hello-elementor-css" href="{{ asset('goViralHtml/wp-content/themes/hello-elementor/style.min1102.css?ver=2.8.1') }}" media="all">
    <link rel="stylesheet" id="hello-elementor-theme-style-css" href="{{ asset('goViralHtml/wp-content/themes/hello-elementor/theme.min1102.css?ver=2.8.1') }}" media="all">
    <link rel="stylesheet" id="hfe-elementor-icons-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min705c.css?ver=5.34.0') }}" media="all">
    <link rel="stylesheet" id="hfe-icons-list-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/css/widget-icon-list.min44b4.css?ver=3.24.3') }}" media="all">
    <link rel="stylesheet" id="hfe-social-icons-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/css/widget-social-icons.min2401.css?ver=3.24.0') }}" media="all">
    <link rel="stylesheet" id="hfe-social-share-icons-brands-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands52d5.css?ver=5.15.3') }}" media="all">
    <link rel="stylesheet" id="hfe-social-share-icons-fontawesome-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome52d5.css?ver=5.15.3') }}" media="all">
    <link rel="stylesheet" id="hfe-nav-menu-icons-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid52d5.css?ver=5.15.3') }}" media="all">
    <link rel="stylesheet" id="ekit-widget-styles-css" href="{{ asset('goViralHtml/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles6b00.css?ver=3.4.0') }}" media="all">
    <link rel="stylesheet" id="ekit-responsive-css" href="{{ asset('goViralHtml/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive6b00.css?ver=3.4.0') }}" media="all">
    <link rel="stylesheet" id="gutenverse-form-frontend-css" href="{{ asset('goViralHtml/wp-content/plugins/gutenverse-form/assets/css/frontendc5c9.css?ver=1.1.9') }}" media="all">
    <link rel="stylesheet" id="gutenverse-frontend-css" href="{{ asset('goViralHtml/wp-content/plugins/gutenverse/assets/css/frontend77e6.css?ver=2.2.1') }}" media="all">
    <style id="gutenverse-frontend-inline-css">
        :root {
            --guten-screen-xs-max: 767px;
            --guten-screen-sm-min: 768px;
            --guten-screen-sm-max: 1024px;
            --guten-screen-md-min: 1025px;
        }
    </style>
    <link rel="stylesheet" id="gutenverse-theme-essential-frontend-block-css" href="{{ asset('goViralHtml/wp-content/plugins/gutenverse-themes-builder/assets/css/essential/frontend-essential97de.css?ver=1.0.5') }}" media="all">
    <link rel="stylesheet" id="gutenverse-frontend-icon-css" href="{{ asset('goViralHtml/wp-content/plugins/gutenverse/lib/framework/assets/dist/frontend-icon1576.css?ver=1.2.1') }}" media="all">
    <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&display=auto&ver=6.7.2" media="all">
    <link rel="stylesheet" id="elementor-icons-jkiticon-css" href="{{ asset('goViralHtml/wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticona19e.css?ver=2.6.9') }}" media="all">
    <link rel="stylesheet" id="elementor-icons-ekiticons-css" href="{{ asset('goViralHtml/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons6b00.css?ver=3.4.0') }}" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="{{ asset('goViralHtml/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1') }}" id="jquery-core-js"></script>
    <script src="{{ asset('goViralHtml/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1') }}" id="jquery-migrate-js"></script>
    <script id="jquery-js-after">
        !function ($) { "use strict"; $(document).ready(function () { $(this).scrollTop() > 100 && $(".hfe-scroll-to-top-wrap").removeClass("hfe-scroll-to-top-hide"), $(window).scroll(function () { $(this).scrollTop() < 100 ? $(".hfe-scroll-to-top-wrap").fadeOut(300) : $(".hfe-scroll-to-top-wrap").fadeIn(300) }), $(".hfe-scroll-to-top-wrap").on("click", function () { $("html, body").animate({ scrollTop: 0 }, 300); return !1 }) }) }(jQuery);
    </script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/template-kit-export/assets/public/template-kit-export-public982a.js?ver=1.0.23') }}" id="template-kit-export-js"></script>
    <link rel="https://api.w.org/" href="{{ asset('goViralHtml/wp-json/index.html') }}">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ asset('xmlrpc0db0.php?rsd') }}">
    <meta name="generator" content="WordPress 6.7.2">
    <link rel="canonical" href="{{ asset('index.html') }}">
    <link rel="shortlink" href="{{ asset('indexb015.html?p=490') }}">
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="{{ asset('goViralHtml/wp-json/oembed/1.0/embed11d3.json?url=https%3A%2F%2Fkitpro.site%2Ffluxco%2Ftemplate-kit%2Ferror-404%2F') }}">
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="{{ asset('goViralHtml/wp-json/oembed/1.0/embed6dab?url=https%3A%2F%2Fkitpro.site%2Ffluxco%2Ftemplate-kit%2Ferror-404%2F&format=xml') }}">
    <meta name="generator" content="Elementor 3.25.9; features: e_font_icon_svg, additional_custom_breakpoints, e_optimized_control_loading; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
        @media screen and (max-height: 1024px) {
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
        @media screen and (max-height: 640px) {
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
</head>
<body class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-513 ehf-header ehf-footer ehf-template-hello-elementor ehf-stylesheet-hello-elementor jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-513">
    <div id="page" class="hfeed site">
        <header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
            <p class="main-title bhf-hidden" itemprop="headline"><a href="https://kitpro.site/fluxco" title="Fluxco" rel="home">Fluxco</a></p>
            <div data-elementor-type="wp-post" data-elementor-id="299" class="elementor elementor-299">
                <!-- ... (rest of the header content remains unchanged) ... -->
            </div>
        </header>

        @yield('content')

        <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
            <div class="footer-width-fixer">
                <div data-elementor-type="wp-post" data-elementor-id="305" class="elementor elementor-305">
                    <!-- ... (rest of the footer content remains unchanged) ... -->
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript">
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, { rootMargin: '200px 0px 200px 0px' });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = ['DOMContentLoaded', 'elementor/lazyload/observe'];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <link rel="stylesheet" id="jeg-dynamic-style-css" href="{{ asset('goViralHtml/wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles6f3e.css?ver=1.3.0') }}" media="all">
    <link rel="stylesheet" id="sweetalert2-css" href="{{ asset('goViralHtml/wp-content/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min430c.css?ver=11.6.16') }}" media="all">
    <link rel="stylesheet" id="font-awesome-5-all-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min5422.css?ver=3.25.9') }}" media="all">
    <link rel="stylesheet" id="font-awesome-4-shim-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min5422.css?ver=3.25.9') }}" media="all">
    <link rel="stylesheet" id="elementor-post-532-css" href="{{ asset('goViralHtml/wp-content/uploads/sites/292/elementor/css/post-532d806.css?ver=1736387858') }}" media="all">
    <link rel="stylesheet" id="widget-social-icons-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/css/widget-social-icons.min5422.css?ver=3.25.9') }}" media="all">
    <link rel="stylesheet" id="e-apple-webkit-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min5422.css?ver=3.25.9') }}" media="all">
    <link rel="stylesheet" id="widget-icon-list-css" href="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/css/widget-icon-list.min5422.css?ver=3.25.9') }}" media="all">
    <link rel="stylesheet" id="elementor-post-194-css" href="{{ asset('goViralHtml/wp-content/uploads/sites/292/elementor/css/post-1941142.css?ver=1736325157') }}" media="all">
    <script src="{{ asset('goViralHtml/wp-content/plugins/metform/public/assets/js/htm3b71.js?ver=3.5.0') }}" id="htm-js"></script>
    <script src="{{ asset('goViralHtml/wp-includes/js/dist/vendor/react.mine1ab.js?ver=18.3.1.1') }}" id="react-js"></script>
    <script src="{{ asset('goViralHtml/wp-includes/js/dist/vendor/react-dom.mine1ab.js?ver=18.3.1.1') }}" id="react-dom-js"></script>
    <script src="{{ asset('goViralHtml/wp-includes/js/dist/escape-html.min3a9d.js?ver=6561a406d2d232a6fbd2') }}" id="wp-escape-html-js"></script>
    <script src="{{ asset('goViralHtml/wp-includes/js/dist/element.min1596.js?ver=cb762d190aebbec25b27') }}" id="wp-element-js"></script>
    <script id="metform-app-js-extra">
        var mf = { "postType": "envato_tk_templates", "restURI": "https:\/\/kitpro.site\/fluxco\/wp-json\/metform\/v1\/forms\/views\/" };
    </script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/metform/public/assets/js/app3b71.js?ver=3.5.0') }}" id="metform-app-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/themes/hello-elementor/assets/js/hello-frontend.min8a54.js?ver=1.0.0') }}" id="hello-theme-frontend-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script6b00.js?ver=3.4.0') }}" id="elementskit-framework-js-frontend-js"></script>
    <script id="elementskit-framework-js-frontend-js-after">
        var elementskit = { resturl: 'https://kitpro.site/fluxco/wp-json/elementskit/v1/' };
    </script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts6b00.js?ver=3.4.0') }}" id="ekit-widget-scripts-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/js/webpack.runtime.min5422.js?ver=3.25.9') }}" id="elementor-webpack-runtime-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/js/frontend-modules.min5422.js?ver=3.25.9') }}" id="elementor-frontend-modules-js"></script>
    <script src="{{ asset('goViralHtml/wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3') }}" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 },
            "responsive": {
                "breakpoints": {
                    "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true },
                    "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false },
                    "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true },
                    "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false },
                    "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false },
                    "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.25.9",
            "is_static": false,
            "experimentalFeatures": {
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "e_swiper_latest": true,
                "e_nested_atomic_repeaters": true,
                "e_optimized_control_loading": true,
                "e_onboarding": true,
                "e_css_smooth_scroll": true,
                "hello-theme-header-footer": true,
                "home_screen": true,
                "landing-pages": true,
                "nested-elements": true,
                "editor_v2": true,
                "link-in-bio": true,
                "floating-buttons": true
            },
            "urls": {
                "assets": "https:\/\/kitpro.site\/fluxco\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/kitpro.site\/fluxco\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/kitpro.site\/fluxco\/wp-content\/uploads\/sites\/292"
            },
            "nonces": { "floatingButtonsClickTracking": "ca53db3ba3" },
            "swiperClass": "swiper",
            "settings": { "page": [], "editorPreferences": [] },
            "kit": {
                "body_background_background": "classic",
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "hello_header_logo_type": "title",
                "hello_header_menu_layout": "horizontal",
                "hello_footer_logo_type": "logo"
            },
            "post": {
                "id": 513,
                "title": "Contact%20Us%20%E2%80%93%20Fluxco",
                "excerpt": "",
                "featuredImage": "https:\/\/kitpro.site\/fluxco\/wp-content\/uploads\/sites\/292\/2025\/01\/contact-585x1024.jpg"
            }
        };
    </script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/js/frontend.min5422.js?ver=3.25.9') }}" id="elementor-frontend-js"></script>
    <script id="elementor-frontend-js-after">
        var jkit_ajax_url = "{{ asset('indexe2f2.html?jkit-ajax-request=jkit_elements') }}", jkit_nonce = "e1d8dd288a";
    </script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-elementa19e.js?ver=2.6.9') }}" id="jkit-sticky-element-js"></script>
    <script id="gutenverse-frontend-event-js-extra">
        var GutenverseFrontendConfig = {
            "wpjson_url": "https:\/\/kitpro.site\/fluxco\/wp-json\/",
            "wpjson_nonce": "6b5bcd905f",
            "wpjson_endpoint": "https:\/\/kitpro.site\/fluxco\/wp-admin\/admin-ajax.php?action=rest-nonce",
            "framework_asset": "https:\/\/kitpro.site\/fluxco\/wp-content\/plugins\/gutenverse\/lib\/framework\/assets\/",
            "framework_version": "1.2.1",
            "image_placeholder": "https:\/\/kitpro.site\/fluxco\/wp-content\/plugins\/gutenverse\/lib\/framework\/assets\/img\/img-placeholder.jpg"
        };
        var GutenverseData = {
            "postId": "513",
            "homeUrl": "https:\/\/kitpro.site\/fluxco",
            "query": { "q_search": null },
            "settingsData": [],
            "activePlugins": [
                "elementskit-lite\/elementskit-lite.php",
                "jeg-elementor-kit.html\/jeg-elementor-kit.php",
                "header-footer-elementor.html\/header-footer-elementor.php",
                "metform.html\/metform.php",
                "template-kit-export.html\/template-kit-export.php",
                "wp-rollback.html\/wp-rollback.php",
                "elementor.html\/elementor.php",
                "gutenverse.html\/gutenverse.php",
                "gutenverse-themes-builder.html\/themes-builder.php",
                "gutenverse-companion.html\/gutenverse-companion.php",
                "gutenverse-form\/gutenverse-form.php"
            ],
            "featuredImage": "https:\/\/kitpro.site\/fluxco\/wp-content\/uploads\/sites\/292\/2025\/01\/contact.jpg"
        };
        var GutenverseFormValidationData = {
            "data": [],
            "missingLabel": "Form action is missing, please assign form action into this form.",
            "isAdmin": ""
        };
    </script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/gutenverse/lib/framework/assets/js/corefrontend1576.js?ver=1.2.1') }}" id="gutenverse-frontend-event-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/gutenverse-form/assets/js/frontendc5c9.js?ver=1.1.9') }}" id="gutenverse-form-frontend-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/gutenverse/assets/js/frontend77e6.js?ver=2.2.1') }}" id="gutenverse-frontend-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/gutenverse-themes-builder/assets/js/essential/profrontend97de.js?ver=1.0.5') }}" id="gutenverse-theme-essential-frontend-event-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/gutenverse-themes-builder/assets/js/essential/frontend97de.js?ver=1.0.5') }}" id="gutenverse-theme-essential-frontend-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/header-footer-elementor/inc/js/frontend3c94.js?ver=2.1.0') }}" id="hfe-frontend-js-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/jeg-elementor-kit/assets/js/elements/searcha19e.js?ver=2.6.9') }}" id="jkit-element-search-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min430c.js?ver=11.6.16') }}" id="sweetalert2-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min5422.js?ver=3.25.9') }}" id="font-awesome-4-shim-js"></script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min6b00.js?ver=3.4.0') }}" id="animate-circle-js"></script>
    <script id="elementskit-elementor-js-extra">
        var ekit_config = { "ajaxurl": "https:\/\/kitpro.site\/fluxco\/wp-admin\/admin-ajax.php", "nonce": "3ce1134728" };
    </script>
    <script src="{{ asset('goViralHtml/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor6b00.js?ver=3.4.0') }}" id="elementskit-elementor-js"></script>
</body>
</html>