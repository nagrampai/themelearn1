<?php  get_header( ) ?>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                
            <?php  if ( have_posts() ) : while ( have_posts() ) : the_post( ); ?>
            
            <?php get_template_part( 'template-parts/content', 'book' ); ?>
          
                <?php endwhile; else : ?>

                    <?php get_template_part( 'template-parts/content', 'none' ); ?>

                <?php  endif; ?>
                <p>Template: single-book.php</p>
            </main>

        </div><!-- primary -->

        <?php get_sidebar( ); ?>
        

    <?php  get_footer(  ) ?>
    