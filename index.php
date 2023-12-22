<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusclePro</title>
    <link rel="stylesheet" href="css/index.css">
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
    
    <h2>CONNECTEZ-VOUS</h2>
    
    <div class="login-container">
        <form action="process-login.php" method="POST">
            <input type="email" name="email" placeholder="Entrez votre adresse e-mail" required>
            <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
            <a href="#">Mot de passe oublié ?</a>
            <button type="submit">SE CONNECTER</button>
            <p>Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
        </form>
    </div>
    
    <?php include 'footer.php'; ?>
