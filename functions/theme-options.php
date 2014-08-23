<?php

//remove_action('init','om_options');
//add_action('init','ilc_om_options');

if (!function_exists('om_options')) {
	
	function om_options() {

		// Set the Options Array
		$options = array();

		$options[] = array( "name" => __('General settings','om_theme'),
		                    "type" => "heading");


		$options[] = array( 'name' => __('Site logo type', 'om_theme'),
		                    'desc' => __('Choose what do you want to use as site logo: image or plain text.', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'site_logo_type',
		                    'std' => 'image',
		                    'options'=>array(
		                    	'image'=>__('Image', 'om_theme'),
		                    	'text'=>__('Plain text (Blog Name)', 'om_theme')
		                    ),
		                    'type' => 'radio');
		                    
		$options[] = array( "name" => __('Site logo image','om_theme'),
							"desc" => __('Upload a logo for your theme, or specify the image address of your online logo (http://example.com/logo.png). Best fit is about 430x140 px.','om_theme'),
							"id" => OM_THEME_PREFIX."site_logo_image",
							"std" => "",
							"type" => "upload");

		$options[] = array( "name" => __('Site logo text','om_theme'),
					"desc" => __('Specify logo text, if "Plain text" Logo used. You can use <span> tag to colorize text, i.e.:<br />My &lt;span&gt;Logo&lt;/span&gt; Text','om_theme'),
					"id" => OM_THEME_PREFIX."site_logo_text",
					"std" => "",
					"type" => "text");

		$options[] = array( "name" => __('Site favicon','om_theme'),
					"desc" => __('Upload an *.ico file or 16px x 16px Png/Gif image that will for your website\'s favicon.','om_theme'),
					"id" => OM_THEME_PREFIX."favicon",
					"std" => "",
					"type" => "upload");

		$options[] = array( "name" => __('Header Top Special Button:title','om_theme'),
					"desc" => __('Text in the header top right','om_theme'),
					"id" => OM_THEME_PREFIX."special_button_hrt",
					"std" => "",
					"type" => "text");

		$options[] = array( "name" => __('Header Top Special Button:link','om_theme'),
					"desc" => __('Link forheader top special button','om_theme'),
					"id" => OM_THEME_PREFIX."special_button_hrt_link",
					"std" => "",
					"type" => "text");

		$options[] = array( "name" => __('Event location and date','om_theme'),
					"desc" => __('Text in the header, event location and date. Can contain link to the page and words can be highlighted by &lt;span&gt; tag, e.g.:<br /><i>&lt;a href="/map/"&gt;New Orleans, Louisiana&lt;br/&gt;02/25 &mdash; 02/28/&lt;span&gt;2014&lt;/span&gt;&lt;/a&gt;</i>','om_theme'),
					"id" => OM_THEME_PREFIX."location_date",
					"std" => "",
					"type" => "text");

		$options[] = array( "name" => __('Event start date for countdown','om_theme'),
					"desc" => __('Format must be <b>YYYY-MM-DD HH:MM:SS</b>, for example 2014-02-25 10:00:00','om_theme'),
					"id" => OM_THEME_PREFIX."countdown_date",
					"std" => "",
					"type" => "text");

		$options[] = array( "name" => '',
					"desc" => __('Hide seconds on countdown timer','om_theme'),
					"id" => OM_THEME_PREFIX."countdown_hide_seconds",
					"std" => "",
					"type" => "checkbox");

		$options[] = array( "name" => __('Special button: title','om_theme'),
					"desc" => __('You can add special button to menu line, and link it, for example to the registration page.','om_theme'),
					"id" => OM_THEME_PREFIX."special_button_title",
					"std" => "",
					"type" => "text");

		$options[] = array( "name" => __('Special button: link','om_theme'),
					"desc" => __('Link for special button','om_theme'),
					"id" => OM_THEME_PREFIX."special_button_link",
					"std" => "",
					"type" => "text");
				
		$options[] = array( "name" => __('Footer Address','om_theme'),
					"desc" => '',
					"id" => OM_THEME_PREFIX."footer_address",
					"std" => "",
					"type" => "textarea");
				
		$options[] = array( "name" => __('Footer text line','om_theme'),
					"desc" => '',
					"id" => OM_THEME_PREFIX."footer_text",
					"std" => "",
					"type" => "text");

		$options[] = array( 'name' => __('Activate responsive mode', 'om_theme'),
		                    'desc' => __('Check if you want your site to be fitted by width on mobile devices', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'responsive',
		                    'std' => 'true',
		                    'type' => 'checkbox');
		                    
		$options[] = array( 'name' => __('Hide comments block on pages', 'om_theme'),
		                    'desc' => __('Check if you want to hide comments block on single pages. To hide comments on post pages and portfolio - see sections "Post options" and "Portfolio options"', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'hide_comments_pages',
		                    'std' => '',
		                    'type' => 'checkbox');

		$options[] = array( "name" => __('FeedBurner URL','om_theme'),
					"desc" => __('Enter your full FeedBurner URL (or any other preferred feed URL) if you wish to use FeedBurner over the standard WordPress Feed e.g. http://feeds.feedburner.com/yoururlhere','om_theme'),
					"id" => OM_THEME_PREFIX."feedburner",
					"std" => "",
					"type" => "text");
		                 
		                    
		$options[] = array( "name" => __('Styling','om_theme'),
		                    "type" => "heading");

		$options[] = array( 'name' => '',
		                    'desc' => __('Apply custom styling by inline code (check this option if you have problems with styling because of styling file rewrite permissions)', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'use_inline_css',
		                    'std' => '',
		                    'type' => 'checkbox');
		                    
		$options[] = array( "name" => "",
							"message" => '<b>'.__('Color','om_theme').'</b>',
							"type" => "intro");
							
		$options[] = array( "name" => __('Primary color', 'om_theme'),
		                    "desc" => '',
		                    "id" => OM_THEME_PREFIX."primary_color",
		                    "std" => "#335ebe",
		                    "type" => "color");
		                    
		$options[] = array( "name" => __('Highlight color', 'om_theme'),
		                    "desc" => '',
		                    "id" => OM_THEME_PREFIX."highlight_color",
		                    "std" => "#f89811",
		                    "type" => "color");
          
		$options[] = array( "name" => "",
							"message" => '<b>'.__('Top/bottom area animated background:','om_theme').'</b>',
							"type" => "intro");
							
		$options[] = array( 'name' => __('Background animated image set', 'om_theme'),
		                    'desc' => __('Choose one of the builded-in animated background set', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'background_img_set',
		                    'std' => 'bgset-1',
		                    'options'=>array(
		                    	'bgset-1' => '#1',
		                    	'bgset-2' => '#2',
		                    	'bgset-3' => '#3',
		                    	'bgset-4' => '#4',
		                    	'bgset-5' => '#5',
		                    	'bgset-6' => '#6',
		                    	'bgset-7' => '#7',
		                    	'bgset-8' => '#8',
		                    	'bgset-9' => '#9',
		                    	'bgset-10' => '#10',
		                    	'bgset-11' => '#11',
		                    ),
		                    'type' => 'select2');
		                    
		$options[] = array( 'name' => __('Custom background image &mdash; Layer 1', 'om_theme'),
		                    'desc' => __('Upload your background image (wide image, min height - 520px or pattern, or leave this field empty to choose one of the above dropdown', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'background_img_custom_l1',
		                    'std' => '',
		                    'type' => 'upload');

		$options[] = array( 'name' => __('Custom background image &mdash; Layer 2', 'om_theme'),
		                    'desc' => __('This is top layer with transparency for parallax effect. Upload your background image, or leave this field empty to choose one of the above dropdown', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'background_img_custom_l2',
		                    'std' => '',
		                    'type' => 'upload');

		$options[] = array( 'name' => '',
		                    'desc' => __('Disable animation on mouse move', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'background_disable_animation',
		                    'std' => '',
		                    'type' => 'checkbox');

		$options[] = array( "name" => "",
							"message" => '<b>'.__('Fonts:','om_theme').'</b>',
							"type" => "intro");
									                    
		$options[] = array( 'name' => __('Base font', 'om_theme'),
		                    'desc' => '',
		                    'id' =>  OM_THEME_PREFIX . 'base_font',
		                    'std' => 'Arial',
		                    'options'=>array(
		                    	'Arial' => 'Arial',
		                    	'Times New Roman' => 'Times New Roman',
		                    	'Verdana' => 'Verdana',
		                    	'Tahoma' => 'Tahoma',
		                    	'Courier' => 'Courier',
		                    	'Courier New' => 'Courier New',
		                    	'Georgia' => 'Georgia',
		                    	'Impact' => 'Impact',
		                    	'Lucida Console' => 'Lucida Console',
		                    	'Trebuchet MS' => 'Trebuchet MS',
		                    	'Arvo' => 'Arvo',
		                    	'Open Sans' => 'Open Sans',
		                    ),
		                    'type' => 'select2');
		                    
		$options[] = array( 'name' => __('Custom Google.Fonts base font', 'om_theme'),
		                    'desc' => __('Choose the the font from <a href="http://www.google.com/webfonts" target="_blank">http://www.google.com/webfonts</a> and enter the name.<br/>If you want to choose the font from the list above, leave this field empty', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'custom_base_font',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Highlight font', 'om_theme'),
		                    'desc' => '',
		                    'id' =>  OM_THEME_PREFIX . 'highlight_font',
		                    'std' => 'Open Sans',
		                    'options'=>array(
		                    	'Arial' => 'Arial',
		                    	'Times New Roman' => 'Times New Roman',
		                    	'Verdana' => 'Verdana',
		                    	'Tahoma' => 'Tahoma',
		                    	'Courier' => 'Courier',
		                    	'Courier New' => 'Courier New',
		                    	'Georgia' => 'Georgia',
		                    	'Impact' => 'Impact',
		                    	'Lucida Console' => 'Lucida Console',
		                    	'Trebuchet MS' => 'Trebuchet MS',
		                    	'Arvo' => 'Arvo',
		                    	'Open Sans' => 'Open Sans',
		                    ),
		                    'type' => 'select2');
		                    
		$options[] = array( 'name' => __('Custom Google.Fonts highlight font', 'om_theme'),
		                    'desc' => __('Choose the the font from <a href="http://www.google.com/webfonts" target="_blank">http://www.google.com/webfonts</a> and enter the name.<br/>If you want to choose the font from the list above, leave this field empty', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'custom_highlight_font',
		                    'std' => '',
		                    'type' => 'text');

		$options[] = array( 'name' => __('Logo font', 'om_theme'),
		                    'desc' => __('Font for logo (if logo mode is text, not image)', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'logo_font',
		                    'std' => 'Montserrat',
		                    'options'=>array(
		                    	'Arial' => 'Arial',
		                    	'Times New Roman' => 'Times New Roman',
		                    	'Verdana' => 'Verdana',
		                    	'Tahoma' => 'Tahoma',
		                    	'Courier' => 'Courier',
		                    	'Courier New' => 'Courier New',
		                    	'Georgia' => 'Georgia',
		                    	'Impact' => 'Impact',
		                    	'Lucida Console' => 'Lucida Console',
		                    	'Trebuchet MS' => 'Trebuchet MS',
		                    	'Arvo' => 'Arvo',
		                    	'Open Sans' => 'Open Sans',
		                    	'Dosis' => 'Dosis',
		                    	'Montserrat'=>'Montserrat',
		                    ),
		                    'type' => 'select2');
		                    
		$options[] = array( 'name' => __('Custom Google.Fonts logo font', 'om_theme'),
		                    'desc' => __('Choose the the font from <a href="http://www.google.com/webfonts" target="_blank">http://www.google.com/webfonts</a> and enter the name.<br/>If you want to choose the font from the list above, leave this field empty', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'custom_logo_font',
		                    'std' => '',
		                    'type' => 'text');

		$options[] = array( 'name' => __('Testimonials font', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'testimonial_font',
		                    'std' => 'Satisfy',
		                    'options'=>array(
		                    	'Arial' => 'Arial',
		                    	'Times New Roman' => 'Times New Roman',
		                    	'Verdana' => 'Verdana',
		                    	'Tahoma' => 'Tahoma',
		                    	'Courier' => 'Courier',
		                    	'Courier New' => 'Courier New',
		                    	'Georgia' => 'Georgia',
		                    	'Impact' => 'Impact',
		                    	'Lucida Console' => 'Lucida Console',
		                    	'Trebuchet MS' => 'Trebuchet MS',
		                    	'Arvo' => 'Arvo',
		                    	'Open Sans' => 'Open Sans',
		                    	'Dosis' => 'Dosis',
		                    	'Satisfy' => 'Satisfy',
		                    ),
		                    'type' => 'select2');
		                    
		$options[] = array( 'name' => __('Custom Google.Fonts testimonials font', 'om_theme'),
		                    'desc' => __('Choose the the font from <a href="http://www.google.com/webfonts" target="_blank">http://www.google.com/webfonts</a> and enter the name.<br/>If you want to choose the font from the list above, leave this field empty', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'custom_testimonial_font',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( "name" => "",
							"message" => '<b>'.__('Other:','om_theme').'</b>',
							"type" => "intro");
		                    
		$options[] = array( "name" => __('Sidebar position','om_theme'),
							"desc" => __('Select sidebar alignment.','om_theme'),
							"id" => OM_THEME_PREFIX."sidebar_position",
							"std" => "right",
							"type" => "images",
							"options" => array(
								'right' => TEMPLATE_DIR_URI . '/admin/images/2cr.png',
								'left' => TEMPLATE_DIR_URI . '/admin/images/2cl.png'
							)
						);

		$options[] = array( "name" => __('Sidebars','om_theme'),
		                    "type" => "heading");
		                    
		$options[] = array( "name" => "",
							"message" => __('You can set the number of available alternative sidebars, set them up at the "Appearance > Widgets" section and choose for every page one of them at the page settings.','om_theme'),
							"type" => "intro");
							
		$options[] = array( "name" => __('Number of alternative sidebars','om_theme'),
					"desc" => '',
					"id" => OM_THEME_PREFIX."sidebars_num",
					"std" => "3",
					"type" => "text");

		$options[] = array( "name" => __('Homepage slider','om_theme'),
		                    "type" => "heading");
		                    
		$options[] = array( 'name' => __('Show slider on the homepage', 'om_theme'),
		                    'desc' => __('Check to show slider on the homepage', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'show_homepage_slider',
		                    'std' => '',
		                    'type' => 'checkbox');
		                    
		$options[] = array( 'name' => __('Autoslide', 'om_theme'),
		                    'desc' => __('Autoslide interval in milliseconds, enter 0 or leave empty to disable autoslide', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'homepage_slider_autoslide',
		                    'std' => '6000',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Animation speed', 'om_theme'),
		                    'desc' => __('Animation speed in milliseconds', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'homepage_slider_animation_speed',
		                    'std' => '800',
		                    'type' => 'text');

		$options[] = array( 'name' => __('Animation effect', 'om_theme'),
		                    'desc' => __('See demo on <a href="http://malsup.com/jquery/cycle/browser.html" target="_blank">http://malsup.com/jquery/cycle/browser.html</a>', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'homepage_slider_animation_effect',
		                    'std' => 'custom',
		                    'type' => 'select2',
		                    "options" => array(
    'custom'=>'Custom Predefined',
		'blindX'=>'blindX',
    'blindY'=>'blindY',
    'blindZ'=>'blindZ',
    'cover'=>'cover',
    'curtainX'=>'curtainX',
    'curtainY'=>'curtainY',
    'fade'=>'fade',
    'fadeZoom'=>'fadeZoom',
    'growX'=>'growX',
    'growY'=>'growY',
    'none'=>'none',
    'scrollUp'=>'scrollUp',
    'scrollDown'=>'scrollDown',
    'scrollLeft'=>'scrollLeft',
    'scrollRight'=>'scrollRight',
    'scrollHorz'=>'scrollHorz',
    'scrollVert'=>'scrollVert',
    'shuffle'=>'shuffle',
    'slideX'=>'slideX',
    'slideY'=>'slideY',
    'toss'=>'toss',
    'turnUp'=>'turnUp',
    'turnDown'=>'turnDown',
    'turnLeft'=>'turnLeft',
    'turnRight'=>'turnRight',
    'uncover'=>'uncover',
    'wipe'=>'wipe',
    'zoom'=>'zoom',
												));
		                    		                    
		$options[] = array( "name" => "",
							"message" => __('You can use tag <i>&lt;span&gt;this is colored text&lt;/span&gt;</i> in slide description to color the text', 'om_theme'),
							"type" => "intro");
							
		$options[] = array( 'name' => __('Slider content', 'om_theme'),
		                    'desc' => '',
		                    'id' =>  OM_THEME_PREFIX . 'homepage_slider',
		                    'std' => array(),
		                    'type' => 'slider');
	  
		$options[] = array( "name" => __('Post options','om_theme'),
		                    "type" => "heading");
		                    
		$options[] = array( 'name' => __('Hide post categories', 'om_theme'),
		                    'desc' => __('Check, if you want to hide categories for posts', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'post_hide_categories',
		                    'std' => '',
		                    'type' => 'checkbox');

		$options[] = array( 'name' => __('Show featured image on the post page', 'om_theme'),
		                    'desc' => __('Check to show the featured image at the beginning of the post on the single post page', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'post_single_show_thumb',
		                    'std' => '',
		                    'type' => 'checkbox');
		                    
		$options[] = array( 'name' => __('Hide comments block on the post pages', 'om_theme'),
		                    'desc' => __('Check if you want to hide comments block on the post pages.', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'hide_comments_post',
		                    'std' => '',
		                    'type' => 'checkbox');

					
		$options[] = array( "name" => __('Extra code blocks, counters','om_theme'),
		                    "type" => "heading");
		                    
		$options[] = array( 'name' => __('Code block before &lt;/head&gt;', 'om_theme'),
		                    'desc' => __('Here you can add Google.Analytics code', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'code_before_head',
		                    'std' => '',
		                    'type' => 'textarea');

		$options[] = array( 'name' => __('Code block before &lt;/body&gt;', 'om_theme'),
		                    'desc' => '',
		                    'id' =>  OM_THEME_PREFIX . 'code_before_body',
		                    'std' => '',
		                    'type' => 'textarea');


		                    
		$options[] = array( 'name' => __('Code block after page header (&lt;/H1&gt;)', 'om_theme'),
		                    'desc' => '',
		                    'id' =>  OM_THEME_PREFIX . 'code_after_page_h1',
		                    'std' => '',
		                    'type' => 'textarea');


		$options[] = array( 'name' => __('Code block after page content', 'om_theme'),
		                    'desc' => '',
		                    'id' =>  OM_THEME_PREFIX . 'code_after_page_content',
		                    'std' => '',
		                    'type' => 'textarea');
		                    
		$options[] = array( 'name' => __('Code block after post header (&lt;/H1&gt;) on the single page', 'om_theme'),
		                    'desc' => '',
		                    'id' =>  OM_THEME_PREFIX . 'code_after_post_h1',
		                    'std' => '',
		                    'type' => 'textarea');

		$options[] = array( 'name' => __('Code block after post content on the single page', 'om_theme'),
		                    'desc' => '',
		                    'id' =>  OM_THEME_PREFIX . 'code_after_post_content',
		                    'std' => '',
		                    'type' => 'textarea');
		                    
		$options[] = array( "name" => __('Social icons','om_theme'),
		                    "type" => "heading");
		                    
		$options[] = array( "name" => '',
												"message" => __('Specify necessary links and icons will be shown in the footer','om_theme'),
		                    "type" => "intro");
		                    
		$options[] = array( 'name' => __('Facebook link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_facebook',
		                    'std' => '',
		                    'type' => 'text');

		$options[] = array( 'name' => __('LinekdIn link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_linkedin',
		                    'std' => '',
		                    'type' => 'text');

		$options[] = array( 'name' => __('Twitter link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_twitter',
		                    'std' => '',
		                    'type' => 'text');
	
		$options[] = array( 'name' => __('Behance link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_behance',
		                    'std' => '',
		                    'type' => 'text');

		$options[] = array( 'name' => __('RSS link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_rss',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Blogger link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_blogger',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Deviantart link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_deviantart',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Dribble link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_dribble',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Flickr link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_flickr',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Google link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_google',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Myspace link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_myspace',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Pinterest link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_pinterest',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Skype link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_skype',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Vimeo link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_vimeo',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Youtube link', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'social_youtube',
		                    'std' => '',
		                    'type' => 'text');

		$options[] = array( "name" => __('Registration form','om_theme'),
		                    "type" => "heading");

		$options[] = array( "name" => '',
												'message'=> __('Set up form and include it at any page by inserting shortcode <b>[registration_form]</b>','om_theme'),
		                    "type" => "intro");

		$options[] = array( 'name' => __('Email to send the form data', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'form_email',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Success message', 'om_theme'),
												'desc' => __('Message will be shown after success form submission', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'form_success',
		                    'std' => '',
		                    'type' => 'textarea');
		                    
		$options[] = array( 'name' => __('Submit button title', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'form_button_title',
		                    'std' => 'Register!',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Form fields', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'form_fields',
		                    'std' => '',
		                    'type' => 'form_fields');
                    
		                    
		/**************************************************************************************/                    
		
		
		
		
		/*
		$options[] = array( "name" => __('Slider','om_theme'),
		                    "type" => "heading");
		                    
		$options[] = array( "name" => "",
							"message" => __('Control and configure the general setup of your theme. Upload your preferred logo, setup your feeds and insert your analytics tracking code.','om_theme'),
							"type" => "intro");
							
		$options[] = array( 'name' => __('Slider', 'om_theme'),
		                    'desc' => __('Slider', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'slider_exampl',
		                    'std' => array(),
		                    'type' => 'slider_w_sections');
		                    
		$options[] = array( "name" => __('General Settings','om_theme'),
		                    "type" => "heading");

		$options[] = array( 'name' => __('Site Tagline', 'om_theme'),
		                    'desc' => __('Add a tagline to display on your site. If you do not want one, please leave this field blank', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'string_exampl',
		                    'std' => '',
		                    'type' => 'text');
		                    
		$options[] = array( 'name' => __('Select Example', 'om_theme'),
		                    'desc' => __('Add a select', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'sel_exampl',
		                    'std' => '',
		                    'options'=>array(
		                    	'Option 1',
		                    	'Option 2',
		                    	'Option 3'
		                    ),
		                    'type' => 'select');
		                    
		$options[] = array( 'name' => __('Select Cat Example', 'om_theme'),
		                    'desc' => __('Add a select Cat', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'sel_cat_exampl',
		                    'std' => '',
		                    'type' => 'select-cat');
		                    
		$options[] = array( 'name' => __('Select Page Example', 'om_theme'),
		                    'desc' => __('Add a select Page', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'sel_page_exampl',
		                    'std' => '',
		                    'type' => 'select-page');
		                    
		$options[] = array( 'name' => __('Select2 Example', 'om_theme'),
		                    'desc' => __('Add a select 2 ', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'sel2_exampl',
		                    'std' => '',
		                    'options'=>array(
		                    	'opt-1'=>'Option 1',
		                    	'opt-2'=>'Option 2',
		                    	'opt-3'=>'Option 3'
		                    ),
		                    'type' => 'select2');
		                    
		$options[] = array( 'name' => __('Site Textarea', 'om_theme'),
		                    'desc' => __('Add a tagline to display on your site. If you do not want one, please leave this field blank', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'textarea_exampl',
		                    'std' => '',
		                    'type' => 'textarea');	
		                    
		$options[] = array( 'name' => __('Select  Radio', 'om_theme'),
		                    'desc' => __('Add ', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'radio_exampl',
		                    'std' => 'opt-2',
		                    'options'=>array(
		                    	'opt-1'=>'Option 1',
		                    	'opt-2'=>'Option 2',
		                    	'opt-3'=>'Option 3'
		                    ),
		                    'type' => 'radio');     
		                    
		$options[] = array( 'name' => __('Site checkbox', 'om_theme'),
		                    'desc' => __('Add a tagline to display on your site. If you do not want one, please leave this field blank', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'check_exampl',
		                    'std' => '',
		                    'type' => 'checkbox');	  

		$options[] = array( "name" => __('Secondary','om_theme'),
		                    "type" => "heading");
		                    
		$options[] = array( 'name' => __('Select Multicheck', 'om_theme'),
		                    'desc' => __('Add ', 'om_theme'),
		                    'id' =>  OM_THEME_PREFIX . 'multicheck_exampl',
		                    'std' => array(
		                    	'opt-2'=>'true'
		                    ),
		                    'options'=>array(
		                    	'opt-1'=>'Option 1',
		                    	'opt-2'=>'Option 2',
		                    	'opt-3'=>'Option 3'
		                    ),
		                    'type' => 'multicheck');                

		$options[] = array( "name" => __('Upload exmp','om_theme'),
							"desc" => __('Upload a logo for your theme, or specify the image address of your online logo. (http://example.com/logo.png)','om_theme'),
							"id" => OM_THEME_PREFIX."upload_exampl",
							"std" => "",
							"type" => "upload");
							
		$options[] = array( "name" => __('Upload MIN exmp','om_theme'),
							"desc" => __('Upload a logo for your theme, or specify the image address of your online logo. (http://example.com/logo.png)','om_theme'),
							"id" => OM_THEME_PREFIX."upload_min_exampl",
							"std" => "",
							"type" => "upload_min");
							
		$options[] = array( "name"=>'',
							"message" => __('Some Message','om_theme'),
							"type" => "note");
							
		$options[] = array( "name" => __('Color', 'om_theme'),
		                    "desc" => __('Select a color to be used as the highlight color within the theme', 'om_theme'),
		                    "id" => OM_THEME_PREFIX."color_exampl",
		                    "std" => "",
		                    "type" => "color");
									                    		 
		$options[] = array( "name" => __('Typography', 'om_theme'),
		                    "desc" => __('Select a color to be used as the highlight color within the theme', 'om_theme'),
		                    "id" => OM_THEME_PREFIX."typograph_exampl",
		                    "std" => "",
		                    "type" => "typography");
		                    
		$options[] = array( "name" => __('Border', 'om_theme'),
		                    "desc" => __('Select a color to be used as the highlight color within the theme', 'om_theme'),
		                    "id" => OM_THEME_PREFIX."border_exampl",
		                    "std" => "",
		                    "type" => "border");
		                    
		$url = TEMPLATE_DIR_URI . '/admin/images/';
		$options[] = array( "name" => __('Main Layout','om_theme'),
							"desc" => __('Select main content and sidebar alignment.','om_theme'),
							"id" => OM_THEME_PREFIX."images_exmapl",
							"std" => "layout-2cr",
							"type" => "images",
							"options" => array(
								'layout-2cr' => $url . '2cr.png',
								'layout-2cl' => $url . '2cl.png')
							);
		*/					

		/* ADD EXTRA SLIDER FIELD FOR EACH LANGUAGE IF WPML PLUGON INSTALLED */
		global $sitepress;
		if(defined('ICL_SITEPRESS_VERSION') && isset($sitepress) && $sitepress->get_default_language()) {
			$active_languages = $sitepress->get_active_languages();
			if(!empty($active_languages)) {
				$options_new=array();
				foreach($options as $k=>$v) {
					if($v['type'] == 'form_fields' || $v['type'] == 'slider') {
						$v['mode']='toggle';
						$v_=$v;
						$v_['name'].=' ('.@$active_languages[$sitepress->get_default_language()]['display_name'].')';
						$options_new[]=$v_;
		
						foreach($active_languages as $lang=>$lang_arr) {
							if($lang != $sitepress->get_default_language()) {
								$v_=$v;
								$v_['id'].='_'.$lang;
								$v_['name'].=' ('.$lang_arr['display_name'].')';
								$options_new[]=$v_;
							}
						}
					} else {
						$options_new[]=$v;
					}
				}
				$options=$options_new;
			}
		}
		/* /ADD EXTRA SLIDER FIELD FOR EACH LANGUAGE IF WPML PLUGON INSTALLED */		
		
		update_option(OM_THEME_PREFIX.'options_template',$options); 					  

	}
}