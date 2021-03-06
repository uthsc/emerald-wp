<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
    <div id="sticky-sidebar-end" style="display:block;width:100%;"></div>
    <div id="footer-container">
      <?php get_template_part('template-parts/uthsc-content-footer') ?>

      <?php do_action( 'foundationpress_before_footer' ); ?>
      <?php get_template_part('template-parts/uthsc-footer') ?>
      <?php do_action( 'foundationpress_after_footer' ); ?>
    </div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php //if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
    <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
<?php //endif; ?>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
