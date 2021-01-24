<?php
/*
	Template Name: Restaurants
*/
get_header();?>

<img class="archive-restaurant-top-img" src="<?= get_field('banner_top_image',2)['url']; ?>" alt="">
<img class="archive-restaurant-hatch" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt="">
<p class="archive-restaurant-title title">Our Restaurants</p>

<?php get_template_part("parts/restaurants");

get_footer();
?>
