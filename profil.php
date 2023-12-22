<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusclePro</title>
    <link rel="stylesheet" href="css/profil.css">
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
        <h2>PROFIL</h2>
    </div>

    <div class="profile-container">
        <div class="avatar-section">
            <img src="images/user.png" alt="Avatar" class="avatar">
        </div>
        <form class="profile-form">
            <label for="name">Nom</label>
            <input type="text" id="name" value="John">

            <label for="username">Pseudo</label>
            <input type="text" id="username" value="John99">

            <label for="weight">Poids</label>
            <input type="text" id="weight" value="72 kg">

            <label for="email">Mail</label>
            <input type="email" id="email" value="john.pro@hotmail.com">

            <label for="password">Mot de passe</label>
            <input type="password" id="password" value="********">

        </form>
    </div>
    <?php include 'footer.php'; ?>
