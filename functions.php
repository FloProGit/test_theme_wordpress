<?php

namespace FSTheme;
function theme_supports (){
    add_theme_support('title-tag');
    wp_enqueue_style('tailwindcss-output',get_template_directory_uri().'/dist/output.css');
}

add_action( 'after_setup_theme' ,'FSTheme\theme_supports');
