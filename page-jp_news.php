<?php get_header('jp'); ?>
<!-- <div class="news-catch"></div> -->
<div class="news-wrap">
  <div class="news-ttl">News</div>

  <div class="tabs">
    <div class="tabs-ttl">Year</div>
    <input id="all" type="radio" name="tab_item" checked>
    <label class="tab_item" for="all">2020</label>
    <input id="programming" type="radio" name="tab_item">
    <label class="tab_item" for="programming">2019</label>

    <div class="tab_content" id="all_content">
      <div class="tab_content_description">
        <?php query_posts('posts_per_page=-1&year=2020&cat=2'); ?>
        <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
        ?>
        <div class="news-cont">
          <div class="news-cont-date"><?php the_time('Y/m/d'); ?></div>
          <div class="news-cont-ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        </div>

        <?php
          endwhile;
        else:
        ?>
        <p>まだ記事はありません</p>
        <?php
          endif;
        ?>
      </div>
    </div>

    <div class="tab_content" id="programming_content">
      <div class="tab_content_description">
        <?php query_posts('posts_per_page=-1&year=2019&cat=2'); ?>
        <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
        ?>
        <div class="news-cont">
          <div class="news-cont-date"><?php the_time('Y/m/d'); ?></div>
          <div class="news-cont-ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        </div>

        <?php
          endwhile;
        else:
        ?>
        <p>まだ記事はありません</p>
        <?php
          endif;
        ?>
      </div>
    </div>

  </div>
</div>

<?php get_footer('jp'); ?>
