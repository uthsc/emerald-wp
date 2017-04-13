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
        <a class="button small secondary search-label" href="/announcements/">Announcements</a>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php foundationpress_entry_meta(); ?>
    </header>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
    <footer>
        <p class="entry-tags"><?php  echo get_the_term_list(get_the_ID(),'listserv', 'Sent to:&nbsp;', ', ') ?></p>
        <?php edit_post_link('Edit this Announcement','',''); ?>
    </footer>
</div>
