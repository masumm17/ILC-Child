			<div class="container-col-full-width">
				<!-- Footer -->
				<div class="footer">
					<div class="footer-inner">
						<?php get_sidebar('footer-column-left'); ?>
						<?php get_sidebar('footer-column-center'); ?>
						<?php get_sidebar('footer-column-right'); ?>
						<div class="clear"></div>
						<div class="separator"></div>
						<div class="separator s2"></div>
					</div>
				</div>
				<!-- /Footer -->
			</div>
		</div>
	</div>

	<!-- /Container -->

	<!-- SubFooter Line -->
	<div class="subfooterline a-bg-l1">
		<div class="subfooterline-inner">
			<div class="fixw">
				<div class="subfooter-copy">
					<?php if ( has_nav_menu( 'footer_nav' ) ) { ?>
					<div class="subfooter-menu">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer_nav',
							'container' => false,
							'menu_class' => 'footer_nav'
						) );
						?>
					</div>
					<?php }?>
					<p><?php echo get_option(OM_THEME_PREFIX."footer_address"); ?></p>
				</div>
				<div class="subfooter-social">
					<p><?php echo get_option(OM_THEME_PREFIX."footer_text"); ?></p>
					<p class="footer-logo"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.png" /></p>
				</div>
				<div class="clear">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- /SubFooter Line -->
	
	<?php wp_footer(); ?>
	
	<?php echo get_option( OM_THEME_PREFIX . 'code_before_body' ) ?>
</body>
</html>