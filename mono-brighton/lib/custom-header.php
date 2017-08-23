<?php // <- Don't add me in
// Gist updated to use code from Genesis Framework 2.4.2
//remove initial header functions
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
remove_action( 'genesis_header', 'genesis_do_header' );
//add in the new header markup - prefix the function name - here sm_ is used
add_action( 'genesis_header', 'sm_genesis_header_markup_open', 5 );
add_action( 'genesis_header', 'sm_genesis_header_markup_close', 15 );
add_action( 'genesis_header', 'sm_genesis_do_header' );

//New Header functions
function sm_genesis_header_markup_open() {
 genesis_markup( array(
 'html5' => '<header %s>',
 'context' => 'site-header',
 ) );
 /* Added in content
 echo '<div class="header-ghost"></div>';
 */
 genesis_structural_wrap( 'header' );
}
function sm_genesis_header_markup_close() {
 genesis_structural_wrap( 'header', 'close' );
 genesis_markup( array(
 'close' => '</header>',
 'context' => 'site-header',
 ) );
}

function sm_genesis_do_header() {
 global $wp_registered_sidebars;
 genesis_markup( array(
 'open' => '<div %s>',
 'context' => 'title-area',
 ) );
 // Added in content
 echo '<div class="site-id">
 		<a class="site-logo" href="' . esc_url( home_url( '/' ) ) . '">
 
 <svg id="site-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 586.42 141.73">
  <defs>
    <style>
      .cls-1 {fill: #4A90E2;}
      .cls-2 {fill: #fff;}
      .cls-3 {fill: #D0021B;}
    </style>
  </defs>
  <title>brighton_logo</title>
  <g id="symbol">
    <g>
      <circle class="cls-1" cx="70.87" cy="70.87" r="70.87"/>
      <circle class="cls-2" cx="70.87" cy="70.87" r="49.61"/>
      <circle class="cls-3" cx="70.87" cy="70.87" r="28.35"/>
    </g>
  </g>
  <g id="logotype">
    <g>
      <path class="cls-1" d="M208.42,46.94A11.83,11.83,0,0,1,213.51,57a12.07,12.07,0,0,1-9.62,12.22A14.24,14.24,0,0,1,212.52,74a13.85,13.85,0,0,1,3.11,9.23,13.13,13.13,0,0,1-5.48,11.16q-5.48,4.06-14.94,4.06H170V43.23H194.5Q203.33,43.23,208.42,46.94Zm-8,17a6,6,0,0,0,2.33-5A5.75,5.75,0,0,0,200.38,54,10.22,10.22,0,0,0,194,52.38h-13.4v13.4H194A10.21,10.21,0,0,0,200.38,64Zm1.46,23.42a6.34,6.34,0,0,0,2.84-5.52,6.1,6.1,0,0,0-2.84-5.32Q199,74.61,194,74.69h-13.4V89.28H194Q199,89.36,201.84,87.39Z" transform="translate(2.48)"/>
      <path class="cls-1" d="M260.42,98.42,250.88,82.1a17.41,17.41,0,0,1-2,.08H236.45V98.42H225.89V43.23h23q10.72,0,16.56,5t5.83,14a20.75,20.75,0,0,1-2.8,11,17.13,17.13,0,0,1-8.16,6.86l12.14,18.29Zm-24-25.55h12.46q6,0,9.15-2.6t3.15-7.73q0-5-3.15-7.57t-9.15-2.52H236.45Z" transform="translate(2.48)"/>
      <path class="cls-1" d="M282.89,43.23h10.57V98.42H282.89Z" transform="translate(2.48)"/>
      <path class="cls-1" d="M344.47,71h9.23V92a36.85,36.85,0,0,1-10.25,5.24,35.88,35.88,0,0,1-11.59,2,29.41,29.41,0,0,1-14.78-3.78,28.24,28.24,0,0,1-10.53-10.29,27.65,27.65,0,0,1-3.86-14.39,26.82,26.82,0,0,1,3.94-14.31,28.42,28.42,0,0,1,10.76-10.17,30.85,30.85,0,0,1,15.1-3.75,33.41,33.41,0,0,1,11.67,2.13,31,31,0,0,1,9.94,5.83l-6,7.81a22.76,22.76,0,0,0-7.29-4.65A22.25,22.25,0,0,0,332.49,52a19.07,19.07,0,0,0-9.58,2.48,18.29,18.29,0,0,0-6.9,6.82,19,19,0,0,0,0,19,19,19,0,0,0,6.9,6.86,18.77,18.77,0,0,0,9.62,2.52,21.26,21.26,0,0,0,6-.91,26.43,26.43,0,0,0,6-2.56Z" transform="translate(2.48)"/>
      <path class="cls-1" d="M365.92,43.23h10.57V66.81H404V43.23h10.57V98.42H404V76H376.49V98.42H365.92Z" transform="translate(2.48)"/>
      <path class="cls-1" d="M422.06,43.23h45v9.38H449.89V98.42H439.25V52.61H422.06Z" transform="translate(2.48)"/>
      <path class="cls-1" d="M511.44,46.23A28.24,28.24,0,0,1,522,85.14a28.1,28.1,0,0,1-10.61,10.29,31.39,31.39,0,0,1-29.88,0,28.09,28.09,0,0,1-10.61-10.29,27.94,27.94,0,0,1,10.61-38.91,32,32,0,0,1,29.88,0Zm-24.17,8.24a18.89,18.89,0,0,0-6.82,25.82,19.06,19.06,0,0,0,6.86,6.86,18.12,18.12,0,0,0,9.34,2.52,17.77,17.77,0,0,0,9.23-2.52,18.55,18.55,0,0,0,6.74-6.86,18.85,18.85,0,0,0,2.48-9.54,18.64,18.64,0,0,0-2.48-9.5,18.33,18.33,0,0,0-6.74-6.78A18,18,0,0,0,496.65,52,18.56,18.56,0,0,0,487.27,54.47Z" transform="translate(2.48)"/>
      <path class="cls-1" d="M573.69,43.23h10.25V98.42h-10l-28.39-38v38H535.21V43.23h10l28.46,38.09Z" transform="translate(2.48)"/>
    </g>
  </g>
</svg>

 	</a>';
 do_action( 'genesis_site_title' );
 do_action( 'genesis_site_description' );
 
 genesis_markup( array(
 'close' => '</div></div>',
 'context' => 'title-area',
 ) );
 if ( ( isset( $wp_registered_sidebars['header-right'] ) && is_active_sidebar( 'header-right' ) ) || has_action( 'genesis_header_right' ) ) {
 genesis_markup( array(
 'open' => '<div %s>' . genesis_sidebar_title( 'header-right' ),
 'context' => 'header-widget-area',
 ) );
 do_action( 'genesis_header_right' );
 add_filter( 'wp_nav_menu_args', 'genesis_header_menu_args' );
 add_filter( 'wp_nav_menu', 'genesis_header_menu_wrap' );
 dynamic_sidebar( 'header-right' );
 remove_filter( 'wp_nav_menu_args', 'genesis_header_menu_args' );
 remove_filter( 'wp_nav_menu', 'genesis_header_menu_wrap' );
 genesis_markup( array(
 'close' => '</div>',
 'context' => 'header-widget-area',
 ) );
 }
}