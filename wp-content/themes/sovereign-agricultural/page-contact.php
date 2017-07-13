<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="hero-static">
		<div class="col-6">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		<img src="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>">
	</section>
	<section class="info">
		<div class="grid-container">
			<div class="col-6">
				<h3><?php the_field('headline_one'); ?></h3>
				<?php the_field('copy_one'); ?>
			</div>
		</div>
	</section>
	<section class="contact-form">
		<div class="info grid-container" style="padding-bottom: 0;">
			<div class="col-6">
				<h3>Contact Us</h3>
				<p>Fill out the form below and we will get back to you.</p>
			</div>
		</div>
		<div class="grid-container">
			<?php echo do_shortcode('[contact-form-7 id="125" title="Contact form 1"]') ?>
		</div>
	</section>
	<section id="map"></section>
	<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoidGR3Y2tzIiwiYSI6IlhwMGlGR28ifQ.irq5Rbn1WvGb_VIwn1auNA';
	var map = new mapboxgl.Map({
	container: 'map',
	style: 'mapbox://styles/mapbox/outdoors-v10',
	center: [-1.676638,53.60460], // starting position
	scrollZoom: false,
  	zoom: 17 // starting zoom
	});
	map.on('load', () => {
    map.loadImage('<?php echo get_site_url(); ?>/wp-content/themes/sovereign-agricultural/img/map-pin.png', (error, image) => {
        if (error) throw error;
        map.addImage('cat', image);
        map.addLayer({
            "id": "points",
            "type": "symbol",
            "source": {
                "type": "geojson",
                "data": {
                    "type": "FeatureCollection",
                    "features": [{
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [-1.676638,53.60460]
                        }
                    }]
                }
            },
            "layout": {
                "icon-image": "cat",
                "icon-size": 1
            }
        });
    });
});

	</script>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>