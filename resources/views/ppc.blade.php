@extends('layouts.front')

@section('content')
<style>
		img:is([sizes="auto"i], [sizes^="auto,"i]) {
			contain-intrinsic-size: 3000px 1500px
		}
	</style>
    <link rel="alternate" type="application/rss+xml" title="Fluxco &raquo; Feed" href="../../feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="Fluxco &raquo; Comments Feed"
		href="../../comments/feed/index.html" />
	<script>
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/kitpro.site\/fluxco\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.2"
			}
		};
		/*! This file is auto-generated */
		! function(i, n) {
			var o, s, e;

			function c(e) {
				try {
					var t = {
						supportTests: e,
						timestamp: (new Date).valueOf()
					};
					sessionStorage.setItem(o, JSON.stringify(t))
				} catch (e) {}
			}

			function p(e, t, n) {
				e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
				var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
					r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
						.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
				return t.every(function(e, t) {
					return e === r[t]
				})
			}

			function u(e, t, n) {
				switch (t) {
					case "flag":
						return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(
							e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
							"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
							"\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
							);
					case "emoji":
						return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
				}
				return !1
			}

			function f(e, t, n) {
				var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
						300, 150) : i.createElement("canvas"),
					a = r.getContext("2d", {
						willReadFrequently: !0
					}),
					o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
				return e.forEach(function(e) {
					o[e] = t(a, e, n)
				}), o
			}

			function t(e) {
				var t = i.createElement("script");
				t.src = e, t.defer = !0, i.head.appendChild(t)
			}
			"undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
				everything: !0,
				everythingExceptFlag: !0
			}, e = new Promise(function(e) {
				i.addEventListener("DOMContentLoaded", e, {
					once: !0
				})
			}), new Promise(function(t) {
				var n = function() {
					try {
						var e = JSON.parse(sessionStorage.getItem(o));
						if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e
							.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
					} catch (e) {}
					return null
				}();
				if (!n) {
					if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
						typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
						var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
								.toString()
							].join(",") + "));",
							r = new Blob([e], {
								type: "text/javascript"
							}),
							a = new Worker(URL.createObjectURL(r), {
								name: "wpTestEmojiSupports"
							});
						return void(a.onmessage = function(e) {
							c(n = e.data), a.terminate(), t(n)
						})
					} catch (e) {}
					c(n = f(s, u, p))
				}
				t(n)
			}).then(function(e) {
				for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
					.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
						.everythingExceptFlag && n.supports[t]);
				n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
					.DOMReady = !1, n.readyCallback = function() {
						n.DOMReady = !0
					}
			}).then(function() {
				return e
			}).then(function() {
				var e;
				n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) :
					e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
			}))
		}((window, document), window._wpemojiSettings);
	</script>
	<link rel='stylesheet' id='hfe-widgets-style-css'
		href='../../wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend3c94.css?ver=2.1.0'
		media='all' />
	<link rel='stylesheet' id='jkit-elements-main-css'
		href='../../wp-content/plugins/jeg-elementor-kit/assets/css/elements/maina19e.css?ver=2.6.9' media='all' />
	<style id='wp-emoji-styles-inline-css'>
		img.wp-smiley,
		img.emoji {
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
	<link rel='stylesheet' id='fontawesome-gutenverse-css'
		href='../../wp-content/plugins/gutenverse/lib/framework/assets/fonts/fontawesome/css/all.min1576.css?ver=1.2.1'
		media='all' />
	<link rel='stylesheet' id='gutenverse-iconlist-css'
		href='../../wp-content/plugins/gutenverse/lib/framework/assets/fonts/gtnicon/gtnicon1576.css?ver=1.2.1'
		media='all' />
	<link rel='stylesheet' id='gutenverse-frontend-style-css'
		href='../../wp-content/plugins/gutenverse/lib/framework/assets/css/frontend1576.css?ver=1.2.1' media='all' />
	<style id='classic-theme-styles-inline-css'>
		/*! This file is auto-generated */
		.wp-block-button__link {
			color: #fff;
			background-color: #32373c;
			border-radius: 9999px;
			box-shadow: none;
			text-decoration: none;
			padding: calc(.667em + 2px) calc(1.333em + 2px);
			font-size: 1.125em
		}

		.wp-block-file__button {
			background: #32373c;
			color: #fff;
			text-decoration: none
		}
	</style>
	<style id='global-styles-inline-css'>
		:root {
			--wp--preset--aspect-ratio--square: 1;
			--wp--preset--aspect-ratio--4-3: 4/3;
			--wp--preset--aspect-ratio--3-4: 3/4;
			--wp--preset--aspect-ratio--3-2: 3/2;
			--wp--preset--aspect-ratio--2-3: 2/3;
			--wp--preset--aspect-ratio--16-9: 16/9;
			--wp--preset--aspect-ratio--9-16: 9/16;
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:where(.is-layout-flex) {
			gap: 0.5em;
		}

		:where(.is-layout-grid) {
			gap: 0.5em;
		}

		body .is-layout-flex {
			display: flex;
		}

		.is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		.is-layout-flex> :is(*, div) {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		.is-layout-grid> :is(*, div) {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:root :where(.wp-block-pullquote) {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='template-kit-export-css'
		href='../../wp-content/plugins/template-kit-export/assets/public/template-kit-export-public982a.css?ver=1.0.23'
		media='all' />
	<link rel='stylesheet' id='hfe-style-css'
		href='../../wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor3c94.css?ver=2.1.0'
		media='all' />
	<link rel='stylesheet' id='elementor-frontend-css'
		href='../../wp-content/plugins/elementor/assets/css/frontend.min5422.css?ver=3.25.9' media='all' />
	<link rel='stylesheet' id='swiper-css'
		href='../../wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' media='all' />
	<link rel='stylesheet' id='e-swiper-css'
		href='../../wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min5422.css?ver=3.25.9' media='all' />
	<link rel='stylesheet' id='elementor-post-3-css'
		href='../../wp-content/uploads/sites/292/elementor/css/post-31c5e.css?ver=1736325156' media='all' />
	<link rel='stylesheet' id='widget-image-css'
		href='../../wp-content/plugins/elementor/assets/css/widget-image.min5422.css?ver=3.25.9' media='all' />
	<link rel='stylesheet' id='widget-text-editor-css'
		href='../../wp-content/plugins/elementor/assets/css/widget-text-editor.min5422.css?ver=3.25.9' media='all' />
	<link rel='stylesheet' id='widget-image-carousel-css'
		href='../../wp-content/plugins/elementor/assets/css/widget-image-carousel.min5422.css?ver=3.25.9' media='all' />
	<link rel='stylesheet' id='e-animation-grow-css'
		href='../../wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-grow.min5422.css?ver=3.25.9'
		media='all' />
	<link rel='stylesheet' id='widget-counter-css'
		href='../../wp-content/plugins/elementor/assets/css/widget-counter.min5422.css?ver=3.25.9' media='all' />
	<link rel='stylesheet' id='widget-rating-css'
		href='../../wp-content/plugins/elementor/assets/css/widget-rating.min5422.css?ver=3.25.9' media='all' />
	<link rel='stylesheet' id='widget-heading-css'
		href='../../wp-content/plugins/elementor/assets/css/widget-heading.min5422.css?ver=3.25.9' media='all' />
	<link rel='stylesheet' id='widget-icon-list-css'
		href='../../wp-content/plugins/elementor/assets/css/widget-icon-list.min5422.css?ver=3.25.9' media='all' />
	<link rel='stylesheet' id='elementor-post-429-css'
		href='../../wp-content/uploads/sites/292/elementor/css/post-4292f3e.css?ver=1736868037' media='all' />
	<link rel='stylesheet' id='elementor-post-299-css'
		href='../../wp-content/uploads/sites/292/elementor/css/post-299c0d3.css?ver=1736732002' media='all' />
	<link rel='stylesheet' id='elementor-post-305-css'
		href='../../wp-content/uploads/sites/292/elementor/css/post-3051142.css?ver=1736325157' media='all' />
	<link rel='stylesheet' id='text-editor-style-css'
		href='../../wp-content/plugins/metform/public/assets/css/text-editor3b71.css?ver=3.5.0' media='all' />
	<link rel='stylesheet' id='hello-elementor-css'
		href='../../wp-content/themes/hello-elementor/style.min1102.css?ver=2.8.1' media='all' />
	<link rel='stylesheet' id='hello-elementor-theme-style-css'
		href='../../wp-content/themes/hello-elementor/theme.min1102.css?ver=2.8.1' media='all' />
	<link rel='stylesheet' id='hfe-elementor-icons-css'
		href='../../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min705c.css?ver=5.34.0'
		media='all' />
	<link rel='stylesheet' id='hfe-icons-list-css'
		href='../../wp-content/plugins/elementor/assets/css/widget-icon-list.min44b4.css?ver=3.24.3' media='all' />
	<link rel='stylesheet' id='hfe-social-icons-css'
		href='../../wp-content/plugins/elementor/assets/css/widget-social-icons.min2401.css?ver=3.24.0' media='all' />
	<link rel='stylesheet' id='hfe-social-share-icons-brands-css'
		href='../../wp-content/plugins/elementor/assets/lib/font-awesome/css/brands52d5.css?ver=5.15.3' media='all' />
	<link rel='stylesheet' id='hfe-social-share-icons-fontawesome-css'
		href='../../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome52d5.css?ver=5.15.3'
		media='all' />
	<link rel='stylesheet' id='hfe-nav-menu-icons-css'
		href='../../wp-content/plugins/elementor/assets/lib/font-awesome/css/solid52d5.css?ver=5.15.3' media='all' />
	<link rel='stylesheet' id='ekit-widget-styles-css'
		href='../../wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles6b00.css?ver=3.4.0'
		media='all' />
	<link rel='stylesheet' id='ekit-responsive-css'
		href='../../wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive6b00.css?ver=3.4.0'
		media='all' />
	<link rel='stylesheet' id='gutenverse-form-frontend-css'
		href='../../wp-content/plugins/gutenverse-form/assets/css/frontendc5c9.css?ver=1.1.9' media='all' />
	<link rel='stylesheet' id='gutenverse-frontend-css'
		href='../../wp-content/plugins/gutenverse/assets/css/frontend77e6.css?ver=2.2.1' media='all' />
	<style id='gutenverse-frontend-inline-css'>
		:root {
			--guten-screen-xs-max: 767px;
			--guten-screen-sm-min: 768px;
			--guten-screen-sm-max: 1024px;
			--guten-screen-md-min: 1025px;
		}
	</style>
	<link rel='stylesheet' id='gutenverse-theme-essential-frontend-block-css'
		href='../../wp-content/plugins/gutenverse-themes-builder/assets/css/essential/frontend-essential97de.css?ver=1.0.5'
		media='all' />
	<link rel='stylesheet' id='gutenverse-frontend-icon-css'
		href='../../wp-content/plugins/gutenverse/lib/framework/assets/dist/frontend-icon1576.css?ver=1.2.1'
		media='all' />
	<link rel='stylesheet' id='google-fonts-1-css'
		href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.7.2'
		media='all' />
	<link rel='stylesheet' id='elementor-icons-jkiticon-css'
		href='../../wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticona19e.css?ver=2.6.9'
		media='all' />
	<link rel='stylesheet' id='elementor-icons-ekiticons-css'
		href='../../wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons6b00.css?ver=3.4.0'
		media='all' />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<script src="../../wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
	<script src="../../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
	<script id="jquery-js-after">
		! function($) {
			"use strict";
			$(document).ready(function() {
				$(this).scrollTop() > 100 && $(".hfe-scroll-to-top-wrap").removeClass("hfe-scroll-to-top-hide"), $(
					window).scroll(function() {
					$(this).scrollTop() < 100 ? $(".hfe-scroll-to-top-wrap").fadeOut(300) : $(
						".hfe-scroll-to-top-wrap").fadeIn(300)
				}), $(".hfe-scroll-to-top-wrap").on("click", function() {
					$("html, body").animate({
						scrollTop: 0
					}, 300);
					return !1
				})
			})
		}(jQuery);
	</script>
	<script
		src="../../wp-content/plugins/template-kit-export/assets/public/template-kit-export-public982a.js?ver=1.0.23"
		id="template-kit-export-js"></script>
	<link rel="https://api.w.org/" href="../../wp-json/index.html" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc0db0.php?rsd" />
	<meta name="generator" content="WordPress 6.7.2" />
	<link rel="canonical" href="index.html" />
	<link rel='shortlink' href='../../indexedce.html?p=429' />
	<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
		href="../../wp-json/oembed/1.0/embed1e7d.json?url=https%3A%2F%2Fkitpro.site%2Ffluxco%2Ftemplate-kit%2Fportofolio%2F" />
	<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
		href="../../wp-json/oembed/1.0/embed59b0?url=https%3A%2F%2Fkitpro.site%2Ffluxco%2Ftemplate-kit%2Fportofolio%2F&amp;format=xml" />
	<meta name="generator"
		content="Elementor 3.25.9; features: e_font_icon_svg, additional_custom_breakpoints, e_optimized_control_loading; settings: css_print_method-external, google_font-enabled, font_display-auto">
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
<div data-elementor-type="wp-page" data-elementor-id="777" class="elementor elementor-777">
    <div class="elementor-element elementor-element-1cbf619 e-flex e-con-boxed e-con e-parent" data-id="1cbf619"
        data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/youtu.be\/vYC9vCzftHE?si=k_lmgjVJKqIZ6TED&quot;}">
        <div class="e-con-inner">
            <div class="elementor-background-video-container elementor-hidden-mobile">
                <div class="elementor-background-video-embed"></div>
            </div>
            <div class="elementor-element elementor-element-b69feea e-con-full e-flex e-con e-child" data-id="b69feea"
                data-element_type="container">
                <div class="elementor-element elementor-element-1d391092 e-con-full e-flex e-con e-child"
                    data-id="1d391092" data-element_type="container">
                    <div class="elementor-element elementor-element-18893392 e-con-full e-flex elementor-invisible e-con e-child"
                        data-id="18893392" data-element_type="container"
                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-element elementor-element-47feaea2 e-con-full e-flex e-con e-child"
                            data-id="47feaea2" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-element elementor-element-664423cf e-con-full e-flex e-con e-child"
                                data-id="664423cf" data-element_type="container">
                                <div class="elementor-element elementor-element-724bf129 elementor-widget elementor-widget-image"
                                    data-id="724bf129" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img decoding="async" width="800" height="780"
                                            src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png')}}"
                                            class="attachment-large size-large wp-image-884" alt=""
                                            srcset="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png')}} 1024w, {{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png')}} 300w, {{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png')}} 768w, {{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png')}} 800w, {{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png')}} 1196w"
                                            sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-2d96591 e-con-full e-flex e-con e-child"
                                data-id="2d96591" data-element_type="container">
                                <div class="elementor-element elementor-element-6a508ff4 elementor-widget elementor-widget-jkit_heading"
                                    data-id="6a508ff4" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                    data-widget_type="jkit_heading.default">
                                    <div class="elementor-widget-container">
                                        <div
                                            class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_1_683073e3d52b9">
                                            <div style="  padding-right:10px;"
                                                class="heading-section-title  display-inline-block">
                                                <h2 class="heading-title"><span class=""><span>PPC Agency Malaysia</span></span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-72f07e7f e-con-full e-flex e-con e-child"
                        data-id="72f07e7f" data-element_type="container">
                        <div class="elementor-element elementor-element-75fa2992 elementor-invisible elementor-widget elementor-widget-jkit_heading"
                            data-id="75fa2992" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="jkit_heading.default">
                            <div class="elementor-widget-container">
                                <div
                                    class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_2_683073e3d61f0">
                                    <div class="heading-section-title  display-inline-block">
                                        <h1 style="font-size: 50px;" class="heading-title"> PPC Agency Malaysia:
<span class=""><span> Turn Clicks Into Conversions</span></span></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2efa94ed e-con-full e-flex e-con e-child"
                            data-id="2efa94ed" data-element_type="container">
                            <div class="elementor-element elementor-element-8d62ef2 elementor-invisible elementor-widget elementor-widget-text-editor"
                                data-id="8d62ef2" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Maximize your ROI with our expert pay-per-click advertising agency in Malaysia. We create data-driven Facebook and Google Ads campaigns that reduce ad spend waste, boost conversions, and deliver results-driven strategies to grow your business.
.</p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6f9b25b e-con-full e-flex e-con e-child"
                            data-id="6f9b25b" data-element_type="container">
                            <div class="elementor-element elementor-element-974e5f8 e-con-full e-flex elementor-invisible e-con e-child"
                                data-id="974e5f8" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                <div class="elementor-element elementor-element-5caebf65 elementor-align-justify elementor-widget elementor-widget-button"
                                    data-id="5caebf65" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="">
                                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon">
                                                        <svg aria-hidden="true"
                                                            class="e-font-icon-svg e-fas-arrow-circle-right"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                                            </path>
                                                        </svg> </span>
                                                    <span class="elementor-button-text">Get Free Consultation</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-66ea5075 elementor-invisible elementor-widget elementor-widget-jkit_video_button"
                                data-id="66ea5075" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                data-widget_type="jkit_video_button.default">
                                <div class="elementor-widget-container">
                                    <div class="jeg-elementor-kit jkit-video-button jeg_module_777_3_683073e3d8cd8"
                                        data-autoplay="0" data-loop="0" data-controls="0" data-type="youtube"
                                        data-mute="0" data-start="0" data-end="0"><a
                                            href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                            class="jkit-video-popup-btn glow-enable" aria-label="video-button"><span
                                                class="icon-position-before"><i aria-hidden="true"
                                                    class="jki jki-play1-light"></i></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3f6a7416 e-con-full e-flex e-con e-child"
                    data-id="3f6a7416" data-element_type="container">
                    <div class="elementor-element elementor-element-22e634f e-con-full e-flex e-con e-child"
                        data-id="22e634f" data-element_type="container">
                        <a class="elementor-element elementor-element-2173d2a1 e-con-full e-transform e-transform e-flex elementor-invisible e-con e-child"
                            data-id="2173d2a1" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-5,&quot;sizes&quot;:[]},&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                            <div class="elementor-element elementor-element-19f9cccc e-con-full e-flex e-con e-child"
                                data-id="19f9cccc" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                <div class="elementor-element elementor-element-3836e5e5 elementor-widget elementor-widget-counter"
                                    data-id="3836e5e5" data-element_type="widget" data-widget_type="counter.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-counter">
                                            <div class="elementor-counter-number-wrapper">
                                                <span class="elementor-counter-number-prefix"></span>
                                                <span class="elementor-counter-number" data-duration="2000"
                                                    data-to-value="98" data-from-value="0" data-delimiter=",">0</span>
                                                <span class="elementor-counter-number-suffix">+</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-71c7f413 elementor-widget elementor-widget-heading"
                                    data-id="71c7f413" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h5 class="elementor-heading-title elementor-size-default">years of
                                            experience</h5>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-145626e0 elementor-widget elementor-widget-text-editor"
                                    data-id="145626e0" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>As a trusted PPC agency in Malaysia, we help you reach the right audience. Our best PPC services are designed to drive instant traffic, boost conversions, and maximize your ad spend.

.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a class="elementor-element elementor-element-49b75d2 e-con-full e-transform e-transform e-flex elementor-invisible e-con e-child"
                        data-id="49b75d2" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-5,&quot;sizes&quot;:[]},&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                        <div class="elementor-element elementor-element-d323d97 e-con-full e-flex e-con e-child"
                            data-id="d323d97" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-element elementor-element-6cfa293b e-con-full e-flex e-con e-child"
                                data-id="6cfa293b" data-element_type="container">
                                <div class="elementor-element elementor-element-2b149f0e elementor-widget elementor-widget-heading"
                                    data-id="2b149f0e" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h5 class="elementor-heading-title elementor-size-default">achievement
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3bb691a7 e-con-full e-flex e-con e-child"
                                data-id="3bb691a7" data-element_type="container">
                                <div class="elementor-element elementor-element-351281a e-con-full e-flex e-con e-child"
                                    data-id="351281a" data-element_type="container">
                                    <div class="elementor-element elementor-element-34267ed4 elementor-widget elementor-widget-text-editor"
                                        data-id="34267ed4" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Project</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-27d8a126 elementor-widget elementor-widget-counter"
                                        data-id="27d8a126" data-element_type="widget"
                                        data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number" data-duration="2000"
                                                        data-to-value="253" data-from-value="0"
                                                        data-delimiter=",">0</span>
                                                    <span class="elementor-counter-number-suffix">K+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5234fc36 e-con-full e-flex e-con e-child"
                                    data-id="5234fc36" data-element_type="container">
                                    <div class="elementor-element elementor-element-3f133e56 elementor-widget elementor-widget-text-editor"
                                        data-id="3f133e56" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Brands</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-798f20cb elementor-widget elementor-widget-counter"
                                        data-id="798f20cb" data-element_type="widget"
                                        data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number" data-duration="2000"
                                                        data-to-value="486" data-from-value="0"
                                                        data-delimiter=",">0</span>
                                                    <span class="elementor-counter-number-suffix">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-25a3fae1 e-con-full elementor-hidden-tablet e-flex e-con e-child"
                                    data-id="25a3fae1" data-element_type="container">
                                    <div class="elementor-element elementor-element-50cdf76 elementor-widget elementor-widget-text-editor"
                                        data-id="50cdf76" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Award</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-f2d619d elementor-widget elementor-widget-counter"
                                        data-id="f2d619d" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number" data-duration="2000"
                                                        data-to-value="885" data-from-value="0"
                                                        data-delimiter=",">0</span>
                                                    <span class="elementor-counter-number-suffix">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-16d6c2e7 e-con-full e-flex e-con e-child"
                                data-id="16d6c2e7" data-element_type="container">
                                <div class="elementor-element elementor-element-375bda7f e-con-full e-flex e-con e-child"
                                    data-id="375bda7f" data-element_type="container">
                                    <div class="elementor-element elementor-element-29e5686b e-con-full e-flex elementor-invisible e-con e-child"
                                        data-id="29e5686b" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                        <div class="elementor-element elementor-element-343766a1 e-con-full e-flex e-con e-child"
                                            data-id="343766a1" data-element_type="container">
                                            <div class="elementor-element elementor-element-364f096e elementor-widget elementor-widget-image"
                                                data-id="364f096e" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="800" height="800"
                                                        src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/2-37.jpg')}}"
                                                        class="attachment-large size-large wp-image-958" alt=""
                                                        srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-37.jpg 1000w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-37-300x300.jpg 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-37-150x150.jpg 150w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-37-768x768.jpg 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-37-800x800.jpg 800w"
                                                        sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4f52f612 e-con-full e-flex e-con e-child"
                                            data-id="4f52f612" data-element_type="container">
                                            <div class="elementor-element elementor-element-4683ec40 elementor-widget elementor-widget-image"
                                                data-id="4683ec40" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="800" height="800"
                                                        src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/3-44.jpg')}}"
                                                        class="attachment-large size-large wp-image-962" alt=""
                                                        srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-44.jpg 1000w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-44-300x300.jpg 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-44-150x150.jpg 150w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-44-768x768.jpg 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-44-800x800.jpg 800w"
                                                        sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-67f04c02 e-con-full e-flex e-con e-child"
                                            data-id="67f04c02" data-element_type="container">
                                            <div class="elementor-element elementor-element-348332f3 elementor-widget elementor-widget-image"
                                                data-id="348332f3" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="800" height="800"
                                                        src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/4-35.jpg')}}"
                                                        class="attachment-large size-large wp-image-964" alt=""
                                                        srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-35.jpg 1000w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-35-300x300.jpg 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-35-150x150.jpg 150w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-35-768x768.jpg 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-35-800x800.jpg 800w"
                                                        sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5054f33b e-con-full e-flex e-con e-child"
                                            data-id="5054f33b" data-element_type="container">
                                            <div class="elementor-element elementor-element-61754a37 elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
                                                data-id="61754a37" data-element_type="widget"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon elementor-animation-grow">
                                                            <i aria-hidden="true" class="jki jki-plus-solid"></i> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-369d59d e-con-full e-flex e-con e-child"
                                    data-id="369d59d" data-element_type="container">
                                    <div class="elementor-element elementor-element-20422cb7 elementor-widget elementor-widget-rating"
                                        data-id="20422cb7" data-element_type="widget" data-widget_type="rating.default">
                                        <div class="elementor-widget-container">
                                            <div class="e-rating" itemtype="https://schema.org/Rating" itemscope=""
                                                itemprop="reviewRating">
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="bestRating" content="5">
                                                <div class="e-rating-wrapper" itemprop="ratingValue" content="5"
                                                    role="img" aria-label="Rated 5 out of 5">
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <i aria-hidden="true" class="jki jki-star-1-light"></i>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <i aria-hidden="true" class="jki jki-star-1-light"></i>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <i aria-hidden="true" class="jki jki-star-1-light"></i>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <i aria-hidden="true" class="jki jki-star-1-light"></i>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <i aria-hidden="true" class="jki jki-star-1-light"></i>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <i aria-hidden="true" class="jki jki-star-1-light"></i>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <i aria-hidden="true" class="jki jki-star-1-light"></i>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <i aria-hidden="true" class="jki jki-star-1-light"></i>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <i aria-hidden="true" class="jki jki-star-1-light"></i>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <i aria-hidden="true" class="jki jki-star-1-light"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3d4c15e8 elementor-widget elementor-widget-text-editor"
                                        data-id="3d4c15e8" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Positive Reviews</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="elementor-element elementor-element-2cd478bb e-con-full e-flex e-con e-child"
                        data-id="2cd478bb" data-element_type="container">
                        <a class="elementor-element elementor-element-2fad80f4 e-con-full e-transform e-transform e-flex elementor-invisible e-con e-child"
                            data-id="2fad80f4" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-5,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                            <div class="elementor-element elementor-element-39367ccd e-con-full e-flex e-con e-child"
                                data-id="39367ccd" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/youtu.be\/PAdBwqza7cE?si=4IHMS7v0b9fsw-Y6&quot;,&quot;background_video_start&quot;:361,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
                                <div class="elementor-background-video-container">
                                    <div class="elementor-background-video-embed"></div>
                                </div>
                                <div class="elementor-element elementor-element-582f6c23 elementor-widget elementor-widget-heading"
                                    data-id="582f6c23" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h5 class="elementor-heading-title elementor-size-default">Business Team
                                            Work</h5>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-38342d11 elementor-widget elementor-widget-spacer"
                                    data-id="38342d11" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-1265131f e-flex e-con-boxed elementor-invisible e-con e-parent"
        data-id="1265131f" data-element_type="container"
        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-7369d99c e-flex e-con-boxed e-con e-child"
                data-id="7369d99c" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-4fefc831 elementor-widget elementor-widget-image-carousel"
                        data-id="4fefc831" data-element_type="widget"
                        data-settings="{&quot;slides_to_show&quot;:&quot;5&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:500,&quot;speed&quot;:7000,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:53,&quot;sizes&quot;:[]},&quot;slides_to_show_tablet&quot;:&quot;4&quot;,&quot;slides_to_show_mobile&quot;:&quot;2&quot;,&quot;slides_to_scroll_tablet&quot;:&quot;1&quot;,&quot;slides_to_scroll_mobile&quot;:&quot;1&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                        data-widget_type="image-carousel.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                                <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="1 of 5">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/1-1.png')}}" alt="1" />
                                        </figure>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="2 of 5">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/logoipsum-213-1.png')}}"
                                                alt="logoipsum-213" /></figure>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="3 of 5">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/logoipsum-216-1.png')}}"
                                                alt="logoipsum-216" /></figure>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="4 of 5">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/logoipsum-217-1.png')}}"
                                                alt="logoipsum-217" /></figure>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="5 of 5">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/logoipsum-218-1.png')}}"
                                                alt="logoipsum-218" /></figure>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-768d8a73 e-flex e-con-boxed e-con e-parent" data-id="768d8a73"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-751f143a e-flex e-con-boxed elementor-invisible e-con e-child"
                data-id="751f143a" data-element_type="container"
                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-4d3b5d37 e-con-full e-flex e-con e-child"
                        data-id="4d3b5d37" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-element elementor-element-28cfa009 e-con-full e-flex e-con e-child"
                            data-id="28cfa009" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                            <div class="elementor-element elementor-element-1fd07882 e-con-full e-flex e-con e-child"
                                data-id="1fd07882" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-element elementor-element-2a1f8859 e-con-full e-flex e-con e-child"
                                    data-id="2a1f8859" data-element_type="container">
                                    <div class="elementor-element elementor-element-794e72e9 elementor-widget elementor-widget-heading"
                                        data-id="794e72e9" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h5 class="elementor-heading-title elementor-size-default">Why choose PPC marketing agency?</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-31b1fa50 elementor-widget elementor-widget-text-editor"
                                    data-id="31b1fa50" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>Choose Go Viral, a top Google Ads agency in Malaysia, for expert PPC campaigns that boost performance, drive results, and focus on growth. Let us help you get more clicks, leads, and sales. </p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4587248f elementor-align-center elementor-widget elementor-widget-button"
                                    data-id="4587248f" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon">
                                                        <svg aria-hidden="true"
                                                            class="e-font-icon-svg e-fas-arrow-circle-right"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                                            </path>
                                                        </svg> </span>
                                                    <span class="elementor-button-text">Get Free Consultation</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2180d72f e-flex e-con-boxed e-con e-child"
                        data-id="2180d72f" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-6abe009c e-flex e-con-boxed e-con e-child"
                                data-id="6abe009c" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-28a5edc7 e-con-full e-flex e-con e-child"
                                        data-id="28a5edc7" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-element elementor-element-26bdf8aa e-con-full e-flex e-con e-child"
                                            data-id="26bdf8aa" data-element_type="container">
                                            <div class="elementor-element elementor-element-41ac0975 elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
                                                data-id="41ac0975" data-element_type="widget"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon">
                                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-medal"
                                                                viewBox="0 0 512 512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M223.75 130.75L154.62 15.54A31.997 31.997 0 0 0 127.18 0H16.03C3.08 0-4.5 14.57 2.92 25.18l111.27 158.96c29.72-27.77 67.52-46.83 109.56-53.39zM495.97 0H384.82c-11.24 0-21.66 5.9-27.44 15.54l-69.13 115.21c42.04 6.56 79.84 25.62 109.56 53.38L509.08 25.18C516.5 14.57 508.92 0 495.97 0zM256 160c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm92.52 157.26l-37.93 36.96 8.97 52.22c1.6 9.36-8.26 16.51-16.65 12.09L256 393.88l-46.9 24.65c-8.4 4.45-18.25-2.74-16.65-12.09l8.97-52.22-37.93-36.96c-6.82-6.64-3.05-18.23 6.35-19.59l52.43-7.64 23.43-47.52c2.11-4.28 6.19-6.39 10.28-6.39 4.11 0 8.22 2.14 10.33 6.39l23.43 47.52 52.43 7.64c9.4 1.36 13.17 12.95 6.35 19.59z">
                                                                </path>
                                                            </svg> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b7e84cd e-flex e-con-boxed e-con e-child"
                                            data-id="b7e84cd" data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-1d9e9ce0 elementor-widget elementor-widget-heading"
                                                    data-id="1d9e9ce0" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h5 class="elementor-heading-title elementor-size-default">
                                                            Our Achievement</h5>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-38c33e5 elementor-widget elementor-widget-text-editor"
                                                    data-id="38c33e5" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>successfully increased ROI and conversions for 500+ clients through expert PPC services.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-20f00a52 e-flex e-con-boxed e-con e-child"
                                data-id="20f00a52" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-38b7183a e-con-full e-flex e-con e-child"
                                        data-id="38b7183a" data-element_type="container">
                                        <div class="elementor-element elementor-element-73c2b956 e-flex e-con-boxed e-con e-child"
                                            data-id="73c2b956" data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-97874f6 elementor-widget elementor-widget-counter"
                                                    data-id="97874f6" data-element_type="widget"
                                                    data-widget_type="counter.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-counter">
                                                            <div class="elementor-counter-number-wrapper">
                                                                <span class="elementor-counter-number-prefix"></span>
                                                                <span class="elementor-counter-number"
                                                                    data-duration="2000" data-to-value="98"
                                                                    data-from-value="0" data-delimiter=",">0</span>
                                                                <span class="elementor-counter-number-suffix"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-73c2ff4d elementor-widget elementor-widget-heading"
                                                    data-id="73c2ff4d" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            +</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-29bcc9a9 e-flex e-con-boxed e-con e-child"
                                            data-id="29bcc9a9" data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-7b0b84d9 elementor-widget elementor-widget-text-editor"
                                                    data-id="7b0b84d9" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Years Of Experience</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5043bc7c e-flex e-con-boxed e-con e-child"
                                        data-id="5043bc7c" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-4ffecc18 e-flex e-con-boxed e-con e-child"
                                                data-id="4ffecc18" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-5419719e elementor-widget elementor-widget-counter"
                                                        data-id="5419719e" data-element_type="widget"
                                                        data-widget_type="counter.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-counter">
                                                                <div class="elementor-counter-number-wrapper">
                                                                    <span
                                                                        class="elementor-counter-number-prefix"></span>
                                                                    <span class="elementor-counter-number"
                                                                        data-duration="2000" data-to-value="80"
                                                                        data-from-value="0" data-delimiter=",">0</span>
                                                                    <span
                                                                        class="elementor-counter-number-suffix"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-48b6f739 elementor-widget elementor-widget-heading"
                                                        data-id="48b6f739" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                K+</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2c4a2c0f e-flex e-con-boxed e-con e-child"
                                                data-id="2c4a2c0f" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-599133a4 elementor-widget elementor-widget-text-editor"
                                                        data-id="599133a4" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>User Worldwide</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2092668a e-flex e-con-boxed e-con e-child"
                                        data-id="2092668a" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-2b7bfd8f e-flex e-con-boxed e-con e-child"
                                                data-id="2b7bfd8f" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-6fb58048 elementor-widget elementor-widget-counter"
                                                        data-id="6fb58048" data-element_type="widget"
                                                        data-widget_type="counter.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-counter">
                                                                <div class="elementor-counter-number-wrapper">
                                                                    <span
                                                                        class="elementor-counter-number-prefix"></span>
                                                                    <span class="elementor-counter-number"
                                                                        data-duration="2000" data-to-value="500"
                                                                        data-from-value="0" data-delimiter=",">0</span>
                                                                    <span
                                                                        class="elementor-counter-number-suffix"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-22a950ea elementor-widget elementor-widget-heading"
                                                        data-id="22a950ea" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                +</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-933bbfa e-flex e-con-boxed e-con e-child"
                                                data-id="933bbfa" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-21482858 elementor-widget elementor-widget-text-editor"
                                                        data-id="21482858" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Popular Features</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1051c7cd elementor-hidden-tablet e-flex e-con-boxed e-con e-child"
                                        data-id="1051c7cd" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-16198255 e-flex e-con-boxed e-con e-child"
                                                data-id="16198255" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-5ffbc3c7 elementor-widget elementor-widget-counter"
                                                        data-id="5ffbc3c7" data-element_type="widget"
                                                        data-widget_type="counter.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-counter">
                                                                <div class="elementor-counter-number-wrapper">
                                                                    <span
                                                                        class="elementor-counter-number-prefix"></span>
                                                                    <span class="elementor-counter-number"
                                                                        data-duration="2000" data-to-value="25"
                                                                        data-from-value="0" data-delimiter=",">0</span>
                                                                    <span
                                                                        class="elementor-counter-number-suffix"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-1baca2d5 elementor-widget elementor-widget-heading"
                                                        data-id="1baca2d5" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                %</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4b542773 e-flex e-con-boxed e-con e-child"
                                                data-id="4b542773" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-69dcf85b elementor-widget elementor-widget-text-editor"
                                                        data-id="69dcf85b" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Satisfied Client</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-59b503cd e-flex e-con-boxed e-con e-parent" data-id="59b503cd"
        data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-3192fe2f e-flex e-con-boxed e-con e-child"
                data-id="3192fe2f" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-121327f0 e-flex e-con-boxed elementor-invisible e-con e-child"
                        data-id="121327f0" data-element_type="container"
                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-2da22ecc e-con-full e-flex e-con e-child"
                                data-id="2da22ecc" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-element elementor-element-189b521f e-con-full e-flex e-con e-child"
                                    data-id="189b521f" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-element elementor-element-2c9cc538 elementor-widget elementor-widget-rating"
                                        data-id="2c9cc538" data-element_type="widget" data-widget_type="rating.default">
                                        <div class="elementor-widget-container">
                                            <div class="e-rating" itemtype="https://schema.org/Rating" itemscope=""
                                                itemprop="reviewRating">
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="bestRating" content="5">
                                                <div class="e-rating-wrapper" itemprop="ratingValue" content="5"
                                                    role="img" aria-label="Rated 5 out of 5">
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <i aria-hidden="true" class="icon icon-star-1"></i>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <i aria-hidden="true" class="icon icon-star-1"></i>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <i aria-hidden="true" class="icon icon-star-1"></i>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <i aria-hidden="true" class="icon icon-star-1"></i>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <i aria-hidden="true" class="icon icon-star-1"></i>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <i aria-hidden="true" class="icon icon-star-1"></i>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <i aria-hidden="true" class="icon icon-star-1"></i>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <i aria-hidden="true" class="icon icon-star-1"></i>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <i aria-hidden="true" class="icon icon-star-1"></i>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <i aria-hidden="true" class="icon icon-star-1"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7574a2e4 elementor-widget elementor-widget-text-editor"
                                        data-id="7574a2e4" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>(5/5)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5733bcd8 e-flex e-con-boxed elementor-invisible e-con e-child"
                                data-id="5733bcd8" data-element_type="container"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-46ef2c0 elementor-widget elementor-widget-image"
                                        data-id="46ef2c0" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="800" height="480"
                                                src="wp-content/uploads/sites/292/2024/11/5-42.jpg"
                                                class="attachment-large size-large wp-image-965" alt=""
                                                srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/5-42.jpg 1000w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/5-42-300x180.jpg 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/5-42-768x461.jpg 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/5-42-800x480.jpg 800w"
                                                sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-39b9ef0d e-flex e-con-boxed e-con e-child"
                        data-id="39b9ef0d" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-df3bc34 e-con-full e-flex elementor-invisible e-con e-child"
                                data-id="df3bc34" data-element_type="container"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                <div class="elementor-element elementor-element-6b223578 e-con-full e-flex e-con e-child"
                                    data-id="6b223578" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-element elementor-element-b355af e-con-full e-flex e-con e-child"
                                        data-id="b355af" data-element_type="container">
                                        <div class="elementor-element elementor-element-1b8195f6 elementor-widget elementor-widget-image"
                                            data-id="1b8195f6" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img decoding="async" width="800" height="780"
                                                    src="wp-content/uploads/sites/292/2024/11/1-6-1024x998.png"
                                                    class="attachment-large size-large wp-image-884" alt=""
                                                    srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png 1024w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-300x292.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-768x749.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-800x780.png 800w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6.png 1196w"
                                                    sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-62033399 e-con-full e-flex e-con e-child"
                                        data-id="62033399" data-element_type="container">
                                        <div class="elementor-element elementor-element-2f0aa5a1 elementor-widget elementor-widget-jkit_heading"
                                            data-id="2f0aa5a1" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                            data-widget_type="jkit_heading.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_4_683073e40bb0b">
                                                    <div class="heading-section-title  display-inline-block">
                                                        <h2 class="heading-title"><span
                                                                class=""><span>About
                                                                    Us</span></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a98e4ce elementor-invisible elementor-widget elementor-widget-jkit_heading"
                                data-id="a98e4ce" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-heading  align- align-tablet- align-mobile-center jeg_module_777_5_683073e40c673">
                                        <div class="heading-section-title  display-inline-block">
                                            <h2 style="font-size: 30px;" class="heading-title">Leading Google Ads and PPC Marketing Agency in Malaysia
<span style="font-size: 30px;" class=" "><span></span></span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-280f8d8d elementor-invisible elementor-widget elementor-widget-text-editor"
                                data-id="280f8d8d" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div>
                                        <p>Go Viral is a results-driven Google Ads agency in Malaysia that offers expert PPC marketing services for your business to grow. As a trusted digital advertising agency in Malaysia, we craft data-driven campaigns to maximise ROI, reduce wasted spend, and boost conversions. Partner with us to scale your brand effectively.

</p>

                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-438ce723 e-con-full e-flex elementor-invisible e-con e-child"
                                    data-id="438ce723" data-element_type="container"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                    <div class="elementor-element elementor-element-5135867c e-con-full e-flex e-con e-child"
                                        data-id="5135867c" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                        <div class="elementor-element elementor-element-13a55f96 elementor-align-justify elementor-widget elementor-widget-button"
                                            data-id="13a55f96" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                        href="#">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-arrow-circle-right"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-button-text">Get Free Consultation!</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3751dbd3 elementor-widget__width-inherit elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                    data-id="3751dbd3" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img loading="lazy" decoding="async" width="800" height="200"
                            src="wp-content/uploads/sites/292/2024/11/1-3-1024x256.png"
                            class="attachment-large size-large wp-image-869" alt=""
                            srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-3-1024x256.png 1024w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-3-300x75.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-3-768x192.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-3-1536x384.png 1536w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-3-800x200.png 800w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-3.png 1600w"
                            sizes="(max-width: 800px) 100vw, 800px" /> </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-4d2a0c7c e-flex e-con-boxed e-con e-parent" data-id="4d2a0c7c"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-5cb50800 e-con-full e-flex e-con e-child"
                    data-id="5cb50800" data-element_type="container">
                    <div class="elementor-element elementor-element-984ff36 e-con-full e-flex e-con e-child"
                        data-id="984ff36" data-element_type="container">
                        <div class="elementor-element elementor-element-28b1c9e1 e-con-full e-flex e-con e-child"
                            data-id="28b1c9e1" data-element_type="container">
                            <div class="elementor-element elementor-element-6e6299ca e-con-full e-flex elementor-invisible e-con e-child"
                                data-id="6e6299ca" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                <div class="elementor-element elementor-element-222bc812 e-con-full e-flex e-con e-child"
                                    data-id="222bc812" data-element_type="container">
                                    <div class="elementor-element elementor-element-51725d26 elementor-widget elementor-widget-image"
                                        data-id="51725d26" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="800" height="780"
                                                src="wp-content/uploads/sites/292/2024/11/1-6-1024x998.png"
                                                class="attachment-large size-large wp-image-884" alt=""
                                                srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png 1024w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-300x292.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-768x749.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-800x780.png 800w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6.png 1196w"
                                                sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-595c5592 e-con-full e-flex e-con e-child"
                                    data-id="595c5592" data-element_type="container">
                                    <div class="elementor-element elementor-element-4daf0054 elementor-widget elementor-widget-jkit_heading"
                                        data-id="4daf0054" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                        data-widget_type="jkit_heading.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_6_683073e40fa6c">
                                                <div class="heading-section-title  display-inline-block">
                                                    <h2 class="heading-title"><span class=""><span>Our
                                                                Services</span></span></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-77be6fe0 elementor-invisible elementor-widget elementor-widget-jkit_heading"
                            data-id="77be6fe0" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="jkit_heading.default">
                            <div class="elementor-widget-container">
                                <div
                                    class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_7_683073e4108be">
                                    <div class="heading-section-title  display-inline-block">
                                        <h2 class="heading-title">Our Proven Process for PPC Marketing Services


<span
                                                class=""><span></span></span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-731ffd99 elementor-invisible elementor-widget elementor-widget-text-editor"
                            data-id="731ffd99" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>We offer strategic PPC marketing services in Malaysia that drive leads, improve ROI, and deliver real-time results. Our data-driven approach ensures your ads reach the right audience at the right time. From keyword selection to ad optimization, we manage everything with precision. If you’re searching for a PPC marketing agency near me, Go Viral is your trusted partner.We continuously monitor, test, and refine your campaigns for maximum efficiency. Our goal is simple — deliver high-quality traffic that converts into loyal customers. </p>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2278a7df e-con-full e-flex e-con e-child"
                        data-id="2278a7df" data-element_type="container">
                        <div class="elementor-element elementor-element-12793f62 e-con-full e-flex e-con e-child"
                            data-id="12793f62" data-element_type="container">
                            <a class="elementor-element elementor-element-422b9695 e-con-full e-transform e-transform e-flex elementor-invisible e-con e-child"
                                data-id="422b9695" data-element_type="container"
                                data-settings="{&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-5,&quot;sizes&quot;:[]},&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                href="#">
                                <div class="elementor-element elementor-element-16e08070 e-con-full e-flex e-con e-child"
                                    data-id="16e08070" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-element elementor-element-2c5023bb e-con-full e-flex e-con e-child"
                                        data-id="2c5023bb" data-element_type="container">
                                        <div class="elementor-element elementor-element-3fc8212d elementor-widget elementor-widget-image"
                                            data-id="3fc8212d" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img loading="lazy" decoding="async" width="512" height="512"
                                                    src="wp-content/uploads/sites/292/2024/11/2-2.png"
                                                    class="elementor-animation-grow attachment-large size-large wp-image-967"
                                                    alt=""
                                                    srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-2.png 512w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-2-300x300.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-2-150x150.png 150w"
                                                    sizes="(max-width: 512px) 100vw, 512px" /> </div>
                                        </div>
                                    </div>

                                    <div class="elementor-element elementor-element-1ec6df45 e-con-full e-flex e-con e-child"
                                        data-id="1ec6df45" data-element_type="container">
                                        <div class="elementor-element elementor-element-7f70002a elementor-widget elementor-widget-heading"
                                            data-id="7f70002a" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">Research & Keyword Strategy
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4f08705f elementor-widget elementor-widget-text-editor"
                                            data-id="4f08705f" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="section">
                                                    <p class="show">
                                                        <span class="preview">In order to create focused campaigns that generate clicks and qualified leads, our PPC marketing services start with in-depth audience research and keyword analysis.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="elementor-element elementor-element-382c7e93 e-con-full e-transform e-transform e-flex elementor-invisible e-con e-child"
                                data-id="382c7e93" data-element_type="container"
                                data-settings="{&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-5,&quot;sizes&quot;:[]},&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                href="#">
                                <div class="elementor-element elementor-element-1ea9e325 e-con-full e-flex e-con e-child"
                                    data-id="1ea9e325" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-element elementor-element-541711cd e-con-full e-flex e-con e-child"
                                        data-id="541711cd" data-element_type="container">
                                        <div class="elementor-element elementor-element-77460fc elementor-widget elementor-widget-image"
                                            data-id="77460fc" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img loading="lazy" decoding="async" width="512" height="512"
                                                    src="wp-content/uploads/sites/292/2024/11/6.png"
                                                    class="elementor-animation-grow attachment-large size-large wp-image-966"
                                                    alt=""
                                                    srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/6.png 512w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/6-300x300.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/6-150x150.png 150w"
                                                    sizes="(max-width: 512px) 100vw, 512px" /> </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1c9f4f1a e-con-full e-flex e-con e-child"
                                        data-id="1c9f4f1a" data-element_type="container">
                                        <div class="elementor-element elementor-element-73c705b9 elementor-widget elementor-widget-heading"
                                            data-id="73c705b9" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">Creation and Optimisation of Ads</h5>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5b71efa8 elementor-widget elementor-widget-text-editor"
                                            data-id="5b71efa8" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-widget-container">
                                                    <div class="section">
                                                        <p class="show">
                                                            <span class="preview">As Malaysia's top Google Ads agency, we create effective advertisements, run A/B tests on creatives, and polish messages to increase click-through rates and conversions.</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="elementor-element elementor-element-4791d5 e-con-full e-flex e-con e-child"
                            data-id="4791d5" data-element_type="container">
                            <a class="elementor-element elementor-element-76d91e84 e-con-full e-transform e-transform e-flex elementor-invisible e-con e-child"
                                data-id="76d91e84" data-element_type="container"
                                data-settings="{&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-5,&quot;sizes&quot;:[]},&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                href="#">
                                <div class="elementor-element elementor-element-2fc19134 e-con-full e-flex e-con e-child"
                                    data-id="2fc19134" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-element elementor-element-35fd3da7 e-con-full e-flex e-con e-child"
                                        data-id="35fd3da7" data-element_type="container">
                                        <div class="elementor-element elementor-element-77a2751c elementor-widget elementor-widget-image"
                                            data-id="77a2751c" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img loading="lazy" decoding="async" width="512" height="512"
                                                    src="wp-content/uploads/sites/292/2024/11/3-2.png"
                                                    class="elementor-animation-grow attachment-large size-large wp-image-968"
                                                    alt=""
                                                    srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-2.png 512w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-2-300x300.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-2-150x150.png 150w"
                                                    sizes="(max-width: 512px) 100vw, 512px" /> </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-41514302 e-con-full e-flex e-con e-child"
                                        data-id="41514302" data-element_type="container">
                                        <div class="elementor-element elementor-element-3aa6d3dc elementor-widget elementor-widget-heading"
                                            data-id="3aa6d3dc" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">Campaign Monitoring & Adjustments</h5>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-88678c2 elementor-widget elementor-widget-text-editor"
                                            data-id="88678c2" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-widget-container">
                                                    <div class="section">
                                                        <p class="show">
                                                            <span class="preview">We continuously monitor PPC marketing performance, adjusting bids, keywords, and ad placements to reduce waste and ensure peak ROI for every campaign.

 </span>
                                                            <span class="more-text"></span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="elementor-element elementor-element-359574ea e-con-full e-transform e-transform e-flex elementor-invisible e-con e-child"
                                data-id="359574ea" data-element_type="container"
                                data-settings="{&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-5,&quot;sizes&quot;:[]},&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                href="#">
                                <div class="elementor-element elementor-element-6924ad94 e-con-full e-flex e-con e-child"
                                    data-id="6924ad94" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-element elementor-element-462ca4fb e-con-full e-flex e-con e-child"
                                        data-id="462ca4fb" data-element_type="container">
                                        <div class="elementor-element elementor-element-b86998d elementor-widget elementor-widget-image"
                                            data-id="b86998d" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img loading="lazy" decoding="async" width="512" height="512"
                                                    src="wp-content/uploads/sites/292/2024/11/4-4.png"
                                                    class="elementor-animation-grow attachment-large size-large wp-image-969"
                                                    alt=""
                                                    srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-4.png 512w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-4-300x300.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-4-150x150.png 150w"
                                                    sizes="(max-width: 512px) 100vw, 512px" /> </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-13225081 e-con-full e-flex e-con e-child"
                                        data-id="13225081" data-element_type="container">
                                        <div class="elementor-element elementor-element-101e2f11 elementor-widget elementor-widget-heading"
                                            data-id="101e2f11" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">ROI Tracking and Performance Reporting</h5>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-17b368c3 elementor-widget elementor-widget-text-editor"
                                            data-id="17b368c3" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-widget-container">
                                                    <div class="section">
                                                        <p class="show">
                                                            <span class="preview">
To gauge effectiveness and enhance PPC campaign tactics over time, our Google Ads agency in Malaysia provides in-depth reports, monitors conversions, and clear insights.</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div  style="display:none;"         class="elementor-element elementor-element-1fce4e90 e-flex e-con-boxed e-con e-parent" data-id="1fce4e90"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-41750a9f e-flex e-con-boxed e-con e-child"
                    data-id="41750a9f" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-6e734aba e-con-full e-flex e-con e-child"
                            data-id="6e734aba" data-element_type="container">
                            <div class="elementor-element elementor-element-49eed66 e-con-full e-flex elementor-invisible e-con e-child"
                                data-id="49eed66" data-element_type="container"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                <div class="elementor-element elementor-element-7437889a e-con-full e-flex e-con e-child"
                                    data-id="7437889a" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-element elementor-element-1fc6c676 e-con-full e-flex e-con e-child"
                                        data-id="1fc6c676" data-element_type="container">
                                        <div class="elementor-element elementor-element-28130773 elementor-widget elementor-widget-image"
                                            data-id="28130773" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img decoding="async" width="800" height="780"
                                                    src="wp-content/uploads/sites/292/2024/11/1-6-1024x998.png"
                                                    class="attachment-large size-large wp-image-884" alt=""
                                                    srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png 1024w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-300x292.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-768x749.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-800x780.png 800w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6.png 1196w"
                                                    sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-787cf3a8 e-con-full e-flex e-con e-child"
                                        data-id="787cf3a8" data-element_type="container">
                                        <div class="elementor-element elementor-element-16ac1f7f elementor-widget elementor-widget-jkit_heading"
                                            data-id="16ac1f7f" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                            data-widget_type="jkit_heading.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_8_683073e416fe4">
                                                    <div class="heading-section-title  display-inline-block">
                                                        <h2 class="heading-title"><span
                                                                class=""><span>Pricing
                                                                    Plan</span></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1f4edb01 elementor-invisible elementor-widget elementor-widget-jkit_heading"
                                data-id="1f4edb01" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="jkit_heading.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-heading  align- align-tablet-center align-mobile-center jeg_module_777_9_683073e417b2a">
                                        <div class="heading-section-title  display-inline-block">
                                            <h2 class="heading-title">Choose Your <span
                                                    class=""><span>Pricing</span></span> Plan</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-29da14c4 elementor-invisible elementor-widget elementor-widget-text-editor"
                                data-id="29da14c4" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>In every pricing plan, you’ll have a dedicated team managing your brand.
From strategic planning to creative visuals — we provide a Social Media Specialist, Copywriter, Graphics Designer, and an Account Manager to ensure smooth communication and results. OR you can make your customized package<br>

<div class="elementor-widget-container">
                                                        <div class="build_your_custom_plan elementor-button-wrapper">
                                                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                                href="#">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-icon">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-arrow-circle-right"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                                                            </path>
                                                                        </svg> </span>
                                                                    <span class="elementor-button-text">Build your custom plan</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>

<span>
<a href=""><button>
Build Your Custom Plan</button></a></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-50b9b9e7 e-flex e-con-boxed e-con e-child"
                            data-id="50b9b9e7" data-element_type="container">
                            <div  class="e-con-inner">
                                <div style="border:1px solid #fff;" class="elementor-element elementor-element-c7031b8 e-flex e-con-boxed elementor-invisible e-con e-child"
                                    data-id="c7031b8" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-523b15fa e-flex e-con-boxed e-con e-child"
                                            data-id="523b15fa" data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-20ccc0fe elementor-widget elementor-widget-heading"
                                                    data-id="20ccc0fe" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h5 class="elementor-heading-title elementor-size-default">
                                                            Basic Plan</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-57d2fb6b e-flex e-con-boxed e-con e-child"
                                            data-id="57d2fb6b" data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-670a778c elementor-widget elementor-widget-heading"
                                                    data-id="670a778c" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            RM 2,200–4,400
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-74a1b78e elementor-widget elementor-widget-text-editor"
                                                    data-id="74a1b78e" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>/ month</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7c7ccbb6 e-flex e-con-boxed e-con e-child"
                                            data-id="7c7ccbb6" data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-5aa43e44 elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="5aa43e44" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-check-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Review monitoring</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-check-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Alert setup</span>
                                                            </li>
                                                            
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-check-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Content Strategy & Planning</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-check-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Competitor Analysis</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-check-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text"> 2 Platforms</span>
                                                            </li>
                                                              <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-check-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Engagement: Reply to DMs & Comments</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-check-circle"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Performance Report & Insights</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-18cbc8ad e-con-full e-flex e-con e-child"
                                            data-id="18cbc8ad" data-element_type="container">
                                            <div class="elementor-element elementor-element-229d91ea e-con-full e-flex e-con e-child"
                                                data-id="229d91ea" data-element_type="container"
                                                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                                <div class="elementor-element elementor-element-55dc15e8 elementor-align-justify elementor-widget elementor-widget-button"
                                                    data-id="55dc15e8" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                                href="#">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-icon">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-arrow-circle-right"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                                                            </path>
                                                                        </svg> </span>
                                                                    <span class="elementor-button-text">Select
                                                                        Plan</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="border:1px solid #fff;" class="elementor-element elementor-element-609f922e e-con-full e-flex elementor-invisible e-con e-child"
                                    data-id="609f922e" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                    <div class="elementor-element elementor-element-2d03d740 e-flex e-con-boxed e-con e-child"
                                        data-id="2d03d740" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-7e2183ad elementor-widget elementor-widget-heading"
                                                data-id="7e2183ad" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                        standart Plan</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1c185d62 e-flex e-con-boxed e-con e-child"
                                        data-id="1c185d62" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-764291ab elementor-widget elementor-widget-heading"
                                                data-id="764291ab" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">
                                                        RM 1,700</h4>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-706f48ba elementor-widget elementor-widget-text-editor"
                                                data-id="706f48ba" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>/ month</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3a0035c8 e-flex e-con-boxed e-con e-child"
                                        data-id="3a0035c8" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-63f335f6 elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="63f335f6" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text"> Single Account Manager, Specialist, Copywriter, and a Graphic Designer</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text"> 10 Posts/Month</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text"> Content Ideas + Monthly Calendar</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text"> 4 Platforms (FB, IG, Twitter, TikTok)</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text"> 10 Product Studio Photos (One-Time)</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">PageFull Engagement + Monthly Audit Reports</span>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-190bad35 e-con-full e-flex e-con e-child"
                                        data-id="190bad35" data-element_type="container">
                                        <div class="elementor-element elementor-element-ffafd07 e-con-full e-flex e-con e-child"
                                            data-id="ffafd07" data-element_type="container"
                                            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                            <div class="elementor-element elementor-element-29c1b775 elementor-align-justify elementor-widget elementor-widget-button"
                                                data-id="29c1b775" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                            href="#">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-arrow-circle-right"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-button-text">Select
                                                                    Plan</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="border:1px solid #fff;" class="elementor-element elementor-element-792a8e8e e-con-full e-flex elementor-invisible e-con e-child"
                                    data-id="792a8e8e" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                    <div class="elementor-element elementor-element-b8ecacb e-flex e-con-boxed e-con e-child"
                                        data-id="b8ecacb" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-442a788a elementor-widget elementor-widget-heading"
                                                data-id="442a788a" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                        Premium plan</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-14e838c2 e-flex e-con-boxed e-con e-child"
                                        data-id="14e838c2" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-74b8ac4c elementor-widget elementor-widget-heading"
                                                data-id="74b8ac4c" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">
                                                        RM 2,600</h4>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-585d403c elementor-widget elementor-widget-text-editor"
                                                data-id="585d403c" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>/ month</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-380fc580 e-flex e-con-boxed e-con e-child"
                                        data-id="380fc580" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-1acc2005 elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="1acc2005" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Advanced SEO
                                                                Strategy</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Full Social
                                                                Media Management</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text"> Paid Ads
                                                                Management (Google, Meta)</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Custom
                                                                Website Support + Optimization</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">
                                                                Conversion-Optimized Landing Pages (3+)</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text"> Graphic
                                                                Design Add-ons</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-check-circle"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Weekly
                                                                Reports + Strategy Calls</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7e4f692b e-con-full e-flex e-con e-child"
                                        data-id="7e4f692b" data-element_type="container">
                                        <div class="elementor-element elementor-element-3508eb1f e-con-full e-flex e-con e-child"
                                            data-id="3508eb1f" data-element_type="container"
                                            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                            <div class="elementor-element elementor-element-6ae65119 elementor-align-justify elementor-widget elementor-widget-button"
                                                data-id="6ae65119" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                            href="#">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-arrow-circle-right"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-button-text">Select
                                                                    Plan</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-53e21ddd elementor-widget__width-inherit elementor-absolute e-transform e-transform elementor-invisible elementor-widget elementor-widget-image"
                    data-id="53e21ddd" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_transform_flipY_effect&quot;:&quot;transform&quot;,&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-3d2b4980 e-flex e-con-boxed e-con e-parent" data-id="3d2b4980"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-4c7bb9cc e-flex e-con-boxed e-con e-child"
                    data-id="4c7bb9cc" data-element_type="container">                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-696d42b8 e-flex e-con-boxed e-con e-child"
                            data-id="696d42b8" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-62f51ec4 e-con-full e-flex e-con e-child"
                                    data-id="62f51ec4" data-element_type="container">
                                    <div class="elementor-element elementor-element-113fc808 e-con-full e-flex e-con e-child"
                                        data-id="113fc808" data-element_type="container">
                                        <div class="elementor-element elementor-element-1c45d879 e-con-full e-flex elementor-invisible e-con e-child"
                                            data-id="1c45d879" data-element_type="container"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                            <div class="elementor-element elementor-element-ef4bd07 e-con-full e-flex e-con e-child"
                                                data-id="ef4bd07" data-element_type="container">
                                                <div class="elementor-element elementor-element-17ecfdc5 elementor-widget elementor-widget-image"
                                                    data-id="17ecfdc5" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img decoding="async" width="800" height="780"
                                                            src="wp-content/uploads/sites/292/2024/11/1-6-1024x998.png"
                                                            class="attachment-large size-large wp-image-884" alt=""
                                                            srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png 1024w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-300x292.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-768x749.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-800x780.png 800w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6.png 1196w"
                                                            sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4a9465c4 e-con-full e-flex e-con e-child"
                                                data-id="4a9465c4" data-element_type="container">
                                                <div class="elementor-element elementor-element-75a626c elementor-widget elementor-widget-jkit_heading"
                                                    data-id="75a626c" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="jkit_heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_10_683073e41e5c2">
                                                            <div class="heading-section-title  display-inline-block">
                                                                <h2 class="heading-title"><span
                                                                        class=""><span>SEO Audit</span></span></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5a287ea5 elementor-invisible elementor-widget elementor-widget-jkit_heading"
                                        data-id="5a287ea5" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="jkit_heading.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_11_683073e41efeb">
                                                <div class="heading-section-title  display-inline-block">
                                                    <h2 class="heading-title">PPC Marketing Services in Malaysia for Growth
<span
                                                            class=""><span></span></span></span></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-37b7110a elementor-invisible elementor-widget elementor-widget-text-editor"
                                        data-id="37b7110a" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="text-editor.default">
                                        <div style="text-align:left," class="elementor-widget-container">
                                            <p>Drive leads, boost ROI, and get real-time results with expert PPC strategies. At Go Viral, we create high-performing pay-per-click campaigns that put your brand in front of the right audience at the right time. From thorough keyword research to compelling ad copy and continuous performance tracking, we tailor each campaign to align with your business goals. Our PPC experts optimize bids, reduce wasted spend, and focus on maximizing every advertising dollar. Whether you're a startup or an established brand, our PPC solutions are designed to deliver measurable growth. Trust Malaysia’s results-driven PPC agency to elevate your digital advertising success.
</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-75501f6a e-flex e-con-boxed e-con e-child"
                            data-id="75501f6a" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-1ed28d80 e-flex e-con-boxed e-con e-child"
                                    data-id="1ed28d80" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-30d5effd e-flex e-con-boxed elementor-invisible e-con e-child"
                                            data-id="30d5effd" data-element_type="container"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-3cb1354f e-flex e-con-boxed e-con e-child"
                                                    data-id="3cb1354f" data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-3c294f10 e-con-full e-flex e-con e-child"
                                                            data-id="3c294f10" data-element_type="container">
                                                            <div class="elementor-element elementor-element-41e4df2d elementor-widget elementor-widget-heading"
                                                                data-id="41e4df2d" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div style="text-align: left;"
                                                                    class="elementor-widget-container">
                                                                    <h5
                                                                        class="elementor-heading-title elementor-size-default">
                                                                        Immediate Exposure</h5>
                                                                </div>
                                                            </div>
                                                            <div style="text-align: left;"
                                                                class="elementor-element elementor-element-7a27193b elementor-widget elementor-widget-text-editor"
                                                                data-id="7a27193b" data-element_type="widget"
                                                                data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="section">
                                                                        <div class="content">
                                                                            <p>PPC shines a spotlight on your business, placing it right at the top of search results. The moment you launch your PPC campaign, your brand gains immediate exposure and starts attracting potential customers. With pay-per-click in Malaysia, your ads target the right audience instantly, driving traffic and growing your business fast. Whether you’re introducing a new product or boosting brand awareness, PPC ensures you get noticed right away.</p>
                                                                        </div>
                                                                        <span class="read-more-btn">Read
                                                                            more</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-25c2e8b7 e-con-full e-flex e-con e-child"
                                                            data-id="25c2e8b7" data-element_type="container">
                                                            <div class="elementor-element elementor-element-4446fdb2 e-con-full e-flex e-con e-child"
                                                                data-id="4446fdb2" data-element_type="container">
                                                                <div class="elementor-element elementor-element-7b2ec7a elementor-widget elementor-widget-image"
                                                                    data-id="7b2ec7a" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async" width="512"
                                                                            height="512"
                                                                            src="wp-content/uploads/sites/292/2024/11/8-2.png"
                                                                            class="attachment-large size-large wp-image-973"
                                                                            alt=""
                                                                            srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/8-2.png 512w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/8-2-300x300.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/8-2-150x150.png 150w"
                                                                            sizes="(max-width: 512px) 100vw, 512px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-28007686 e-con-full elementor-hidden-mobile e-flex e-con e-child"
                                                                data-id="28007686" data-element_type="container">
                                                                <div class="elementor-element elementor-element-2b0d6df6 elementor-hidden-tablet elementor-hidden-mobile e-transform elementor-widget elementor-widget-image"
                                                                    data-id="2b0d6df6" data-element_type="widget"
                                                                    data-settings="{&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async" width="800"
                                                                            height="155"
                                                                            src="wp-content/uploads/sites/292/2024/11/7.png"
                                                                            class="attachment-large size-large wp-image-972"
                                                                            alt=""
                                                                            srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7.png 865w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7-300x58.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7-768x149.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7-800x155.png 800w"
                                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="elementor-element elementor-element-7b511b31 e-flex e-con-boxed elementor-invisible e-con e-child"
                                            data-id="7b511b31" data-element_type="container"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-75b94d36 e-flex e-con-boxed e-con e-child"
                                                    data-id="75b94d36" data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-3b390a72 e-con-full e-flex e-con e-child"
                                                            data-id="3b390a72" data-element_type="container">
                                                            <div class="elementor-element elementor-element-1e3c5160 elementor-widget elementor-widget-heading"
                                                                data-id="1e3c5160" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div style="text-align: left;"
                                                                    class="elementor-widget-container">
                                                                    <h5
                                                                        class="elementor-heading-title elementor-size-default">
                                                                       Accurate Tracking</h5>
                                                                </div>
                                                            </div>
                                                            <div style="text-align: left;"
                                                                class="elementor-element elementor-element-6d12b2f0 elementor-widget elementor-widget-text-editor"
                                                                data-id="6d12b2f0" data-element_type="widget"
                                                                data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="section">

                                                                        <div class="content">
                                                                            <p>Track clicks, conversions, and budget performance in real-time with our Google Ads agency in Malaysia for optimised ad spending.
</p>
                                                                        </div>
                                                                        <span class="read-more-btn">Read
                                                                            more</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-4ad8c1af e-con-full e-flex e-con e-child"
                                                            data-id="4ad8c1af" data-element_type="container">
                                                            <div class="elementor-element elementor-element-1aa9610f e-con-full e-flex e-con e-child"
                                                                data-id="1aa9610f" data-element_type="container">
                                                                <div class="elementor-element elementor-element-46ede511 elementor-widget elementor-widget-image"
                                                                    data-id="46ede511" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async" width="512"
                                                                            height="512"
                                                                            src="wp-content/uploads/sites/292/2024/11/9-1.png"
                                                                            class="attachment-large size-large wp-image-974"
                                                                            alt=""
                                                                            srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/9-1.png 512w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/9-1-300x300.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/9-1-150x150.png 150w"
                                                                            sizes="(max-width: 512px) 100vw, 512px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-11cb9dac e-con-full elementor-hidden-mobile e-flex e-con e-child"
                                                                data-id="11cb9dac" data-element_type="container">
                                                                <div class="elementor-element elementor-element-2c00d16c elementor-hidden-tablet elementor-hidden-mobile e-transform elementor-widget elementor-widget-image"
                                                                    data-id="2c00d16c" data-element_type="widget"
                                                                    data-settings="{&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async" width="800"
                                                                            height="155"
                                                                            src="wp-content/uploads/sites/292/2024/11/7.png"
                                                                            class="attachment-large size-large wp-image-972"
                                                                            alt=""
                                                                            srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7.png 865w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7-300x58.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7-768x149.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7-800x155.png 800w"
                                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2b2e2f14 e-flex e-con-boxed e-con e-child"
                                    data-id="2b2e2f14" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-3482979c elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="3482979c" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img loading="lazy" decoding="async" width="635" height="769"
                                                    src="wp-content/uploads/sites/292/2024/11/6-1-1.png"
                                                    class="attachment-large size-large wp-image-971" alt=""
                                                    srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/6-1-1.png 635w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/6-1-1-248x300.png 248w"
                                                    sizes="(max-width: 635px) 100vw, 635px" /> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-471e960c e-flex e-con-boxed e-con e-child"
                                    data-id="471e960c" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-73daf2a1 e-flex e-con-boxed elementor-invisible e-con e-child"
                                            data-id="73daf2a1" data-element_type="container"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-7c89faee e-flex e-con-boxed e-con e-child"
                                                    data-id="7c89faee" data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-4466075b e-con-full e-flex e-con e-child"
                                                            data-id="4466075b" data-element_type="container">
                                                            <div class="elementor-element elementor-element-266f2ff6 e-con-full e-flex e-con e-child"
                                                                data-id="266f2ff6" data-element_type="container">
                                                                <div class="elementor-element elementor-element-4f9afe26 elementor-widget elementor-widget-image"
                                                                    data-id="4f9afe26" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async" width="512"
                                                                            height="512"
                                                                            src="wp-content/uploads/sites/292/2024/11/10-1.png"
                                                                            class="attachment-large size-large wp-image-975"
                                                                            alt=""
                                                                            srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/10-1.png 512w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/10-1-300x300.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/10-1-150x150.png 150w"
                                                                            sizes="(max-width: 512px) 100vw, 512px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-6a418aec e-con-full elementor-hidden-mobile e-flex e-con e-child"
                                                                data-id="6a418aec" data-element_type="container">
                                                                <div class="elementor-element elementor-element-15e1bff elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"
                                                                    data-id="15e1bff" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async" width="800"
                                                                            height="155"
                                                                            src="wp-content/uploads/sites/292/2024/11/7.png"
                                                                            class="attachment-large size-large wp-image-972"
                                                                            alt=""
                                                                            srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7.png 865w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7-300x58.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7-768x149.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7-800x155.png 800w"
                                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-7f1250e1 e-con-full e-flex e-con e-child"
                                                            data-id="7f1250e1" data-element_type="container">
                                                            <div class="elementor-element elementor-element-2c9ec78d elementor-widget elementor-widget-heading"
                                                                data-id="2c9ec78d" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div style="text-align: left;"
                                                                    class="elementor-widget-container">
                                                                    <h5
                                                                        class="elementor-heading-title elementor-size-default">
                                                                      Customized Campaigns </h5>
                                                                </div>
                                                            </div>
                                                            <div style="text-align: left;"
                                                                class="elementor-element elementor-element-952119e elementor-widget elementor-widget-text-editor"
                                                                data-id="952119e" data-element_type="widget"
                                                                data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="section">

                                                                        <div class="content">
                                                                            <p>Our Google AdWords agency creates tailored PPC marketing campaigns that connect your business to the right audience with maximum conversion impact.</p>
                                                                        </div>
                                                                        <span class="read-more-btn">Read
                                                                            more</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-154679d8 e-flex e-con-boxed elementor-invisible e-con e-child"
                                            data-id="154679d8" data-element_type="container"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-6c027037 e-flex e-con-boxed e-con e-child"
                                                    data-id="6c027037" data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-645895e8 e-con-full e-flex e-con e-child"
                                                            data-id="645895e8" data-element_type="container">
                                                            <div class="elementor-element elementor-element-22a589fd e-con-full e-flex e-con e-child"
                                                                data-id="22a589fd" data-element_type="container">
                                                                <div class="elementor-element elementor-element-61a07485 elementor-widget elementor-widget-image"
                                                                    data-id="61a07485" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async" width="512"
                                                                            height="512"
                                                                            src="wp-content/uploads/sites/292/2024/11/11-1.png"
                                                                            class="attachment-large size-large wp-image-976"
                                                                            alt=""
                                                                            srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/11-1.png 512w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/11-1-300x300.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/11-1-150x150.png 150w"
                                                                            sizes="(max-width: 512px) 100vw, 512px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-478d5017 e-con-full elementor-hidden-mobile e-flex e-con e-child"
                                                                data-id="478d5017" data-element_type="container">
                                                                <div class="elementor-element elementor-element-b187ff7 elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"
                                                                    data-id="b187ff7" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async" width="800"
                                                                            height="155"
                                                                            src="wp-content/uploads/sites/292/2024/11/7.png"
                                                                            class="attachment-large size-large wp-image-972"
                                                                            alt=""
                                                                            srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7.png 865w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7-300x58.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7-768x149.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/7-800x155.png 800w"
                                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-f8587a9 e-con-full e-flex e-con e-child"
                                                            data-id="f8587a9" data-element_type="container">
                                                            <div class="elementor-element elementor-element-3359b0ea elementor-widget elementor-widget-heading"
                                                                data-id="3359b0ea" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h5
                                                                        class="elementor-heading-title elementor-size-default">
                                                                         Measurable ROI </h5>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-6aed7f96 elementor-widget elementor-widget-text-editor"
                                                                data-id="6aed7f96" data-element_type="widget"
                                                                data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="section">
                                                                        <div class="content">
                                                                            <p>Our PPC marketing services in Malaysia ensure every click counts by optimizing cost-per-conversion and delivering measurable ROI through data-driven strategies.</p>
                                                                        </div>
                                                                        <span class="read-more-btn">Read
                                                                            more</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4e2d8de6 elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
                    data-id="4e2d8de6" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img loading="lazy" decoding="async" width="800" height="800"
                            src="wp-content/uploads/sites/292/2024/11/48-1024x1024.png"
                            class="attachment-large size-large wp-image-811" alt=""
                            srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/48-1024x1024.png 1024w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/48-300x300.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/48-150x150.png 150w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/48-768x768.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/48-1536x1536.png 1536w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/48-800x800.png 800w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/48.png 1633w"
                            sizes="(max-width: 800px) 100vw, 800px" /> </div>
                </div>
            </div>
        </div>

        
        <div class="elementor-element elementor-element-7301da76 e-flex e-con-boxed elementor-invisible e-con e-parent"
            data-id="7301da76" data-element_type="container"
            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-1c222f90 e-flex e-con-boxed elementor-invisible e-con e-child"
                    data-id="1c222f90" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-9146994 e-flex e-con-boxed e-con e-child"
                            data-id="9146994" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-31e11b42 e-con-full e-flex e-con e-child"
                                    data-id="31e11b42" data-element_type="container">
                                    <div class="elementor-element elementor-element-6c5fd82f e-con-full e-flex e-con e-child"
                                        data-id="6c5fd82f" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-element elementor-element-1df50d1a e-con-full e-flex e-con e-child"
                                            data-id="1df50d1a" data-element_type="container">
                                            <div class="elementor-element elementor-element-40e8e739 elementor-widget elementor-widget-image"
                                                data-id="40e8e739" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="800" height="780"
                                                        src="wp-content/uploads/sites/292/2024/11/1-6-1024x998.png"
                                                        class="attachment-large size-large wp-image-884" alt=""
                                                        srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png 1024w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-300x292.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-768x749.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-800x780.png 800w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6.png 1196w"
                                                        sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-e1cb1 e-con-full e-flex e-con e-child"
                                            data-id="e1cb1" data-element_type="container">
                                            <div class="elementor-element elementor-element-6d22871f elementor-widget elementor-widget-jkit_heading"
                                                data-id="6d22871f" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_12_683073e42ab88">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title"><span
                                                                    class=""><span>Testimonial</span></span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5c943ca0 elementor-invisible elementor-widget elementor-widget-jkit_heading"
                                    data-id="5c943ca0" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                    data-widget_type="jkit_heading.default">
                                    <div class="elementor-widget-container">
                                        <div
                                            class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_13_683073e42ba32">
                                            <div class="heading-section-title  display-inline-block">
                                                <h2 class="heading-title">Reviews from Our Happy Clients<span
                                                        class=""><span></span></span>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-38b04447 elementor-widget elementor-widget-text-editor"
                                    data-id="38b04447" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div style="padding-bottom: 3px;" class="elementor-widget-container">
                                        <p>We pride ourselves on delivering real results and building strong
                                            partnerships. Here’s what some of our satisfied clients have to say
                                            about working with us:
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-2f2c7470 e-flex e-con-boxed e-con e-child"
                                data-id="2f2c7470" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-1bf1fb66 ekit-testimonial-fade elementor-widget elementor-widget-elementskit-testimonial"
                                        data-id="1bf1fb66" data-element_type="widget"
                                        data-widget_type="elementskit-testimonial.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="elementskit-testimonial-slider ekit_testimonial_style_5 arrow_inside "
                                                    data-config="{&quot;rtl&quot;:false,&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;pauseOnHover&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:1000,&quot;slidesPerGroup&quot;:1,&quot;slidesPerView&quot;:3,&quot;loop&quot;:false,&quot;spaceBetween&quot;:15,&quot;breakpoints&quot;:{&quot;320&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1,&quot;spaceBetween&quot;:10},&quot;768&quot;:{&quot;slidesPerView&quot;:2,&quot;slidesPerGroup&quot;:1,&quot;spaceBetween&quot;:10},&quot;1024&quot;:{&quot;slidesPerView&quot;:3,&quot;slidesPerGroup&quot;:1,&quot;spaceBetween&quot;:15}}}">
                                                    <div class="ekit-main-swiper swiper">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="swiper-slide-inner">
                                                                    <div
                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-0224adb">
                                                                        <div class="elementskit-commentor-header">
                                                                            <ul class="elementskit-stars">
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                            </ul>

                                                                            <div
                                                                                class="elementskit-icon-content elementskit-watermark-icon ">
                                                                                <i aria-hidden="true"
                                                                                    class="icon icon-quote2"></i>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementskit-commentor-content">
                                                                            <!-- Client testimonial -->
                                                                            <p>“From the start, Go Viral understood our goals. Their PPC campaigns were spot on, and we’re seeing better conversions than ever. Great service from a reliable team!”</p>
                                                                        </div>

                                                                        <div class="elementskit-commentor-bio">
                                                                            <div class="elementkit-commentor-details ">
                                                                                <div
                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                    <img loading="lazy" decoding="async"
                                                                                        width="1000" height="1000"
                                                                                        src="wp-content/uploads/sites/292/2024/11/2-37.jpg"
                                                                                        class="attachment-full size-full"
                                                                                        alt=""
                                                                                        srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-37.jpg 1000w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-37-300x300.jpg 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-37-150x150.jpg 150w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-37-768x768.jpg 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/2-37-800x800.jpg 800w"
                                                                                        sizes="(max-width: 1000px) 100vw, 1000px" />
                                                                                </div>
                                                                                <div class="elementskit-profile-info">
                                                                                    <strong
                                                                                        class="elementskit-author-name">Nadiah, Penang

                                                                                    </strong>
                                                                                    <span
                                                                                        class="elementskit-author-des">Our
                                                                                        Client</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="swiper-slide-inner">
                                                                    <div
                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-439cefb">
                                                                        <div class="elementskit-commentor-header">
                                                                            <ul class="elementskit-stars">
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                            </ul>

                                                                            <div
                                                                                class="elementskit-icon-content elementskit-watermark-icon ">
                                                                                <i aria-hidden="true"
                                                                                    class="icon icon-quote2"></i>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementskit-commentor-content">
                                                                            <p>
                                                                                <div
                                                                                    class="elementskit-commentor-content">
                                                                                    <!-- Client testimonial -->
                                                                                    <p>“Super happy with Go Viral’s pay-per-click services! Their team explained everything clearly and kept me updated. My ROI has improved significantly in just a short time.”</p>
                                                                                </div>
                                                                            </p>
                                                                        </div>

                                                                        <div class="elementskit-commentor-bio">
                                                                            <div class="elementkit-commentor-details ">
                                                                                <div
                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                    <img loading="lazy" decoding="async"
                                                                                        width="1000" height="1000"
                                                                                        src="wp-content/uploads/sites/292/2024/11/3-44.jpg"
                                                                                        class="attachment-full size-full"
                                                                                        alt=""
                                                                                        srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-44.jpg 1000w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-44-300x300.jpg 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-44-150x150.jpg 150w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-44-768x768.jpg 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-44-800x800.jpg 800w"
                                                                                        sizes="(max-width: 1000px) 100vw, 1000px" />
                                                                                </div>
                                                                                <div class="elementskit-profile-info">
                                                                                    <strong
                                                                                        class="elementskit-author-name">Nur Aisyah, Selangor</strong>
                                                                                    <span
                                                                                        class="elementskit-author-des">Our
                                                                                        Client</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="swiper-slide-inner">
                                                                    <div
                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-855d7f8">
                                                                        <div class="elementskit-commentor-header">
                                                                            <ul class="elementskit-stars">
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                                <li><a><svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path
                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                                        </svg></a></li>
                                                                            </ul>

                                                                            <div
                                                                                class="elementskit-icon-content elementskit-watermark-icon ">
                                                                                <i aria-hidden="true"
                                                                                    class="icon icon-quote2"></i>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementskit-commentor-content">
                                                                            <div class="elementskit-commentor-content">
                                                                                <!-- Client testimonial -->
                                                                                <p>"Go Viral really helped my brand get noticed. Their PPC strategies brought in quality leads, and I saw results within weeks. Highly recommend their expert team!

"</p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="elementskit-commentor-bio">
                                                                            <div class="elementkit-commentor-details ">
                                                                                <div
                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                    <img loading="lazy" decoding="async"
                                                                                        width="1000" height="1000"
                                                                                        src="wp-content/uploads/sites/292/2024/11/4-35.jpg"
                                                                                        class="attachment-full size-full"
                                                                                        alt=""
                                                                                        srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-35.jpg 1000w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-35-300x300.jpg 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-35-150x150.jpg 150w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-35-768x768.jpg 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/4-35-800x800.jpg 800w"
                                                                                        sizes="(max-width: 1000px) 100vw, 1000px" />
                                                                                </div>
                                                                                <div class="elementskit-profile-info">
                                                                                    <strong
                                                                                        class="elementskit-author-name">Faizal Ahmed, Kuala Lumpur

                                                                                    </strong>
                                                                                    <span
                                                                                        class="elementskit-author-des">Designation</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            




            
            <div class="elementor-element elementor-element-1f4a113b e-flex e-con-boxed e-con e-parent"
                data-id="1f4a113b" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-53334ea4 e-flex e-con-boxed e-con e-child"
                        data-id="53334ea4" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-4266feb5 e-flex e-con-boxed e-con e-child"
                                data-id="4266feb5" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-5447b409 elementor-invisible elementor-widget elementor-widget-elementskit-accordion"
                                        data-id="5447b409" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="elementskit-accordion.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="elementskit-accordion accoedion-primary"
                                                    id="accordion-683073e42fec7">

                                                    <div class="elementskit-card active">
                                                        <div class="elementskit-card-header"
                                                            id="primaryHeading-0-5447b409">
                                                            <a href="#collapse-aeb40e1683073e42fec7"
                                                                class="ekit-accordion--toggler elementskit-btn-link collapsed"
                                                                data-ekit-toggle="collapse"
                                                                data-target="#Collapse-aeb40e1683073e42fec7"
                                                                aria-expanded="true"
                                                                aria-controls="Collapse-aeb40e1683073e42fec7">
                                                                <div class="ekit_accordion_icon_left_group">
                                                                    <div class="ekit_accordion_normal_icon">
                                                                        <!-- Normal Icon -->
                                                                        <i class="icon icon-plus"></i> </div>

                                                                    <div class="ekit_accordion_active_icon">
                                                                        <!-- Active Icon -->
                                                                        <i class="jki jki-minus-light"></i>
                                                                    </div>
                                                                </div>

                                                                <span class="ekit-accordion-title">What does PPC stand for?</span>

                                                            </a>
                                                        </div>

                                                        <div id="Collapse-aeb40e1683073e42fec7" class=" show collapse"
                                                            aria-labelledby="primaryHeading-0-5447b409"
                                                            data-parent="#accordion-683073e42fec7">

                                                            <div class="elementskit-card-body ekit-accordion--content">
Pay-per-click (PPC) is an online advertising model where you pay only when someone clicks on your ad. It’s a popular method for online advertising in Malaysia.
</p>
                                                            </div>

                                                        </div>

                                                    </div><!-- .elementskit-card END -->

                                                    <div class="elementskit-card ">
                                                        <div class="elementskit-card-header"
                                                            id="primaryHeading-1-5447b409">
                                                            <a href="#collapse-b6df3da683073e42fec7"
                                                                class="ekit-accordion--toggler elementskit-btn-link collapsed"
                                                                data-ekit-toggle="collapse"
                                                                data-target="#Collapse-b6df3da683073e42fec7"
                                                                aria-expanded="false"
                                                                aria-controls="Collapse-b6df3da683073e42fec7">
                                                                <div class="ekit_accordion_icon_left_group">
                                                                    <div class="ekit_accordion_normal_icon">
                                                                        <!-- Normal Icon -->
                                                                        <i class="icon icon-plus"></i> </div>

                                                                    <div class="ekit_accordion_active_icon">
                                                                        <!-- Active Icon -->
                                                                        <i class="jki jki-minus-light"></i>
                                                                    </div>
                                                                </div>

                                                                <span class="ekit-accordion-title">How do I set up a campaign on Google Ads?
</span>

                                                            </a>
                                                        </div>

                                                        <div id="Collapse-b6df3da683073e42fec7" class=" collapse"
                                                            aria-labelledby="primaryHeading-1-5447b409"
                                                            data-parent="#accordion-683073e42fec7">

                                                            <div class="elementskit-card-body ekit-accordion--content">
                                                                <p>To set up a Google Ads campaign, choose your campaign goals, select the campaign type, and set your target audience. We recommend using a Google Ads Agency in Malaysia for optimal results.



</p>
                                                            </div>

                                                        </div>

                                                    </div><!-- .elementskit-card END -->

                                                    <div class="elementskit-card ">
                                                        <div class="elementskit-card-header"
                                                            id="primaryHeading-2-5447b409">
                                                            <a href="#collapse-c67bc7b683073e42fec7"
                                                                class="ekit-accordion--toggler elementskit-btn-link collapsed"
                                                                data-ekit-toggle="collapse"
                                                                data-target="#Collapse-c67bc7b683073e42fec7"
                                                                aria-expanded="false"
                                                                aria-controls="Collapse-c67bc7b683073e42fec7">
                                                                <div class="ekit_accordion_icon_left_group">
                                                                    <div class="ekit_accordion_normal_icon">
                                                                        <!-- Normal Icon -->
                                                                        <i class="icon icon-plus"></i> </div>

                                                                    <div class="ekit_accordion_active_icon">
                                                                        <!-- Active Icon -->
                                                                        <i class="jki jki-minus-light"></i>
                                                                    </div>
                                                                </div>

                                                                <span class="ekit-accordion-title">What is pay-per-click?</span>

                                                            </a>
                                                        </div>

                                                        <div id="Collapse-c67bc7b683073e42fec7" class=" collapse"
                                                            aria-labelledby="primaryHeading-2-5447b409"
                                                            data-parent="#accordion-683073e42fec7">

                                                            <div class="elementskit-card-body ekit-accordion--content">
                                                                <p>Pay-per-click is a form of advertising in which the advertiser pays each time someone clicks on their ad.

</p>
                                                            </div>

                                                        </div>

                                                    </div><!-- .elementskit-card END -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             


                            <div class="elementor-element elementor-element-7b6de46c e-con-full e-flex e-con e-child"
                                data-id="7b6de46c" data-element_type="container">
                                <div class="elementor-element elementor-element-4188f868 e-con-full e-flex elementor-invisible e-con e-child"
                                    data-id="4188f868" data-element_type="container"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                    <div class="elementor-element elementor-element-76e22678 e-con-full e-flex e-con e-child"
                                        data-id="76e22678" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-element elementor-element-14719c73 e-con-full e-flex e-con e-child"
                                            data-id="14719c73" data-element_type="container">
                                            <div class="elementor-element elementor-element-2de288fe elementor-widget elementor-widget-image"
                                                data-id="2de288fe" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="800" height="780"
                                                        src="wp-content/uploads/sites/292/2024/11/1-6-1024x998.png"
                                                        class="attachment-large size-large wp-image-884" alt=""
                                                        srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png 1024w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-300x292.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-768x749.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-800x780.png 800w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6.png 1196w"
                                                        sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-59ad01e2 e-con-full e-flex e-con e-child"
                                            data-id="59ad01e2" data-element_type="container">
                                            <div class="elementor-element elementor-element-35e51684 elementor-widget elementor-widget-jkit_heading"
                                                data-id="35e51684" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                                data-widget_type="jkit_heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_14_683073e4308f3">
                                                        <div class="heading-section-title  display-inline-block">
                                                            <h2 class="heading-title"><span
                                                                    class=""><span>FAQ&#039;s</span></span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-13a96b78 elementor-invisible elementor-widget elementor-widget-jkit_heading"
                                    data-id="13a96b78" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                    data-widget_type="jkit_heading.default">
                                    <div class="elementor-widget-container">
                                        <div
                                            class="jeg-elementor-kit jkit-heading  align- align-tablet- align-mobile-center jeg_module_777_15_683073e4311ed">
                                            <div class="heading-section-title  display-inline-block">
                                                <h2 class="heading-title">Frequently Asked <span
                                                        class=""><span>Questions</span></span>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5a18bdf1 elementor-invisible elementor-widget elementor-widget-text-editor"
                                    data-id="5a18bdf1" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>Drive leads, boost ROI, and get real-time results with expert PPC strategies. As the best pay per click advertising agency in Malaysia, Go Viral delivers data-driven pay-per-click services tailored to your business goals. From keyword selection to ad optimization, we ensure your ads reach the right audience at the right time. Experience measurable growth with PPC campaigns designed for maximum efficiency and performance.</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1d4ef575 e-con-full e-flex elementor-invisible e-con e-child"
                                    data-id="1d4ef575" data-element_type="container"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                    <div class="elementor-element elementor-element-511e245d e-con-full e-flex e-con e-child"
                                        data-id="511e245d" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                        <div class="elementor-element elementor-element-50a99fa elementor-align-justify elementor-widget elementor-widget-button"
                                            data-id="50a99fa" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                        href="#">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-arrow-circle-right"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-button-text">Contact Us</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           


            <div class="elementor-element elementor-element-21786894 e-flex e-con-boxed e-con e-parent"
                data-id="21786894" data-element_type="container">
                
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-6b4be47a e-flex e-con-boxed e-con e-child"
                        data-id="6b4be47a" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-7fad2de6 e-flex e-con-boxed e-con e-child"
                                data-id="7fad2de6" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-51ae9fbb e-con-full e-flex elementor-invisible e-con e-child"
                                        data-id="51ae9fbb" data-element_type="container"
                                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                        <div class="elementor-element elementor-element-4729847f e-con-full e-flex e-con e-child"
                                            data-id="4729847f" data-element_type="container"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-element elementor-element-3035d01d e-con-full e-flex e-con e-child"
                                                data-id="3035d01d" data-element_type="container">
                                                <div class="elementor-element elementor-element-424a0220 elementor-widget elementor-widget-image"
                                                    data-id="424a0220" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img decoding="async" width="800" height="780"
                                                            src="wp-content/uploads/sites/292/2024/11/1-6-1024x998.png"
                                                            class="attachment-large size-large wp-image-884" alt=""
                                                            srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-1024x998.png 1024w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-300x292.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-768x749.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6-800x780.png 800w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/1-6.png 1196w"
                                                            sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2c461563 e-con-full e-flex e-con e-child"
                                                data-id="2c461563" data-element_type="container">
                                                <div class="elementor-element elementor-element-63f7318c elementor-widget elementor-widget-jkit_heading"
                                                    data-id="63f7318c" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="jkit_heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_16_683073e4327ac">
                                                            <div class="heading-section-title  display-inline-block">
                                                                <h2 class="heading-title"><span
                                                                        class=""><span>PPC Company Malaysia</span></span></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-39b6c460 elementor-invisible elementor-widget elementor-widget-jkit_heading"
                                        data-id="39b6c460" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="jkit_heading.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile-center jeg_module_777_17_683073e43308d">
                                                <div class="heading-section-title  display-inline-block">
                                                    <h3 class="heading-title"> <span
                                                            class=""><span> Maximize Your Business Growth With Expert PPC Marketing in Malaysia</span></span>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6df28a7b elementor-invisible elementor-widget elementor-widget-text-editor"
                                        data-id="6df28a7b" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Reach your ideal customers instantly with data-driven PPC campaigns tailored to your business goals.
Our team targets the right keywords, manages your ads efficiently, and ensures every click counts.
Experience faster growth, better ROI, and measurable success with our pay-per-click expertise.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-259e45d3 e-flex e-con-boxed e-con e-child"
                                data-id="259e45d3" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-640e645b elementor-invisible elementor-widget elementor-widget-elementskit-blog-posts"
                                        data-id="640e645b" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="elementskit-blog-posts.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div id="post-items--640e645b" class="row post-items">
                                                    <div class="col-lg-4 col-md-6">

                                                        <div class="elementskit-post-image-card">
                                                             <div class="elementskit-entry-header">
                                                                <a href="2024/11/13/the-metaverse-will-make-gamers-of-us-all/index.html"
                                                                    class="elementskit-entry-thumb">
                                                                    <img decoding="async"
                                                                        src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/28-18.jpg')}}"
                                                                        alt="Why Content Is The Backbone Of Your Digital Strategy">
                                                                </a><!-- .elementskit-entry-thumb END -->

                                                            </div><!-- .elementskit-entry-header END -->

                                                            <div class="elementskit-post-body ">

                                                                <h2 class="entry-title">
                                                                    <a
                                                                        href="2024/11/13/the-metaverse-will-make-gamers-of-us-all/index.html">
                                                                        Immediate Exposure </a>
                                                                </h2>
                                                                <p>PPC shines a spotlight on your business, placing it right at the top of search results. The moment you launch your PPC campaign, your brand gains immediate exposure and starts attracting potential customers. With pay-per-click in Malaysia, your ads target the right audience instantly, driving traffic and growing your business fast. Whether you’re introducing a new product or boosting brand awareness, PPC ensures you get noticed right away.</p>
                                                            
                                                            </div><!-- .elementskit-post-body END -->
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-4 col-md-6">

                                                        <div class="elementskit-post-image-card">
                                                             <div class="elementskit-entry-header">
                                                                <a href="2024/11/13/the-metaverse-will-make-gamers-of-us-all/index.html"
                                                                    class="elementskit-entry-thumb">
                                                                    <img decoding="async"
                                                                        src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/28-18.jpg')}}"
                                                                        alt="Why Content Is The Backbone Of Your Digital Strategy">
                                                                </a><!-- .elementskit-entry-thumb END -->

                                                            </div><!-- .elementskit-entry-header END -->

                                                            <div class="elementskit-post-body ">

                                                                <h2 class="entry-title">
                                                                    <a
                                                                        href="2024/11/13/what-is-the-metaverse-and-what-can-we-do/index.html">
                                                                       Accurate Tracking</a>
                                                                </h2>
                                                                <p>With PPC, you gain accurate tracking of every visitor, click, and conversion. This allows you to analyze the performance of your ads in real time. By monitoring key metrics, you can refine your campaigns for better results. PPC marketing ensures that your budget is spent wisely, helping you see where every dollar goes. With data-driven insights, you stay in full control and optimize your ads to maximize success. Stay ahead of your competitors with targeted strategies. Let our experts drive traffic that truly converts. Let our experts drive traffic that truly converts. 
                                                                </p>
                                                               
                                                            </div><!-- .elementskit-post-body END -->
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-4 col-md-6">

                                                        <div class="elementskit-post-image-card">
                                                          <div class="elementskit-entry-header">
                                                                <a href="2024/11/13/the-metaverse-will-make-gamers-of-us-all/index.html"
                                                                    class="elementskit-entry-thumb">
                                                                    <img decoding="async"
                                                                        src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/28-18.jpg')}}"
                                                                        alt="Why Content Is The Backbone Of Your Digital Strategy">
                                                                </a><!-- .elementskit-entry-thumb END -->

                                                            </div><!-- .elementskit-entry-header END -->
                                                            <div class="elementskit-post-body ">

                                                                <h2 class="entry-title">
                                                                    <a
                                                                        href="2024/11/13/embrace-revolta-virtual-reality-services-today/index.html">
                                                                        Lead generation</a>
                                                                </h2>
                                                                <p>Good PPC services draw in the right audience, which increases lead creation. PPC links your company with clients who are actively looking for your goods or services by using targeted keywords. PPC quickly converts inquisitive visitors into paying clients by focusing on high-intent consumers. You may track calls, sales, and enquiries with a Google Ads agency in Malaysia, making sure that every campaign results in actual business growth. It’s a fast, measurable way to boost conversions. Partner with a trusted PPC agency to turn clicks into consistent leads.
                                                                </p>
                                                                
                                                            </div><!-- .elementskit-post-body END -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="e-con-inner">
                            <div class="elementor-element elementor-element-259e45d3 e-flex e-con-boxed e-con e-child" data-id="259e45d3" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-640e645b elementor-widget elementor-widget-elementskit-blog-posts animated fadeInUp" data-id="640e645b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-blog-posts.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div id="post-items--640e645b" class="row post-items">
                                                    <div class="col-lg-4 col-md-6">

                                                        <div class="elementskit-post-image-card">
                                                         <div class="elementskit-entry-header">
                                                                <a href="2024/11/13/the-metaverse-will-make-gamers-of-us-all/index.html"
                                                                    class="elementskit-entry-thumb">
                                                                    <img decoding="async"
                                                                        src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/28-18.jpg')}}"
                                                                        alt="Why Content Is The Backbone Of Your Digital Strategy">
                                                                </a><!-- .elementskit-entry-thumb END -->

                                                            </div><!-- .elementskit-entry-header END -->

                                                            <div class="elementskit-post-body ">

                                                                <h2 class="entry-title">
                                                                    <a href="2024/11/13/the-metaverse-will-make-gamers-of-us-all/index.html">
                                                                        Customized Campaigns </a>
                                                                </h2>
                                                                <p>Every business is unique, and PPC marketing allows you to create customized campaigns tailored to your goals. Whether you want to increase traffic, generate leads, or boost sales, PPC helps craft the perfect message for your audience. A Google Adwords Agency ensures that your ads are optimized for the best performance, connecting you with the right customers at the right time. Personalized ads enhance engagement and maximize conversions.
                                                                </p>
                                                                
                                                            </div><!-- .elementskit-post-body END -->
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-4 col-md-6">

                                                        <div class="elementskit-post-image-card">
                                                             <div class="elementskit-entry-header">
                                                                <a href="2024/11/13/the-metaverse-will-make-gamers-of-us-all/index.html"
                                                                    class="elementskit-entry-thumb">
                                                                    <img decoding="async"
                                                                        src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/28-18.jpg')}}"
                                                                        alt="Why Content Is The Backbone Of Your Digital Strategy">
                                                                </a><!-- .elementskit-entry-thumb END -->

                                                            </div><!-- .elementskit-entry-header END -->

                                                            <div class="elementskit-post-body ">

                                                                <h2 class="entry-title">
                                                                    <a href="2024/11/13/what-is-the-metaverse-and-what-can-we-do/index.html">
                                                                        Measurable ROI</a>
                                                                </h2>
                                                                <p>Every PPC campaign may be tracked for measurable return on investment using digital marketing solutions. Because you only pay for clicks, you can track exactly how much of your budget is being used. PPC marketing makes sure every ad is running effectively by giving precise data on cost per convert. PPC is an affordable means of promoting business expansion since information can be used to optimise ads for even greater outcomes.</p>
                                                               
                                                            </div><!-- .elementskit-post-body END -->
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-4 col-md-6">

                                                        <div class="elementskit-post-image-card">
                                                            <div class="elementskit-entry-header">
                                                                <a href="2024/11/13/the-metaverse-will-make-gamers-of-us-all/index.html"
                                                                    class="elementskit-entry-thumb">
                                                                    <img decoding="async"
                                                                        src="{{asset('goViralHtml/wp-content/uploads/sites/292/2024/11/28-18.jpg')}}"
                                                                        alt="Why Content Is The Backbone Of Your Digital Strategy">
                                                                </a><!-- .elementskit-entry-thumb END -->

                                                            </div><!-- .elementskit-entry-header END -->

                                                            <div class="elementskit-post-body ">

                                                                <h2 class="entry-title">
                                                                    <a href="2024/11/13/embrace-revolta-virtual-reality-services-today/index.html">
                                                                       Instant Outcomes</a>
                                                                </h2>
                                                                <p>Instant results are one of the main benefits of PPC services. PPC instantly increases website traffic, in contrast to organic tactics that take time. PPC guarantees that your brand is seen quickly, whether you're introducing a new product or conducting a limited-time campaign. Your company keeps ahead of the competition and reaches clients when they need you most when you work with a Google Ads Agency in Malaysia.</p>
                                                        
                                                            </div><!-- .elementskit-post-body END -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

        <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
            <div class='footer-width-fixer'>
                <div data-elementor-type="wp-post" data-elementor-id="305" class="elementor elementor-305">
                    <div class="elementor-element elementor-element-b7d4e9f e-flex e-con-boxed e-con e-parent"
                        data-id="b7d4e9f" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-f9d162b e-flex e-con-boxed e-con e-child"
                                data-id="f9d162b" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-166f2ab e-con-full e-flex e-con e-child"
                                        data-id="166f2ab" data-element_type="container">
                                        <div class="elementor-element elementor-element-196373e elementor-widget elementor-widget-jkit_heading"
                                            data-id="196373e" data-element_type="widget"
                                            data-widget_type="jkit_heading.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="jeg-elementor-kit jkit-heading  align- align-tablet- align-mobile-center jeg_module_777_18_683073e43a8ce">
                                                    <div class="heading-section-title  display-inline-block">
                                                        <h2 class="heading-title">Follow Our <span
                                                                class="style-color"><span>Newsletter</span></span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-8622cd1 e-flex e-con-boxed e-con e-child"
                                        data-id="8622cd1" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-dd54e88 elementor-widget elementor-widget-metform"
                                                data-id="dd54e88" data-element_type="widget"
                                                data-widget_type="metform.default">
                                                <div class="elementor-widget-container">
                                                    <div id="mf-response-props-id-194" data-previous-steps-style=""
                                                        data-editswitchopen="" data-response_type="alert"
                                                        data-erroricon="fas fa-exclamation-triangle"
                                                        data-successicon="fas fa-check" data-messageposition="top"
                                                        class="   mf-scroll-top-no">
                                                        <div class="formpicker_warper formpicker_warper_editable"
                                                            data-metform-formpicker-key="194">

                                                            <div class="elementor-widget-container">

                                                                <div id="metform-wrap-dd54e88-194"
                                                                    class="mf-form-wrapper" data-form-id="194"
                                                                    data-action="https://kitpro.site/fluxco/wp-json/metform/v1/entries/insert/194"
                                                                    data-wp-nonce="6b5bcd905f"
                                                                    data-form-nonce="9d4d0dd2de"
                                                                    data-quiz-summery="false" data-save-progress="false"
                                                                    data-form-type="contact_form"
                                                                    data-stop-vertical-effect=""></div>

                                                                <!----------------------------- 
			* controls_data : find the the props passed indie of data attribute
			* props.SubmitResponseMarkup : contains the markup of error or success message
			* https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals
		--------------------------- -->

                                                                <script type="text/mf" class="mf-template">
                                                                    function controls_data (value){
				let currentWrapper = "mf-response-props-id-194";
				let currentEl = document.getElementById(currentWrapper);
				
				return currentEl ? currentEl.dataset[value] : false
			}


			let is_edit_mode = '' ? true : false;
			let message_position = controls_data('messageposition') || 'top';

			
			let message_successIcon = controls_data('successicon') || '';
			let message_errorIcon = controls_data('erroricon') || '';
			let message_editSwitch = controls_data('editswitchopen') === 'yes' ? true : false;
			let message_proClass = controls_data('editswitchopen') === 'yes' ? 'mf_pro_activated' : '';
			
			let is_dummy_markup = is_edit_mode && message_editSwitch ? true : false;

			
			return html`
				<form
					className="metform-form-content"
					ref=${parent.formContainerRef}
					onSubmit=${ validation.handleSubmit( parent.handleFormSubmit ) }
				
					>
			
			
					${is_dummy_markup ? message_position === 'top' ?  props.ResponseDummyMarkup(message_successIcon, message_proClass) : '' : ''}
					${is_dummy_markup ? ' ' :  message_position === 'top' ? props.SubmitResponseMarkup`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}

					<!--------------------------------------------------------
					*** IMPORTANT / DANGEROUS ***
					${html``} must be used as in immediate child of "metform-form-main-wrapper"
					class otherwise multistep form will not run at all
					---------------------------------------------------------->

					<div className="metform-form-main-wrapper" key=${'hide-form-after-submit'} ref=${parent.formRef}>
					${html`
								<div data-elementor-type="wp-post" key="2" data-elementor-id="194" className="elementor elementor-194">
				<div className="elementor-element elementor-element-f92be75 e-flex e-con-boxed e-con e-parent" data-id="f92be75" data-element_type="container">
					<div className="e-con-inner">
		<div className="elementor-element elementor-element-4989952 e-flex e-con-boxed e-con e-child" data-id="4989952" data-element_type="container">
					<div className="e-con-inner">
		<div className="elementor-element elementor-element-0585e85 e-flex e-con-boxed e-con e-child" data-id="0585e85" data-element_type="container">
					<div className="e-con-inner">
				<div className="elementor-element elementor-element-a694626 elementor-widget elementor-widget-mf-email" data-id="a694626" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
				<div className="elementor-widget-container">
			
		<div className="mf-input-wrapper">
			
			<input 
				type="email" 
				 
				defaultValue="" 
				className="mf-input " 
				id="mf-input-email-a694626" 
				name="mf-email" 
				placeholder="${ parent.decodeEntities(`Email`) } " 
				 
				onBlur=${parent.handleChange} onFocus=${parent.handleChange} aria-invalid=${validation.errors['mf-email'] ? 'true' : 'false' } 
				ref=${el=> parent.activateValidation({"message":"This field is required.","emailMessage":"Please enter a valid Email address","minLength":1,"maxLength":"","type":"none","required":false,"expression":"null"}, el)}
							/>

						<${validation.ErrorMessage} 
				errors=${validation.errors} 
				name="mf-email" 
				as=${html`<span className="mf-error-message"></span>`}
			/>
			
					</div>

		</div>
				</div>
					</div>
				</div>
		<div className="elementor-element elementor-element-d2e32b9 e-con-full e-flex e-con e-child" data-id="d2e32b9" data-element_type="container">
				<div className="elementor-element elementor-element-e4dabb8 mf-btn--justify mf-btn--tablet-justify mf-btn--mobile-justify elementor-widget elementor-widget-mf-button" data-id="e4dabb8" data-element_type="widget" data-widget_type="mf-button.default">
				<div className="elementor-widget-container">
					<div className="mf-btn-wraper " data-mf-form-conditional-logic-requirement="">
							<button type="submit" className="metform-btn metform-submit-btn " id="">
					<span>${ parent.decodeEntities(`Subscribe`) } </span>
				</button>
			        </div>
        		</div>
				</div>
				</div>
					</div>
				</div>
					</div>
				</div>
				</div>
							`}
					</div>

					${is_dummy_markup ? message_position === 'bottom' ? props.ResponseDummyMarkup(message_successIcon, message_proClass) : '' : ''}
					${is_dummy_markup ? ' ' : message_position === 'bottom' ? props.SubmitResponseMarkup`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}
				
				</form>
			`
		</script>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-dc8f090 e-flex e-con-boxed e-con e-parent"
                        data-id="dc8f090" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-6148ea7 e-flex e-con-boxed e-con e-child"
                                data-id="6148ea7" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-af9e022 e-con-full e-flex e-con e-child"
                                        data-id="af9e022" data-element_type="container">
                                        <div class="elementor-element elementor-element-1c7f63a elementor-widget elementor-widget-image"
                                            data-id="1c7f63a" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img width="800" height="238"
                                                    src="wp-content/uploads/sites/292/2024/11/3-1-1024x305.png"
                                                    class="attachment-large size-large wp-image-943" alt=""
                                                    decoding="async"
                                                    srcset="https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-1-1024x305.png 1024w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-1-300x89.png 300w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-1-768x229.png 768w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-1-1536x458.png 1536w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-1-2048x610.png 2048w, https://kitpro.site/fluxco/wp-content/uploads/sites/292/2024/11/3-1-800x238.png 800w"
                                                    sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                        </div>
                                        <div class="elementor-element elementor-element-f016da8 elementor-widget elementor-widget-text-editor"
                                            data-id="f016da8" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                                    elit tellus, luctus nec ullamcorper mattis.</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-bf4190a elementor-shape-circle e-grid-align-left e-grid-align-mobile-center elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                            data-id="bf4190a" data-element_type="widget"
                                            data-widget_type="social-icons.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-social-icons-wrapper elementor-grid">
                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-animation-grow elementor-repeater-item-7f6288d"
                                                            target="_blank">
                                                            <span class="elementor-screen-only">Facebook</span>
                                                            <svg class="e-font-icon-svg e-fab-facebook"
                                                                viewBox="0 0 512 512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                                                </path>
                                                            </svg> </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-grow elementor-repeater-item-1099a3a"
                                                            target="_blank">
                                                            <span class="elementor-screen-only">Twitter</span>
                                                            <svg class="e-font-icon-svg e-fab-twitter"
                                                                viewBox="0 0 512 512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                </path>
                                                            </svg> </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-grow elementor-repeater-item-6f93880"
                                                            target="_blank">
                                                            <span class="elementor-screen-only">Youtube</span>
                                                            <svg class="e-font-icon-svg e-fab-youtube"
                                                                viewBox="0 0 576 512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                                                </path>
                                                            </svg> </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-92260bb e-flex e-con-boxed e-con e-child"
                                        data-id="92260bb" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-e50b579 e-con-full e-flex e-con e-child"
                                                data-id="e50b579" data-element_type="container">
                                                <div class="elementor-element elementor-element-7787d00 elementor-widget elementor-widget-heading"
                                                    data-id="7787d00" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h5 class="elementor-heading-title elementor-size-default">
                                                            Our Pages</h5>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-79082bd elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="79082bd" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-text">Home</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-text">About
                                                                    Us</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-text">Service</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-text">Pricing</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-44dc489 e-con-full e-flex e-con e-child"
                                                data-id="44dc489" data-element_type="container">
                                                <div class="elementor-element elementor-element-ff020b8 elementor-widget elementor-widget-heading"
                                                    data-id="ff020b8" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h5 class="elementor-heading-title elementor-size-default">
                                                            Quick Links</h5>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-48cc2de elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="48cc2de" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-text">Privacy
                                                                    Policy</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-text">Term Of
                                                                    Service</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-text">Disclaimer</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-text">Credits</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ff32189 e-flex e-con-boxed e-con e-child"
                                                data-id="ff32189" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-91d2964 elementor-widget elementor-widget-heading"
                                                        data-id="91d2964" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h5 class="elementor-heading-title elementor-size-default">
                                                                Get In Touch</h5>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-01cb54d elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                        data-id="01cb54d" data-element_type="widget"
                                                        data-widget_type="icon-list.default">
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-phone-alt"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                                                                            </path>
                                                                        </svg> </span>
                                                                    <span class="elementor-icon-list-text">(+23)
                                                                        456-867-9008</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-envelope"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                                                            </path>
                                                                        </svg> </span>
                                                                    <span
                                                                        class="elementor-icon-list-text">fluxco@example.site</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-map-marker-alt"
                                                                            viewBox="0 0 384 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                                                            </path>
                                                                        </svg> </span>
                                                                    <span class="elementor-icon-list-text">Nusa
                                                                        Dua, Bali - Indonesia</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bd18ae7 e-flex e-con-boxed e-con e-parent"
                        data-id="bd18ae7" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-0485f30 e-flex e-con-boxed e-con e-child"
                                data-id="0485f30" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-4ccbc73 elementor-widget elementor-widget-text-editor"
                                        data-id="4ccbc73" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Copyright © 2025 Fluxco | Powered by Fluxco</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- #page -->

    @endsection