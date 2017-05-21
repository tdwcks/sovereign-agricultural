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
		<section class="info image-info">
			<div class="grid-container">
				<div class="col-6">
					<h3><?php the_field('headline_two'); ?></h3>
					<?php the_field('copy_two'); ?>
				</div>
				<div class="col-6">
					<img src="<?php the_field('image_two'); ?>"> 
				</div>
			</div>
		</section>
		<section class="info">
			<div class="grid-container">
				<div class="col-6">
					<h3><?php the_field('headline_three'); ?></h3>
					<?php the_field('copy_three'); ?>
				</div>
			</div>
		</section>
		<?php endwhile; endif; ?>

<?php get_footer(); ?>
