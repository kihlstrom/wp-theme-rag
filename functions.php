<?php

define( 'THEME_DIR', get_template_directory_uri() );  

remove_action( 'wp_head', 'wp_generator' );
add_filter( 'wp_head', 'insert_jquery' );

function insert_jquery() {
   wp_enqueue_script( 'jquery' );
}

function rag_breadcrumbs( $post, $separator ) {
	$id_parent = ( $post->post_parent ? $post->post_parent : $post->ID );
	$nav_sub_list = wp_list_pages( 'sort_column=menu_order&depth=1&echo=0&title_li=&child_of=' . $id_parent );
	$home_page = current( get_pages( 'sort_column=menu_order&depth=1&number=1' ) );
	$html = '<a href="' . get_bloginfo( 'url' ) . '">' . $home_page->post_title . '</a>' . $separator;
	if( $post->post_parent ) {
		$parent_page = get_page( $post->post_parent );
		$html = $html . '<a href="' . get_permalink( $post->post_parent ) . '">' . $parent_page->post_title . '</a>' . $separator;
	}
	$html = $html . '<span>' . $post->post_title . '</span>';
	wp_reset_query();
	return( $html );
}

//String to divide :: Max Char per line as array :: Divide with html-tag :: output echo or return
function rag_title_divider( $titleString = '', $maxChar = array(30,40), $divideHtml = 'span', $returnOrEcho = 'echo' ){
	if($titleString == ''){
		$outPutStr = '';
	}else if(strlen($titleString) < $maxChar[0]){
		$outPutStr = '<'.$divideHtml.'>'.$titleString.'</'.$divideHtml.'>';
	}else{
		$wordArr = explode(' ',$titleString);
		$wordArrLength = count($wordArr);
		$i = 0; $ii = 0; $maxCharCount = count($maxChar) - 1; $outPutStr = '<'.$divideHtml.'>'; $trackWordLength = 0;
		while($i != $wordArrLength){
			$trackWordLength += strlen($wordArr[$i]);		
			if($trackWordLength < $maxChar[$ii]){
				$outPutStr .= $wordArr[$i].' ';
				$i += 1;
				if($i == $wordArrLength){$outPutStr = substr_replace($outPutStr,"",-1).'</'.$divideHtml.'>';}
			}else{
				$trackWordLength = 0;
				$outPutStr .= '</'.$divideHtml.'><'.$divideHtml.'>';
				if($maxCharCount > 0 && $ii != $maxCharCount ){
					 $ii += 1;
				}
			}	
		}
	}
	if($returnOrEcho == 'echo'){ echo $outPutStr; }else{ return $outPutStr;}
}

/*
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
*/

?>