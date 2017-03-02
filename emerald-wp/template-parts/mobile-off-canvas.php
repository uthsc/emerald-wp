<?php
/**
 * Template part for off canvas menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<nav class="off-canvas position-left" id="mobile-menu" data-off-canvas data-auto-focus="false" data-position="left" role="navigation">
  <?php get_search_form() ?>
  <button class="button expanded" aria-label="Close menu" type="button" data-close style="margin-bottom:0">
    <span aria-hidden="true"><i class="fa fa-chevron-left"></i>&emsp; Close Menu</span>
  </button>
  <?php foundationpress_mobile_nav(); ?>
</nav>

<div class="off-canvas-content" data-off-canvas-content>
