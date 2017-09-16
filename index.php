<?php
/*
Template Name: トップテンプレート
*/

get_header(); ?>
<div class="row text-center">
	<div class="text-center">
		<h2>新着記事</h2>
		<p>金町食レポ、コラボ企画などの最新記事</p>
	</div>
	<ul class="recent-article col-md-12">
		<li class="col-md-3">
			<img src="" alt="記事のサムネイル">
		</li>
		<li class="col-md-3">
			<img src="" alt="記事のサムネイル">
		</li>
		<li class="col-md-3">
			<img src="" alt="記事のサムネイル">
		</li>
	</ul>

</div>

	<div class="row">

		<?php query_posts( $args ); ?>
		<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>

	</div>

	<?php get_footer(); ?>
