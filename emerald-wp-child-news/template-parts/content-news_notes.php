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
    <a class="button secondary small search-label" href="/announcements/">In the Media</a>
    <h2><a href="<?php echo esc_attr(get_field('in_the_media_url', get_the_ID())); ?>"><?php the_title(); ?></a></h2>
    <span class="byline author">
            Published by <?php echo get_the_publisher_link(get_the_ID()) ?>
      <time class="updated" datetime="<?php echo get_the_time('c') ?>"
            pubdate><?php echo get_the_time('F jS, Y') ?></time>
        </span>
  </header>
  <div class="entry-content">
    <div class="row">
      <div class="medium-2 hide-for-small columns"><?php echo get_the_publisher_logo(get_the_ID()); ?></div>
      <div class="medium-10 columns"><?php the_excerpt(); ?></div>
    </div>
  </div>
  <footer>
    <p class="entry-tags"><?php echo get_the_term_list(get_the_ID(), 'listserv', 'Sent to:&nbsp;', ', ') ?></p>
      <?php edit_post_link('Edit this Announcement', '', ''); ?>
  </footer>
  <hr/>
</div>
