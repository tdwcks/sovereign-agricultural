<!-- Default page -->

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		 <section class="hero-static">
			<div class="col-6">
				<h2><?php the_title(); ?></h2>
			</div>
			<img src="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>">

			<a class="back-btn" href="<?php echo get_site_url(); ?>/news">Back To News</a>
		</section>

		<section class="post-content">
			<div class="grid-container">
				<div class="col-8">
					<?php the_content(); ?>
				</div>
			</div>
		</section>

	<?php endwhile; ?>
	<?php else : ?>

		<!-- No post for that query -->

	<?php endif; ?>

<?php get_footer(); ?>