<?php
add_theme_support( 'menus' ); 
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

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

?>