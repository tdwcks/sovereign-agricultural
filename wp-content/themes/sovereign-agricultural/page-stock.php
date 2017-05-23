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
	<section class="info">
		<div class="grid-container">
			<div class="col-6">
				<h3><?php the_field('headline_one'); ?></h3>
				<?php the_field('copy_one'); ?>
			</div>
		</div>
	</section>
	<section class="stock">
		<?php while ( have_rows('stock') ) : the_row(); ?>
			<div class="grid-container">
				<div class="tractor">
					<div class="col-6">
						<img src="<?php the_sub_field('image'); ?>">
					</div>
					<div class="col-6">
						<h3><?php the_sub_field('title'); ?></h3>
						<h4><?php the_sub_field('strapline'); ?></h4>
						<p><?php the_sub_field('content'); ?></p>
						<a target="_blank" class="btn-one" href="<?php the_sub_field('link'); ?>">View On Valtra.co.uk</a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</section>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>