<?php get_header(); ?>

<section class="hero-section">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/hero.png" alt="Hero Image" class="img-fluid" style="width: 100%;">
	<div class="banner py-5 mb-4">
		<div class="container text-center"><h2 class="text-uppercase text-center">Programmes sportifs</h2></div>
	</div>
</section>

<div class="container">
	<!-- Article 3 -->
	<div class="card mb-4">
		<div class="row no-gutters">
			<div class="col-md-5">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/article/03.jpg" class="card-img" alt="Article Image">
			</div>
			<div class="col-md-7 prog">
				<div class="card-body d-flex justify-content-between h-100 flex-column">
					<h4 class="card-title text-uppercase">Nutrition</h4>
					<p class="card-text">On désigne, par nutrition sportive, l’alimentation spécifique d’un sportif. Au quotidien, un sportif a, comme tout le monde, des besoins nutritionnels.</p>
					<p class="card-text">Cependant, ces besoins nutritionnels peuvent parfois être accrus par la pratique intensive d’un sport.</p>
					<a href="<?php echo esc_url(get_permalink(get_page_by_path('nutrition')->ID)); ?>" class="btn btn-danger btn-block text-uppercase">En savoir plus</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col">
	<!-- Article 1 -->
	<div class="card mb-4">
		<div class="row no-gutters">
			<div class="col-md-5">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/article/01.png" class="card-img" alt="Article Image">
			</div>
			<div class="col-md-7 prog">
				<div class="card-body d-flex justify-content-between h-100 flex-column">
					<h4 class="card-title text-uppercase">MASSE MUSCULAIRE</h4>
					<p class="card-text">En musculation, la prise de masse est une période pendant laquelle on va augmenter le volume du muscle, ce qui se caractérise donc par une prise de poids.</p>
					<p class="card-text">L’objectif ici n’est pas seulement de prendre du muscle, mais aussi du poids.</p>
					<a href="<?php echo esc_url(get_permalink(get_page_by_path('massemusculaire')->ID)); ?>" class="btn btn-danger btn-block text-uppercase">En savoir plus</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Article 2 -->
	<div class="card mb-4">
		<div class="row no-gutters">
			<div class="col-md-5">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/article/02.jpg" class="card-img" alt="Article Image">
			</div>
			<div class="col-md-7 prog">
				<div class="card-body d-flex justify-content-between h-100 flex-column">
					<h4 class="card-title text-uppercase">Cardio</h4>
					<p class="card-text">Le cardio training, est une forme d’activité physique rythmique qui permet d’augmenter votre fréquence cardiaque dans votre zone cible de fréquence cardiaque.</p>
					<p class="card-text">En effet, c’est dans cette zone que votre corps brûle le plus de graisses et de calories.</p>
					<a href="<?php echo esc_url(get_permalink(get_page_by_path('cardio')->ID)); ?>" class="btn btn-danger btn-block text-uppercase">En savoir plus</a>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>

<?php 
get_footer();
?>