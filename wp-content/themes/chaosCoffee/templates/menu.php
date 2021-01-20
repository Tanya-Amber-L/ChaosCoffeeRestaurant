<?php
/*
	Template Name: Menu
*/
get_header();
?>


<main>

test tes test

	<section class="banner">

		<div class="banner__title">
			<img class="banner__title__img" src="<?= get_field('image')['url']; ?>" alt="">
			<img class="banner__title__hatch" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt="">
			<div class="banner__title__text">
				<h2 class="main-subtitle"> <?= get_field('subtitle'); ?> </h2>
				<h1 class="main-title"> <?= get_field('title'); ?> </h1>
				<a href="<?= get_field('link')['url']; ?>"> &horbar;&horbar; <?= get_field('_link')['title']; ?> </a> 
			</div>
		</div>

	</section>

</main>


<?php
get_footer();
?>