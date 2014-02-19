<?php
require_once('browser.php');

if(browser_style(__FILE__)) {
    return;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet"
    href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet"
    href="<?php echo get_stylesheet_directory_uri() . '/style-mobile.css'; ?>"
    type="text/css" media="screen and (max-device-width:720px)" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<meta name="viewport"
    content="width=device-width; initial-scale = 1.0; minimum-scale=1.0;" />

<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar
if ( empty($withcomments) && !is_single() ) {
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>

</style>

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
      <a href="<?php echo home_url(); ?>/">
        <img src="http://files.seysayux.net/spacer.png" />
      </a>
      <h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
      <div class="description"><?php bloginfo('description'); ?></div>
    </div>
  </div>

  <hr class="light double" />
</div>

