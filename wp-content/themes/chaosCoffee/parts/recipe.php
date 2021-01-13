<?php 
	if( have_posts() ) {
		while( have_posts() ) {
			the_post(); 
?>

<section class="recipe__banner">
	<div class="recipe__info">
		<p class="recipe__date"><?php the_date(); ?></p>
		<?php 
			$categories = get_categories([]);
			foreach ($categories as $category) { 
				if ($category->slug !== "recipe" AND $category->slug !== "restaurant") { ?>
				<div class="recipe__category">
					<img src="<?= get_template_directory_uri(); ?>/assets/svg/cutelry.svg" alt="" class="icon">
					<p><?= $category->name; ?></p>
				</div>
			<?php }}
		?>
	</div>
	<h1 class="recipe__name title"><?php the_field( "banner_title" ); ?></h1>
	<h2 class="recipe__name subtitle"><?php the_field( "banner_subtitle" ); ?></h2>
</section>

<section class="recipe__ingredients">
	<h3 class="subtitle">Ingredients</h3>
	<?php the_field( "ingredients" ); ?>
</section>

<section class="recipe__preparation">
	<?php
		if( have_rows('instructions') ):
			$instruction_number = 1; ?>
			<ul class="recipe__instructions">
			<?php while( have_rows('instructions') ): the_row(); ?>
				<li class="recipe__instruction">
					<div class ="recipe__instruction__content">
						<p class="recipe__instruction__number"><?= $instruction_number++ ?></p>
						<p class="recipe__instruction__text"><?= get_sub_field( 'instruction', false ); ?></p>
					</div>
					<?php 
						$image = get_sub_field('image');
						if( $image ) {
							?><img src=<?= $image; ?> class="recipe__instruction__image"><?php
						}
					?>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif;
	?>

</section>

<?php 
		}
	}
?>