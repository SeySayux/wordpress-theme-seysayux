<?php get_header(); ?>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

<hr class="light double" />

    <div class="contents" role="main">

      <h1 class="light">List of Series</h1>
			<?php wp_serieslist_display(); ?>

			<div class="stocpagination"> <?php series_toc_paginate(); ?> </div>
    </div><!-- #content -->

<?php get_footer(); ?>
