
		<section class="contact-cta">
			<div class="grid-container">
				<h3>looking for repairs or maintenance?</h3>
				<h4>We're here to help</h4>
				<a class="btn-one" href="<?php echo get_site_url(); ?>/contact">Find Out More</a>
			</div>
		</section>
		<footer>
			<div class="grid-container">
				<div class="row">
					<a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" class="logo" width="135" alt="Sovereign Agricultural Services Ltd"></a>
					<p>Woolrow Lane, Shelley, Huddersfield, HD8 8LW</p>

					<div class="menu-header-menu-container">
						<ul class="menu">
							<li class="menu-item"><a href="tel:01484 603682">Tel: 01484 603682</a></li>
							<li class="menu-item"><a href="mailto:sales@sovagric.com">Email: sales@sovagric.com</a></li>
							<li class="menu-item"><a href="#">Fax: 01484 604782</a></li>
						</ul>
					</div>

					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

					<p>We are Sovereign Agricultural Services LTD. Based in Huddersfield, West Yorkshire<br>we have been servicing the agricultural industry for over 40 years.</p>

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
				<p>&copy; <?php echo date("Y"); ?> Sovereign Agricultural Services LTD. all rights reserved. designed by <a href="https://aye.agency" target="_blank">aye.agency</a></p>
			</div>
		</div>
	</div>

	<script src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/jquery.sticky.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/embetter.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/swiper.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/global.js"></script>
	<?php wp_footer(); ?>

	<script src="https://use.fontawesome.com/b94ee9d7cf.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-100138649-1', 'auto');
	  ga('send', 'pageview');
	</script>
	</body>
</html>