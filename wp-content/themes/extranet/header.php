<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="icon" href="https://www.cg.df.gov.br/wp-conteudo/uploads/2020/05/cropped-1056a8b4-7fbd-4039-89dd-471b01e6d5e5-32x32.jpg" sizes="32x32" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="container">
                    <div class="logo">
                        Logo
                    </div>
                    <div class="searchbox">
                        Serch
                    </div>
                </div>
            </section>
            <section class="menu-area">
                <div class="container">
                    <nav class="main-menu">
                        <button class="check-button">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>
                        <?php wp_nav_menu( array( 'theme_location' => 'extranet_main_menu', 'depth' => 2 )); ?>
                    </nav>
                </div>
            </section>
        </header>