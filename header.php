<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>金町食文化研究会</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="金町,食文化,研究会,東京理科大学">
  <link rel="stylesheet" type="text/css" href="<1b3e87305609ac97dbf7129eced35d05 />">
  <link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<211614dc8f8e686dfca91a4758bff112 />/library/css/tb.css" />
  <link rel="stylesheet" media="screen and (max-width: 767px)" type="text/css" href="<d32b3ac13d8071b2ec4e5cfeb94b2e0f />/library/css/sp.css" />
  <link rel="stylesheet" type="text/css" href="<caf53ff67bd61250a9f2c1eb19368b8b />/library/js/colorbox/colorbox.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/html5shiv.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <?php wp_head(); ?>
</head>
<body>
<div class="container-fluid">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#" alt="">トップ</a></li>
            <li class="nav-item"><a class="nav-link" href="#" alt="金町食レポ">金町食レポ</a></li>
            <li class="nav-item"><a class="nav-link" href="#" alt="遠征">遠征</a></li>
            <li class="nav-item"><a class="nav-link" href="#" alt="ミスコン">ミスコン</a></li>
            <li class="nav-item"><a class="nav-link" href="#" alt="ショクブンカについて">ショクブンカについて</a></li>
            <li class="nav-item"><a class="nav-link" href="<efacd51dd0f8c6775f2b7610150234a7 />" alt="ブログ">ブログ</a></li>
          </ul>
        </div>
      </nav>
    <!-- /#menu -->
    <div id="mainv"><?php if( is_home() ): ?></div>
    <div class="mainv_bg"></div><?php else: ?>
    <div class="page_mainv_bg"></div><?php endif; ?>
  </header>
    <!-- /#mainv -->
    <?php if(!is_home()): ?>
    <div id="breadcrumb" class="breadcrumbs w1200">
    <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
    <!--/#breadcrumb -->
    <?php endif; ?>
