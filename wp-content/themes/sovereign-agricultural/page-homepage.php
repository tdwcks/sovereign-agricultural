<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!-- Example only -->

		<?php

		// check if the repeater field has rows of data
		if( have_rows('slider') ):

			?>
			<section class="hero">
				<div class="swiper-container">
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

		else :

			?>
		       </div>
		       <!-- Add Pagination -->
		       <div class="swiper-pagination"></div>
		       <!-- Add Arrows -->
		       <div class="swiper-button-next"></div>
		       <div class="swiper-button-prev"></div>
		   </div>		
		</section> <?php 

		    // no rows found

		endif;

		?>
		
		<section class="info">
			<div class="grid-container">
				
			</div>
		</section>

	<?php endwhile; ?>
	<?php else : ?>

		<!-- No post for that query -->

	<?php endif; ?>

<?php get_footer(); ?>
