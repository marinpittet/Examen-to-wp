<?php get_header() ?>
<header class="header-bg">
	<!-- imagen cover con parallax -->
	<div class="parallax-bg">
		<div class="container hero-t">
			<h1 class="hero">Portafolio</h1>
			<h3 class="hero">Andrés Marín Pittet</h3>
		</div>
	</div>

</header>

<div class="container">
	<section class="thumbnails">
		<div class="grid">
			<div class="grid-sizer"></div>
			<div class="gutter-sizer"></div>


			<!-- thumbnails de ejemplo para acomodar el layout de la pagina y comprobar media querys del plugin -->
			<?php
			$portfolio_params = array(
				'post_type'     => 'portfolio',
				'post_per_page' => 24
			);

			$get_portfolio = new WP_Query( $portfolio_params );

			while ( $get_portfolio->have_posts() ) {
				$get_portfolio->the_post();
				?>
				<div class="grid-item">	
					<div class="thumbnail">
						<?php the_post_thumbnail() ?>
						<div class="caption">
							<h4><?php the_title() ?></h4>
							<p class="content"><?php the_content() ?></p>
							<?php 

								$page = get_field('url');
								$link = get_field('text');

								if( $page ): ?>

								<p class="button">
									<a href="<?php echo $page; ?>" class="btn btn-primary" role="button">Ver <i class="fas fa-search-plus"></i></a>
								</p>

							<?php else: ?>

								<p class="button">
									<a href="<?php echo $link; ?>" class="btn btn-primary" role="button">Ver <i class="fas fa-search-plus"></i></a>
								</p>

								<?php endif; ?>	

						</div>
					</div>
				</div>

			<?php } wp_reset_postdata(); ?>
			<!-- Fin thumbnails de ejemplo para acomodar el layout de la pagina y comprobar media querys del plugin -->


		</div>
</section>
</div>
<button id="toTop" title="toTop"><span class="glyphicon glyphicon-chevron-up"></span></button>

<?php get_footer() ?>
</body>
</html>