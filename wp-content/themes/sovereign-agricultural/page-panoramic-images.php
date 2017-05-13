<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<!-- Example only -->
	<section class="page-description">
		<div class="grid-container">
			<div class="col-6">
				<div class="description-holder">
					<h3><?php the_title(); ?></h3>
					<?php echo wpautop( $post->post_content ); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="panorama-section">
		<?php

			// check if the repeater field has rows of data
			if( have_rows('panorama') ):

			 	// loop through the rows of data
			    while ( have_rows('panorama') ) : the_row();?>

					<div class="panorama">
			        	<img src="<?php the_sub_field('image');?>"> 
			        </div>
			        <?php
			    endwhile;

			else :

			    // no rows found

			endif;

			?>
	</section>

	<?php endwhile; ?>
	<?php else : ?>

		<!-- No post for that query -->

	<?php endif; ?>

<?php get_footer(); ?>
