<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Ecf-theme
 */

get_header();

// La boucle normale
if ( have_posts() ):
    while (have_posts()):
        the_post();

        // La boucle
        get_template_part('loop', 'post');

    endwhile;
endif;

get_footer();
