<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>M1 Diseño by Andrés Marín</title>
	<link rel="icon" href="<?php bloginfo('template_url') ?>/assets/images/M1-favicon-tab.png">

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111956422-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111956422-1');
</script>

	
	<!-- CSS -->
	<?php wp_head() ?>

</head>
<body>
	
	<nav id="navbar" class="navbar-default navbar-fixed-top col-xm-12">
		<div class="container-fluid">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			</button>

			<div class="container">
				<div>
					<ul class="nav navbar-nav left col-lg-2 col-md-2 col-sm-6 col-xs-6">
						<li><a href="<?php echo home_url('portafolio') ?>">| Portafolio</a></li>
					</ul>
				</div>

				<div>
					<div class="navbar-nav">
						<a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="navbar-brand logo" src="<?php bloginfo('template_url') ?>/assets/images/logo.svg" alt="logo"></a>
					</div>
				</div> 

				<div class="collapse navbar-collapse" id="myNavbar"">

					<?php if ( has_nav_menu( 'header-menu-right' ) ) { ?>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu-right', 'menu_class' => 'nav navbar-nav right' ) ); ?>
					<?php } ?>
					
				</div>

			</div>					

		</div>
	</nav>
