<?php
/*
Template Name: Infos
*/
get_header();
?>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<div class="informations">
	<h3>À propos</h3>
	<p><?php the_field('a-propos'); ?></p>

</div>
<div class="informations3">
	<h3>Contact</h3>
	<p><?php the_field('contact'); ?></p>
</div>

<div class="informations2">
		<h3>Références</h3>
		<div class="content_colonne"><?php the_field('clients'); ?></p>
</div>


<?php endwhile; ?>
<?php else : ?>
<h2>Erreur</h2>
<?php endif; ?>

<?php
get_footer();
