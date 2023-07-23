<?php

namespace FSTheme;
function theme_supports (){
    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menu('header','En tête du menu');
}
function theme_enqueue_style (){
    wp_enqueue_style('tailwindcss-output',get_template_directory_uri().'/dist/output.css');
}

function theme_title($title){
    return 'Salut'.$title;
}

function theme_menu_class($classes){

    $classes[] ='text-sm font-semibold leading-6 text-gray-900';
    return $classes;

}

function theme_menu_link_class($attr){

    $attr['class'] ='';
    return $attr;

}
add_action( 'after_setup_theme' ,'FSTheme\theme_supports');
add_action( 'wp_enqueue_scripts' ,'FSTheme\theme_enqueue_style');
add_filter('wp_title','FSTheme\theme_title');
add_filter('nav_menu_css_class','FSTheme\theme_menu_class');
