
	<section class="contact-cta">
		<div class="grid-container">
			<div class="col-6">
				<h3>looking for repairs or maintenance?</h3>
			</div>
			<div class="col-6">
				<h4>We're here to help</h4>
				<a class="btn-one" href="<?php echo get_site_url(); ?>/contact">Find Out More</a>
			</div>
		</div>
	</section>
	<footer>
		<div class="grid-container">
			<div class="col-6">
				<h4>Sovereign <span>Agricultural</span></h4>
				<p>Woolrow Lane, Shelley, Huddersfield, HD8 8LW</p>
				<p>Tel: 01484 603682   |   Email: info@sovereinagricultural.com   |   Fax: 01484 604782</p>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				<div class="btn-holder">
					<a href="https://www.facebook.com/sovereignagricutural/" class="btn-two">Facebook</a>
					<a href="#" class="btn-two">Back To Top</a>
				</div>
			</div>
		</div>
	</footer>
	<div class="bottom-bar">
		<div class="grid-container">
			<p>&copy; <?php echo date("Y"); ?> Sovereign Agricultural services Limited. all rights reserved. designed by <a href="https://aye.agency">aye.agency</a></p>
		</div>
	</div>
	<script src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/jquery.sticky.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/embetter.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/swiper.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/global.js"></script>
	<?php wp_footer(); ?>
	</body>
</html>