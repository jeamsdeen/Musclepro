<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muscle Pro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.png" type="image/x-icon">
</head>
<body>
    <!-- https://xd.adobe.com/view/96ad7b0a-028a-40fc-a04c-8810280a1a73-c3fe/screen/831c1745-4577-4624-962e-a4b5a7409f04 -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
            <a class="btn btn-outline-light mr-2" href="<?php echo home_url(); ?>"><i class="fas fa-home mr-1"></i> Home</a>
            <a class="btn btn-outline-light mr-2" href="<?php echo get_permalink(get_option('page_for_posts')); ?>"><i class="fa-solid fa-newspaper mr-1"></i> Blog</a>
            <a class="navbar-brand mx-auto my-2" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo-light.svg" alt="Muscle Pro" style="width: 130px;"></a>
            <a href="<?php echo get_permalink( get_page_by_path('progression')); ?>" class="btn btn-outline-light mr-2"><i class="fas fa-chart-line mr-1"></i> Progression</a>
            <a class="btn btn-outline-light" href="<?php echo get_permalink( get_page_by_path('login')); ?>"><i class="fas fa-user mr-1"></i> Compte</a>
            </div>
        </nav>
    </header>



