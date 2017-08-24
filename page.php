<?php
/*
Template Name: 固定ページテンプレート
*/
?>

<?php get_header(); ?>
<h2 class="page-h2"><?php the_title(); ?></h2>




<!----------- ご宴会ページここから -------------->

<?php if(is_page('enkai')):?>
<section id="enkai" class="w1000">

<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args=array(
		'post_type' => 'enkai_list', //カスタム投稿名
		'posts_per_page'=> -1, //表示件数（-1で全ての記事を表示）
		'paged' => $paged
	);
?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>

<div class="enkai_list fl_wrap">
	<div class="fl_left">
		<?php the_post_thumbnail('full'); ?>
	</div>
	<div class="fl_right">
		<h3><?php the_title();?></h3>
		<?php the_content(); ?>
	</div>
</div>

<?php endwhile; else: ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

</section><!-- /#course_menu -->

<!----------- ご宴会ページここまで -------------->

<!----------- メニューページここから -------------->

<?php if(is_page('menu')):?>
<section id="menu" class="w1200 fl_wrap">


<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args=array(
		'post_type' => 'menu_list', //カスタム投稿名
		'posts_per_page'=> -1, //表示件数（-1で全ての記事を表示）
		'paged' => $paged
	);
?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>

<div class="menu_list fl_wrap">
	<div class="fl_left">
		<?php the_post_thumbnail('full'); ?>
	</div>
	<div class="fl_right">
		<h3><?php the_title();?></h3>
		<?php the_content(); ?>
	</div>
</div>

<?php endwhile; else: ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

</section><!-- /#course_menu -->

<!----------- メニューページここまで -------------->

<!----------- ドリンクページここから -------------->

<?php elseif(is_page('drink')):?>
<section id="drink">

<div class="w1000">
<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args=array(
		'post_type' => 'drink_list', //カスタム投稿名
		'posts_per_page'=> -1, //表示件数（-1で全ての記事を表示）
		'paged' => $paged,
		'taxonomy' => 'drink_cat',
		'term' => 'fullsize'
	);
?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>

	<div class="drink_list fl_wrap">
		<div class="fl_left">
			<?php the_post_thumbnail('full'); ?>
		</div>
		<div class="fl_right">
			<h3><?php the_title();?></h3>
			<?php the_content(); ?>
		</div>
	</div>

<div class="menu_category w_full">
	<h3 class="menubox"><?php the_title();?></h3>
	<?php the_content(); ?>
</div>

<?php endwhile; else: ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>

<div class="container">
<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args=array(
		'post_type' => 'drink_list', //カスタム投稿名
		'posts_per_page'=> -1, //表示件数（-1で全ての記事を表示）
		'paged' => $paged,
		'taxonomy' => 'drink_cat',
		'term' => 'halfsize'
	);
?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>

<div class="menu_category grid">
	<h3 class="menubox"><?php the_title();?></h3>
	<?php the_content(); ?>
</div>

<?php endwhile; else: ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>

</section><!-- /#course_menu -->

<!----------- ドリンクページここまで -------------->

<!----------- 席・個室ページここから -------------->

<?php elseif(is_page('space')):?>
<section id="space" class="w1000">

<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args=array(
		'post_type' => 'space', //カスタム投稿名
		'posts_per_page'=> -1, //表示件数（-1で全ての記事を表示）
		'paged' => $paged
	);
?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>

<?php while(have_posts()):the_post(); ?>
	<div class="space_list fl_wrap">
		<div class="fl_left">
			<?php the_post_thumbnail('full'); ?>
		</div>
		<div class="fl_right">
			<h3><?php the_title();?></h3>
			<?php the_content(); ?>
		</div>
	</div>


<?php endwhile; else: ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

</section><!-- /#course_menu -->

<!----------- 席・個室ページここまで -------------->


<!-----------　ランチページここから -------------->

<?php elseif(is_page('lunch')):?>
<section id="lunch">
	<div class="w1000">
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args=array(
				'post_type' => 'lunch', //カスタム投稿名
				'posts_per_page'=> -1, //表示件数（-1で全ての記事を表示）
				'paged' => $paged,
				'term' => 'fullsize'
			);
		?>
		<?php query_posts( $args ); ?>
		<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>

			<div class="lunch_list fl_wrap">
				<div class="fl_left">
					<?php the_post_thumbnail('full'); ?>
				</div>
				<div class="fl_right">
					<h3><?php the_title();?></h3>
					<?php the_content(); ?>
				</div>
			</div>

		<?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section><!-- /#course_menu -->

<!----------- ランチページここまで -------------->


<!----------- 新着情報ページここから -------------->

<?php elseif(is_page('news')):?>

<section id="news_archive" class="w1200">
<div class="news_list_wrap ib_wrap">
<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args=array(
		'post_type' => 'news', //カスタム投稿名
		'posts_per_page'=> 21, //表示件数（-1で全ての記事を表示）
		'paged' => $paged
	);
?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	<a href="<?php the_permalink(); ?>" alt="<?php the_title();?>" class="news_list ib_box">
		<div class="news_thumb fl_left"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></div>
		<div class="news_discription fl_right"><?php if(mb_strlen($post->post_title)>20) { $title= mb_substr($post->post_title,0,20) ; echo $title. ･･･ ;} else {echo $post->post_title;}?></div>
	</a>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
<div id="pagenation">
<?php wp_pagination(); ?>
</div>

<?php wp_reset_query(); ?>
</section><!-- /#news -->

<!-----------  新着情報ページここまで -------------->

<!----------- ブログページここから -------------->

<?php elseif(is_page('blog')):?>

<section id="blog_archive" class="w1200">
<div class="news_list_wrap ib_wrap">
<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args=array(
		'post_type' => 'post', //カスタム投稿名
		'posts_per_page'=> 21, //表示件数（-1で全ての記事を表示）
		'paged' => $paged
	);
?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	<a href="<?php the_permalink(); ?>" alt="<?php the_title();?>" class="news_list ib_box">
		<div class="news_thumb fl_left"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></div>
		<div class="news_discription fl_right"><?php if(mb_strlen($post->post_title)>20) { $title= mb_substr($post->post_title,0,20) ; echo $title. ･･･ ;} else {echo $post->post_title;}?></div>
	</a>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
<div id="pagenation">
<?php wp_pagination(); ?>
</div>

<?php wp_reset_query(); ?>
</section><!-- /#news -->

<!-----------  ブログページページここまで -------------->

<!----------- リザベーションページここから -------------->

<?php elseif(is_page('reservation')):?>

<section id="reservation" class="w1000">
	<?php the_content(); ?>
</section>

<!----------- リザベーションページここまで -------------->


<!----------- その他ページここから -------------->

<?php else: ?>

<section id="otherpage" class="w1000">
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
<?php the_content(); ?>
<?php endwhile; else: ?>
<?php endif; ?>
</section>


<?php endif; ?>

<!----------- その他ページここまで -------------->


<?php get_footer(); ?>
