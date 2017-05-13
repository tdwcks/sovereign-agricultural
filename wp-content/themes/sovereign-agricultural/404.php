<!-- 404 Error Page -->

<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!-- Example only -->
		<?php the_title(); ?>
		<?php the_content(); ?>


	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>