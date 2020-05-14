<?php get_header('jp'); ?>
  <div class="news-catch"></div>
  <div class="news-wrap">
    <div class="news-ttl">News</div>
    <div class="tabs">
      <div class="tabs-ttl">Year</div>
      <!-- <input id="all" type="radio" name="tab_item"> -->
      <a href="<?php echo home_url(); ?>/jpn/jp_news/"><label class="tab_item" for="all">2020</label></a>
      <!-- <input id="programming" type="radio" name="tab_item"> -->
      <a href="<?php echo home_url(); ?>/jpn/jp_news/"><label class="tab_item" for="programming">2019</label></a>
    </div>
  </div>
  <div class="single-wrap">
    <div class="single-ttl"><?php the_title(); ?></div>
    <div class="single-date"><?php the_time('Y/m/d'); ?></div>
    <div class="single-conts">
      <?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div>
  <div class="page-inquiry ad_agency-inquiry" id="contact">
    <div class="page-inquiry-ttl">お問い合わせフォーム</div>
    <div class="page-inquiry-form">
      <?php echo do_shortcode('[contact-form-7 id="70" title="お問い合わせフォーム"]'); ?>
    </div>
  </div>
<?php get_footer('jp'); ?>
