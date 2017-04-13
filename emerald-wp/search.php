<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div id="page">
<div class="row">

  <!--Left sidebar-->
  <div class="column medium-2">
    <aside class="" id="sticky-sidebar" data-sticky-container>
      <div class="sticky" data-sticky data-top-anchor="sticky-sidebar" data-btm-anchor="footer-container:top">
          <?php dynamic_sidebar( 'left-sidebar-widgets' ); ?>
      </div>
    </aside>
  </div>

	<div class="large-7 columns" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

		<h1><?php _e( 'Search Results for', 'foundationpress' ); ?> '<?php echo get_search_query(); ?>'</h1><hr>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif;?>

	<?php do_action( 'foundationpress_before_pagination' ); ?>

	<?php
	if ( function_exists( 'foundationpress_pagination' ) ) :
		foundationpress_pagination();
	elseif ( is_paged() ) :
	?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php endif; ?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>

  <!--Right Sidebar-->
  <div class="column medium-3">
    <aside class="sidebar" id="sticky-sidebar" data-sticky-container>
      <div class="sticky" data-sticky data-top-anchor="sticky-sidebar" data-btm-anchor="footer-container:top">
          <?php get_sidebar(); ?>
      </div>
    </aside>
  </div>

</div>
</div>
<?php get_footer();
