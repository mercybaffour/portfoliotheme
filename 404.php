<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

    <div class="page-wrapper">
				<div class="page-content">
					<h1><?php _e( '4-OHHHHHH-4', 'mercy' ); ?></h1>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'mercy' ); ?></p>

    </div>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

    </main>

  </div>

  <?php get_sidebar( 'page' ); ?>

<?php get_footer(); ?>
