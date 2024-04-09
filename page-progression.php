<?php /* Template Name: Progression */ ?>
<?php get_header(); ?>
    
<div class="banner py-5 mb-4">
  <div class="container text-center">
  <h2 class="text-uppercase text-center">Ma progression personnelle</h2>
  </div>
</div>

<div class="container mt-5 col-md-6">
    <!-- Section "Mon palmarès" -->
<section class="mb-4">
  <h2 class="d-inline-block">Mon palmarès</h2>
  <a href="#" class="float-right text-decoration-underline">Voir plus</a><hr class="dropdown-divider mb-4">
  <div class="row row-cols-1 row-cols-md-4 g-3 mt-3">
    <div class="col">
      <div class="text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/badge.svg" alt="Badge" class="img-fluid mb-2">
        <p class="mb-0">4 visites en club</p>
      </div>
    </div>
    <div class="col">
      <div class="text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/badge.svg" alt="Badge" class="img-fluid mb-2" https:="" placehold.co="">
        <p class="mb-0">1 visite en club</p>
      </div>
    </div>
    <div class="col">
      <div class="text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/badge.svg" alt="Badge" class="img-fluid mb-2" https:="" placehold.co="">
        <p class="mb-0">5 visites en club</p>
      </div>
    </div>
    <div class="col">
      <div class="text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/badge.svg" alt="Badge" class="img-fluid mb-2" https:="" placehold.co="">
        <p class="mb-0">10 visites en club</p>
      </div>
    </div>
  </div>
</section>

<!-- Section "Poids" -->
<section class="mb-5 mt-5 pt-5">
  <h2 class="d-inline-block">Poids</h2>
  <a href="#" class="float-right text-decoration-underline">Voir plus</a><hr class="dropdown-divider mb-4">
  <div class="row mt-3">
    <div class="col-md-6 d-flex align-items-center">
      <h1 class="display-4 font-weight-bold">72<small class="text-muted">kg</small></h1>
    </div>
    <div class="col-md-6">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/graph 1.svg" alt="Graphique de poids" class="img-fluid">
    </div>
  </div>
</section>

<!-- Section "Calories brulées" -->
<section class="mb-5 mt-5 pt-5">
  <h2 class="d-inline-block">Calories brulées</h2>
  <a href="#" class="float-right text-decoration-underline">Voir plus</a><hr class="dropdown-divider mb-4">
  <div class="row mt-3">
    <div class="col-md-6 d-flex align-items-center">
      <h1 class="display-4 font-weight-bold">15<small class="text-muted">Kcal</small></h1>
    </div>
    <div class="col-md-6">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/graph 2.svg" alt="Graphique de calories" class="img-fluid">
    </div>
  </div>
</section>

<!-- Section "Composition corporelle" -->
<section class="mb-5 pt-5 mt-5">
  <h2 class="d-inline-block">Composition corporelle</h2>
  <a class="float-right text-decoration-underline" href="#">Voir plus</a><hr class="dropdown-divider mb-4">
  <div class="row mt-3">
    <div class="col-md-6">
      <ul class="list-unstyled">
        <li><span class="bullet bullet-danger me-2"></span>Masse grasse -</li>
        <li><span class="bullet bullet-warning me-2"></span>Masse osseuse -</li>
        <li><span class="bullet bullet-success me-2"></span>Masse musculaire -</li>
      </ul>
    </div>
    <div class="col-md-6">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/graph 3.svg" alt="Graphique de composition" class="img-fluid">
    </div>
  </div>
</section>
<style>
.bullet {
  display: inline-block;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin-right: 1em;
}

.bullet-danger {
  background-color: #dc3545;
}

.bullet-warning {
  background-color: #ffc107;
}

.bullet-success {
  background-color: #28a745;
}
</style>
</div>


<?php get_footer(); ?>
