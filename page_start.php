<?php
/* Template name: Start page */ 
get_header();
?>

<div class="pusher">
	<div class="inside">
		<?php the_post(); ?>
		<?php the_content(); ?>
	</div>
</div>

<div class="content">
	<div class="inside">
		<div class="main">
<?php
query_posts( 'posts_per_page=4' );
if( have_posts() ) {
	while( have_posts() ) {
		the_post();
?>
			<div class="post">
				<div class="heading">
					<?php echo get_image( 'start_page_image' ); ?>
					<h2>
<?php
		$title_original = get_the_title();
		$title_word = explode( ' ', $title_original );
		$title_word_count = count( $title_word );
		if( $title_word_count <= 4 ) {
			$title_html = '<span>' . $title_original . '</span>';
		} else {
			$title_row = array_chunk( $title_word, 4 );
			$title_html = '<span>' . implode( '</span><span>', array_map( 'title_row_join', $title_row ) ) . '</span>';
		}
		echo $title_html;
?>
					</h2>
					<div class="date"><span><?php the_date(); ?></span></div>
				</div>
				<div class="intro">
					<?php the_content(); ?>
				</div>
			</div>
<?php
	}
} else {
?>
			<div class="post">
				<div class="heading">
					<h2><span>Spaaaaaaaaaace</span></h2>
				</div>
			</div>
<?php
}
?>
		</div>
		<div class="sidebar">
			<p>sidebar</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>