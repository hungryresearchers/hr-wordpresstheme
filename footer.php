<?php

    // 各種設定
    $cf_setting = get_page_by_path('setting');
    $cf_setting = $cf_setting->ID;
    $setting_twitter    = get_field('link_twitter', $cf_setting);
    $setting_line       = get_field('link_line', $cf_setting);
    $setting_instagram  = get_field('link_instagram', $cf_setting);
    $setting_facebook   = get_field('link_facebook', $cf_setting);

    $setting_sns_fb   = get_field('sns_fb', $cf_setting);
    $setting_sns_tw_widget  = get_field('sns_tw_widgets_tag', $cf_setting);
    $setting_sns_insta_widget  = get_field('instagram_accesstoken', $cf_setting);
?>


<div class="refer_lists">
<ul class="refer_list">
    <?php if ("" != $setting_twitter) { ?>
    <li><a href="https://twitter.com/<?php echo $setting_twitter; ?>" target="_blank" onclick="ga('send','pageview','/twitter');"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_twitter.png" alt=""></a></li>
    <?php } ?>
    <?php if ("" != $setting_line) { ?>
    <li><a href="<?php echo $setting_line; ?>" target="_blank" onclick="ga('send','pageview','/line');"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_line.png" alt=""></a></li>
    <?php } ?>
    <?php if ("" != $setting_instagram) { ?>
    <li><a href="<?php echo $setting_instagram; ?>" target="_blank" onclick="ga('send','pageview','/instagram');"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_instagram.png" alt=""></a></li>
    <?php } ?>
    <?php if ("" != $setting_facebook) { ?>
    <li><a href="<?php echo $setting_facebook; ?>" target="_blank" onclick="ga('send','pageview','/facebook');"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_facebook.png" alt=""></a></li>
    <?php } ?>
</ul>
</div>

<div id="footer">
  <div id="footer-menu">
    <a href="<?php echo home_url('/'); ?>" alt="トップ">トップ</a>

    <a href="<?php echo home_url('/kanamti'); ?>" alt="金町食レポ">金町食レポ</a>
    <a href="<?php echo home_url('/travel'); ?>" alt="遠征">遠征</a>
    <a href="<?php echo home_url('/misscon'); ?>" alt="ミスコン">ミスコン</a>
    <a href="<?php echo home_url('/about'); ?>" alt="ショクブンカについて">ショクブンカについて</a>
    <a href="<?php echo home_url('/blog'); ?>" alt="ブログ">ブログ</a>
  </div><!-- /#footer-menu -->

<p id="copy">Copyright ©　金町食文化研究会 All Rights Reserved.</p>
</div><!-- /#footer -->

<?php if(!is_mymobile()):?>
<a class="window_right2" href="<?php echo home_url('/blog'); ?>" alt=""><img src="<?php echo get_template_directory_uri(); ?>/library/img/btn_blog.png" alt="ブログ"/></a>
<a id="totop" href="#" alt=""><img src="<?php echo get_template_directory_uri(); ?>/library/img/totop.png" alt="page top"/></a>
<?php else: ?>
<table id="sp_bottom">
  <tr>
    <td class="sp_totop"><a href="#" alt="">page<br />top</a></td>
  </tr>
</table>
<?php endif; ?>

</div>
<?php wp_footer(); ?>
</body>
</html>
