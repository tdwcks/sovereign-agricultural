<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<!-- Example only -->
	<section class="page-description">
		<div class="grid-container">
			<div class="col-4">
	        	<div class="swiper-button-next"></div>
	        	<div class="swiper-button-prev"></div>
			</div>
			<div class="col-6">
				<div class="description-holder">
					<h3><?php the_title(); ?></h3>
					<?php echo wpautop( $post->post_content ); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="street-view-section">
		<div class="swiper-container">
	        <div class="swiper-wrapper">
	            
				
	            	<?php

				// check if the repeater field has rows of data
				if( have_rows('street_view') ):

				 	// loop through the rows of data
				    while ( have_rows('street_view') ) : the_row();?>
						<div class="swiper-slide">
							<style type="text/css">.kuula<?php echo the_sub_field('link');?> { width: 100%; height: 100vh; }</style><iframe class="kuula<?php echo the_sub_field('link');?>" frameborder="0" scrolling="no" allowfullscreen="true" src="https://kuula.co/share/<?php echo the_sub_field('link');?>"></iframe>
						</div>
				        <?php
				    endwhile;

				else :

				    // no rows found

				endif;

				?>

				

			</div>
	        <!-- Add Pagination -->
	        
	    </div>

	</section>
	

	<?php endwhile; ?>
	<?php else : ?>

		<!-- No post for that query -->

	<?php endif; ?>

<?php get_footer(); ?>
