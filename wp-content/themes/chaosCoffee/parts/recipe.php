
<main class="main-single">
	
	<?php 
		if( have_posts() ) {
			while( have_posts() ) {
				the_post(); 
	?>

	<section class="recipe__banner">
		<div class="recipe__banner__wrapper">
			<div class="recipe__banner__info">
				<p class="recipe__banner__date"><?php the_date(); ?></p>
				<?php 
					$categories = get_categories([]);
					foreach ($categories as $category) { 
						if ($category->slug !== "recipe" AND $category->slug !== "restaurant") { ?>
						<div class="recipe__banner__category">
							<img src="<?= get_template_directory_uri(); ?>/assets/svg/cutelry.svg" alt="" class="icon">
							<p><?= $category->name; ?></p>
						</div>
					<?php }}
				?>
			</div>
			<h1 class="recipe__banner__title"><?php the_field( "banner_title" ); ?></h1>
			<h2 class="recipe__banner__subtitle"><?php the_field( "banner_subtitle" ); ?></h2>
			<div class="recipe__banner__image-wrapper">
				<img 
					src="<?= the_field( "banner_image" ) ?>" 
					alt="recipe picture" 
					class="recipe__banner__image">
			</div>
		</div>
		<div class="recipe__banner__border-wrapper">
			<img src="<?= get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" class="recipe__banner__border">
		</div>
	</section>

	<section class="recipe__ingredients">
		<h3 class="recipe__step-title">Ingredients</h3>
		<?php the_field( "ingredients" ); ?>
	</section>

	<section class="recipe__preparation">
		<?php
			if( have_rows('instructions') ):
				$instruction_number = 1; ?>
				<h3 class="recipe__step-title">Instructions</h3>
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
								?>
								<div class="recipe__instruction__image-wrapper">
									<img src="<?= $image ?>"  alt="recipe picture" class="recipe__instruction__image">
								</div>
								<?php
							}
						?>
					</li>
				<?php endwhile; ?>
				</ul>
			<?php endif;
		?>

	</section>

	<section class="recipe__share">
		<ul class="recipe__share__links">
			<li class="rslink-wrapper">
				<a href="#" class="recipe__share__link--facebook rslink">
					<img src="<?= get_template_directory_uri(); ?>/assets/svg/facebook.svg" alt="logo" class="icon">
				</a>
			</li>
			<li class="rslink-wrapper">
				<a href="#" class="recipe__share__link--twitter rslink">
					<img src="<?= get_template_directory_uri(); ?>/assets/svg/twitter.svg" alt="logo" class="icon">
				</a>
			</li>
			<li class="rslink-wrapper">
				<a href="#" class="recipe__share__link--instagram rslink">
					<img src="<?= get_template_directory_uri(); ?>/assets/svg/instagram.svg" alt="logo" class="icon">
				</a>
			</li>
			<li class="rslink-wrapper">
				<a href="#" class="recipe__share__link--mail rslink">
					<img src="<?= get_template_directory_uri(); ?>/assets/svg/mail-2.svg" alt="logo" class="icon">
				</a>
			</li>
		</ul>
	</section>

	<?php
			}
		}
	?>

</main>