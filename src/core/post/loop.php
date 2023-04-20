<?php
// Check for posts
if ( have_posts() ) :

    // Loop through posts
    while (have_posts()) :

        // Setup post data
        the_post();
        ?>
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <header class="post-header">
                <h2 class="post-header-title">
                    <?php
                    if (!is_singular()) { echo '<a href="' . get_permalink() . '" title="' . the_title_attribute(['echo' => false]) . '" class="post-title-link">'; };
                    the_title();
                    if (!is_singular()) { echo '</a>'; };
                    ?>
                </h2>
                <?php
                if (is_singular() && !get_post_format() && has_excerpt()) { ?>
                <div class="post-header-excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <?php
                }
                ?>
            </header>

            <div class="post-content">
                <?php
                if (!is_singular() && has_post_thumbnail()) the_post_thumbnail();
                if (!is_singular()) the_excerpt();
                if (is_singular()) the_content();
                ?>
            </div>

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
