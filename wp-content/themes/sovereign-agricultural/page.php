<!-- Default page -->

<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		 <section class="hero-static">
				<div class="col-6">
					<h2><?php the_title(); ?></h2>
				</div>
			<img src="<?php the_post_thumbnail(); ?>">
		</section>
		<section class="post-content">
			<div class="grid-container">
				<div class="col-6">
					<?php the_content(); ?>
				</div>
			</div>
		</section>


	<?php endwhile; ?>
	<?php else : ?>

		<!-- No post for that query -->

	<?php endif; ?>

<?php get_footer(); ?>