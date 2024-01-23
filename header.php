<!DOCTYPE html>
<html lang="ta">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body>
    <div class="header-wrapper">
        <div class="main-header">
            <div class="brand">
                <a href="<?php echo site_url(); ?>" class="logo-text">வண்ணம்</a>
                <div id="menu-icon" onclick="switchMenu()">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
            <div class="main-menu">
                    <?php 
                    wp_nav_menu(
                        array(
                          'menu' => 'header-menu',
                          'container' => 'ul',
                          'menu_id' => 'menu-items'
                        )
                      );
                    ?>
            </div>
        </div>
    </div>