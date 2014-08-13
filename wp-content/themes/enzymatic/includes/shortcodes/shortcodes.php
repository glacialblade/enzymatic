<?php
	function miracle_prod_function( $atts ){
		if($atts['link']){
			if(!$atts['height']){
				$height = "1200px";
			}
			else{
				$height = $atts['height']+"px";
			}
			return "<iframe src='".$atts['link']."' style='width:100%;border:none;height:".$height."'></iframe>";	
		}
	}
	add_shortcode('miracle', 'miracle_prod_function');
?>