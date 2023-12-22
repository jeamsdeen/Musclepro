<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusclePro</title>
    <link rel="stylesheet" href="css/inscription.css">
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
    
    <div class="inscription-container">
        <h1>INSCRIVEZ-VOUS</h1>
        <form>
            <input type="text" name="nom" placeholder="Entrez votre nom">
            <input type="text" name="prenom" placeholder="Entrez votre prenom">
            <input type="email" name="email" placeholder="Entrez votre adresse e-mail">
            <input type="password" name="password" placeholder="Entrez votre mot de passe">
            <input type="password" name="confirm_password" placeholder="Confirmer le mot de passe">
            <button type="submit">S'INSCRIRE</button>
            <p>Vous avez un compte ? <a href="index.php">Connectez-vous</a></p>
        </form>
    </div>
    <?php include 'footer.php'; ?>
