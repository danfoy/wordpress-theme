<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <title><?php

            wp_title( '' );
            if ( wp_title( '', false ) ) { echo ' | ';}
            bloginfo( 'name' );

        ?></title>

        <!-- Prefetches -->
        <link rel="dns-prefetch" href="//www.google-analytics.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Favicons: Generic -->
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-32.png">
        <link rel="icon" type="image/png" sizes="128x128" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-128.png">
        <link rel="icon" type="image/png" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-192.png">
        <link rel="icon" type="image/png" sizes="512x512" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-512.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-180.png"><!-- iOS/iPadOS/macOS/Safari -->
        <link rel="shortcut icon" sizes="192x192" href=“<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-192.png"><!-- Android -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,700,700i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100;0,8..144,200;0,8..144,300;0,8..144,400;0,8..144,500;0,8..144,600;0,8..144,700;0,8..144,800;0,8..144,900;1,8..144,100;1,8..144,200;1,8..144,300;1,8..144,400;1,8..144,500;1,8..144,600;1,8..144,700;1,8..144,800;1,8..144,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Serif:ital,opsz,wght@0,8..144,100;0,8..144,200;0,8..144,300;0,8..144,400;0,8..144,500;0,8..144,600;0,8..144,700;0,8..144,800;0,8..144,900;1,8..144,100;1,8..144,200;1,8..144,300;1,8..144,400;1,8..144,500;1,8..144,600;1,8..144,700;1,8..144,800;1,8..144,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Meta -->
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">

        <!-- WordPress Head -->
        <?php wp_head();?>

    </head>

    <body <?php body_class(); ?>>

        <div class="wrapper">

            <header class="masthead">

                <div class="masthead-title">
                    <a class="masthead-title-link" href="<?php echo esc_url( home_url() ); ?>">
                        <?php
                        bloginfo( 'name' );
                        ?>
                    </a>
                </div>

                <?php
                wp_nav_menu( array(
                    'theme_location'  => 'masthead',
                    'menu'            => 'masthead',
                    'container'       => 'nav',
                    'container_class' => 'masthead-nav',
                    'container_id'    => 'masthead-nav',
                    'menu_class'      => 'masthead-nav-menu',
                    'menu_id'         => 'masthead-nav-menu',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul class="masthead-nav-menu" class= "masthead-nav-menu">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ) );
                ?>

                <div class="masthead-buttons">
                    <button class="masthead-buttons-button masthead-buttons-menu-button" type="button">
                        <img class="masthead-buttons-button-image masthead-buttons-menu-button-image" alt="Menu" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNDgiIGhlaWdodD0iNDgiCnZpZXdCb3g9IjAgMCA0OCA0OCI+CjxwYXRoIGQ9Ik0gNS41IDkgQSAxLjUwMDE1IDEuNTAwMTUgMCAxIDAgNS41IDEyIEwgNDIuNSAxMiBBIDEuNTAwMTUgMS41MDAxNSAwIDEgMCA0Mi41IDkgTCA1LjUgOSB6IE0gNS41IDIyLjUgQSAxLjUwMDE1IDEuNTAwMTUgMCAxIDAgNS41IDI1LjUgTCA0Mi41IDI1LjUgQSAxLjUwMDE1IDEuNTAwMTUgMCAxIDAgNDIuNSAyMi41IEwgNS41IDIyLjUgeiBNIDUuNSAzNiBBIDEuNTAwMTUgMS41MDAxNSAwIDEgMCA1LjUgMzkgTCA0Mi41IDM5IEEgMS41MDAxNSAxLjUwMDE1IDAgMSAwIDQyLjUgMzYgTCA1LjUgMzYgeiI+PC9wYXRoPgo8L3N2Zz4="/>
                    </button>
                    <button class="masthead-buttons-button masthead-buttons-search-button" type="button">
                        <img class="masthead-buttons-button-image masthead-buttons-search-button-image"  alt="Search" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNDgiIGhlaWdodD0iNDgiCnZpZXdCb3g9IjAgMCA0OCA0OCI+CjxwYXRoIGQ9Ik0gMjAuNSA2IEMgMTIuNTA5NjM0IDYgNiAxMi41MDk2NCA2IDIwLjUgQyA2IDI4LjQ5MDM2IDEyLjUwOTYzNCAzNSAyMC41IDM1IEMgMjMuOTU2MzU5IDM1IDI3LjEzMzcwOSAzMy43NzkwNDQgMjkuNjI4OTA2IDMxLjc1IEwgMzkuNDM5NDUzIDQxLjU2MDU0NyBBIDEuNTAwMTUgMS41MDAxNSAwIDEgMCA0MS41NjA1NDcgMzkuNDM5NDUzIEwgMzEuNzUgMjkuNjI4OTA2IEMgMzMuNzc5MDQ0IDI3LjEzMzcwOSAzNSAyMy45NTYzNTcgMzUgMjAuNSBDIDM1IDEyLjUwOTY0IDI4LjQ5MDM2NiA2IDIwLjUgNiB6IE0gMjAuNSA5IEMgMjYuODY5MDQ3IDkgMzIgMTQuMTMwOTU3IDMyIDIwLjUgQyAzMiAyMy42MDI2MTIgMzAuNzc2MTk4IDI2LjQwNTcxNyAyOC43OTEwMTYgMjguNDcwNzAzIEEgMS41MDAxNSAxLjUwMDE1IDAgMCAwIDI4LjQ3MDcwMyAyOC43OTEwMTYgQyAyNi40MDU3MTcgMzAuNzc2MTk5IDIzLjYwMjYxNCAzMiAyMC41IDMyIEMgMTQuMTMwOTUzIDMyIDkgMjYuODY5MDQzIDkgMjAuNSBDIDkgMTQuMTMwOTU3IDE0LjEzMDk1MyA5IDIwLjUgOSB6Ij48L3BhdGg+Cjwvc3ZnPg=="/>
                    </button>
                </div>


            </header>
