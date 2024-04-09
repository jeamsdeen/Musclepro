<?php get_header(); ?>

<div class="banner py-5 mb-4">
    <div class="container text-center"><h2 class="text-uppercase text-center">Profil</h2></div>
    </div>

    <div class="container mt-5">
        <div class="photo-profile mx-auto d-block">
            <img src="https://via.placeholder.com/200" alt="Photo">
            <i class="fas fa-pencil-alt edit-icon text-white"></i>
        </div>
    </div>

    <div class="container mt-5 col-md-6">
        <table class="table">
            <tbody>
            <tr>
              <td class="border-top-0 border-bottom">Nom</td>
              <td class="border-top-0 border-bottom">John</td>
              <td class="border-top-0 border-bottom"><button class="btn btn-link edit-btn"><i class="fas fa-pencil-alt"></i></button></td>
            </tr>
            <tr>
              <td class="border-top-0 border-bottom">Prénom</td>
              <td class="border-top-0 border-bottom">Nabetsi</td>
              <td class="border-top-0 border-bottom"><button class="btn btn-link edit-btn"><i class="fas fa-pencil-alt"></i></button></td>
            </tr>
            <tr>
              <td class="border-top-0 border-bottom">Poids</td>
              <td class="border-top-0 border-bottom">72 kg</td>
              <td class="border-top-0 border-bottom"><button class="btn btn-link edit-btn"><i class="fas fa-pencil-alt"></i></button></td>
            </tr>
            <tr>
              <td class="border-top-0 border-bottom">Taille</td>
              <td class="border-top-0 border-bottom">175 cm</td>
              <td class="border-top-0 border-bottom"><button class="btn btn-link edit-btn"><i class="fas fa-pencil-alt"></i></button></td>
            </tr>
            <tr>
              <td class="border-top-0 border-bottom">Mail</td>
              <td class="border-top-0 border-bottom">john1998@example.com</td>
              <td class="border-top-0 border-bottom"><button class="btn btn-link edit-btn"><i class="fas fa-pencil-alt"></i></button></td>
            </tr>
            <tr>
              <td class="border-top-0 border-bottom">Mot de passe</td>
              <td class="border-top-0 border-bottom">*************</td>
              <td class="border-top-0 border-bottom"><button class="btn btn-link edit-btn"><i class="fas fa-pencil-alt"></i></button></td>
            </tr>
            </tbody>
        </table>
        <a href="<?php echo get_permalink( get_page_by_path('login')); ?>" class="btn btn-danger btn-block mt-5">Se déconncter</a>
    </div>

<?php get_footer(); ?>