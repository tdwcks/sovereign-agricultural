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
	<section class="cut-out-map">
		<img class="map" src="<?php echo get_template_directory_uri(); ?>/img/map.svg">
		<?php
			if( have_rows('cutouts') ):

			    while ( have_rows('cutouts') ) : the_row();?>
					<div style="top: <?php the_sub_field('top'); ?>px; left: <?php the_sub_field('left'); ?>px" name="<?php the_sub_field('id');?>" class="map-marker">
			        </div>
			        <?php
			    endwhile;

			else :

			endif;

		?>
		<div class="cutout-holder">
		<?php
			if( have_rows('cutouts') ):

			    while ( have_rows('cutouts') ) : the_row();?>
					<div id="<?php the_sub_field('id');?>" class="cutout-image">
			        	<img src="<?php the_sub_field('cutout_image');?>">
			        </div>
			        <?php
			    endwhile;

			else :
			endif;
		?>
		</div>
	</section>
	</section>
	

	<?php endwhile; ?>
	<?php else : ?>

		<!-- No post for that query -->

	<?php endif; ?>

<?php get_footer(); ?>
