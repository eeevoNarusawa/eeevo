<?php
/*
Template Name: 固定ページJPテンプレート
*/
?>
<?php get_header('jp'); ?>
  <div class="page-template-wrap">
    <div class="page-template-ttl"><?php the_title(); ?></div>
    <div class="page-template-conts">
      <?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div>
<?php get_footer('jp'); ?>
