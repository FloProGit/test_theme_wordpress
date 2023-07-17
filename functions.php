<?php

namespace FSTheme;
function theme_supports (){
    add_theme_support('title-tag');
}

add_action( 'after_setup_theme' ,'FSTheme\theme_supports');
