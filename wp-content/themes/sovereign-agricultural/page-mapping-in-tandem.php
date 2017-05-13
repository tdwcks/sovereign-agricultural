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
			<div class="embetter" data-youtube-id="l9XdkPsaynk"><a href="https://www.youtube.com/watch?v=l9XdkPsaynk" target="_blank"><img src="http://img.youtube.com/vi/l9XdkPsaynk/0.jpg"></a></div>
		</section>


	<?php endwhile; ?>
	<?php else : ?>

		<!-- No post for that query -->

	<?php endif; ?>

<?php get_footer(); ?>
