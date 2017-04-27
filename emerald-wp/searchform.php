<?php
/**
 * The template for displaying search form
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

do_action( 'foundationpress_before_searchform' ); ?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" class="input-group search-form">
	<?php do_action( 'foundationpress_searchform_top' ); ?>
		<input type="text" class="input-group-field" value="" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'foundationpress' ); ?>">
		<?php do_action( 'foundationpress_searchform_before_search_button' ); ?>
		<div class="input-group-button">
      <button type="submit" class="button" aria-label="Submit search form">
        <span aria-hidden="true" class="fa fa-search"></span>
      </button>
		</div>
	<?php do_action( 'foundationpress_searchform_after_search_button' ); ?>
</form>
<?php do_action( 'foundationpress_after_searchform' );
