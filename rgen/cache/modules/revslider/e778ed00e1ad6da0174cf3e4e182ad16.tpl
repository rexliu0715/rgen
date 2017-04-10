<div id="rgen-revslider-rgenjA365o" class="rgen-revslider revslider-rgrVA revo-fullwidth">
	<!-- START REVOLUTION SLIDER  fullwidth mode -->

<div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#000000;padding:0px;margin-top:0px;margin-bottom:0px;max-height:600px;">
	<div id="rev_slider_8_1" class="rev_slider fullwidthabanner" style="display:none;max-height:600px;height:600px;">
<ul>	<!-- SLIDE  -->
	<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-link="http://ec2-52-76-172-22.ap-southeast-1.compute.amazonaws.com/"  data-thumb="http://local.tridacnabeauty.com/image/catalog/revslider_media_folder/home-banner1.jpg"  data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off"  data-title="News">
		<!-- MAIN IMAGE -->
		<img src="http://local.tridacnabeauty.com/system/config/revslider/images/dummy.png"  alt="home-banner1" data-lazyload="http://local.tridacnabeauty.com/image/catalog/revslider_media_folder/home-banner1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->
	</li>
	<!-- SLIDE  -->
	<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-link="http://ec2-52-76-172-22.ap-southeast-1.compute.amazonaws.com/"  data-target="_blank" data-thumb="http://ec2-52-76-172-22.ap-southeast-1.compute.amazonaws.com/image/catalog/revslider_media_folder/07.jpg"  data-saveperformance="off"  data-title="Slide 2">
		<!-- MAIN IMAGE -->
		<img src="http://local.tridacnabeauty.com/system/config/revslider/images/dummy.png"  alt="07" data-lazyload="http://ec2-52-76-172-22.ap-southeast-1.compute.amazonaws.com/image/catalog/revslider_media_folder/07.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->
	</li>
	<!-- SLIDE  -->
	<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-link="http://ec2-52-76-172-22.ap-southeast-1.compute.amazonaws.com/"  data-target="_blank" data-thumb="http://ec2-52-76-172-22.ap-southeast-1.compute.amazonaws.com/image/catalog/revslider_media_folder/02.jpg"  data-saveperformance="off"  data-title="Slide 3">
		<!-- MAIN IMAGE -->
		<img src="http://local.tridacnabeauty.com/system/config/revslider/images/dummy.png"  alt="02" data-lazyload="http://ec2-52-76-172-22.ap-southeast-1.compute.amazonaws.com/image/catalog/revslider_media_folder/02.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->
	</li>
</ul>
<div class="tp-static-layers">
</div>
<div class="tp-bannertimer"></div>	</div>

			<script type="text/javascript">

				/******************************************
					-	PREPARE PLACEHOLDER FOR SLIDER	-
				******************************************/
				

				var setREVStartSize = function() {
					var	tpopt = new Object();
						tpopt.startwidth = 1170;
						tpopt.startheight = 600;
						tpopt.container = jQuery('#rev_slider_8_1');
						tpopt.fullScreen = "off";
						tpopt.forceFullWidth="off";

					tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
				};

				/* CALL PLACEHOLDER */
				setREVStartSize();


				var tpj=jQuery;
				
				var revapi8;

				tpj(document).ready(function() {

				if(tpj('#rev_slider_8_1').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_8_1');
				else
				   revapi8 = tpj('#rev_slider_8_1').show().revolution(
					{
						dottedOverlay:"none",
						delay:6000,
						startwidth:1170,
						startheight:600,
						hideThumbs:200,

						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
						
						minHeight:160,
													
						simplifyAll:"off",

						navigationType:"bullet",
						navigationArrows:"solo",
						navigationStyle:"preview4",

						touchenabled:"on",
						onHoverStop:"on",
						nextSlideOnWindowFocus:"off",

						swipe_threshold: 75,
						swipe_min_touches: 1,
						drag_block_vertical: false,
						
												parallax:"mouse",
						parallaxBgFreeze:"off",
						parallaxLevels:[5,10,15,20,25,30,35,40,45,50],
												
												
						keyboardNavigation:"off",

						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

						spinner:"spinner4",
						
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",

						autoHeight:"off",
						forceFullWidth:"off",
						
						
						
						hideThumbsOnMobile:"off",
						hideNavDelayOnMobile:1500,
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"off",
						hideThumbsUnderResolution:0,

												hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0					});



					
				});	/*ready*/

			</script>


			<style type="text/css">
	#rev_slider_8_1_wrapper .tp-loader.spinner4 div { background-color: #FFFFFF !important; }
</style>
</div><!-- END REVOLUTION SLIDER --></div>



