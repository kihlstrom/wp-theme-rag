<?php
/* Template name: Case and concept page */ 
get_header();
?>

<div class="breadcrumbs">
	<div class="inside">
		<?php echo rag_breadcrumbs( $post, ' &gt; ' ); ?>
	</div>
</div>

<div class="wrap">
	<div class="inside">
		<div class="hero-unit">
            <h2>Case & Concept</h2>
            <p>We made all these kittens! We are awesome! </p>
        </div>
        <div class="case-collection col-wrap col-three">
            <div class="col">
                <a href="#" class="case">
                    <figure>
                        <img src="http://placekitten.com/350/400">
                        <figcaption>
                            A cheeky macaque, Lower Kintaganban River, Borneo. Original by
                        </figcaption>
                    </figure>
                    <div class="backdrop"><span>View</span></div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="case">
                    <figure>
                        <img src="http://placekitten.com/350/300">
                        <figcaption>
                            A cheeky macaque, Lower Kintaganban River, Borneo. Original by
                        </figcaption>
                    </figure>
                    <div class="backdrop"><span>View</span></div>
                </a>
                
            </div>
            
            <div class="col">
                <a href="#" class="case">
                    <figure>
                        <img src="http://placekitten.com/350/400">
                        <figcaption>
                            A cheeky macaque, Lower Kintaganban River, Borneo. Original by
                        </figcaption>
                    </figure>
                    <div class="backdrop"><span>View</span></div>
                </a>
            </div>
        </div>
	</div>
</div>

<?php get_footer(); ?>