<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
</head>
<body>
<header class="header bg-navy">
    <div class="container">
        <div class="header-top">
            <nav class="menu">
                <button type="button" class="btn btn-gamburg" id="btn_gamburg"></button>
                <div class="menu-wrap">
                    <button type="button" class="btn btn-close" id="btn_close"></button>
                    <?php wp_nav_menu( [
                            'theme_location'  => 'primary',
                            'container'       => null, 
                            'menu_class'      => 'menu-list', 
                        ] );?>
                </div>
            </nav>
        </div>
        <h1 class="title logo">
            <div class="logo-img">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/content/logo.svg" alt="Web Agent">
            </div>
            <span>Команда профессиональных верстальщиков</span>
        </h1>
    </div>
</header>