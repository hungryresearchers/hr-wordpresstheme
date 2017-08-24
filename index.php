<?php
/*
Template Name: トップテンプレート
*/

get_header(); ?>

<div class="">

	<p>test　表示されてるかな？</p>

	<?php query_posts( $args ); ?>
	<?php if(have_posts()): ?>
	<?php while(have_posts()):the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>

</div>

<?php get_footer(); ?>
