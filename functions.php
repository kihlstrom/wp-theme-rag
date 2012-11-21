<?php

define( 'THEME_DIR', get_template_directory_uri() );  

remove_action( 'wp_head', 'wp_generator' );
add_filter( 'wp_head', 'insert_jquery' );

function insert_jquery() {
   wp_enqueue_script( 'jquery' );
}

function rag_title_split( $title, $max_characters_per_row ) {
	$max_words_per_row = 4;
	$title_word = explode( ' ', $title );
	$title_word_count = count( $title_word );
	if( $title_word_count <= $max_words_per_row ) {
		$title_html = '<span>' . $title . '</span>';
	} else {
		$title_row = array_chunk( $title_word, $max_words_per_row );
		$title_html = '<span>' . implode( '</span><span>', array_map( 'rag_title_row_join', $title_row ) ) . '</span>';
	}
	return( $title_html );
}

function rag_title_row_join( $row ) {
	return( implode( ' ', $row ) );
}

?>