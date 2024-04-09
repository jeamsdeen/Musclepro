<?php /* Template Name: Programme */ ?>
<!-- Le template qui sert pour les pages contenant des programmes d'exercice (Masse musculaire & Cardio) -->

<?php get_header(); ?>

<!-- Style utilisant les classes Wordpress (lorsqu'on groupe des éléments dans l'éditeur visuel/no code) pour structurer -->
<style>
    /* Masse musculaire */
    .wp-block-group.is-nowrap.is-layout-flex {
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    }

    .wp-block-image {
        margin-right: 20px; /* Ajustez cette valeur selon l'espacement souhaité */
    }

    .wp-block-group.is-layout-constrained {
        flex: 1; /* Occupe tout l'espace restant */
    }

    @media (max-width: 767px) {
        .wp-block-group.is-nowrap.is-layout-flex {
            flex-wrap: wrap;
        }

        .wp-block-image {
            margin-right: 0;
            margin-bottom: 20px; /* Ajustez cette valeur selon l'espacement souhaité */
        }
    }
    .wp-block-separator{
        margin-bottom: 2em;
    }
</style>

<section class="hero-section-art">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Hero Image" class="img-fluid" style="width: 100%;">
</section>
<div class="banner py-5 mb-4">
  <div class="container text-center">
  <h2 class="text-uppercase text-center"><?php the_title()?></h2>
  </div>
</div>

<div class="container">

<?php
    // Start the loop.
    while (have_posts()) : the_post();
        $content = apply_filters('the_content', get_the_content());
        echo $content;
    // End the loop.
endwhile;
?>

</div>


<?php get_footer(); ?>