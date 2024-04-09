<?php get_header(); ?>

<?php
// Vérifier la catégorie de l'article actuel
$categories = get_the_category();
$category_names = wp_list_pluck($categories, 'slug');

if (in_array('blog', $category_names)) {
    // Afficher le contenu spécifique pour la catégorie "blog"
    get_template_part('content', 'blog');
} elseif (in_array('nutrition', $category_names)) {
    // Afficher le contenu spécifique pour la catégorie "nutrition"
    get_template_part('content', 'nutrition');
}  else {
    // Aucune catégorie correspondante, afficher le contenu par défaut
    get_template_part('content', 'default');
}
?>

<?php get_footer(); ?>