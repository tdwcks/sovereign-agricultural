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
		<section class="big-image">
			<img src="<?php the_field('image_two'); ?>"> 
		</section>
		<section class="info">
			<div class="grid-container">
				<div class="col-6">
					<h3><?php the_field('headline_one'); ?></h3>
					<?php the_field('copy_one'); ?>
				</div>
			</div>
		</section>
		<section class="logos">
			<div class="grid-container">
				<div class="pinboard">
					<div class="pin"></div>
					<div class="pin"></div>
					<div class="pin"></div>
					<div class="pin"></div>
					<?php if( have_rows('brands') ): ?>
					<div class="col-3">
						<?php while ( have_rows('brands') ) : the_row(); ?>
							<a href="<?php the_sub_field('link'); ?>">
								<img src="<?php the_sub_field('logo'); ?>"> 
							</a>
						<?php endwhile; ?>
					</div>	
					<?php endif; ?>			
				</div>
			</div>
		</section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>