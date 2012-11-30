<?php
/* Template name: Single case page simple */ 
get_header();
?>

<div class="breadcrumbs">
	<div class="inside">
		<?php echo rag_breadcrumbs( $post, ' &gt; ' ); ?>
	</div>
</div>

<div class="wrap">
	<div class="inside">
		
        <?php the_content(); ?>

        <div class="simple_case">
            <h2 class="headline">Etiam id consequa arcu. venenatis</h2>
            <img src="http://localhost:8888/Real-art-group/wp-content/uploads/2012/11/case_ring.png">

            <div class="col-wrap col-two">
				<div class="col right-shadow-wrap">
					<div class="shadow top"></div>
					<div class="shadow middle"></div>
					<div class="shadow bottom"></div>
				</div>
				<div class="col">

				</div>
            </div>

        </div>
        



	</div>
</div>

<?php get_footer(); ?>