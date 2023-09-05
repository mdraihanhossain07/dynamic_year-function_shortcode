<?php 

function func_year( $atts ) {
	return date("Y");
}
add_shortcode( 'year','func_year' );
