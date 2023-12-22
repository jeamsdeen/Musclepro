<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusclePro</title>
    <link rel="stylesheet" href="css/accueil.css">
</head>
<body>
    <header>
        <div class="header-icons">
            <a href=""><img src="images/notification.jpg" alt="Notifications"></a>
            <a href="profil.php"><img src="images/profil.jpg" alt="Profil"></a> 
            <span>MUSCLE PRO</span>
            <a href=""><img src="images/loupe.jpg" alt="Recherche"></a> 
        </div>
    </header>

    <div class="header-content">
        <img src="images/01.png" alt="Image d'entête" id="header-image">
        <h2>PROGRAMME SPORTIF</h2>
    </div>
    
    <main>
        <section id="programme-sportif">
            <article id="masse-musculaire">
                <img src="images/02.png" alt="Masse Musculaire">
                <h3><a href="massemusculaire.php">MASSE MUSCULAIRE</a></h3>
                <p>En musculation, la prise de masse est une période pendant 
                    laquelle on va augmenter le volume du muscle, ce qui se 
                    caractérise donc par une prise de poids.
                </p>
                <div class="texte-separe">
                    <span class="texte-rouge">L’objectif ici n’est pas seulement de prendre
                    du muscle, mais aussi du poids.</span>
                </div>
            </article>

            <article id="cardio">
                <img src="images/03.jpg" alt="Cardio">
                <h3><a href="cardio.php">CARDIO</a></h3>
                <p>Le cardio training, est une forme d’activité
                    physique rythmique qui permet d’augmenter
                    votre fréquence cardiaque dans votre zone cible
                    de fréquence cardiaque.
                </p>
                <div class="texte-separe">
                    <span class="texte-rouge">En effet, c’est dans cette zone que votre
                        corps brûle le plus de graisses et de calories.</span>
                </div>
            </article>

            <article id="nutrition">
                <img src="images/pexels-kaboompics-com-5938.jpg" alt="Nutrition">
                <h3><a href="nutrition.php">NUTRITION</a></h3>
                <p>On désigne, par nutrition sportive, l’alimentation
                    spécifique d’un sportif. Au quotidien, un sportif a,
                    comme tout le monde, des besoins nutritionnels.</p>
                    <div class="texte-separe">
                        <span class="texte-rouge">Cependant, ces besoins nutritionnels peuvent
                            parfois être accrus par la pratique intensive
                            d’un sport.</span>
                    </div>
            </article>
        </section>
    </main>
    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>
