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
<?php
$previous_post = get_adjacent_post( false, '', true );
$next_post = get_adjacent_post( false, '', false );
if( $previous_post ) { ?>
		<a class="prev" href="<?php echo get_permalink( $previous_post ); ?>">
			<span class="sign">&lt;</span>
			<span>Previous post:</span>
			<span><?php echo get_the_title( $previous_post ); ?></span>
		</a>
<?php
}
if( $next_post ) {
?>
		<a class="next" href="<?php echo get_permalink( $next_post ); ?>">
			<span class="sign">&gt;</span>
			<span>Next post:</span>
			<span><?php echo get_the_title( $next_post ); ?></span>
		</a>
<?php
}
?>
	</div>
</div>

<?php get_footer(); ?>