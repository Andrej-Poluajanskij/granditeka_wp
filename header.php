<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=9;IE=10;IE=Edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <title><?php if ( is_front_page() ) { echo get_bloginfo( 'name' ); } else { echo get_bloginfo( 'name' ); echo ' | '; wp_title( '', true, 'right' ); } ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header container">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?> /icons/Group 1.png" alt="">
                <div class="fast-contacts">
                    <div><span class="envelope-icon"></span><a href="mailto:info@granditeka.eu"><?php the_field('email', 'options'); ?> </a></div> 
                    <div><span class="phone-icon"></span><a href="tel:+370 696 11332">+370 696 11332</a></div>
                </div>
            </div>
            <div class="header-burger-meniu btn not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="navigation">
            <?php wp_nav_menu(array( 
                        'container'  => '<ul></ul>',
                        'menu_class' => 'meniuitem menu-menu',
                        'theme_location' => 'pagrindinis-menu'
                    )); ?>
            </nav>
        </div>

            <div class="dark-screen"></div>
            <div class="mobile-meniu mobile-meniu_hidden">
                <nav class="navigation">
                <?php wp_nav_menu(array( 
                        'container'  => '<ul></ul>',
                        'menu_class' => 'meniuitem menu-menu',
                        'theme_location' => 'pagrindinis-menu'
                    )); ?>
                </nav>

                <div class="search-bar">
                    <form action="">
                        <input type="text" placeholder="Search products">
                        <button type="submit"></button>
                    </form>
                </div>

                <div class="fast-contacts">
                    <div><span class="envelope-icon"></span><a href="mailto:info@granditeka.eu">info@granditeka.eu</a></div> 
                    <div><span class="phone-icon"></span><a href="tel:+370 696 11332">+370 696 11332</a></div>
                </div>
            </div>
    </header>