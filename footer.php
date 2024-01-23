<div class="footer-wrapper">
    <div class="footer-menu-section">
        <div class="footer-logo"><p>இது ஒரு இயல் தொண்டு நிறுவனத்தின் படைப்பு.</p></div>
        <?php 
        wp_nav_menu(
            array(
                'menu' => 'footer-menu-1',
                'container' => 'ul',
                'menu_class' => 'footer-menu'
            )
            );
        wp_nav_menu(
            array(
                'menu' => 'footer-menu-2',
                'container' => 'ul',
                'menu_class' => 'footer-menu'
            )
            );
        wp_nav_menu(
            array(
                'menu' => 'footer-menu-3',
                'container' => 'ul',
                'menu_class' => 'footer-menu'
            )
            );
        ?>
    </div>
    <div class="main-footer">
        <div class="footer-note">
            காப்புரிமை 2024 &copy; <a href="http://iyal.org">இயல் தொண்டு நிறுவனம்</a>
            <p class="rights-info">அனைத்து உரிமைகளும் பாதுகாக்கப்பட்டவை.</p>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>