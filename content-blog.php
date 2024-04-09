<!-- Page qui sert aux articles avec le tag "BLOG" -->
<style>
    h3  {
    font-size: 1.3rem;
    margin-top: 1.5em;
    }
    h1 {
    font-family: "Chaney", sans-serif;
    }
    h2 {
    margin-top: 1.5em;
    }
    img {
    width: 100%;
    }
    .text-center.mb-4::after {
    filter: blur(100px);
    opacity: 20%;
    position: relative;
    content: url(
    "<?php the_post_thumbnail_url('large'); ?>");
    z-index: -10;
    position: absolute;
    top: 0;
    left: -18%;
    }
</style>
<div class="mt-5">
  <div>
    <div class="col-md-8 offset-md-2">
        <?php if (have_posts()) :
            // Boucle chaque article
            while (have_posts()) : the_post();
        ?>
            <div class="text-center mb-4">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" class="rounded-image img-fluid" alt="<?php the_title(); ?>">
            <?php endif; ?>
            </div>
            <h1 class="text-center mb-4"><?php the_title(); ?></h1>
            <div>
                <?php the_content(); ?>
            </div>
          <?php endwhile;
      endif;
      ?>
    </div>
  </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="mb-4 text-danger">Autres articles</h2>
            <ul class="list-unstyled">
                <?php
                // Récupérer les trois autres articles du blog
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'category_name' => 'blog', 
                    'post__not_in' => array(get_the_ID()), // Exclure l'article actuel
                );
                $query = new WP_Query($args);

                // Boucle artilces
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <li class="my-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php
                    endwhile;
                    wp_reset_postdata(); 
                else :
                ?>
                    <li>Aucun autre article trouvé.</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
