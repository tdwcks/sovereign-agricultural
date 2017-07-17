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
	<section class="stock-list">
		<div class="large-9 columns">
			<?php $args = array(
				'post_type' => 'stock',
				'post_status' => 'publish',
				'posts_per_page' => '-1',
				'orderby' => 'menu_order title',
				'order' => 'ASC',
			);
			$stock = new WP_Query( $args );

			if ($stock->have_posts()) : ?>
				<div class="row">
					<?php while ($stock->have_posts()) : $stock->the_post();
						$image = get_the_post_thumbnail_url(); ?>

						<div class="grid-container">
							<div class="stock-item">
								<div class="image" style="background-image: url('<?= $image ?>');"></div>
								<div class="content">
									<h3><?php the_title() ?></h3>
									<h4><?php the_field('strap_line'); ?></h4>

									<ul>
									<?php while( have_rows('features') ): the_row();
										$feature = get_sub_field('feature'); ?>
										<li><?= $feature ?></li>
									<?php endwhile; ?>
									</ul>

									<h3 class="price">£<?php the_field('price'); ?></h3>
									<a href="<?php the_permalink(); ?>" class="btn-one">View More</a>
								</div>
							</div>
						</div>
			<?php endwhile;
				wp_reset_postdata();
			endif; ?>
		</div>
	</section>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>