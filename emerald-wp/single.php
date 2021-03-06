<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<?php
  //if 'show hero' image has been selected
  if ( get_field('uthsc_show_post_hero_image', $post_id) ) {
    //if a hero image has been uploaded
    $hero_img = get_field('uthsc_post_hero_image');
    if ( !empty( $hero_img ) ){

        //load the post hero image
        get_template_part('template-parts/uthsc-post-hero');
    }
    else {
        //otherwise load the featured image
        get_template_part('template-parts/featured-image');
    }
  }
?>

<div id="single-post" role="main" class="row">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="columns large-9">
    <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php foundationpress_entry_meta(); ?>
      </header>
      <?php do_action( 'foundationpress_post_before_entry_content' ); ?>
      <div class="entry-content">
        <?php the_content(); ?>
        <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
      </div>
      <footer>
        <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
        <p><?php the_tags(); ?></p>
      </footer>
<!--      --><?php //the_post_navigation(); ?>
      <?php do_action( 'foundationpress_post_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_post_after_comments' ); ?>
    </article>
  </div>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
  <div class="columns large-3">
      <?php get_sidebar(); ?>
  </div>

</div>
<?php get_footer();
