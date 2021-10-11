<?php
/**
 * The template for displaying the single pages.
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
        <h1><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div><?php the_content(); ?></div>
    </article>
<?php
    endwhile;
endif;

get_footer();
