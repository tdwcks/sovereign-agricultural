<?php get_header(); ?>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="hero-static">
		<div class="grid-container">
			<div class="col-6">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>
		<img src="<?php the_post_thumbnail(); ?>">
	</section>
	<section class="contact-form">
		<div class="grid-container">	
				<?php echo do_shortcode('[contact-form-7 id="125" title="Contact form 1"]') ?>
		</div>
	</section>
	<section id="map"></section>
	<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoidGR3Y2tzIiwiYSI6IlhwMGlGR28ifQ.irq5Rbn1WvGb_VIwn1auNA';
	var map = new mapboxgl.Map({
	container: 'map',
	style: 'mapbox://styles/mapbox/light-v9'
	});
	</script>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>