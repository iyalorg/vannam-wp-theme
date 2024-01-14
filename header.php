<!DOCTYPE html>
<html>

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
                <ul id="menu-items">
                    <li class="menu-item"><a href="#">கட்டுரைகள்</a></li>
                    <li class="menu-item"><a href="#">தகவல்கள்</a></li>
                    <li class="menu-item"><a href="#">சொல்லகராதி</a></li>
                    <li class="menu-item"><a href="#">தொடர்புகள்</a></li>
                </ul>
            </div>
        </div>
    </div>