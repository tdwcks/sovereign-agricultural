
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
				<div class="row">
					<h4>Sovereign <span>Agricultural</span></h4>
					<p>Woolrow Lane, Shelley, Huddersfield, HD8 8LW</p>

					<div class="menu-header-menu-container">
						<ul class="menu">
							<li class="menu-item"><a href="tel:01484 603682">Tel: 01484 603682</a></li>
							<li class="menu-item"><a href="mailto:sales@sovagric.com">Email: sales@sovagric.com</a></li>
							<li class="menu-item"><a href="#">Fax: 01484 604782</a></li>
						</ul>
					</div>

					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

					<div class="btn-holder">
						<div class="btn">
							<a href="https://www.facebook.com/sovereignagricutural/">
								<img src="<?= get_template_directory_uri(); ?>/img/facebook_icon.svg" width="60">
								Facebook
							</a>
						</div>
						<div class="btn">
							<a href="#" class="scroll-to-top">
								<img src="<?= get_template_directory_uri(); ?>/img/back_to_top.svg" width="60">
								Back To Top
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<img src="<?= get_template_directory_uri(); ?>/img/footer_grass.png" class="hay-bale">
		<div class="bottom-bar">
			<div class="grid-container">
				<p>&copy; <?php echo date("Y"); ?> Sovereign Agricultural services Limited. all rights reserved. designed by <a href="https://aye.agency" target="_blank">aye.agency</a></p>
			</div>
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