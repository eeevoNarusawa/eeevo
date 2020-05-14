<?php get_header('jp'); ?>
  <div class="wakuwaku-catch">
    <div class="sp-jp-bg">
      <div class="wakuwaku-ttl">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/wakuwaku.svg" alt="WakuWaku">
        <h4>人材採用プラットフォーム</h4>
      </div>
    </div>
  </div>
  <div class="wakuwaku-copy">
    <div class="wakuwaku-copy-ttl"><h2>事業概要</h2><i class="fas fa-caret-right"></i></div>
    <div class="wakuwaku-copy-text">
      <p>
        WakuWakuは、日本語と英語で運用しているバイリンガル人材採用プラットフォームです。
        企業/求職者が求人情報/履歴書を自分で登録→企業/求職者が、希望に合う求職者/求人情報を検索→連絡を取り合うことが可能なシステムです。
        ローカルの転職サイトに比べ、日本人、日本語堪能者の登録者が多いのが特徴です。
      </p>
    </div>
  </div>
  <div class="wakuwaku-client">
    <div class="wakuwaku-client-ttl">主要取引先</div>
    <div class="wakuwaku-client-copy">日系企業を中心に多数の大手企業様にご利用いただいています。</div>
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
    <div class="page-inquiry-ttl">お問い合わせフォーム</div>
    <div class="page-inquiry-form">
      <?php echo do_shortcode('[contact-form-7 id="70" title="お問い合わせフォーム"]'); ?>
    </div>
  </div>
<?php get_footer('jp'); ?>
