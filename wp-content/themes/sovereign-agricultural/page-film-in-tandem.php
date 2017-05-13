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
		<section class="video-half-holder">
		<?php

		// check if the repeater field has rows of data
		if( have_rows('vimeo_link') ):

		 	// loop through the rows of data
		    while ( have_rows('vimeo_link') ) : the_row();?>

					<div class="video-half">
						<div class="embetter" data-vimeo-id="<?php the_sub_field('vimeo_url');?>"><a href="https://vimeo.com/<?php the_sub_field('vimeo_url');?>" target="_blank"><img src="https://i.vimeocdn.com/video/<?php the_sub_field('vimeo_image');?>.jpg"></a></div>
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
