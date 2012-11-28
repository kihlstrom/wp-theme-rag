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
				<div class="post-heading">
					<h2><?php rag_title_divider( get_the_title(), array( 20, 24, 25 ) ); ?></h2>
					<div class="date"><span><?php the_date(); ?></span></div>
					<div class="author"><span>Author: <?php the_author_link(); ?></span></div>
				</div>
				<div class="content">
					<?php the_content(); ?>
				</div>
			</div>
			
<?php comments_template( '', true ); ?>
		</div>
	</div>
	<div class="nav-post">
		<a class="prev" href="#">Previous</a>
		<a class="next" href="#">
			<span class="sign">&gt;</span>
			<span>Next</span>
			<span>Title of next post that could be a really long</span>
		</a>
		<!--a class="next" href="#"><?php next_post_link( '%link', 'Next' ); ?></a-->
	</div>
</div>

<?php get_footer(); ?>