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
        <style>
        .container{
  margin:10 auto;
  padding: 10px;
  width:600px;
  
}

.work{
  float: left;
  margin-right: 2%;
  margin-bottom: 10px;
  width: 48%;
  border: 2px solid white;
  border-radius:16px;
  padding: 20px;

 

}
</style>
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
          
                    </div>
                
                        <div class="elementor-element elementor-element-2efa94ed e-con-full e-flex e-con e-child"
                            data-id="2efa94ed" data-element_type="container">
                            <div class="elementor-element elementor-element-8d62ef2 elementor-invisible elementor-widget elementor-widget-text-editor"
                                data-id="8d62ef2" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="text-editor.default">
                               <div class="container">
 
    <div style="max-width: 800px; margin: 40px auto; padding: 30px; color: #fff; font-family: 'Segoe UI', sans-serif; line-height: 1.7; text-align: left;">

  <h1 style="font-size: 70px; margin-bottom: 20px;">Privacy Policy</h1>
  
  <p style="margin-bottom: 20px;">Go‑Viral values your privacy. This Privacy Policy explains how we collect, use, and protect your personal data when you visit our website or use our services in Malaysia.</p>

  <h2 style="margin-top: 30px; font-size: 40px;">1. What We Collect</h2>
  <ul style="padding-left: 20px; margin-bottom: 20px; list-style: none;">
    <li>Name</li>
    <li>Email address</li>
    <li>Phone number</li>
    <li>Company or business name (if applicable)</li>
    <li>Message details (from forms)</li>
    <li>Website usage data (pages visited, time spent, etc.)</li>
  </ul>

  <h2 style="margin-top: 30px; font-size: 40px;">2. Why We Collect It</h2>
  <ul style="padding-left: 20px; margin-bottom: 20px; list-style: none;">
    <li>To contact you regarding your inquiries</li>
    <li>To provide digital marketing services you request (SEO, SMM, Web Design, etc.)</li>
    <li>To improve our website and user experience</li>
    <li>To send updates or offers (only with your permission)</li>
  </ul>

  <h2 style="margin-top: 30px; font-size: 40px;">3. How We Protect Your Information</h2>
  <ul style="padding-left: 20px; margin-bottom: 20px; list-style: none;">
    <li>Your data is stored securely</li>
    <li>We do not sell or share your information with third parties</li>
    <li>Our website uses SSL encryption to keep your data safe</li>
  </ul>

  <h2 style="margin-top: 30px; font-size: 40px;">4. Cookies</h2>
  <p style="margin-bottom: 20px;">We may use cookies to enhance your website experience. You can disable cookies anytime in your browser settings.</p>

  <h2 style="margin-top: 30px; font-size: 40px;">5. Your Rights (Under PDPA Malaysia)</h2>
  <p style="margin-bottom: 10px;">Under Malaysia’s PDPA law, you have the right to:</p>
  <ul style="padding-left: 20px; margin-bottom: 20px; list-style: none;">
    <li>Request access to your personal data</li>
    <li>Ask for your data to be updated or corrected</li>
    <li>Request removal of your personal information</li>
  </ul>

  <h2 style="margin-top: 30px; font-size: 40px;">6. Contact Us</h2>
  <p style="margin-bottom: 20px;">If you have questions or concerns about this Privacy Policy, contact us at:</p>
  <ul style="padding-left: 20px; margin-bottom: 20px; list-style: none;">
    <li><strong>Email:</strong> info@goviralagency.com</li>
    <li><strong>WhatsApp:</strong> +60 XXX‑XXXXXXX</li>
  </ul>

  <h2 style="margin-top: 30px; font-size: 40px;">7. Policy Updates</h2>
  <p style="margin-bottom: 0;">We may update this Privacy Policy from time to time. Please review this page for any changes.</p>

</div>
  
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
    
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-1265131f e-flex e-con-boxed elementor-invisible e-con e-parent"
        data-id="1265131f" data-element_type="container"
        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            
        </div>
    </div>
    <div class="elementor-element elementor-element-768d8a73 e-flex e-con-boxed e-con e-parent" data-id="768d8a73"
        data-element_type="container">
        <div class="e-con-inner">
           
        </div>
    </div>
    <div class="elementor-element elementor-element-59b503cd e-flex e-con-boxed e-con e-parent" data-id="59b503cd"
        data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
           
        </div>
        <div class="elementor-element elementor-element-4d2a0c7c e-flex e-con-boxed e-con e-parent" data-id="4d2a0c7c"
            data-element_type="container">
            
                    </div>
                    
        
                                  
                     
                        

        
        <div class="elementor-element elementor-element-7301da76 e-flex e-con-boxed elementor-invisible e-con e-parent"
            data-id="7301da76" data-element_type="container"
            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
            

                             


                            <div class="elementor-element elementor-element-7b6de46c e-con-full e-flex e-con e-child"
                                data-id="7b6de46c" data-element_type="container">
                               
                               
                            
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
                
             
                            </div>
                            <div class="elementor-element elementor-element-259e45d3 e-flex e-con-boxed e-con e-child"
                                data-id="259e45d3" data-element_type="container">
                                <div class="e-con-inner">
                                 
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