<?php get_header(); ?>
<section id="single_contents" class="w920">

<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>

<h3><?php the_title(); ?></h3>
<p class="post_time"><?php the_time('Y.m.d'); ?></p>
<?php the_content(); ?>

<?php endwhile; else: ?>
<?php endif; ?>


</section>

<?php get_footer(); ?>
