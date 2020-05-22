<?php

function setup_style(){
    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&family=Noto+Serif+TC:wght@200;300;400;500;600;700;900&display=swap');
    wp_enqueue_style('fontawesome','//use.fontawesome.com/releases/v5.13.0/css/all.css');
    wp_enqueue_style('style',get_stylesheet_uri(),NULL,microtime(),all);
    wp_enqueue_script('main',get_theme_file_uri('/js/main.js',NULL,microtime(),true));
};

add_action('wp_enqueue_scripts','setup_style');

function get_init(){
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'title-tag');
    add_theme_support( 'html5',  array('comment-list','comment-form','comment-post','search-form') );
}

add_action( 'after_setup_theme', 'get_init');

function custom_post_type(){
    register_post_type( 'project', array(
        'rewrite' => array('slug' => 'projects'),
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'edit_item' => 'Edit Project',
            'add_new_item' => 'Add New Project'
        ),
        'menu-icon' => 'dashicons-clipboard',
        'public' => true,
        'hierarchical'=> true,
        'has-archive' => true,
        'supports' => array(
            'title','thumbnail','editor' ,'excerpt','comments'
            )
        )
    );
}

add_action('init', 'custom_post_type');


function widget_init(){
    register_sidebar(
        array(
        'name' => "Main Sidebar",
        'id' => 'main_sidebar',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
       )
    );
}

add_action('widgets_init', 'widget_init');

function search_filter($query){

    if($query->is_search()){
        $query -> set('post_type',array('post','project'));
    }
}

add_filter( 'pre_get_posts', 'search_filter');
?>