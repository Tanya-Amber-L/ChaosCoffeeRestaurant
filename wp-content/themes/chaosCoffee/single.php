<?php get_header();

	if( has_category( "restaurant" ) ) {
		//get_template_part( "parts/restaurant" );
	} else {
		get_template_part( "parts/recipe" );
	}

get_footer(); ?>