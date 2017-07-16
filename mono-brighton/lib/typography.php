<?php

add_action( 'genesis_entry_content', 'mono_typography', 15 );
function mono_typography() {
	$show_typography_array = get_field( 'show_typography' );
	$bodytext = get_field( 'body_font_type' );
	$headlinetext = get_field( 'headline_font_type' );
	
	if ( $show_typography_array ){
		
		echo '
		
		';
	
	}else{
	
	}
}