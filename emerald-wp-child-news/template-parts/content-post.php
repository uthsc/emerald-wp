<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
    <header>
        <a class="button secondary small search-label" href="/">News</a>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php foundationpress_entry_meta(); ?>
    </header>

    <div class="entry-content">
        <div class="row collapse">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="medium-3 show-for-medium columns">
                    <figure class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                    </figure>
                </div>
                <div class="medium-9 columns"><?php the_excerpt(); ?></div>
            <?php else: ?>
                <div class="columns"><?php the_excerpt(); ?></div>
            <?php endif ?>

        </div>
    </div>
    <footer>
        <?php edit_post_link('Edit Post','',''); ?>
    </footer>
</div>
