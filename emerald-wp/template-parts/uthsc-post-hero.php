<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.

$image = get_field('uthsc_post_hero_image');

if( !empty($image) ):

    // vars
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];
    $caption = $image['caption'];

    // uthsc_post_hero_image sizes
    $small = $image['sizes']["thumbnail"];
    $medium = $image['sizes']["medium"];
    $large = $image['sizes']["large"];
    $xlarge = $image['sizes']["featured-xlarge"];

    ?>

    <header id="featured-hero"
            role="banner"
            data-interchange="[<?php echo $small; ?>, small], [<?php echo $medium; ?>, medium], [<?php echo $large; ?>, large], [<?php echo $xlarge; ?>, xlarge]">
    </header>
<?php endif; ?>
