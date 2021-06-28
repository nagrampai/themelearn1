<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(  ); ?>
    </head>
    <body <?php  body_class(); ?>>
        <div id="page">
            <a href="#content" class="skip-link screen-reader-text">
                <?php esc_html_e( 'Skip to content', 'themelearn1' ); ?>
            </a>

            <header id="masthead" class="site-header" role="banner">
                
                <div class="site-branding">
                    <h1 class = "site-title"> 
                        <a href="<?php echo esc_url( home_url( '/' )); ?>" rel="home"> 
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h1> 
                    <h5 class="site-description">
                        <?php bloginfo( 'description' ); ?>
                    </h5>
                </div>

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php  
                    $args = [
                        'theme_location' => 'primary_menu',
                    ];
                    
                    wp_nav_menu( $args );
                    ?>
                </nav>
            </header>

        <div id="content" class="site-content">
        

        