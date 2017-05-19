<?php

if ( ! function_exists( 'campus_taxonomy' ) ) {

// Register Custom Taxonomy
    function campus_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Campuses', 'Taxonomy General Name', 'uthsc' ),
            'singular_name'              => _x( 'Campus', 'Taxonomy Singular Name', 'uthsc' ),
            'menu_name'                  => __( 'Campus', 'uthsc' ),
            'all_items'                  => __( 'All Campuses', 'uthsc' ),
            'parent_item'                => __( 'Parent Campus', 'uthsc' ),
            'parent_item_colon'          => __( 'Parent Campus:', 'uthsc' ),
            'new_item_name'              => __( 'New Campus Name', 'uthsc' ),
            'add_new_item'               => __( 'Add New Campus', 'uthsc' ),
            'edit_item'                  => __( 'Edit Campus', 'uthsc' ),
            'update_item'                => __( 'Update Campus', 'uthsc' ),
            'view_item'                  => __( 'View Campus', 'uthsc' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'uthsc' ),
            'add_or_remove_items'        => __( 'Add or remove campuses', 'uthsc' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'uthsc' ),
            'popular_items'              => __( 'Popular Items', 'uthsc' ),
            'search_items'               => __( 'Search Campuses', 'uthsc' ),
            'not_found'                  => __( 'Not Found', 'uthsc' ),
            'no_terms'                   => __( 'No items', 'uthsc' ),
            'items_list'                 => __( 'Items list', 'uthsc' ),
            'items_list_navigation'      => __( 'Items list navigation', 'uthsc' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'show_in_rest'               => true,
        );
        register_taxonomy( 'campus', array( 'post' ), $args );

    }
    add_action( 'init', 'campus_taxonomy', 0 );

}

if ( ! function_exists( 'college_taxonomy' ) ) {

// Register Custom Taxonomy
    function college_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Colleges', 'Taxonomy General Name', 'uthsc' ),
            'singular_name'              => _x( 'College', 'Taxonomy Singular Name', 'uthsc' ),
            'menu_name'                  => __( 'College', 'uthsc' ),
            'all_items'                  => __( 'All Colleges', 'uthsc' ),
            'parent_item'                => __( 'Parent College', 'uthsc' ),
            'parent_item_colon'          => __( 'Parent College:', 'uthsc' ),
            'new_item_name'              => __( 'New College Name', 'uthsc' ),
            'add_new_item'               => __( 'Add New College', 'uthsc' ),
            'edit_item'                  => __( 'Edit College', 'uthsc' ),
            'update_item'                => __( 'Update College', 'uthsc' ),
            'view_item'                  => __( 'View College', 'uthsc' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'uthsc' ),
            'add_or_remove_items'        => __( 'Add or remove colleges', 'uthsc' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'uthsc' ),
            'popular_items'              => __( 'Popular Items', 'uthsc' ),
            'search_items'               => __( 'Search Colleges', 'uthsc' ),
            'not_found'                  => __( 'Not Found', 'uthsc' ),
            'no_terms'                   => __( 'No items', 'uthsc' ),
            'items_list'                 => __( 'Items list', 'uthsc' ),
            'items_list_navigation'      => __( 'Items list navigation', 'uthsc' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'show_in_rest'               => true,
        );
        register_taxonomy( 'college', array( 'post' ), $args );

    }
    add_action( 'init', 'college_taxonomy', 0 );

}

//The default "categories" taxonomy will be used for this
//if ( ! function_exists( 'mission_taxonomy' ) ) {
//
//// Register Custom Taxonomy
//    function mission_taxonomy() {
//
//        $labels = array(
//            'name'                       => _x( 'Mission Areas', 'Taxonomy General Name', 'uthsc' ),
//            'singular_name'              => _x( 'Mission', 'Taxonomy Singular Name', 'uthsc' ),
//            'menu_name'                  => __( 'Mission', 'uthsc' ),
//            'all_items'                  => __( 'All Mission Areas', 'uthsc' ),
//            'parent_item'                => __( 'Parent Mission Area', 'uthsc' ),
//            'parent_item_colon'          => __( 'Parent Mission Area:', 'uthsc' ),
//            'new_item_name'              => __( 'New Mission Area Name', 'uthsc' ),
//            'add_new_item'               => __( 'Add New Mission Area', 'uthsc' ),
//            'edit_item'                  => __( 'Edit Mission Area', 'uthsc' ),
//            'update_item'                => __( 'Update Mission Area', 'uthsc' ),
//            'view_item'                  => __( 'View Mission Area', 'uthsc' ),
//            'separate_items_with_commas' => __( 'Separate items with commas', 'uthsc' ),
//            'add_or_remove_items'        => __( 'Add or remove mission area', 'uthsc' ),
//            'choose_from_most_used'      => __( 'Choose from the most used', 'uthsc' ),
//            'popular_items'              => __( 'Popular Items', 'uthsc' ),
//            'search_items'               => __( 'Search Mission Areas', 'uthsc' ),
//            'not_found'                  => __( 'Not Found', 'uthsc' ),
//            'no_terms'                   => __( 'No items', 'uthsc' ),
//            'items_list'                 => __( 'Items list', 'uthsc' ),
//            'items_list_navigation'      => __( 'Items list navigation', 'uthsc' ),
//        );
//        $args = array(
//            'labels'                     => $labels,
//            'hierarchical'               => true,
//            'public'                     => true,
//            'show_ui'                    => true,
//            'show_admin_column'          => true,
//            'show_in_nav_menus'          => true,
//            'show_tagcloud'              => true,
//            'show_in_rest'               => true,
//        );
//        register_taxonomy( 'mission', array( 'post' ), $args );
//
//    }
//    add_action( 'init', 'mission_taxonomy', 0 );
//
//}


if ( ! function_exists( 'people_taxonomy' ) ) {

// Register Custom Taxonomy
    function people_taxonomy() {

        $labels = array(
            'name'                       => _x( 'People', 'Taxonomy General Name', 'uthsc' ),
            'singular_name'              => _x( 'People', 'Taxonomy Singular Name', 'uthsc' ),
            'menu_name'                  => __( 'People', 'uthsc' ),
            'all_items'                  => __( 'All Groups', 'uthsc' ),
            'parent_item'                => __( 'Parent Group', 'uthsc' ),
            'parent_item_colon'          => __( 'Parent Group:', 'uthsc' ),
            'new_item_name'              => __( 'New Group Name', 'uthsc' ),
            'add_new_item'               => __( 'Add New Group', 'uthsc' ),
            'edit_item'                  => __( 'Edit Group', 'uthsc' ),
            'update_item'                => __( 'Update Group', 'uthsc' ),
            'view_item'                  => __( 'View Group', 'uthsc' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'uthsc' ),
            'add_or_remove_items'        => __( 'Add or remove group', 'uthsc' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'uthsc' ),
            'popular_items'              => __( 'Popular Items', 'uthsc' ),
            'search_items'               => __( 'Search Groups', 'uthsc' ),
            'not_found'                  => __( 'Not Found', 'uthsc' ),
            'no_terms'                   => __( 'No items', 'uthsc' ),
            'items_list'                 => __( 'Items list', 'uthsc' ),
            'items_list_navigation'      => __( 'Items list navigation', 'uthsc' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'show_in_rest'               => true,
        );
        register_taxonomy( 'people', array( 'post' ), $args );

    }
    add_action( 'init', 'people_taxonomy', 0 );

}


//WPUFE Javascript
function wpufe_javascript() {
    if ( is_page('new-announcement') ) {
        ?>
        <script type="text/javascript">
          (function($) {
            function limitText(field, maxChar){
              var ref = $(field),
                val = ref.val();

              if ( val.length >= maxChar ) {
                ref.val(val.substr(0, maxChar));
              }
            }
            $( "label[for=wpuf-post_excerpt]" ).append( '<span class="announcement-excerpt-tooltip" style="display: none;"><span style="font-size:.9em;">The message that will appear in the campus emails. Make sure to include any details you want to appear in the email. <strong>Don\'t repeat the title here or it will appear twice!</strong></span></div>')

            $('#post_excerpt').on('focus', function(event) {
              $( ".announcement-excerpt-tooltip" ).show("fast");
            });
            $('#post_excerpt').on('focusout', function(event) {
              $( '.announcement-excerpt-tooltip' ).hide("fast");
            });
            // Insert Limitations here
            $('#post_excerpt').on('keyup', function(event) {
              limitText(this, 400);
              $( ".excerpt-char-count" ).html( 400 - $(this).val().length );
            });
          })(jQuery);
        </script>
        <?php
    }
}
add_action( 'wp_footer', 'wpufe_javascript',20 );


add_filter( 'img_caption_shortcode', 'my_img_caption_shortcode', 99, 3 );
function my_img_caption_shortcode( $empty, $attr, $content ){
    $attr = shortcode_atts( array(
        'id'      => '',
        'align'   => 'alignnone',
        'width'   => '',
        'caption' => ''
    ), $attr );

    if ( 1 > (int) $attr['width'] || empty( $attr['caption'] ) ) {
        return '';
    }

    if ( $attr['id'] ) {
        $attr['id'] = 'id="' . esc_attr( $attr['id'] ) . '" ';
    }

    $width = $attr['width'];

    $widthClass='';
    if     ($width <= 288) { $widthClass = "uthsc-figure-30"; }
    elseif ($width <= 384) { $widthClass = "uthsc-figure-40"; }
    elseif ($width <= 480) { $widthClass = "uthsc-figure-50"; }
    elseif ($width <= 500) { $widthClass = "uthsc-figure-60"; }


    return '<figure ' . $attr['id']
        . 'class="uthsc-figure ' . str_replace('align', '', esc_attr( $attr['align'] )) . ' ' . $widthClass . '" >'
        . do_shortcode( $content )
        . '<figcaption class="">' . $attr['caption'] . '</figcaption>'
        . '</figure>';
}

function get_uthsc_orbit_slider() {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    if ($paged < 2) {

        // args
        $args = array(
            'posts_per_page' => 4,
            'meta_query' => array(
                array(
                    'key' => 'add_to_slider', // name of custom field
                    'value' => '"Add To Slider"', // matches exaclty "red", not just red. This prevents a match for "acquired"
                    'compare' => 'LIKE'
                )
            )
        );

        // get results
        $the_query = new WP_Query( $args );

        // The Loop
        if( $the_query->have_posts() ): ?>
          <div class="hide-for-small-down">
            <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
              <ul class="orbit-container">
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li class="orbit-slide">
                      <a href="<?php echo get_the_permalink(get_the_id())?>">
                        <img class="orbit-image" src="<?php echo get_field('slider_image',get_the_id())?>" alt="slider-image" />
                      </a>
                      <div class="orbit-caption">
                        <a href="<?php echo get_the_permalink(get_the_id())?>" style="color:#fff;"><?php echo get_the_title( get_the_id() ) ?></a>
                      </div>
                    </li>
                  <?php endwhile; ?>
              </ul>
              <nav class="orbit-bullets">
                <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
              </nav>
            </div>
          </div>
            <?php
        endif;
        wp_reset_query();  // Restore global post data stomped by the_post(). ?>
    <?php }
}
