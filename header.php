<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>金町食文化研究会</title>
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

  <body>
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
