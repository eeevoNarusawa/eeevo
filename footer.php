      <footer>
        <div class="footer-logo"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg"></a></div>
        <div class="footer-links">
          <a href="<?php echo home_url(); ?>/about-us#contact">Contact Us</a>
          <a href="<?php echo home_url(); ?>/terms_of_use/">Terms of Use</a>
          <a href="<?php echo home_url(); ?>/privacy_policy/">Privacy Policy</a>
        </div>
        <div class="copy-right">Copyright © eeevo group. All Rights Reserved.</div>
      </footer>

      </main>
      <div class="menu-trigger" href="">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav>
        <div class="nav-logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg" alt="eeevo"></a></div>
        <div class="nav-wrap">
          <div class="nav-conts">
            <div class="nav-main">Our Service</div>
            <div class="nav-sub"><a href="<?php echo home_url(); ?>/marketing/">Marketing</a></div>
            <div class="nav-sub"><a href="<?php echo home_url(); ?>/development/">Web Devolopment</a></div>
            <div class="nav-sub"><a href="<?php echo home_url(); ?>/human_resource/">Human Resource</a></div>
            <div class="nav-main">About Us</div>
            <div class="nav-sub"><a href="<?php echo home_url(); ?>/about-us/">Overview</a></div>
            <div class="nav-sub"><a href="<?php echo home_url(); ?>/about-us#our-team">Our Team</a></div>
            <div class="nav-sub"><a href="<?php echo home_url(); ?>/about-us#group">Group Companies</a></div>
          </div>
          <div class="nav-conts">
            <a href="<?php echo home_url(); ?>/news/"><div class="nav-main nav-main-link">News</div></a>
            <a href="<?php echo home_url(); ?>/about-us#join-us"><div class="nav-main nav-main-link">Join Us</div></a>
          </div>
        </div>
      </nav>
      <div class="overlay"></div>
    </div><!-- wrapper -->
    <?php wp_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery-scrollify@1.0.20/jquery.scrollify.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
  </body>
</html>
