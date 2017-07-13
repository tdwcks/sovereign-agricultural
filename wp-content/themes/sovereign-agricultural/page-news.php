<?php get_header(); ?>

     <?php query_posts('post_type=post&post_status=publish&posts_per_page=30&paged='. get_query_var('paged')); ?>
     <section class="hero-static">
			<div class="col-6">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		<img src="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>">
	</section>
	<section class="news">
		<div class="grid-container">
		<?php if( have_posts() ): ?>

	        <?php while( have_posts() ): the_post(); ?>
	        <div class="row">
		        <div class="col-4">

			    <div class="news-item" id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>

		        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(700,700) ); ?></a>

		                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<?php the_excerpt(__('','')); ?>

						<span class="btn-one">Read More</span>

		            </div><!-- /#post-<?php get_the_ID(); ?> -->

		        <?php endwhile; ?>

			<?php endif; wp_reset_query(); ?>
			</div>
		</div>
		</div><!-- /#content -->
		</div>
	</section>

<?php get_template_part('footer.php'); ?>