<?php  get_header( ) ?>
        <div id="primary" class="content-area extended">
            <main id="main" class="site-main" role="main">
              <h1><?php the_archive_title( ); ?> </h1>
              <?php esc_html_e( 'Posts Only!', 'themelearn1' ); ?>
              <p><?php echo category_description( ); ?></p>

              <hr>
            <?php  if ( have_posts() ) : while ( have_posts() ) : the_post( ); ?>
            
            <?php get_template_part( 'template-parts/content', 'posts' ); ?>
          
                <?php endwhile; else : ?>

                    <?php get_template_part( 'template-parts/content', 'none' ); ?>

                <?php  endif; ?>
                <p>Template: Chat Category - category-6.php</p>
            </main>

        </div><!-- primary -->

      
        

    <?php  get_footer(  ) ?>
    