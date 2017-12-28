<?php get_header() ?>

<header class="header-bg">
	<!-- imagen cover con parallax -->
	<div class="parallax-bg">
		<div class="container hero-t">
			<h1 class="hero">Portafolio</h1>
			<h3 class="hero"><?php the_title() ?></h3>
		</div>
	</div>

</header>

<div class="container">

	<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<?php the_post_thumbnail() ?>
		<?php the_title() ?>
		<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
		<?php the_content() ?>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>
	
</div>
<button id="toTop" title="toTop"><span class="glyphicon glyphicon-chevron-up"></span></button>

<?php get_sidebar() ?>
<?php get_footer() ?>
</body>
</html>