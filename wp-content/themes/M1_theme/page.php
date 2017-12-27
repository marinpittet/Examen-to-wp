<?php get_header() ?>

<header>
	<div class="jumbotron">
		<h2><?php the_title() ?></h2>
	</div>
</header>
<section class="gallery">
	<div class="container">
		<div class="galeria">
			<a href="">
			<?php the_post() ?>
			<?php the_post_thumbnail() ?>
			<?php the_content(); ?>
			</a>
		</div>	
	</div>		
</section>
<button id="toTop" title="toTop"><span class="glyphicon glyphicon-chevron-up"></span></button>

<?php get_footer() ?>
</body>
</html>