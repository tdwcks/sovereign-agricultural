<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="hero-static">
				<div class="col-6">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
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
		<section class="info team">
			<div class="grid-container">
				<div class="col-6">
					<h3><?php the_field('team_headline'); ?></h3>
					<?php the_field('team_copy'); ?>
				</div>
			</div>
		</section>
		<section class="big-image">
			<img src="<?php the_field('image_two'); ?>">
		</section>
		<section class="info">
			<div class="grid-container">
				<div class="col-6">
					<h3><?php the_field('headline_two'); ?></h3>
					<?php the_field('copy_two'); ?>
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
						<?php while ( have_rows('brands') ) : the_row(); ?>
					<div class="col-3">

							<a href="<?php the_sub_field('link'); ?>" target="_blank">
								<img src="<?php the_sub_field('logo'); ?>">
							</a>

					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
