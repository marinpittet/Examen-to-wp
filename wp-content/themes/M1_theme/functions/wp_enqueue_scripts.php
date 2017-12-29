<?php 

function dl_enqueue_scripts() {
	$theme_data = wp_get_theme();

	/* Deregister Scripts */
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );

	/* Register Scripts */
	wp_register_script('jQuery3','https://code.jquery.com/jquery-3.2.1.js', null, null, true);
	wp_register_script('jQuery-bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', null, null, true);
	wp_register_script('indexScript', get_parent_theme_file_uri('assets/js/indexScript.js'), null, null, true);
	wp_register_script('contactScript', get_parent_theme_file_uri('assets/js/contactScript.js'), null, null, true);
	wp_register_script('portfolioScript', get_parent_theme_file_uri('assets/js/portfolioScript.js'), null, null, true);
	wp_register_script('jQuery-masonry','https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js', null, null, true);	
	wp_register_script('flexsliderScript', get_parent_theme_file_uri('assets/js/jquery.flexslider.js'), null, null, true);


	if ( is_front_page() ) :
		/* Enqueue Scripts */
		wp_enqueue_script('jQuery3');
		wp_enqueue_script('jQuery-bootstrap');
		wp_enqueue_script('indexScript');

	elseif ( is_page( 'contacto' ) ) :
		wp_enqueue_script('jQuery3');
		wp_enqueue_script('jQuery-bootstrap');
		wp_enqueue_script('contactScript');

	elseif ( is_page( 'portafolio' ) ) :
		wp_enqueue_script('jQuery3');
		wp_enqueue_script('jQuery-bootstrap');
		wp_enqueue_script('portfolioScript');
		wp_enqueue_script('jQuery-masonry');

	else :
		wp_enqueue_script('jQuery3');
		wp_enqueue_script('jQuery-bootstrap');
		wp_enqueue_script('indexScript');
		wp_enqueue_script('flexsliderScript');

	endif;
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
	?>