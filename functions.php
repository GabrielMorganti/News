<?php


add_action('after_setup_theme', 'register_navwalker');

function register_navwalker()
{

    if (!file_exists(get_stylesheet_directory() . '/class-nav-bootstrap-walker.php')) {
        // file does not exist... return an error.
        return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
    } else {
        // file exists... require it.
        require_once get_stylesheet_directory() . '/class-nav-bootstrap-walker.php';
    }

    register_nav_menus(
        array(
            'meu_menu' => __( 'Menu Principal', 'meu-text-domain' )
        )
    );
}

add_action('wp_enqueue_scripts', 'news_scripts');

function news_scripts()
{
    wp_enqueue_style('news_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');

    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array('jquery'), '1', true);

    wp_enqueue_script('news_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('popper'), '1', true);
}


add_action('wp_enqueue_scripts', 'importar_arquivos_customizados');

function importar_arquivos_customizados()
{

    wp_enqueue_style('ICON CSS', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

    //JS
    wp_enqueue_script('JS', get_template_directory_uri() . '/java.js');
}

function theme_enqueue_styles()
{

    $parent_style = 'parent-style';

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style)
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
