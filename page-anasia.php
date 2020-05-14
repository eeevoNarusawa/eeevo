<?php get_header(); ?>
  <div class="anasia-catch">
    <div class="anasia-ttl">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/anasia.svg" alt="AN Asia">
      <h4>Recruitment Agency</h4>
    </div>
  </div>
  <div class="wakuwaku-copy">
    <div class="wakuwaku-copy-ttl"><h2>Business<br>overview</h2><i class="fas fa-caret-right"></i></div>
    <div class="wakuwaku-copy-text">
      <p>For companies who are looking for talented resources, we help you to find a suitable candidate, Japanese, fluent Japanese speakers or Malaysian.
      Our experienced and understand well about Japanese and Malaysian cultures and Japanese characteristic. We offer you the best solution for job search/finding talented resources.</p>
    </div>
  </div>
  <!-- <div class="wakuwaku-client">
    <div class="wakuwaku-client-ttl">Our Client</div>
    <div class="wakuwaku-client-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</div>
    <div class="wakuwaku-client-logo">

    </div>
  </div> -->

  <figure class="imghvr-push-up anasia-btn">
    <div class="anasia-btn-before">View Us<img src="<?php bloginfo('stylesheet_directory'); ?>/images/anasia_white.svg" alt="AN Asia"></div>
    <figcaption>
      <div class="anasia-btn-after"><i class="fas fa-user-plus"></i></div>
    </figcaption>
    <a href="https://an-asia.com/" target="_blank"></a>
  </figure>
  <div class="page-inquiry media-inquiry">
    <div class="page-inquiry-ttl">Inquiry Form</div>
    <div class="page-inquiry-form">
      <?php echo do_shortcode('[contact-form-7 id="22" title="Inquiry"]'); ?>
    </div>
  </div>
<?php get_footer(); ?>
