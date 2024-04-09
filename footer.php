<!-- Footer file for the theme -->
<footer class="footer bg-dark text-white pt-2">
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- Première ligne avec les boutons -->
          <div class="d-flex justify-content-between py-5">
            <a class="btn btn-outline-light mr-2" href="<?php echo home_url(); ?>"><i class="fas fa-home mr-1"></i> Home</a>
            <a href="<?php echo get_permalink( get_page_by_path('progression')); ?>" class="btn btn-outline-light mr-2"><i class="fas fa-chart-line mr-1"></i> Progression</a>
            <a href="<?php echo get_permalink( get_page_by_path('profil')); ?>" class="btn btn-outline-light"><i class="fas fa-user"></i> Compte</a>
            <a class="btn btn-outline-light mr-2" href="<?php echo get_permalink(get_option('page_for_posts')); ?>"><i class="fa-solid fa-newspaper mr-1"></i> Blog</a>
          </div>
          <!-- Seconde ligne avec le texte et le lien -->
          <div class="d-flex justify-content-center align-items-center pt-2 pb-5">
            <span class="mr-2">MusclePro &copy; ISFSC 2024</span></br>
            <a href="<?php echo get_privacy_policy_url(); ?>">Conditions générales</a>
          </div>
        </div>
      </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
