<?php /* Template Name: Nutrition */ ?>
<?php get_header(); ?>

<section class="hero-section-art">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Hero Image" class="img-fluid" style="width: 100%;">
</section>
<div class="banner py-5 mb-4">
  <div class="container text-center">
  <h2 class="text-uppercase text-center">Nutrition</h2>
  </div>
</div>
<style>
    .card {
        height: 100%;
    }

    .card-img-top {
        height: 300px; /* Définir la hauteur souhaitée pour l'image */
        object-fit: cover; /* Assurer que l'image couvre toute la hauteur de la carte */
        object-position: center; /* Centrer l'image à l'intérieur de la carte */
    }
</style>
<div class="container mt-5">
    <div class="row">
        <?php
        // Récupérer tous les articles ayant la catégorie "nutrition"
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'category_name' => 'nutrition'
        );
        $query = new WP_Query($args);

        // Loop sur les article recup
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <?php if (has_post_thumbnail()) : ?>
                            <img class="card-img-top" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                        </div>
                        <div class="card-footer">
                            <a href="<?php the_permalink(); ?>" class="btn btn-danger w-100">Lire la recette</a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata(); // Réinitialiser la requête
        else :
            ?>
            <div class="col-12">
                <p>Aucun article trouvé dans cette section.</p>
            </div>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>
