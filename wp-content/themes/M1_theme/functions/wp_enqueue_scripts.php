<?php 

function dl_enqueue_scripts() {

	/* Deregister Scripts */
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );

	/* Register Scripts */
	wp_register_script('jQuery3', get_parent_theme_file_uri('assets/js/lib/jquery-3.2.1.js'), null, null, true);
	wp_register_script('bootstrap', get_parent_theme_file_uri('assets/js/lib/bootstrap.min.js'), array('jQuery3'), null, true);
	wp_register_script('indexScript', get_parent_theme_file_uri('assets/js/indexScript.js'), array('jQuery3'), null, true);
	wp_register_script('contactScript', get_parent_theme_file_uri('assets/js/contactScript.js'), array('jQuery3'), null, true);
	wp_register_script('portfolioScript', get_parent_theme_file_uri('assets/js/portfolioScript.js'), array('jQuery3'), null, true);
	wp_register_script('jQuery-masonry', get_parent_theme_file_uri('assets/js/lib/masonry.pkgd.js'), array('jQuery3'), null, true);	
	wp_register_script('flexsliderScript', get_parent_theme_file_uri('assets/js/lib/jquery.flexslider.js'), array('jQuery3'), null, true);


	wp_enqueue_script('bootstrap');
	wp_enqueue_script('flexsliderScript');


	if ( is_front_page() ) :
		wp_enqueue_script('indexScript');

	elseif ( is_page( 'contacto' ) ) :
		wp_enqueue_script('contactScript');

	elseif ( is_page( 'portafolio' ) ) :
		wp_enqueue_script('jQuery-masonry');
		wp_enqueue_script('portfolioScript');

	elseif ( is_single()) :
		wp_enqueue_script('portfolioScript');
		
	else :
		wp_enqueue_script('indexScript');

	endif;
}
	
add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>