<?php
get_header();
?>

<main class="main" aria-label="Content">

    <?php
    get_template_part( 'loop' );
    get_template_part( 'pagination' );
    ?>

</main>

<?php
get_footer();
