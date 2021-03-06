<?php
/*Register Navigation Menus*/
register_nav_menu('footer_nav', 'Footer navigation Menu');
require_once (get_stylesheet_directory() . '/functions/theme-options.php');

add_shortcode('ilc_latest_congress_news', 'ilc_latest_congress_news');
function ilc_latest_congress_news($atts){
	extract(shortcode_atts(array(
		'title'    	 => 'Latest Congress News',
		'num'		 => 2,
		'category'		 => '15'
	), $atts));
	ob_start();
	$all_news = get_posts(array('posts_per_page'=>$num, 'category'=>$category));
	if(count($all_news)>0){
?>
<div class="latest-congress-news">
	<?php if($title != ''){ ?>
	<h2 class="lcn-title"><?php echo $title;  ?></h2>
	<?php } ?>
	<div class="lcn-news">
		<?php foreach($all_news as $news){ ?>
		<article class="lcn-<?php echo $news->ID; ?>">
			<p class="lcn-news-data"><span><?php echo get_the_date('F j, Y'); ?></span></p>
			<h2><a href="<?php echo get_permalink($news->ID); ?>" title="<?php echo esc_attr(  get_the_title($news->ID)); ?>"><?php echo get_the_title($news->ID); ?></a></h2>
			<p>
				<?php 
				if(  has_excerpt( $news->ID)) {
					echo ilc_truncate($news->post_excerpt, 120);
				}else{
					echo ilc_truncate($news->post_content, 120);
				}
				?>
			</p>
		</article>
		<?php } ?>
	</div>
</div>

<?php
		return trim(ob_get_clean());
	}
	ob_get_clean();
	return '';
}

function ilc_truncate($str, $len=200, $trail='', $word_wrap=true){
	// Strip all html tags
	$str = strip_tags($str);
	// Strip Shortcodes
	$str = strip_shortcodes($str);
	// And the boundary spaces
	$str = trim($str);
	// No need to trancate if string length is lesser
	if(  strlen( $str) < $len){
		return $str;
	}
	// Do the truncate magic
	if($word_wrap)
		$str = substr($str, 0, strrpos(substr($str, 0, $len), ' '));
	else
		$str = substr($str, 0, $len);
	
	return $str . $trail;
}