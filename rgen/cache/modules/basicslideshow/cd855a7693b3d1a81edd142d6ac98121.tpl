<div id="rgen-basicslideshow-rgennnV2Zx" class="rgen-basicslideshow basicslideshow-rgN0C">
	<div>
		<div class="slideshow-wrp dots-typ1 normal">
			<div class="slideshow">
								<div class="slide">
										<img src="http://local.tridacnabeauty.com/image/cache/catalog/rgen/demo06_images/banners/other-banners/376x510_1-376x510.jpg" alt="R.Gen - OpenCart Modern Store Design"/>
									</div>
								<div class="slide">
										<img src="http://local.tridacnabeauty.com/image/cache/catalog/rgen/demo06_images/banners/other-banners/376x510_2-376x510.jpg" alt="R.Gen - OpenCart Modern Store Design"/>
									</div>
							</div>
		</div>
	</div>
</div>


<script type="text/javascript" ><!--
$(document).ready(function(){

		if ($('.ly-column').length == 0) {
		$("#rgen-basicslideshow-rgennnV2Zx > div").addClass('container');
	};
	
	var win         = $(window);
	var auto        = true;
	var autostopped = false;
	var container   = $("#rgen-basicslideshow-rgennnV2Zx .slideshow-wrp");

	/* Default slide script
	------------------------*/
	var sudoSlider = $("#rgen-basicslideshow-rgennnV2Zx .slideshow").sudoSlider({
		responsive: true,
		controlsAttr: 'class="owl-controls"',
		effect: "random",
		speed: 1000,
				auto: true,
				pause: 2000,
				prevNext: true,
		nextHtml: '<a class="next"><i class="fa fa-chevron-right"></i></a>',
		prevHtml: '<a class="prev"><i class="fa fa-chevron-left"></i></a>',
						numeric: true,
		numericAttr: 'class="dots ul-reset"',
		
				continuous: true,
				updateBefore: true,
		mouseTouch: false,
		touch: true,
		slideCount: 1
	})

		.mouseenter(function() {
		auto = sudoSlider.getValue('autoAnimation');
		if (auto) { sudoSlider.stopAuto(); } else { autostopped = true; }
	})
	.mouseleave(function() {
		if (!autostopped) { sudoSlider.startAuto(); }
	})
	;

	
	
	});
//--></script>
