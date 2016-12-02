<div id="rgen-basicslideshow-rgenmrRtGp" class="rgen-basicslideshow basicslideshow-rgNUo">
	<div>
		<div class="slideshow-wrp dots-typ1 normal">
			<div class="slideshow">
								<div class="slide">
										<img src="http://ec2-52-76-172-22.ap-southeast-1.compute.amazonaws.com/image/cache/catalog/rgen/demo06_images/slideshow/Innerpage-slideshow-withcol/withcol-940x350-1-940x350.jpg" alt="en - No data"/>
									</div>
								<div class="slide">
										<img src="http://ec2-52-76-172-22.ap-southeast-1.compute.amazonaws.com/image/cache/catalog/rgen/demo06_images/slideshow/Innerpage-slideshow-withcol/withcol-940x350-2-940x350.jpg" alt="en - No data"/>
									</div>
							</div>
		</div>
	</div>
</div>


<script type="text/javascript" ><!--
$(document).ready(function(){

		if ($('.ly-column').length == 0) {
		$("#rgen-basicslideshow-rgenmrRtGp > div").addClass('container');
	};
	
	var win         = $(window);
	var auto        = true;
	var autostopped = false;
	var container   = $("#rgen-basicslideshow-rgenmrRtGp .slideshow-wrp");

	/* Default slide script
	------------------------*/
	var sudoSlider = $("#rgen-basicslideshow-rgenmrRtGp .slideshow").sudoSlider({
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
