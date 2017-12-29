<?php get_header() ?>
<div class="bg portfolio">
	<header class="header-bg portfolio">
		<!-- imagen cover con parallax -->
		<div class="parallax-bg portfolio">
			<div class="container hero-t portfolio">
				<h1 class="hero">Portafolio</h1>
				<h3 class="hero"><?php the_title() ?></h3>
			</div>
		</div>

	</header>
		<div class="container">
			<section class="proyect bg">
			<?php if ( have_posts() ) { ?>
			<?php while ( have_posts() ) { ?>
			<article class="description col-lg-5 col-md-5 col-sm-5 col-xs-5">
				<?php the_post(); ?>
				
				<h2 class="description title"><?php the_title() ?></h2>
				<hr>
				<p class="description text-body"><?php the_field('description') ?></p>

			</article>

			<article class="slider col-lg-6 col-md-6 col-sm-6 col-xs-6">


				<?php the_content() ?>
				<?php } ?>
				<?php } else { ?>
				<!-- Content -->
				<?php } wp_reset_query(); ?>
			</article>
		</section>

	</div>

	<button id="toTop" title="toTop"><span class="glyphicon glyphicon-chevron-up"></span></button>
</div>
<?php get_footer() ?>
</body>
</html>