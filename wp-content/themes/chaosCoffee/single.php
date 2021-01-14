<?php get_header();

?><main class="main-single"><?php

	if( !has_category( "restaurant" ) ) {
		get_template_part( "parts/recipe" );
	} else {
		//get_template_part( "parts/restaurant" );
	}

?></main><?php

get_footer(); ?>