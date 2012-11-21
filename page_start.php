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
				<a href="<?php the_permalink(); ?>"><div class="heading">
					<?php echo get_image( 'start_page_image' ); ?>
					<h2><?php echo rag_title_split( get_the_title(), 24 ); ?></h2>
					<div class="date"><span><?php the_date(); ?></span></div>
				</div></a>
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
			<h2><span>Categories</span></h2>
		</div>
	</div>
</div>

<?php get_footer(); ?>