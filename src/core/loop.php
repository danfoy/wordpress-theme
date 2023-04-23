<?php

// Check for posts
if ( have_posts() ) :

    // Loop through posts
    while (have_posts()) :

        // Setup post data
        the_post();

        // Extract and filter the post content. Will need this later for
        // querying and stripping out images.
        $post_content = apply_filters( 'the_content', get_the_content() );

        ?>
        <article <?php post_class( get_image_orientation() ); ?> id="post-<?php the_ID(); ?>">
            <header class="post-header">
                <h2 class="post-header-title">
                    <?php
                    if (!is_singular()) { echo '<a href="' . get_permalink() . '" title="' . the_title_attribute(['echo' => false]) . '" class="post-header-title-link">'; };
                    the_title();
                    if (!is_singular()) { echo '</a>'; };
                    ?>
                </h2>
                <?php
                if (is_singular() && !get_post_format() && has_excerpt()) { ?>
                <div class="post-header-excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <?php } ?>
            </header>

            <?php
            if ( is_singular() && get_post_format() == 'image' ) {
                $first_image = extract_first_image( $post_content );
                $post_content = strip_image_from_content( $post_content ); ?>
            <figure class="post-image">
                <?php echo $first_image; ?>
            </figure>
            <?php
            };
            ?>

            <?php if (!is_singular() && has_post_thumbnail()) {;?>
            <figure class="post-thumbnail">
                <?php the_post_thumbnail() ?>
            </figure>
            <?php } ?>

            <div class="post-content">
                <?php
                if (!is_singular()) the_excerpt();
                if (is_singular()) {
                    echo $post_content;
                }
                ?>
            </div>

            <footer class="post-footer">
                <div class="post-footer-meta">

                    <?php
                    // $UTCDate = get_the_date('c');
                    $UTC_date = get_the_date('Y-m-d');
                    $UTC_time = get_the_date('g:i:s');
                    $UTC_offset = get_the_time('O');
                    $UTC_datetime = $UTC_date . 'T' . $UTC_time . '.000' . $UTC_offset;
                    $photoDate = get_the_date('F Y');
                    ?>
                    <ul class="post-footer-meta-list">
                        <li class="post-footer-meta-list-item post-footer-meta-date">
                            <time class="post-footer-meta-date-datetime" datetime="<?php echo $UTC_datetime ?>"><?php echo $photoDate ?></time>
                        </li>
                    </ul>
                </div>
            </footer>

        </article>

    <?php
    endwhile; // End the loop

    the_posts_pagination();
    ?>

<?php
else: // If no posts are found:
?>

    <article>
        <h2>Sorry, nothing to display</h2>
    </article>

<?php
endif;
