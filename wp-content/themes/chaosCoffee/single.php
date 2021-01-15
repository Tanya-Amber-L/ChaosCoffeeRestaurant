<?php get_header();

?><main class="main-single"><?php

	if( has_category( "restaurant" ) ) {
		//get_template_part( "parts/restaurant" );
	} else {
		get_template_part( "parts/recipe" );
	}

?></main><?php

get_footer(); ?>