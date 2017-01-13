<?php 
	$rgen_config = $rgen;
	include $rgen_config->layout_top;
	if($page_promotion){
		echo $text_promotion_message;
	} else {
		echo $text_message;
	}

	include $rgen_config->layout_bottom;
	echo $footer;
?>