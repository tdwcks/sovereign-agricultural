<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="hero-static">
			<div class="col-6">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		<img src="<?php wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>">
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
					<div class="col-8">
						<div class="image">
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
			</div>
		<?php endwhile; ?>
	</section>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>