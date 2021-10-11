<?php
/**
 * The template for displaying the single posts.
 *
 * @package WordPress
 * @subpackage Ecf-theme
 */

get_header();

if ( have_posts() ):
    while (have_posts()):
        the_post();
?>
    <article class="container-lg">
        <h1><?php the_title(); ?></h1>
        <div><?php the_time( get_option( 'date_format' ) ); ?></div>
<?php
        if ( has_post_thumbnail() ):
            the_post_thumbnail( 'large' );
        endif;
?>
        <div><?php the_content(); ?></div>
    </article>
<?php
    endwhile;
endif;

get_footer();
