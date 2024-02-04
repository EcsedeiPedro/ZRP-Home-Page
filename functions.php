<?php 
    function theme_setup() {
        // Adiciona suporte para menus
        register_nav_menus(array(
            'primary' => esc_html__('Menu Principal', 'primary-menu'),
            'footer' => esc_html__('Footer', 'footer-menu'),
        ));
    }
    add_action('after_setup_theme', 'theme_setup');

    function register_style() {
        wp_enqueue_style('style-css', get_stylesheet_uri(), array(), '1.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'register_style');

    function register_scripts() {
        // Registra o script personalizado
        wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'register_scripts');

    function jquery_add() {
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), null, true);
    }
    
    add_action('wp_enqueue_scripts', 'jquery_add');

    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title'    => 'Configurações Globais',
            'menu_title'    => 'Configurações Globais',
            'menu_slug'     => 'global-config',
            'position'      => 2,
        ));
    
        acf_add_options_sub_page(array(
            'page_title'    => 'Header',
            'menu_title'    => 'Header',
            'parent_slug'   => 'global-config',
        ));
    
        acf_add_options_sub_page(array(
            'page_title'    => 'Footer',
            'menu_title'    => 'Footer',
            'parent_slug'   => 'global-config',
        ));
    
    }