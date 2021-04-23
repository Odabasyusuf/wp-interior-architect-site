<?php
$greenhash_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/framework/class-ocdi-importer.php';
//Theme Set up:
function greenhash_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
  load_theme_textdomain('greenhash', $lang);

  add_theme_support( 'post-thumbnails' );
  // Adds RSS feed links to <head> for posts and comments.
  add_theme_support( 'automatic-feed-links' );
  // Switches default core markup for search form, comment form, and comments
  // to output valid HTML5.
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video', 'audio' ) );
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu: Chosen menu in single, blog, pages ...', 'greenhash' ),
    'mobile' =>  esc_html__( 'Mobile Navigation Menu: Chosen mobile menu in single, blog, pages ...', 'greenhash' ),
	) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'greenhash_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;
 
function greenhash_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'greenhash' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Poppins:100,300,400,500,600,700&display=swap&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function greenhash_theme_scripts_styles() {
	$greenhash_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'greenhash-fonts', greenhash_fonts_url(), array(), '1.0.0' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css');
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.min.css');
    wp_enqueue_style( 'fontawesome-all', get_template_directory_uri().'/assets/css/fontawesome-all.min.css');
    wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/slick.css');
    wp_enqueue_style( 'meanmenu', get_template_directory_uri().'/assets/css/meanmenu.css');
    wp_enqueue_style( 'flaticon', get_template_directory_uri().'/assets/fonts/flaticon/flaticon.css');
    wp_enqueue_style( 'default', get_template_directory_uri().'/assets/css/default.css');
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css');
    wp_enqueue_style( 'greenhash-css', get_stylesheet_uri(), array(), '2020-03-30' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
    wp_enqueue_script("modernizr-3.5.0", get_template_directory_uri()."/assets/js/vendor/modernizr-3.5.0.min.js",array(),false,true);
    wp_enqueue_script("jquery-1.10.2", get_template_directory_uri()."/assets/js/vendor/jquery-1.10.2.min.js",array(),false,true);
    wp_enqueue_script("popper", get_template_directory_uri()."/assets/js/popper.min.js",array(),false,true);
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/assets/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("isotope-pkgd", get_template_directory_uri()."/assets/js/isotope.pkgd.min.js",array(),false,true);
    wp_enqueue_script("imagesloaded-pkgd", get_template_directory_uri()."/assets/js/imagesloaded.pkgd.min.js",array(),false,true);
    wp_enqueue_script("magnific-popup", get_template_directory_uri()."/assets/js/jquery.magnific-popup.min.js",array(),false,true);
    wp_enqueue_script("slick", get_template_directory_uri()."/assets/js/slick.min.js",array(),false,true);
    wp_enqueue_script("jquery-meanmenu", get_template_directory_uri()."/assets/js/jquery.meanmenu.min.js",array(),false,true);
    wp_enqueue_script("jquery-counterup", get_template_directory_uri()."/assets/js/jquery.counterup.min.js",array(),false,true);
    wp_enqueue_script("waypoints", get_template_directory_uri()."/assets/js/waypoints.min.js",array(),false,true);
    wp_enqueue_script("pie-chart", get_template_directory_uri()."/assets/js/pie-chart.js",array(),false,true);
    wp_enqueue_script("greenhash-map", $protocol ."://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c");
    wp_enqueue_script("gmaps", get_template_directory_uri()."/assets/js/gmaps.min.js",array(),false,true);
    wp_enqueue_script("countdown", get_template_directory_uri()."/assets/js/countdown.js",array(),false,true);
    wp_enqueue_script("main", get_template_directory_uri()."/assets/js/main.js",array(),false,true);
   }
   
add_action( 'wp_enqueue_scripts', 'greenhash_theme_scripts_styles' );


//Custom Excerpt Function
function greenhash_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}


// Widget Sidebar
function greenhash_widgets_init() {
	register_sidebar( array(
    'name'          => esc_html__( 'Primary Sidebar', 'greenhash' ),
    'id'            => 'sidebar-1',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'greenhash' ),        
		'before_widget' => '<div id="%1$s" class="single-widget mb-30 %2$s">',        
		'after_widget'  => '</div>',        
		'before_title'  => '<h3 class="widget-title">',        
		'after_title'   => '</h3>'
    ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Event Sidebar', 'abaclor' ),
    'id'            => 'sidebar-2',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'abaclor' ),        
    'before_widget' => '<div id="%1$s" class="%2$s">',        
    'after_widget'  => '</div>',        
    'before_title'  => '<h3 class="widget-title">',        
    'after_title'   => '</h3>'
    ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Service Sidebar', 'abaclor' ),
    'id'            => 'sidebar-3',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'abaclor' ),        
    'before_widget' => '<div id="%1$s" class="%2$s">',        
    'after_widget'  => '</div>',        
    'before_title'  => '<h3 class="widget-title">',        
    'after_title'   => '</h3>'
    ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widget One', 'greenhash' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'greenhash' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widget Two', 'greenhash' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'greenhash' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widget Three', 'greenhash' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'greenhash' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widget Four', 'greenhash' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'greenhash' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widget Five', 'greenhash' ),
    'id'            => 'footer-area-5',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'greenhash' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widget Six', 'greenhash' ),
    'id'            => 'footer-area-6',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'greenhash' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widget Seven', 'greenhash' ),
    'id'            => 'footer-area-7',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'greenhash' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'greenhash_widgets_init' );

//function tag widgets
function greenhash_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'greenhash_tag_cloud_widget' );

function greenhash_excerpt() {
  $greenhash_redux_demo = get_option('redux_demo');
  if(isset($greenhash_redux_demo['blog_excerpt'])){
    $limit = $greenhash_redux_demo['blog_excerpt'];
  }else{
    $limit = 80;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function greenhash_excerpt2() {

    $limit = 80;
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function greenhash_excerpt3() {

    $limit = 15;
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function greenhash_excerpt4() {
  $greenhash_redux_demo = get_option('redux_demo');
  if(isset($greenhash_redux_demo['blog_home_excerpt'])){
    $limit = $greenhash_redux_demo['blog_home_excerpt'];
  }else{
    $limit = 10;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}



//pagination
function greenhash_pagination($pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
    'format'    => '',
    'current'     => max( 1, get_query_var('paged') ),
    'total'     => $pages,
    'prev_text' => htmlspecialchars_decode(esc_html__( 'Prev', 'greenhash' )),
    'next_text' => htmlspecialchars_decode(esc_html__( 'Next', 'greenhash' )),   
    'type'      => 'list',
    'end_size'    => 3,
    'mid_size'    => 3
);
    $return =  paginate_links( $pagination );
  echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination-menu pagination mb-40">', $return );
}

function greenhash_search_form( $form ) {
    $form = '
  
  <form action="' . esc_url(home_url('/')) . '" class="search-form" method="get">
    <input type="search" placeholder="'.esc_html__('Search Keywords', 'greenhash').'" name="s">
    <button type="submit"> <i class="far fa-search"></i> </button>
  </form>
	';
    return $form;
}
add_filter( 'get_search_form', 'greenhash_search_form' );
//Custom comment List:




add_filter( 'avatar_defaults', 'newgravatar' );

function newgravatar ($avatar_defaults) {
$myavatar = get_template_directory_uri().'/assets/images/boy.jpg';
$avatar_defaults[$myavatar] = "Boy";
return $avatar_defaults;
}

// Comment Form
function greenhash_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>

    <div class="comment-box-wrapper mb-45">
      <div class="comment-img">
        <?php echo get_avatar($comment,$size='80' ); ?>
      </div>
      <div class="comment-content">
        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        <h5><?php printf( get_comment_author_link()) ?></h5>
        <span><?php the_time(get_option( 'date_format' ));?></span>
        <?php comment_text() ?>
        
      </div>
    </div>

<?php
}



/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'greenhash_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function greenhash_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'greenhash' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Classic Editor', 'greenhash' ),
            'slug'      => 'classic-editor',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Widget Importer & Exporter', 'greenhash' ),
            'slug'      => 'widget-importer-&-exporter',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Contact Form 7', 'greenhash' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'WP Maximum Execution Time Exceeded', 'greenhash' ),
            'slug'      => 'wp-maximum-execution-time-exceeded',
            'required'  => true,
        ), 
      array(
            'name'                     => esc_html__( 'Elementor', 'greenhash' ),
            'slug'                     => 'elementor',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/elementor.zip',
        ),
      array(
            'name'                     => esc_html__( 'Greenhash Common', 'greenhash' ),
            'slug'                     => 'greenhash-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/greenhash-common.zip',
        ),
      array(
            'name'                     => esc_html__( 'Greenhash Elementor', 'greenhash' ),
            'slug'                     => 'greenhash-elementor',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/greenhash-elementor.zip',
        ),
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'greenhash' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'greenhash' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'greenhash' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'greenhash' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'greenhash' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'greenhash' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'greenhash' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'greenhash' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'greenhash' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'greenhash' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'greenhash' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'greenhash' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'greenhash' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'greenhash' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'greenhash' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'greenhash' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'greenhash' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}


?>