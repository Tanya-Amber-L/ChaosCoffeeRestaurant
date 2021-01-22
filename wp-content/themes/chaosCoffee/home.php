<?php get_header(); ?>

<main class="recipes__main">
	<section class="recipes__header">
		<div class="recipes__header__background-wrapper">
			<img src="<?= get_field( "banner_background", 13 ); ?>" alt="" class="recipes__header__background">
		</div>
		<div class="recipes__header__content">
			<div class="recipes__header__text">
				<h2 class="recipes__header__pretitle"><?= get_field( "pre-title", 13 ); ?></h2>
				<h1 class="recipes__header__title"><?= get_field( "title", 13 ); ?></h1>
			</div>
			<p class="recipes__header__subtext">&horbar;&horbar; check our menu</p>
		</div>
	</section>
	<section class="recipes__content">
		<div class="recipes__categories">
			<?php
				$categories = get_categories();
				?><ul class="recipes__categories__list"><?php
					foreach ($categories as $category) {
						if ($category->slug !== "recipe" AND $category->slug !== "restaurant") { ?>
							<li class="recipes__categories__item">
								<a href="#" class="recipes__categories__link">
									<img src="<?= get_template_directory_uri(); ?>/assets/svg/cutelry.svg" alt="" class="icon">
									<p class="recipes__categories__category"><?= $category->name; ?></p>
								</a>
							</li><?php
						}
					}
				?></ul>
		</div>
		<div class="recipes__results">
			<?php if( have_posts() ) :
				while( have_posts() ) :
					the_post(); 
					if( !has_category( "restaurant" ) ): ?>
						<article class="recipes__results__article">
							<div class="recipes__results__image-wrapper">
								<img src="<?= get_field('banner_image'); ?>" alt="" class="recipes__results__image">
							</div>
							<div class="recipes__results__informations">
								<div class="recipes__results__content">
									<p class="recipes__results__date">
										<img src="<?= get_template_directory_uri(); ?>/assets/svg/time-clock.svg" alt="" class="recipes__results__clock"> 
										<?= get_the_date(); ?>
									</p>
									<div class="recipes__results__categories">
										<?php $categories = get_categories([]);
										foreach ($categories as $category) :
											if ($category->slug !== "recipe" AND $category->slug !== "restaurant") : ?>
												<div class="recipes__results__category">
													<img src="<?= get_template_directory_uri(); ?>/assets/svg/cutelry.svg" alt="" class="icon">
													<p><?= $category->name; ?></p>
													</div>
											<?php endif; 
										endforeach; ?>
									</div>
									<p class="recipes__results__title"><?= get_field('banner_title'); ?></p>
									<p class="recipes__results__subtitle"><?= substr( get_field('banner_subtitle'), 0, 150 )."…"; ?></p>
								</div>
								<a href="<?= the_permalink(); ?>" class="recipes__results__more">READ MORE</a>
							</div>
						</article><?php
					endif;
				endwhile;
				posts_nav_link();
			endif; ?>
		</div>
		<div class="recipes__pagination">
			<?php the_posts_pagination(); ?>
		</div>
	</section>
	<?php get_template_part('parts/discover-menu') ?>
</main>

<?php get_footer(); ?>