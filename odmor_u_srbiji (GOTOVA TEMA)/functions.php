<?php

function odmor_theme_setup() {
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'odmor_u_srbiji' ),
    ) );
    
}
add_action('after_setup_theme', 'odmor_theme_setup');

function sidebar() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'sidebar');