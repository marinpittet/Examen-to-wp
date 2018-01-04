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
		
		<section class="proyect">
			<div class="slider-portfolio">
				<h2 class="description title"><?php the_title() ?><span class="button volver">
					<a href="<?php echo home_url('portafolio') ?>" class="btn btn-primary" role="button">Volver <i class="fas fa-reply"></i></a>
				</span></h2>
				
				<div class="separador-portfolio"></div>

				<article class="description col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<?php if ( have_posts() ) { ?>
					<?php while ( have_posts() ) { ?>

					<?php the_post(); ?>

					<p class="description text-body"><?php the_field('description') ?></p>

				</article>
				<?php } ?>
				<?php } else { ?>
				<!-- Content -->
				<?php } wp_reset_query(); ?>

				<article class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<div>
						<?php customGallery($post->ID); ?>
					</div>
				</article>

			</div> 	
			<div class="separador-portfolio"></div>

			<div id="disqus_thread"></div>
			<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://m1-diseno.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


</section>

</div>

<button id="toTop" title="toTop"><span class="glyphicon glyphicon-chevron-up"></span></button>
</div>
<?php get_footer() ?>
</body>
</html>