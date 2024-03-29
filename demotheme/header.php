<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <header class="site-header">
            <div class="hd-search">
                <?php get_search_form(); ?>
            </div>
            <h1><a href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a></h1>
            <h5><?php bloginfo('description') ?></h5>
            <nav class="site-nav">
                <?php wp_nav_menu([
                    'theme_location' => 'primary'
                ]) ?>
            </nav>
        </header>
   
