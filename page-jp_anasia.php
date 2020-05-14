<?php get_header('jp'); ?>
  <div class="anasia-catch">
    <div class="anasia-ttl">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/anasia.svg" alt="AN Asia">
      <h4>人材紹介事業</h4>
    </div>
  </div>
  <div class="wakuwaku-copy">
    <div class="wakuwaku-copy-ttl"><h2>事業概要</h2><i class="fas fa-caret-right"></i></div>
    <div class="wakuwaku-copy-text">
      <p>
        マレーシアの企業様に対し、日本人、日本語堪能者、マレーシア人の求職者をご紹介します。
        日本在住歴のあるマレーシア人スタッフや、マレーシア在住歴が長い日本人コンサルタントが在籍しており、マレーシア人/日本人の特性やお互いの文化を理解したうえで、企業様や求職者様に最適な提案をいたします。
      </p>
    </div>
  </div>
  <figure class="imghvr-push-up anasia-btn">
    <div class="anasia-btn-before">View Us<img src="<?php bloginfo('stylesheet_directory'); ?>/images/anasia_white.svg" alt="AN Asia"></div>
    <figcaption>
      <div class="anasia-btn-after"><i class="fas fa-user-plus"></i></div>
    </figcaption>
    <a href="https://an-asia.com/jp/" target="_blank"></a>
  </figure>
  <div class="page-inquiry media-inquiry">
    <div class="page-inquiry-ttl">お問い合わせフォーム</div>
    <div class="page-inquiry-form">
      <?php echo do_shortcode('[contact-form-7 id="70" title="お問い合わせフォーム"]'); ?>
    </div>
  </div>
<?php get_footer('jp'); ?>
