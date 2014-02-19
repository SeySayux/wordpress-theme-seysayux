<?php
require_once('browser.php');

if(browser_style(__FILE__)) {
    return;
}
?>

<?php get_header(); ?>

<?php get_pages(); ?>

<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

<hr class="light double" />

<?php

$ispage = is_page(); // Needs to be called before The Loop

?>

<?php
if(function_exists('yoast_breadcrumb') && !is_home()) {
    # yoast_breadcrumb('<p id="breadcrumbs">','</p>');
}
?>


<?php
if(have_posts()) {
    while(have_posts()) {
        $isseriestoc = is_seriestoc();
?>

<?php the_post(); ?>

<div class="post">


<?php if(!$ispage && !$isseriestoc) { ?>
<div class="authordate">
  <div class="author">
    <?php echo get_avatar(get_the_author_meta('user_email'), '48'); ?>
  </div>
  <div class="date">
    <div class="year">
      <?php the_time('y');?>
    </div>
    <div class="md">
      <div class="month">
        <?php the_time('M');?>
      </div>
      <div class="day">
        <?php the_time('d');?>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<div class="contents <?php if($ispage) { echo 'contents-page'; } ?>">
  <h1>
    <a href="<?php the_permalink() ?>" rel="bookmark"
        title="Permanent Link to <?php the_title_attribute(); ?>">
      <?php the_title(); ?>
    </a>
  </h1>

  <article>
    <?php the_content("More &raquo;", FALSE); ?>
  </article>

  <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
</div>


</div>

<?php if(is_single()): ?>
<hr class="before-comments"/>
<?php else: ?>
<hr class="article-separator"/>
<?php endif; ?>

<?php comments_template('./comments.php'); ?>

<?php
    }
} else {
?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php
}
?>

<?php get_footer(); ?>
