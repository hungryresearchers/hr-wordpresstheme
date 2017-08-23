<?php
 

    $setting_reserve      = get_field('reserve_url', $cf_setting);
    $setting_gnavi      = get_field('link_gnavi', $cf_setting);
    $setting_hotpepper  = get_field('link_hotpepper', $cf_setting);
    $setting_tabelog    = get_field('link_tabelog', $cf_setting);
    $setting_hitosara   = get_field('link_hitosara', $cf_setting);
    $setting_retty      = get_field('link_retty', $cf_setting);
    $setting_twitter    = get_field('link_twitter', $cf_setting);
    $setting_line       = get_field('link_line', $cf_setting);
    $setting_instagram  = get_field('link_instagram', $cf_setting);
    $setting_facebook  = get_field('link_facebook', $cf_setting);
    $setting_googleplus  = get_field('link_google', $cf_setting);
    $setting_sns_fb   = get_field('sns_fb', $cf_setting);
    $setting_sns_tw_widget  = get_field('sns_tw_widgets_tag', $cf_setting);
    $setting_sns_insta_widget  = get_field('instagram_accesstoken', $cf_setting);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="金町,食文化,研究会,東京理科大学">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/tb.css" />
<link rel="stylesheet" media="screen and (max-width: 767px)" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/sp.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/js/colorbox/colorbox.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/html5shiv.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.bgswitcher.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.masonry.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.pages.js"></script>


<?php wp_head(); ?>
</head>


<?php
	if( is_home( ) ){
		$body_id = 'top' ;
	}
	elseif( is_page('kanamati') ){
		$body_id = 'kanamati_page' ;
		$body_class = 'page' ;
	}
	elseif( is_page('travel') ){
		$body_id = 'travel_page' ;
		$body_class = 'page' ;
	}
	elseif( is_page('misscon') ){
		$body_id = 'misscon_page' ;
		$body_class = 'page' ;
	}
  	elseif( is_page('about') ){
		$body_id = 'about_page' ;
		$body_class = 'page' ;
	}
	elseif( is_page('blog') ){
		$body_id = 'blog_page' ;
		$body_class = 'page' ;
	}
	elseif( is_single() ){
		$body_id = 'blog_page' ;
		$body_class = 'single' ;
	}
?>

<body id="<?php echo $body_id ; ?>" class="<?php echo $body_class ; ?>">
<div id="body-in">

<a class="menu-trigger">
	<span></span>
	<span></span>
	<span></span>
</a>

<div id="header" class="w1200">



<div id="menu" itemscope itemtype="http://schema.org/ViewAction">
<a href="<?php echo home_url('/'); ?>" alt="トップ">トップ</a>
<a href="<?php echo home_url('/kanamati'); ?>" alt="金町食レポ">金町食レポ</a>
<a href="<?php echo home_url('/trabvel'); ?>" alt="遠征">遠征</a>
<a href="<?php echo home_url('/misscon'); ?>" alt="ミスコン">ミスコン</a>
<a href="<?php echo home_url('/about'); ?>" alt="ショクブンカについて">ショクブンカについて</a>
<a href="<?php echo home_url('/blog'); ?>" alt="ブログ">ブログ</a>

<?php if(is_mobile()): ?>
<a href="<?php echo home_url('/blog'); ?>" alt="ブログ">ブログ</a>
<?php endif;?>
</div><!-- /#menu -->


</div>



<div id="mainv">

<?php if( is_home() ): ?>

</div>
<div class="mainv_bg">
</div>

<?php else: ?>

<div class="page_mainv_bg">
</div>

<?php endif; ?>

</div>

<!-- /#mainv -->
<?php if(!is_home()): ?>
<div id="breadcrumb" class="breadcrumbs w1200">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>


</div><!--/#breadcrumb -->
<?php endif; ?>
