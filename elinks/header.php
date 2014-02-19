<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet"
    href="<?php echo dirname(get_bloginfo('stylesheet_url')) .
        '/elinks/style.css'; ?>"
    type="text/css" media="screen" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">

<div id="banner" role="banner">

  <?php require_once('social-media.php') ?>

  <div id="meta-stuff">
    <?php wp_loginout(); ?>
    <?php get_search_form(); ?>
  </div>

  <hr class="light" style="margin-top: 4px;" />

  <div id="header">
    <div id="headerimg">
<h1><a href="<?php echo home_url(); ?>/">
<pre><?php echo file_get_contents(dirname(__FILE__) . '/header.txt'); ?></pre>
</a></h1>
      <div class="description"><?php bloginfo('description'); ?></div>
    </div>
  </div>

  <hr class="light double" />
</div>

