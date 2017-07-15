<?php

add_action( 'genesis_entry_content', 'mono_swatches', 15 );
function mono_swatches() {

	$show_array = get_field( 'show' );
	$black = get_field( 'black_colour' );
	$white = get_field( 'white_colour' );
	$primary = get_field( 'primary_colour' );
	$secondary = get_field( 'secondary_colour' );
	$active = get_field( 'active_colour' );
	$succes = get_field( 'succes_colour' );
	$alert = get_field( 'alert_colour' );
	$accent_one = get_field( 'accent_1_colour' );
	$accent_two = get_field( 'accent_2_colour' );
	$accent_three = get_field( 'accent_3_colour' );

	if ( $show_array ){
		echo '
		<div class="swatches">
		<ul class="swatch-black">
			<li class="swatch-row-one"><h6>Black</h6></li>
			<li class="swatch-row-one">#'.$primary.'</li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
		</ul>
		
		<ul class="swatch-white">
			<li class="swatch-row-one"><h6>White</h6></li>
			<li class="swatch-row-one">#'.$white.'</li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
		</ul>
		
		<ul class="swatch-primary">
			<li class="swatch-row-one"><h6>Primary</h6></li>
			<li class="swatch-row-one">#'.$primary.'</li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
		</ul>
		
		<ul class="swatch-secondary">
			<li class="swatch-row-one"><h6>Secondary</h6></li>
			<li class="swatch-row-one">#'.$secondary.'</li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
		</ul>
		
		<ul class="swatch-active">
			<li class="swatch-row-one"><h6>Active</h6></li>
			<li class="swatch-row-one">#'.$active.'</li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
		</ul>
		
		<ul class="swatch-succes">
			<li class="swatch-row-one"><h6>Succes</h6></li>
			<li class="swatch-row-one">#'.$succes.'</li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
		</ul>
		
		<ul class="swatch-alert">
			<li class="swatch-row-one"><h6>Alert</h6></li>
			<li class="swatch-row-one">#'.$alert.'</li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
		</ul>
		
		<ul class="swatch-accent-one">
			<li class="swatch-row-one"><h6>Accent 1</h6></li>
			<li class="swatch-row-one">#'.$accent_one.'</li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
		</ul>
		
		<ul class="swatch-accent-two">
			<li class="swatch-row-one"><h6>Accent 2</h6></li>
			<li class="swatch-row-one">#'.$accent_two.'</li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
		</ul>
		
		<ul class="swatch-accent-three">
			<li class="swatch-row-one"><h6>Accent 3</h6></li>
			<li class="swatch-row-one">#'.$accent_three.'</li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			<li class="swatch-row-one"></li>
			
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
			<li class="swatch-row-two"></li>
		</ul>
		</div>
		';
	}else{
		echo 'What - nothing??';
	}

	
}