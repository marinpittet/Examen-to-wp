<?php 
if ( is_page( 'contacto' ) ) : ?>

	<fotter class="footer navbar-fixed-bottom">
		<div class="container">
			<a class="footer-brand col-lg-1 col-md-1 col-sm-1 col-xs-2" href="<?php echo home_url(); ?>"><img class="logo-footer" src="<?php bloginfo('template_url') ?>/assets/images/logo.svg"></a>
			<p class="col-lg-5 col-md-5 col-sm-5 col-xs-10 footer-name">Andrés Marín Pittet | <span class="footer-mail">andres@m1diseno.cl</span></p>

			<a href="https://www.behance.net/AndresMarinPittet" target="_blank" class="link-icon col-lg-1 col-md-1 col-sm-1 col-xs-3"><i class="fab fa-behance-square fa-3x"></i></a>

			<a href="https://www.linkedin.com/in/andres-marin-pittet-09276562/" target="_blank" class="link-icon col-lg-1 col-md-1 col-sm-1 col-xs-3"><i class="fab fa-linkedin fa-3x"></i></a>

			<a href="https://www.facebook.com/m1diseno/" target="_blank" class="link-icon col-lg-1 col-md-1 col-sm-1 col-xs-3"><i class="fab fa-facebook-square fa-3x"></i></a>

			<a href="https://github.com/marinpittet" target="_blank" class="link-icon col-lg-1 col-md-1 col-sm-1 col-xs-3"><i class="fab fa-github-square fa-3x"></i></a>
		</div>
	</fotter>

<?php else: ?>
	
	<fotter class="footer">
		<div class="container">
			<a class="footer-brand col-lg-1 col-md-1 col-sm-1 col-xs-2" href="<?php echo home_url(); ?>"><img class="logo-footer" src="<?php bloginfo('template_url') ?>/assets/images/logo.svg"></a>
			<p class="col-lg-5 col-md-5 col-sm-5 col-xs-10 footer-name">Andrés Marín Pittet | <span class="footer-mail">andres@m1diseno.cl</span></p>

			<a href="https://www.behance.net/AndresMarinPittet" target="_blank" class="link-icon col-lg-1 col-md-1 col-sm-1 col-xs-3"><i class="fab fa-behance-square fa-3x"></i></a>

			<a href="https://www.linkedin.com/in/andres-marin-pittet-09276562/" target="_blank" class="link-icon col-lg-1 col-md-1 col-sm-1 col-xs-3"><i class="fab fa-linkedin fa-3x"></i></a>

			<a href="https://www.facebook.com/m1diseno/" target="_blank" class="link-icon col-lg-1 col-md-1 col-sm-1 col-xs-3"><i class="fab fa-facebook-square fa-3x"></i></a>

			<a href="https://github.com/marinpittet" target="_blank" class="link-icon col-lg-1 col-md-1 col-sm-1 col-xs-3"><i class="fab fa-github-square fa-3x"></i></a>
		</div>
	</fotter>

<?php endif;?>

<?php _wp_footer_scripts() ?>