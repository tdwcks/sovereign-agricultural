<!-- Default page -->
<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		 <section class="hero-static">
			<div class="col-6">
				<h2><?php the_title(); ?></h2>
				<p><?php the_field('strap_line'); ?></p>
			</div>
			<img src="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>">

			<a class="back-btn" href="<?php echo get_site_url(); ?>/stock">Back To Stock</a>
		</section>

		<section class="stock-single">
			<div class="grid-container">
				<div class="stock-item">
					<div class="row">
						<div class="col-8">
							<h1><?php the_title(); ?></h1>
							<h2>£<?php the_field('price'); ?></h2>
							<?php the_field('content'); ?>
						</div>
						<div class="col-4">
							<h4>Features</h4>
							<ul>
								<?php while( have_rows('features') ): the_row();
									$feature = get_sub_field('feature'); ?>
									<li><?= $feature ?></li>
								<?php endwhile; ?>
							</ul>
						</div>
					</div>

					<div class="row">
						<?php $images = get_field('gallery');
						if( $images ): ?>

						<div class="swiper-container stock-swiper">
					        <div class="swiper-wrapper">
					            <?php foreach( $images as $image ): ?>
						            <div class="swiper-slide">
						                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
						            </div>
						        <?php endforeach; ?>
					        </div>
					        <!-- Add Pagination -->
					        <div class="swiper-pagination"></div>

					        <div class="swiper-button-next"></div>
        					<div class="swiper-button-prev"></div>
					    </div>
						<?php endif; ?>
					</div>

					<div class="row">
						<div class="cta">
							<h2>Enquire about: <?php the_title(); ?></h2>
							<a href="<?php site_url(''); ?>/contact" class="btn-one">Enquire Today</a>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php endwhile; ?>
	<?php else : ?>

		<!-- No post for that query -->

	<?php endif; ?>

<?php get_footer(); ?>