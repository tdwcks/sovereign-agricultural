<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php

		if( have_rows('slider') ):

			?>
			<section class="hero">
				<div class="swiper-container swiper-home">
		       		<div class="swiper-wrapper"><?php

		 	// loop through the rows of data
		    while ( have_rows('slider') ) : the_row();

		        // display a sub field value
		       ?>
		       <div class="swiper-slide">
		       		<img src="<?php the_sub_field('image'); ?>">
		       <?php ?><div class="slide-description"><h2><?php the_sub_field('headline'); ?></h2>
		       <?php ?><?php the_sub_field('paragraph'); ?></div>
		       </div><?php

		    endwhile;

			?>
		       </div>
		       <!-- Add Pagination -->
		       <div class="swiper-pagination"></div>
		       <!-- Add Arrows -->
		       <div class="swiper-button-next"></div>
		       <div class="swiper-button-prev"></div>
		   </div>
		</section> <?php endif; ?>

		<?php endwhile; ?>


		<?php endif; ?>

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
					<div class="vertical-align">
						<h3><?php the_field('headline_two'); ?></h3>
						<?php the_field('copy_two'); ?>
					</div>
				</div>
			</div>
			<div class="image-half">
				<img src="<?php the_field('image_two'); ?>">
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
		<?php if( have_rows('homepage_links') ): ?>

		<section class="tripple-box">
			<?php while ( have_rows('homepage_links') ) : the_row(); ?>
			<a class="box" href="<?php the_sub_field('links'); ?>">
				<img src="<?php the_sub_field('image'); ?>">
				<h4><?php the_sub_field('title'); ?></h4>
			</a>
			<?php endwhile; ?>
		</section>

		<section class="quote">
			<div class="grid-container">
				<div class="col-6">
					<?php the_field('quote'); ?>
					<img src="<?= get_site_url(); ?>/wp-content/themes/sovereign-agricultural/img/signature-2.png">
					<div class="name">
						<p>Gordon Dearnley,<span class="light">Director</span></p>
					</div>
				</div>
			</div>
		</section>

		<?php endif; ?>

		<h1>Test!</h1>


<?php get_footer(); ?>
