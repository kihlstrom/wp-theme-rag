<?php get_header(); ?>

<div class="breadcrumbs">
	<div class="inside">
		<?php echo rag_breadcrumbs( $post, ' &gt; ' ); ?>
	</div>
</div>

<div class="wrap">
	<div class="inside">
		<div class="single">

			<div class="post">
				<div class="heading">
					<h2><?php rag_title_divider( get_the_title(), array( 20, 24, 25 ) ); ?></h2>
					<div class="date"><span><?php the_date(); ?></span></div>
					<div class="author"><span>Author: <?php the_author(); ?></span></div>
				</div>
				<div class="content">
					<?php the_content(); ?>
				</div>
			</div>

		</div>
	</div>
</div>

<?php get_footer(); ?>