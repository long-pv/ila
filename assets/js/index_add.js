(function () {
	this._N2 = this._N2 || {
		_r: [],
		_d: [],
		r: function () {
			this._r.push(arguments);
		},
		d: function () {
			this._d.push(arguments);
		},
	};
}).call(window);
!(function (e, i, o, r) {
	(i = e.match(/(Chrome|Firefox|Safari)\/(\d+)\./)) && ("Chrome" == i[1] ? (r = +i[2] >= 32) : "Firefox" == i[1] ? (r = +i[2] >= 65) : "Safari" == i[1] && (o = e.match(/Version\/(\d+)/) || e.match(/(\d+)[0-9_]+like Mac/)) && (r = +o[1] >= 14), r && document.documentElement.classList.add("n2webp"));
})(navigator.userAgent);

_N2.r("documentReady", function () {
	_N2.r(["documentReady", "smartslider-frontend", "SmartSliderWidgetBulletTransition", "ss-simple"], function () {
		new _N2.SmartSliderSimple("n2-ss-7", {
			admin: false,
			callbacks: "",
			"background.video.mobile": 1,
			randomize: {
				randomize: 0,
				randomizeFirst: 0,
			},
			alias: {
				id: 0,
				smoothScroll: 0,
				slideSwitch: 0,
				scroll: 1,
			},
			align: "normal",
			isDelayed: 0,
			responsive: {
				mediaQueries: {
					all: false,
					desktopportrait: ["(min-width: 1200px)"],
					tabletportrait: ["(orientation: landscape) and (max-width: 1199px) and (min-width: 901px)", "(orientation: portrait) and (max-width: 1199px) and (min-width: 701px)"],
					mobileportrait: ["(orientation: landscape) and (max-width: 900px)", "(orientation: portrait) and (max-width: 700px)"],
				},
				base: {
					slideOuterWidth: 1920,
					slideOuterHeight: 762,
					sliderWidth: 1920,
					sliderHeight: 762,
					slideWidth: 1920,
					slideHeight: 762,
				},
				hideOn: {
					desktopLandscape: false,
					desktopPortrait: false,
					tabletLandscape: false,
					tabletPortrait: false,
					mobileLandscape: false,
					mobilePortrait: false,
				},
				onResizeEnabled: true,
				type: "fullwidth",
				sliderHeightBasedOn: "real",
				focusUser: 1,
				focusEdge: "auto",
				breakpoints: [
					{
						device: "tabletPortrait",
						type: "max-screen-width",
						portraitWidth: 1199,
						landscapeWidth: 1199,
					},
					{
						device: "mobilePortrait",
						type: "max-screen-width",
						portraitWidth: 700,
						landscapeWidth: 900,
					},
				],
				enabledDevices: {
					desktopLandscape: 0,
					desktopPortrait: 1,
					tabletLandscape: 0,
					tabletPortrait: 1,
					mobileLandscape: 0,
					mobilePortrait: 1,
				},
				sizes: {
					desktopPortrait: {
						width: 1920,
						height: 762,
						max: 3000,
						min: 1200,
					},
					tabletPortrait: {
						width: 701,
						height: 278,
						customHeight: false,
						max: 1199,
						min: 701,
					},
					mobilePortrait: {
						width: 320,
						height: 127,
						customHeight: false,
						max: 900,
						min: 320,
					},
				},
				overflowHiddenPage: 0,
				focus: {
					offsetTop: "#wpadminbar",
					offsetBottom: "",
				},
			},
			controls: {
				mousewheel: 0,
				touch: "horizontal",
				keyboard: 1,
				blockCarouselInteraction: 1,
			},
			playWhenVisible: 1,
			playWhenVisibleAt: 0.5,
			lazyLoad: 0,
			lazyLoadNeighbor: 0,
			blockrightclick: 0,
			maintainSession: 0,
			autoplay: {
				enabled: 0,
				start: 1,
				duration: 4000,
				autoplayLoop: 1,
				allowReStart: 0,
				pause: {
					click: 1,
					mouse: "0",
					mediaStarted: 1,
				},
				resume: {
					click: 0,
					mouse: "0",
					mediaEnded: 1,
					slidechanged: 0,
				},
				interval: 1,
				intervalModifier: "loop",
				intervalSlide: "current",
			},
			perspective: 1000,
			layerMode: {
				playOnce: 0,
				playFirstLayer: 1,
				mode: "skippable",
				inAnimation: "mainInEnd",
			},
			parallax: {
				enabled: 1,
				mobile: 0,
				is3D: 0,
				animate: 1,
				horizontal: "mouse",
				vertical: "mouse",
				origin: "slider",
				scrollmove: "both",
			},
			postBackgroundAnimations: 0,
			bgAnimations: 0,
			mainanimation: {
				type: "horizontal",
				duration: 1500,
				delay: 0,
				ease: "easeOutQuad",
				shiftedBackgroundAnimation: "auto",
			},
			carousel: 1,
			initCallbacks: function () {
				new _N2.SmartSliderWidgetBulletTransition(this, {
					area: 10,
					dotClasses: "n2-style-a5a9420075d4bb2a9af989b64ab7edfb-dot ",
					mode: "",
					action: "click",
				});
			},
		});
	});
});
