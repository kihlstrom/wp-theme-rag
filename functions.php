<?php

define( 'THEME_DIR', get_template_directory_uri() );  

remove_action( 'wp_head', 'wp_generator' );
add_filter( 'wp_head', 'insert_jquery' );

function insert_jquery() {
   wp_enqueue_script( 'jquery' );
}

?>