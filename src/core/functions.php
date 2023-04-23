<?php

/*

CUSTOM FUNCTIONS

*/

/**
 * Returns a string describing the orientation of the image with the supplied
 * ID, or the orientation for the current post's featured image if no ID is
 * provided.
 *
 * Will be either 'image-landscape', 'image-portrait', or 'image-square' if the
 * ID is resolved, or an empty string if it is not. This behaviour is so that
 * it can be used as an argument for WordPress template functions which modify
 * the element classlist, e.g. `post-class()`.
 *
 * @param string $image_ID = get_post_thumbnail_ID()
 * @return string
 */
function danfoy2023_get_image_orientation($image_ID = '') {
    $post_thumbnail_ID = get_post_thumbnail_id();
    if (!$image_ID && $post_thumbnail_ID) $image_ID = $post_thumbnail_ID;
    if (!$image_ID) return '';
    $image_meta = wp_get_attachment_metadata( $image_ID );
    if (!$image_meta) return '';

    $image_orientation = $image_meta['width'] == $image_meta['height']
        ? 'image-square'
        : ( $image_meta['width'] > $image_meta['height']
            ? 'image-landscape'
            : 'image-portrait' );
    return $image_orientation;
};


/**
 * Get the `<img>` element from the first `wp-block-image` block in the provided
 * content.
 *
 * @param string $content post data from get_the_content();
 * @return string filtered content
 */
function danfoy2023_extract_first_image( $content ) {
    $regex = '/.*class="wp-block-image.*(<img.*\/>)/sU';
    $first_image = preg_match($regex, $content, $images);
    $image = count($images) > 1
        ? $images[1]
        : '';

    return $image;
};

/**
 * Return post content from `get_the_content()` with the first `wp-block-image`
 * block stripped out.
 *
 * @param string $content post data from get_the_content();
 * @return string filtered content
 */
function danfoy2023_strip_image_from_content( $content ) {
    $post_content_regex = '/.*(<(div|figure) class="wp-block-image.*<\/(?2)>)/s';
    $content = preg_replace($post_content_regex, '', $content, 1);
    return $content;
};


/*

THEME SETUP

*/

if ( function_exists( 'add_theme_support' ) ) {

    // Enable post formats
    add_theme_support( 'post-formats',  array (
        'aside',
        'gallery',
        'quote',
        'image',
        'video',
    ) );

    // Enable post and comment RSS feed links
    add_theme_support( 'automatic-feed-links' );

    // Enable semantic HTML5 support
    add_theme_support( 'html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
    ) );

    // Add thumbnail support
    add_theme_support( 'post-thumbnails' );

    // Customise image sizes
    add_image_size( 'large', 700, '', true );
    add_image_size( 'medium', 250, '', true );
    add_image_size( 'small', 120, '', true );
//  add_image_size( 'custom-size', 700, 200, true );
}


function danfoy2023_styles() {
    wp_register_style( 'danfoy2023_style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    wp_enqueue_style( 'danfoy2023_style' );
}
add_action( 'wp_enqueue_scripts', 'danfoy2023_styles' );


function danfoy2023_menus() {
    register_nav_menus( array(
        'masthead-nav-menu' => 'Masthead (Primary)',
    ) );
}
add_action( 'init', 'danfoy2023_menus' );

/**
 * Remove wrapping paragraph tags from images
 *
 * WordPress wraps images and embeds in paragraph tags by default. This is annoying
 * because it means you can't have full-bleed images whilst having paragraphs with
 * margins or padding.
 *
 * @param  string $content The post content
 * @return string          The post content, where images are stripped of <p>s
 */
// function danfoy_2021_remove_ptags_on_media( $content ){
//     // filter from image tags
//     $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
//     // filter from iframe tags, used for embeds
//     return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
// }
// add_filter('the_content', 'danfoy_2021_remove_ptags_on_media', 15);
