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

<div class="wrap">
	<div class="inside">
		<div class="main">
<?php
query_posts( 'posts_per_page=4' );
if( have_posts() ) {
	while( have_posts() ) {
		the_post();
?>
			<div class="post">
				<div class="post-heading">
					<?php echo get_image( 'start_page_image' ); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php rag_title_divider( get_the_title(), array( 20, 24, 25 ) ); ?></a></h2>
					<div class="date"><span><?php the_date(); ?></span></div>
					<div class="comments" ><?php comments_number( 'x','1'); ?></div>
					<div class="author"><span>Author: <?php the_author(); ?></span></div>
				</div>
				<div class="intro">
					<?php the_excerpt(); ?>
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
			<h2><span>Categories</span></h2>
		</div>
	</div>
</div>

<?php get_footer(); ?>