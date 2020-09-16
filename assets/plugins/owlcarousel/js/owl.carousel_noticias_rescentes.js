(function() {
	"use strict";
	var Core = {
		initialized: false,
		initialize: function() {
			if (this.initialized) return;
			this.initialized = true;

			this.build();
		},
		build: function() {
			// Owl Carousel
			this.initOwlCarousel();
		},
		initOwlCarousel: function(options) {
			$(".enable-owl-carousel").each(function(i) {
				var $owl = $(this);
				var mainSliderData = $owl.data('main-slider');
				var singleItemData = $owl.data('single-item');
				var navigationData = $owl.data('navigation');
				var paginationData = $owl.data('pagination');
				var autoPlayData = $owl.data('auto-play');
				var stopOnHoverData = $owl.data('stop-on-hover');
				var min450 = $owl.data('min450');
				var min600 = $owl.data('min600');
				var min768 = $owl.data('min768');
				
				$owl.owlCarousel({
					singleItem: singleItemData,
					navigation: navigationData,
					pagination: paginationData,
					autoPlay: autoPlayData,
					stopOnHover: stopOnHoverData,
					navigationText:["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
					itemsCustom:[
						[0, 1,],
						[450, min450],
						[600, min600],
						[768, min768]
					],
				});
				
			});
		},
		
	};

	Core.initialize();

})();