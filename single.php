<?php get_header(); ?>

<div class="breadcrumbs">
	<div class="inside">
<?php
$rag_parent_id = ( $post->post_parent ? $post->post_parent : $post->ID );
$rag_nav_sub_list = wp_list_pages( 'sort_column=menu_order&depth=1&echo=0&title_li=&child_of='.$rag_parent_id );
$rag_home_page = current( get_pages( 'sort_column=menu_order&depth=1&number=1' ) );

echo '<a href="' . get_bloginfo('url') . '">' . $rag_home_page->post_title . '</a>/';
if( $post->post_parent ) {
	$parent_page = get_page( $post->post_parent );
	echo '<a href="' . get_permalink( $post->post_parent ) . '">' . $parent_page->post_title . '</a>/';
}
echo '<span>' . $post->post_title . '</span>';
?>
	</div>
</div>

<div class="content">
	<div class="inside">
		<div class="single">

				<div class="heading">
					<h2><?php echo rag_title_split( get_the_title(), 24 ); ?></h2>
					<div class="date"><span><?php the_date(); ?></span></div>
				</div>

<?php the_content(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>