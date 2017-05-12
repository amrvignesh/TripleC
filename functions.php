<?php
add_action( 'wp_head', 'triplec_my_assets' );

function triplec_my_assets() {
    wp_enqueue_style('triplec-stylesheet',  get_stylesheet_uri());
	wp_enqueue_script( 'jq', get_template_directory_uri().'/js/triplec-jquery.js' );
	wp_enqueue_script( 'easing', get_template_directory_uri().'/js/triplec-jquery.easing.js', array( 'jquery' ), '1.3' );
	wp_enqueue_script( 'slides', get_template_directory_uri().'/js/triplec-slides.min.jquery.js', array( 'jquery', 'easing' ) );
	wp_enqueue_script( 'slider', get_template_directory_uri().'/js/triplec-slider.js', array( 'jquery', 'easing', 'slides' ) );
	wp_enqueue_script( 'scroll', get_template_directory_uri().'/js/triplec-scrolldown.js', array( 'jquery', 'easing', 'slides','slider' ) );
}


function triplec_register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu','triplec' ),
      'extra-menu' => __( 'Extra Menu','triplec' )
    )
  );
}
add_action( 'init', 'triplec_register_my_menus' );

add_theme_support( 'post-thumbnails' ); 


	
	function themeslug_theme_customizer( $wp_customize ) {
		
    $wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'triplec' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );
   $wp_customize->add_setting( 'themeslug_logo', 'sanitize_callback' );
   $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'triplec' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo'
) ) );
}
add_action( 'customize_register', 'themeslug_theme_customizer' );

/*footer*/
function triplec_widgets_init(){
register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 3',
'id' => 'footer-sidebar-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'side Sidebar',
'id' => 'side-sidebar',
'description' => 'Appears in the slidebar area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'side Sidebar 1',
'id' => 'side-sidebar-1',
'description' => 'Appears in the slidebar area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'side Sidebar 2',
'id' => 'side-sidebar-2',
'description' => 'Appears in the slidebar area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

}
add_action( 'widgets_init', 'triplec_widgets_init' );
function triplec_add_taxonomies_to_pages() {
 register_taxonomy_for_object_type( 'post_tag', 'page' );
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'triplec_add_taxonomies_to_pages' );

 if ( ! is_admin() ) {
 add_action( 'pre_get_posts', 'triplec_category_and_tag_archives' );
 
 }
function triplec_category_and_tag_archives( $wp_query ) {
$my_post_array = array('post','page');
 
 if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
 $wp_query->set( 'post_type', $my_post_array );
 
 if ( $wp_query->get( 'tag' ) )
 $wp_query->set( 'post_type', $my_post_array );
}
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

function triplec_theme_functions() {

    add_theme_support( 'title-tag' );

}
add_action( 'after_setup_theme', 'triplec_theme_functions' );

$comments_args = array(
        // change the title of send button 
        'label_submit'=>'Send',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'triplec' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);

comment_form($comments_args);

$args = array(
	'name'          => __( 'Sidebar name', 'triplec' ),
	'id'            => 'unique-sidebar-id',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 


add_filter( 'wp_title', 'triplec_custom_titles', 10, 2 );
function triplec_custom_titles( $title, $sep ) {

    //Check if custom titles are enabled from your option framework
    if ( ot_get_option( 'enable_custom_titles' ) === 'on' ) {
        //Some silly example
        $title = "Some other title" . $title;;
    }

    return $title;
}
add_theme_support( 'automatic-feed-links' );
add_editor_style();
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );
$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );
$comments_args = array(
        // change the title of send button 
        'label_submit'=>'Send',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'triplec' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);

comment_form($comments_args);

function triplec_comicpress_copyright() {
global $wpdb;


$copyright_dates = $wpdb->get_results("
SELECT
YEAR(min(post_date_gmt)) AS firstdate,
YEAR(max(post_date_gmt)) AS lastdate
FROM
$wpdb->posts
WHERE
post_status = 'publish'
");
$output = '';
if($copyright_dates) {
$copyright = " <div class='ddd'> &copy; " . $copyright_dates[0]->firstdate. ".All Rights Reserved.</div>";
if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
$copyright .= '-' . $copyright_dates[0]->lastdate;
}
$output = $copyright;
}
return $output;
}

require get_template_directory() . '/customizer.php';
?>