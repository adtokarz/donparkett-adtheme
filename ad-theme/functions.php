<?php 


//logo
function ad_theme_support(){
    add_theme_support('title-tag');
	remove_theme_support( 'custom-logo' );
	add_theme_support( 'custom-logo', array(
	    'height'      => 100,
	    'width'       => 400,
	    'flex-height' => true,
	    'flex-width'  => true,
	) );
}
add_action('after_setup_theme','ad_theme_support', 11);


//theme setup
function ad_wide_col() {
    add_theme_support( 'align-wide' );

  }
  function ad_post_thumb(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ad_wide_col');
add_action('after_setup_theme', 'ad_post_thumb');

  
//styles
function ad_styles_register()
{
    wp_enqueue_style('ct_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css");
    wp_enqueue_style('ct_styles', get_stylesheet_uri());
    // wp_enqueue_style('ad_style', get_template_directory_uri() . '/assets/css/ad_style.css');
    wp_enqueue_style('scss_style', get_template_directory_uri() . '/build/index.css');
}
add_action('wp_enqueue_scripts', 'ad_styles_register');


//scripts
function ad_scripts_register()
{
    wp_enqueue_script('ct_jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js', array(), '3.6.1', true);
    wp_enqueue_script('ct_popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"', array(), '1.16.0', true);
    wp_enqueue_script('ct_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"', array(), '5.2.11', true);
    wp_enqueue_script('ct_main_script', get_template_directory_uri()."/assets/js/ad_js.js", array(), '1.0', true);

}
add_action('wp_enqueue_scripts', 'ad_scripts_register');



// Footer widget
function custom_register_footer_widget() {
    register_sidebar( array(
        'name' => 'Footer Widget Area',
        'id' => 'footer_widget',
        'before_widget' => '<footer class="footer"><div class="site-container">',
        'after_widget' => '</div></footer>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'custom_register_footer_widget' );

// display footer widgets in footer
function custom_footer_widgets() {
    if ( is_active_sidebar( 'footer_widget' ) ) {
        echo '<div class="footer-widgets">';
        dynamic_sidebar( 'footer_widget' );
        echo '</div>';
    }
}
add_action( 'wp_footer', 'custom_footer_widgets' );


//primary menu
function register_primary_menu() {
    register_nav_menu('primary',__( `'Primary Menu'` ));
    }
    add_action( 'init', 'register_primary_menu' );