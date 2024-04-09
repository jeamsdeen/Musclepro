<?php get_header(); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card bg-login p-4 px-5">
            <div class="card-body">
                <h2 class="card-title text-center mb-5">Inscription</h2>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom" required>
                    </div>
                    <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse e-mail" required>
                  </div>
                  <div class="form-group mb-2">
                    <div class="input-group">
                      <input type="password" class="form-control" id="setPassword" placeholder="Entrez votre mot de passe" required>
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword"><i class="fa-solid fa-eye"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-2">
                    <div class="input-group">
                      <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmez votre mot de passe" required>
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword"><i class="fa-solid fa-eye"></i></button>
                      </div>
                    </div>
                  </div>
                  <a href="<?php echo get_permalink( get_page_by_path('profil')); ?>" class="btn btn-danger btn-block mt-5">S'inscrire</a>
                  <a href="<?php echo get_permalink( get_page_by_path('profil')); ?>" class="btn btn-outline-secondary btn-block">Se connecter</a>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
      var passwordInput = document.getElementById('password');
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        this.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
      } else {
        passwordInput.type = 'password';
        this.innerHTML = '<i class="fa-solid fa-eye"></i>';
      }
    });
</script>

<?php get_footer(); ?>