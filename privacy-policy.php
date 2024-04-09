<?php
get_header();
$date = get_the_date('j M Y, H:i:s');
?>

<div class="container my-5 py-2">
    <div class="mt-1 mb-4">
		<div class=""><h2 class="text-uppercase"><?php the_title();?></h2></div>
        <p>Mise à jour le <?php echo $date ?></p>
	</div>
    <div class="pt-3">
        <?php the_content() ?>
    </div>
    
</div>
<style>
h3 {
    margin-top: 1.8em;
}
</style>

<?php get_footer(); ?>
