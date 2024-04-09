<!-- Page qui sert aux articles avec le tag "NUTRITION" (les recettes) -->

<style>
.hero-section {
    height: 50vh;
    width: 100%;
    position: relative;
}

.hero-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("<?php echo get_the_post_thumbnail_url(); ?>");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    filter: blur(15px);
    z-index: -1;
}

.hero-image-container {
    height: 100%;
}

.hero-image {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
}

</style>


<section class="hero-section">
    <div class="hero-image-container d-flex justify-content-center align-items-center">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', ['class' => 'img-fluid hero-image']); ?>
        <?php endif; ?>
    </div>
</section>


<div class="banner py-5 mb-4">
    <div class="container text-center">
    <h4 class="text-uppercase text-center font-weight-bolder"><?php the_title(); ?></h4>
    <?php if ($tags = get_the_tags()) echo '<h5><span class="badge badge-pill badge-danger"><i class="fa-solid fa-fire-flame-curved"></i>' . esc_html($tags[0]->name) . '</span></h5>'; ?>
    </div>
</div>

  <div class="container w-50 my-5">
    <?php the_content(); ?>

    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-danger btn-block text-uppercase mt-5">Voir plus de recettes</a>
</div>

<!--  -->