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
	<section class="product-picker">
		<div class="grid-container">
			<?php if( have_rows('series') ): ?>
				<nav>
					<ul>
					<?php $count = 0; while ( have_rows('series') ) : the_row(); $count++;?>
						<li><a name="<?php the_sub_field('series_slug'); ?>" class="js-valtra-link <?php if($count == 1){echo ' active';} ?>"><?php the_sub_field('series_title'); ?></a></li>
					<?php endwhile; ?>
					</ul>
				</nav>
			<?php endif; ?>
		</div>
	</section>
					
	<?php if( have_rows('series') ): $count = 0; ?>
		<?php while ( have_rows('series') ) : the_row(); $count++; ?>

		<section id="<?php the_sub_field('series_slug'); ?>" class="series <?php if($count == 1){echo ' active';} ?>">
			<div class="grid-container">
				<?php while ( have_rows('tractors') ) : the_row(); ?>
					<div class="tractor">
						<div class="col-8">
							<div class="image-square">
								<img src="<?php the_sub_field('image'); ?>">
							</div>
						</div>
						<div class="col-4">
							<h3><?php the_sub_field('title'); ?></h3>
							<h4><?php the_sub_field('strapline'); ?></h4>
							<p><?php the_sub_field('content'); ?></p>
							<a target="_blank" class="btn-one" href="<?php the_sub_field('link'); ?>">View On Valtra.co.uk</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php endwhile; ?>
	<?php else : ?>

		<!-- No post for that query -->

	<?php endif; ?>

<?php get_footer(); ?>
