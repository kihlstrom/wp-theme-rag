<?php
/* Template name: Single case page simple */ 
get_header();
?>

<div class="breadcrumbs">
	<div class="inside">
		<?php echo rag_breadcrumbs( $post, ' &gt; ' ); ?>
	</div>
</div>

<div class="wrap simple_case">
	<div class="inside">

		<h2 class="headline"><?php the_title(); ?></h2>
		<?php the_content(); ?>
		
	</div>
</div>

<?php get_footer(); ?>