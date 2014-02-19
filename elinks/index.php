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
?>

<?php the_post(); ?>

<div class="post">

<?php if(!$ispage) { ?>
<table width="100%">
  <td>
    <table class="authordate">
      <tr class="author">
        <td>
        &nbsp;&nbsp;(<?php
          $username = get_the_author_meta('user_nicename');
          echo strtoupper($username[0]); ?>) &gt;
        </td>
      </tr>
      <tr><td>&nbsp;</td></tr>
      <tr class="date">
        <td>
          <table class="date">
            <tr>
              <td class="year"><?php the_time('y');?></td>
              <td>│</td>
              <td class="month"><?php the_time('M');?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>│</td>
              <td class="day"><?php the_time('d');?></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
  <td width="100%">
<?php } ?>

    <h1>
      <a href="<?php the_permalink() ?>" rel="bookmark"
          title="Permanent Link to <?php the_title_attribute(); ?>">
        <?php the_title(); ?>
      </a>
    </h1>
<?php if(!$ispage) { ?>
  </td>
</table>
<?php } ?>

<div class="contents <?php if($ispage) { echo 'contents-page'; } ?>">
  <article>
    <?php the_content("More &raquo;", FALSE); ?>
  </article>

  <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
</div>


</div>

<hr id="before-comments"/>

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
