<?php


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

  register_nav_menus(

    array('header-menu' => __( 'Header Menu' ) )

  );

}







function meyer_widgets_init() {
register_sidebar(array(
'name'          => 'Erstes Widget',
'id'            => 'erstes_widget',
'description'   => 'Mein erstes selbst angelegtes Widget Area',
'before_widget' => '<div class=”juhu_ein_widget”>',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
) );
}
add_action( 'widgets_init', 'meyer_widgets_init' );








 add_action ('init', 'register_my_menus');
?>
