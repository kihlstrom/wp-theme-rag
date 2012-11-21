<?php get_header(); ?>

<div class="breadcrumbs">
	<div class="inside">
	</div>
</div>

<div class="content">
	<div class="inside">
		<div class="single">

				<div class="heading">
					<?php echo get_image( 'start_page_image' ); ?>
					<h2><?php echo rag_title_split( get_the_title(), 24 ); ?></h2>
					<div class="date"><span><?php the_date(); ?></span></div>
				</div>

<?php the_content(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>