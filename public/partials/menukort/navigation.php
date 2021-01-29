<?php wp_nav_menu(array(
            'theme_location'    => 'menukort',
            'menu_id'           => 'menukort-menu',
            'container'         => false,
            'fallback_cb'       => 'custom_menukort_menu_fallback',
            'depth'             => 1,
            ));
            function custom_menukort_menu_fallback() {
                ?>
                <ul id="menu"><li><a href="/">Home</a></li><li><a href="/wp-admin/nav-menus.php">Set menukort menu</a></li></ul>
                <?php
                }
            ?>