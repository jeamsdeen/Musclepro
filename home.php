<?php get_header(); ?>
    
<div class="banner py-5 mb-4">
  <div class="container text-center">
  <h2 class="text-uppercase text-center">Blog & Articles</h2>
  </div>
</div>

<div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-8 mb-6">
        <!-- ARTICLES -->
        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'blog', 
            'posts_per_page' => -1, // Nombre d'articles à afficher (-1 pour tous)
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>
                <div class="card mb-4">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h3 class="card-title text-center"><?php the_title(); ?></h3>
                        <p class="card-text text-center"><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                        <div class="text-center flex">
                            <a href="<?php the_permalink(); ?>" class="btn btn-danger w-100">Lire la suite</a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata(); // reset les données de la requête
        ?>
        <!-- Fin ARTICLES -->
    </div>
  </div>
</div>


<?php get_footer(); ?>
