<?php get_header(); ?>
  <div class="wakuwaku-catch">
    <div class="wakuwaku-ttl">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/wakuwaku.svg" alt="WakuWaku">
      <h4>Job search platform</h4>
    </div>
  </div>
  <div class="wakuwaku-copy">
    <div class="wakuwaku-copy-ttl"><h2>Business<br>overview</h2><i class="fas fa-caret-right"></i></div>
    <div class="wakuwaku-copy-text">
      <p>WakuWaku is bilingual (English and Japanese) job search platform.
      Once companies post job opportunities and job seekers post resume online,  companies/job seekers search information that match criteria.
      Companies and job seekers can contact each other directly.
      Compared to Malaysia job site platforms, many Japanese and Japanese speaking job seekers use this platform.</p>
    </div>
  </div>
  <div class="wakuwaku-client">
    <div class="wakuwaku-client-ttl">Our Client</div>
    <div class="wakuwaku-client-copy">Many major company using own service, and mainly are Japanese companies.</div>
    <div class="wakuwaku-client-logo">
      <?php get_template_part('client'); ?>
    </div>
  </div>
  <figure class="imghvr-push-up wakuwaku-btn">
    <div class="wakuwaku-btn-before">View Us<img src="<?php bloginfo('stylesheet_directory'); ?>/images/wakuwaku_white.svg" alt="WakuWaku"></div>
    <figcaption>
      <div class="wakuwaku-btn-after"><i class="fas fa-desktop"></i></div>
    </figcaption>
    <a href="https://my.wakuwaku.world/en" target="_blank"></a>
  </figure>
  <div class="page-inquiry media-inquiry">
    <div class="page-inquiry-ttl">Inquiry Form</div>
    <div class="page-inquiry-form">
      <?php echo do_shortcode('[contact-form-7 id="22" title="Inquiry"]'); ?>
    </div>
  </div>
<?php get_footer(); ?>
