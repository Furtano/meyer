<?php

require_once('wp_bootstrap_navwalker.php');

function addHomeMenuLink($menuItems, $args)
{
        if('main' == $args->theme_location)
        {
                if ( is_front_page() )
                        $class = 'class="current-menu-item"';
                else
                        $class = '';
                $homeMenuItem = '<li ' . $class . '>' .
                                                $args->before .
                                                '<a href="' . home_url( '/' ) . '" title="Home">' .
                                                        $args->link_before .
                                                        'Home' .
                                                        $args->link_after .
                                                '</a>' .
                                                $args->after .
                                                '</li>';
                $menuItems = $homeMenuItem . $menuItems;
        }
        return $menuItems;
}
add_filter( 'wp_nav_menu_items', 'addHomeMenuLink', 10, 2 );
function register_my_menus() {

  register_nav_menus( array(
      'primary' => __( 'Primary Menu', 'header-menu' ),
  ) );
}
 add_action ('init', 'register_my_menus');
?>
