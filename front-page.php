<?php

// page d'accueil

get_header();

if ( have_posts() ):
    while (have_posts()):
        the_post();

        // Le contenu (bloc entête)
        get_template_part('header', 'page');
        
    endwhile;
endif;

// Les paramètres de la requête WP_QUery
$args = array(
    // Sélection de pages (au lieu de posts)
    'post_type' => 'post',
    'pagename' => 'accueil',
    
);
// Exécution de la requête WP_Query
$query = new WP_Query( $args );
if ( $query->have_posts() ):
    while ($query->have_posts()):
        $query->the_post();
?>
    <article class="container-lg">
        <h2><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_time( get_option( 'date_format' ) ); ?></div>
        <a href="<?= get_permalink(); ?>">
<?php
        if ( has_post_thumbnail() ):
            the_post_thumbnail( 'medium' );
        endif;
        ?>
        </a>
        <div><?php the_content(); ?></div>
    </article>
<?php
    endwhile;
endif;

// Restauration des paramètres originaux de la requête de l'utilisateur
wp_reset_postdata();


get_footer();