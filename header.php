<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

	<!-- Pingbacks -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<?php if(get_option(OM_THEME_PREFIX . 'responsive') == 'true') : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" type="text/css" />
	<?php endif; ?>
		
	<?php wp_head(); ?>

	<?php echo get_option( OM_THEME_PREFIX . 'code_before_head' ); ?>
	<!--[if gte IE 9]>
	<style type="text/css">
	  .cbutton-golden {
		 filter: none;
	  }
	</style>
  <![endif]-->
</head>
<body <?php body_class(  ); ?>>
	<!-- Head Line: Header, Countdown -->

	<div class="headline-wrapper a-bg-l1">
		<div class="headline a-bg-l2">
			<div class="headline-inner">
				<div class="fixw">
					<div class="headline-left">
						<?php
						if(get_option(OM_THEME_PREFIX . 'site_logo_type') == 'text') {
							echo '<div class="logo-text"><a href="' . home_url() .'">'. get_option(OM_THEME_PREFIX . 'site_logo_text') .'</a></div>';
						} else {
							if( $tmp=get_option(OM_THEME_PREFIX . 'site_logo_image') )
								echo '<div class="logo-image"><a href="' . home_url() .'"><img src="'.$tmp.'" alt="'.htmlspecialchars( get_bloginfo( 'name' ) ).'" /></a></div>';
							else
								echo '<div class="logo-image"><a href="' . home_url() .'"><img src="'. get_template_directory_uri() .'/img/logo.png" alt="'.htmlspecialchars( get_bloginfo( 'name' ) ).'" /></a></div>';
						}
						?>
					</div>
					<div class="headline-right social-icons-con">
						<p class="social-icons-wrap">
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_twitter") ) { ?>
								<a href="<?php echo $icon?>" class="social twitter"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_facebook") ) { ?>
								<a href="<?php echo $icon?>" class="social facebook"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_linkedin") ) { ?>
								<a href="<?php echo $icon?>" class="social linkedin"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_behance") ) { ?>
								<a href="<?php echo $icon?>" class="social behance"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_rss") ) { ?>
								<a href="<?php echo $icon?>" class="social rss"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_blogger") ) { ?>
								<a href="<?php echo $icon?>" class="social blogger"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_deviantart") ) { ?>
								<a href="<?php echo $icon?>" class="social deviantart"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_dribble") ) { ?>
								<a href="<?php echo $icon?>" class="social dribble"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_flickr") ) { ?>
								<a href="<?php echo $icon?>" class="social flickr"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_google") ) { ?>
								<a href="<?php echo $icon?>" class="social google"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_myspace") ) { ?>
								<a href="<?php echo $icon?>" class="social myspace"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_pinterest") ) { ?>
								<a href="<?php echo $icon?>" class="social pinterest"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_skype") ) { ?>
								<a href="<?php echo $icon?>" class="social skype"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_vimeo") ) { ?>
								<a href="<?php echo $icon?>" class="social vimeo"></a>
							<?php } ?>
							<?php if( $icon = get_option(OM_THEME_PREFIX."social_youtube") ) { ?>
								<a href="<?php echo $icon?>" class="social youtube"></a>
							<?php } ?>
						</p>
						<?php if(get_option(OM_THEME_PREFIX . 'special_button_hrt')){ ?><a href="<?php echo get_option(OM_THEME_PREFIX . 'special_button_hrt_link'); ?>" title="Become an EASL Member." class="become-member-button cbutton-golden"><?php echo get_option(OM_THEME_PREFIX . 'special_button_hrt'); ?></a><?php }?>
					</div>
					<div class="clear seperator-121">&nbsp;</div>
					<div class="headline-left congress-logo">
						<?php echo get_option(OM_THEME_PREFIX . 'location_date') ?>
					</div>
					<div class="headline-right ilc-count-down">
						<!-- Countdown -->
						<div class="countdown">
							<div id="countdown"<?php if(get_option(OM_THEME_PREFIX . 'countdown_hide_seconds') == 'true') echo ' data-hideseconds="true"' ?> data-days="<?php _e('days','om_theme') ?>" data-hrs="<?php _e('hrs','om_theme') ?>" data-min="<?php _e('min','om_theme') ?>" data-sec="<?php _e('sec','om_theme') ?>" data-label="<?php _e('time left','om_theme') ?>"><?php echo get_option(OM_THEME_PREFIX . 'countdown_date') ?><!--UNTIL TIME, FORMAT YYYY-MM-DD HH:MM:SS--></div>
						</div>
						<!-- /Countdown -->
					</div>
					<div class="clear">&nbsp;</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Head Line -->

	<?php
		$sidebar_position=get_option(OM_THEME_PREFIX.'sidebar_position');
		if(!$sidebar_position)
			$sidebar_position='right';
	?>
	
	<!-- Container -->
	<div class="container-wrapper">
		<div class="container fixw sidebar-<?php echo $sidebar_position; ?>">
			<div class="container-col-full-width">
				<!-- Menu -->
				<div class="menu-pane">
					<?php
						if ( has_nav_menu( 'primary-menu' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'primary-menu',
								'container' => false,
								'menu_class' => 'primary-menu'
							) );
						}

						if ( has_nav_menu( 'secondary-menu' ) ) {
							?>
							<div class="secondary-menu-container">
								<div class="secondary-menu-control"><?php echo om_menu_name('secondary-menu') ?></div>
								<div class="secondary-menu-wrapper">
								<?php
								wp_nav_menu( array(
									'theme_location' => 'secondary-menu',
									'container' => false,
									'menu_class' => 'secondary-menu'
								) );
								?>
								</div>
							</div>
							<?php
						}

						$special_button=get_option(OM_THEME_PREFIX.'special_button_title');
						if($special_button) {
							$special_button_link=get_option(OM_THEME_PREFIX.'special_button_link');
							echo '<a href="'.$special_button_link.'" class="cbutton-golden menu-special-button">'.$special_button.'</a>';
						}
												
					?>
					<div class="clear"></div>
				</div>
				<div class="primary-menu-select">
					<select onchange="if(this.value!=''){document.location.href=this.value}"><option value=""><?php _e('Menu:','om_theme')?></option>
						<?php
						if ( has_nav_menu( 'primary-menu' ) ) {
							echo om_select_menu_options( 'primary-menu' );
						}
						if ( has_nav_menu( 'secondary-menu' ) ) {
							echo om_select_menu_options( 'secondary-menu' );
						}
						?>
					</select>
				</div>
				<?php
					if($special_button) {
						echo '<a href="'.$special_button_link.'" class="menu-special-button-mobile">'.$special_button.'</a>';
					}
				?>
				<!-- /Menu -->
			</div>