    <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

          <header class="entry-header">

            <h1><?php esc_html_e( 'Page Not Found', 'mercy' ); ?></h1>

          </header>

          <div class="entry-content">

            <p><?php echo get_search_form(); ?></p>

          </div>

    </article>
