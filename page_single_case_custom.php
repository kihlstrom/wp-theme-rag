<?php
/* Template name: Single case page custom */ 
get_header();
?>

<div class="breadcrumbs">
	<div class="inside">
		<?php echo rag_breadcrumbs( $post, ' &gt; ' ); ?>
	</div>
</div>

<div class="wrap">
		
	<?php the_content(); ?>

</div>

<?php get_footer(); ?>