<?php
//viewport切り替え用設定
//iphoneまたはipodで閲覧されているかどうかを判定
function is_iphone()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
    strpos($ua, 'iPhone')!== false||
    strpos($ua, 'iPod')!== false
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
//androidスマートフォンで閲覧されているかどうかを判定する関数
//「mobile」文字列の有無を見ることで、タブレット端末をfalse判定
function is_android()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
    strpos($ua, 'Android')!== false&&strpos($ua, 'Mobile')!== false
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
//Mozillaが開発するスマートフォン用OS「Firefox OS」の判定関数
function is_firefox_os()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
    strpos($ua, 'Android')=== false&&strpos($ua, 'Firefox')!== false&&strpos($ua, 'Mobile')!== false
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
//Windows Phoneで閲覧されているかどうかを判定する関数
//「mobile」文字列の有無を確認することで、タブレット端末をfalse判定
function is_windows_phone()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
    strpos($ua, 'Windows')!== false&&strpos($ua, 'Phone')!== false
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
//BlackBerryで閲覧されているかどうかを判定する関数
function is_blackberry()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
    strpos($ua, 'BlackBerry')!== false
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
//ガラケーで閲覧されているかどうか判定する関数
function is_ktai()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
    strpos($ua, 'DoCoMo')!== false||
    strpos($ua, 'KDDI')!== false||
    strpos($ua, 'UP.Browser')!== false||
    strpos($ua, 'MOT-')!== false||
    strpos($ua, 'J-PHONE')!== false||
    strpos($ua, 'WILLCOM')!== false||
    strpos($ua, 'Vodafone')!== false||
    strpos($ua, 'SoftBank')!== false
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
/*****
is_ktai()、is_iphone()、is_android()、
is_firefox_os()、is_windows_phone()、
is_blackberry()のどれかがTRUEを返すと
is_mymobile()はTRUEを返します。
つまりガラケー･スマホでの閲覧時にはTRUE、
PC・タブレットでの閲覧時にはFALSEを返します。
******/
function is_mymobile()
{
    if(
    is_ktai()||
    is_iphone()||
    is_android()||
    is_firefox_os()||
    is_windows_phone()||
    is_blackberry()
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
//iPadを判別
function is_ipad() {
    $is_ipad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
    if ($is_ipad) {
        return true;
    } else {
        return false;
    }
}
//テキストウィジェットにてショートコード
add_filter('widget_text', 'do_shortcode');
// ウィジェット
register_sidebars(2, array('name' => 'sidebar-%d'));//親カテゴリーを除外
function exclude_widget_categories( $args){
    $exclude = '1';          // 除外するカテゴリーのIDをカンマ区切りで指定
    $args['exclude'] = $exclude;
    return $args;
}
add_filter( 'widget_categories_args', 'exclude_widget_categories');
/*  Category Widget show hide_empty  */
add_filter( 'widget_categories_args', 'my_category_widget' );
function my_category_widget( $cat_args ) {
	$cat_args['hide_empty'] = 0;
	return $cat_args;
}
//スマホ条件分岐セッティング
function is_mobile() {
  $useragents = array(
    'iPhone',          // iPhone
    'iPod',            // iPod touch
    'Android',         // 1.5+ Android
    'dream',           // Pre 1.5 Android
    'CUPCAKE',         // 1.5+ Android
    'blackberry9500',  // Storm
    'blackberry9530',  // Storm
    'blackberry9520',  // Storm v2
    'blackberry9550',  // Storm v2
    'blackberry9800',  // Torch
    'webOS',           // Palm Pre Experimental
    'incognito',       // Other iPhone browser
    'webmate'          // Other iPhone browser
  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
//条件分岐用
function is_not_mobile() {
    return !is_mobile();
}
//アイキャッチ設定
add_theme_support('post-thumbnails');
set_post_thumbnail_size(400, 400, true);
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
	// width height を削除する
	$html = preg_replace('/(width|height)="\d*"\s/', '', $html);
	return $html;
}
// ヘッダーにある不要なタグを削除する
remove_action('wp_head', 'wp_generator');
// カスタム投稿タイプ
add_action( 'init', 'create_post_type' );
function create_post_type() {
	// 金町食レポ
	register_post_type( 'kanamati', /* post-type */
		array(
			'labels' => array(
			'name' => __( '金町食レポ' ),
			'singular_name' => __( '金町食レポ' ),
			'has_archive' => true
		),
		'public' => true,
		'menu_position' =>6,
		'supports' => array('title','editor','thumbnail','custom-fields','revisions')
    	)
	);
	// 遠征
	register_post_type( 'travel', /* post-type */
		array(
			'labels' => array(
			'name' => __( '遠征' ),
			'singular_name' => __( '遠征' ),
			'has_archive' => true
		),
		'public' => true,
		'menu_position' =>7,
		'supports' => array('title','editor','thumbnail','custom-fields','revisions')
    	)
	);
	// ミスコン
	register_post_type( 'misscon', /* post-type */
		array(
		'labels' => array(
			'name' => __( 'ミスコン' ),
			'singular_name' => __( 'ミスコン' ),
			'has_archive' => true
		),
		'public' => true,
		'menu_position' =>8,
		'supports' => array('title','editor','thumbnail','custom-fields','revisions')
    	)
	);
	// ショクブンカについて
	register_post_type( 'about', /* post-type */
		array(
			'labels' => array(
			'name' => __( 'ショクブンカについて' ),
			'singular_name' => __( 'ショクブンカについて' ),
			'has_archive' => true
		),
		'public' => true,
		'menu_position' =>9,
		'supports' => array('title','editor','thumbnail','custom-fields','revisions')
    	)
	);
	// ブログ
	register_post_type( 'blog', /* post-type */
		array(
			'labels' => array(
			'name' => __( 'ブログ' ),
			'singular_name' => __( 'ブログ' ),
			'has_archive' => true
		),
		'public' => true,
		'menu_position' =>10,
		'supports' => array('title','editor','thumbnail','custom-fields','revisions')
    	)
	);
	flush_rewrite_rules( false );
}
//メニュー順調整
add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order'       , 'pm_menu_order' );

function pm_menu_order( $menu_order ) {
    $menu = array();

    foreach ( $menu_order as $key => $val ) {
        if ( 0 === strpos( $val, 'edit.php' ) )
            break;

        $menu[] = $val;
        unset( $menu_order[$key] );
    }

    foreach ( $menu_order as $key => $val ) {
        if ( 0 === strpos( $val, 'edit.php' ) ) {
            $menu[] = $val;
            unset( $menu_order[$key] );
        }
    }

    return array_merge( $menu, $menu_order );
}
//ブログ投稿調整
function customize_tinymce_settings($array) {
 $array['fontsize_formats'] = '100% 150% 200%';
 return $array;
}
add_filter( 'tiny_mce_before_init', 'customize_tinymce_settings' );
function custom_editor_settings( $initArray ){
    // WordPress3くらい
    //$initArray['theme_advanced_blockformats'] = 'p,address,pre,code,h3,h4,h5,h6';
    // WordPress4から
    $initArray['block_formats'] = "見出し3=h3; 見出し4=h4; 見出し5=h5; 段落=p; グループ=div;";
	 $initArray['theme_advanced_styles'] = "cb=cb";
    return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );
//コンタクトフォーム7メール確認設置
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                if (method_exists($result, 'invalidate')) {
                    $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
                } else {
                    $result['valid'] = false;
                    $result['reason'] = array( $name => '確認用のメールアドレスが一致していません' );
                }
            }
        }
    }
    return $result;
}
//コンタクトフォーム関連
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );
	//日付が連続で表示
function my_the_post() {
    global $previousday;
    $previousday = '';
}
add_action( 'the_post', 'my_the_post' );
//奇数の記事を指定
function is_odd_post(){
	global $wp_query;
	return ((($wp_query->current_post+1) % 2) === 1);
}
//最初の記事を指定
function is_first_post(){
	global $wp_query;
	return ($wp_query->current_post === 0);
}
//タグを消させない
add_filter('tiny_mce_before_init', 'tinymce_init');
function tinymce_init( $init ) {
	$init['verify_html'] = false;
	return $init;
}
//iframeを消させない
function _my_tinymce($initArray) {
     //選択できるブロック要素を変更
     $initArray['theme_advanced_blockformats'] = 'p,h2,h3,h4,h5,dt,dd,div,pre';
	 $initArray[ 'extended_valid_elements' ] .= "iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]";
     return $initArray;
}
//ページネーション
function wp_pagination() {
	global $wp_query;
	$big = 99999999;
	$page_format = paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'prev_next'    => True,
		'prev_text'    => __('<<'),
		'next_text'    => __('>>'),
		'mid_size'    => 4,
		'type'  => 'array'
	) );
	if( is_array($page_format) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div><ul>';
		foreach ( $page_format as $page ) {
    		echo "<li>$page</li>";
		}
			echo '</ul></div>';
	}
	wp_reset_query();
}
//ショートコード
function my_home_url() {
    return home_url('/');
}
add_shortcode('home', 'my_home_url');
function my_template_url() {
    return get_template_directory_uri();
}
add_shortcode('template', 'my_template_url');
//画像のURLを取得
function get_the_post_image_src($postid,$size,$order=0,$max=null) {
    $attachments = get_children(array('post_parent' => $postid, 'post_type' => 'attachment', 'post_mime_type' => 'image'));
    if ( is_array($attachments) ){
        foreach ($attachments as $key => $row) {
            $mo[$key]  = $row->menu_order;
            $aid[$key] = $row->ID;
        }
        array_multisort($mo, SORT_ASC,$aid,SORT_DESC,$attachments);
        $max = empty($max)? $order+1 :$max;
        for($i=$order;$i<$max;$i++){
            return wp_get_attachment_image_src( $attachments[$i]->ID, $size );
        }
    }
}
?>
