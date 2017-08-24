<?php
/*
Template Name: トップテンプレート
*/
?>

<?php get_header(); ?>


<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args=array(
		'post_type' => 'page',
		'p' => '5',
		'paged' => $paged
	);
?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
<?php the_content(); ?>
<?php endwhile; else: ?>
<?php endif; ?>
<?php wp_reset_query(); ?>


<?php get_footer(); ?>
