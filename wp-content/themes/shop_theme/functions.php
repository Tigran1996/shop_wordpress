<?php

add_filter( 'single_template', 'my_single_template' );
function my_single_template($single_template)
{
    if (is_product()) {
        $file = get_template_directory().'/single-product.php';
        if ( file_exists($file) ) {
            return $file;
        }
    }
    return $single_template;
}



function css_to_wp_head() {
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), null );
    wp_enqueue_style( 'owl', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', array(), null );
    wp_enqueue_style( 'wp_head_style', get_stylesheet_directory_uri() . '/style.css', array(), null );

}
add_action( 'wp_enqueue_scripts', 'css_to_wp_head' );

function jquery_in_footer() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),null );
    wp_enqueue_script( 'owl_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(),null );
//    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(),null );
    wp_enqueue_script( 'javascript', get_template_directory_uri() . '/js/script.js', array(),null );



}
add_action( 'wp_enqueue_scripts', 'jquery_in_footer' );

add_theme_support( 'post-thumbnails' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
    'primary'       => esc_html__( 'Primary Menu', 'tinstar' ),
    'account_menu'  => esc_html__( 'Account Menu', 'tinstar' ),
) );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
) );


register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'tinstar' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'footer information list', 'tinstar' ),
    'before_widget' => '<li>',
    'after_widget'  => '</li>',
    'before_title'  => '<div class="none-title">',
    'after_title'   => '</div>',
) );

register_sidebar( array(
    'name'          => esc_html__( 'Footer', 'tinstar' ),
    'id'            => 'sidebar-2',
    'description'   => esc_html__( 'Footer Social links', 'tinstar' ),
    'before_widget' => '<li>',
    'after_widget'  => '</li>',
    'before_title'  => '<div class="none-title">',
    'after_title'   => '</div>',
) );


//function get_excluded_event_categories() {
//    // Get event categories of current event
//    $current_event_cats = wp_get_post_terms( get_the_ID(), 'event-category' );
//    // Declare array to store excluded sub event categories
//    $excluded_sub_event_cats = [3];
//    // Loop through current event categories
//    foreach( $current_event_cats as $cat ) {
//        // Check if current category has a parent category
//        $parent_cat = $cat->parent;
//        if($parent_cat !== 0) {
//            // If it does, add it's term ID to the excluded array
//            array_push($excluded_sub_event_cats, $cat->term_id);
//        }
//    }
//    return $excluded_sub_event_cats;
//}


//add_action( 'wp_ajax_nopriv_getService', 'getService' );
//add_action( 'wp_ajax_getService', 'getService' );
//function getService(){
//    $html = "";
//    if(isset($_POST['id']) && $_POST['id'])
//    {
//        $id = $_POST['id'];
//        $query = get_post( $id );
//
//        $title = $query->post_title;
//        $link = get_permalink($id);
//        $sub = $query->post_content;
//
//
//        $html .= "<h2>".$title."</h2>";
//        $html .= "<p>".wp_trim_words($sub,200)."</p>";
//        $html .= "<a href= '$link'>LEARN MORE &#8594</a>";
//    }
//    echo json_encode($html);
//    wp_die();
//}


