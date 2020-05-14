<!DOCTYPE html>
<html>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-44928894-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-44928894-1');
    </script>
    <!--  Search console -->
    <meta name="google-site-verification" content="TVOB4HYGmL--7fNdIWkMgTCauTfMDhzhxGwQqlouC2k" />

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default.css?20200421">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/imagehover.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <?php if (is_page('jpn')) : ?>
      <title><?php bloginfo('name'); ?></title>
    <?php else : ?>
      <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <?php endif ; ?>
    <!-- Description -->
    <?php if (is_page('jpn') || is_parent_slug() === 'jpn') : ?>
      <meta name="description" itemprop="description" content="東南アジアでのウェブマーケティング、インバウンド集客、ウェブ制作ができるeeevo。今最も熱い東南アジアマーケティングをノンストップでサポートします。日本でのインバウンド集客やウェブ制作もeeevoでフルサポートします。">
    <?php else : ?>
      <meta name="description" itemprop="description" content="<?php bloginfo('description'); ?>">
    <?php endif; ?>
    <!-- Canonical -->
    <?php if ( is_home() ) {
      $canonical_url=get_bloginfo('url')."/";
    } else if (is_category()) {
      $canonical_url=get_category_link(get_query_var('cat'));
    } else if (is_page()||is_single()) {
      $canonical_url=get_permalink();
    } if ( $paged >= 2 || $page >= 2) {
      $canonical_url=$canonical_url.'page/'.max( $paged, $page ).'/';
    } ?>
    <?php if(!(is_404())):?>
      <link rel="canonical" href="<?php echo $canonical_url; ?>" />
    <?php endif;?>
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
  </head>
