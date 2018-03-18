<?php
/**
 * Factor Daily Functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Factor_Daily_V2 
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Factor Daily V2 1.0
 */
// google analytics with author data http://www.vsellis.com/add-author-tracking-google-analytics-wordpress-website/
 function google_load_file() {
		$this_post = get_queried_object();
		$author_id = $this_post->post_author;
		$name = get_the_author_meta('display_name', $author_id);
foreach((get_the_category()) as $category) {
			if ($category->category_parent == 0) {
				if($category->name == 'Future' || $category->name == 'Culture' || $category->name == 'Lifestyle' || $category->name == 'Companies') {
				$cat = 	 $category->name;
				//	break;
				}
			}
		}
		
	
		wp_enqueue_script( 'author-tracking', get_stylesheet_directory_uri() . '/js/ga.js', array(), '1.0.0', true );
		wp_localize_script( 'author-tracking', 'author', array( 'name' => $name ) );
		wp_localize_script( 'category-tracking', 'category', array( 'cat' => $cat ) );
}
add_action( 'wp_enqueue_scripts', 'google_load_file' );

if ( ! isset( $content_width ) ) {
	$content_width = 660;
}



if ( ! function_exists( 'factordailyv2_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Factor Daily 1.0
 */
function factordailyv2_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	add_image_size( 'lead2', 744, 419, true, array('center','center') ); // Image for the lead story 2
	add_image_size( 'lead3', 540, 304, true, array('center','center') ); // Lead story 3
	add_image_size( 'lead4_vertical', 412, 432, true, array('center','center') ); // Lead story 4 (almost square)
	add_image_size( 'lead5', 233, 132, true, array('center','center') ); //The small thumbnails for the More stories section
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'factordailyv2' ),
		'flyout'  => __( 'Flyout Menu', 'factordailyv2' ),
		'flyout-secondary'  => __( 'Flyout Secondary Menu', 'factordailyv2' ),
		'social'  => __( 'Social Links Menu', 'factordailyv2' ),

	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for custom logo.
	 *
	 */
	
	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 100,
		'flex-width' => true,
	) );


//	$color_scheme  = factordailyv2_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'factordailyv2_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'scroll',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', factordailyv2_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // factordailyv2_setup
add_action( 'after_setup_theme', 'factordailyv2_setup' );

/**
 * Register widget area.
 *
 * @since Factor Daily 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function factordailyv2_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'factordailyv2' ),
		'id'            => 'footer_widget_1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'factordailyv2' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s hidden-xs">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

}
add_action( 'widgets_init', 'factordailyv2_widgets_init' );

function factordailyv2_mobile_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Widgets for Mobile', 'factordailyv2' ),
		'id'            => 'footer_widget_2',
		'description'   => __( 'Add widgets here to appear in your mobile footer.', 'factordailyv2' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s visible-xs">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

}
add_action( 'widgets_init', 'factordailyv2_mobile_widgets_init' );


/* Dashboard widget to get all the places */
function example_add_dashboard_widgets() {

	wp_add_dashboard_widget(
                 'factordaily_dashboard',         // Widget slug.
                 'FactorDaily Dashboard ',         // Title.
                 'fd_dashboard_widget_function' // Display function.
        );	
}
add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );


/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function fd_dashboard_widget_function() { ?>
	<div class="main">
	<ul>
	<?php
	echo '<li><span class="dashicons dashicons-welcome-widgets-menus"></span> &nbsp;<a href="themes.php?page=the-editing-desk"> Edit Desk</a></li>';
	// Posts and Pages
	foreach ( array( 'post', 'page', 'fd_news','fd_opinion','fd_banner' ) as $post_type ) {
		$num_posts = wp_count_posts( $post_type );
		if ( $num_posts && $num_posts->publish ) {
			if ( 'post' == $post_type ) {
				$text = _n( '%s Post', '%s Posts', $num_posts->publish );
				$icon = 'dashicons-admin-post';
			} elseif ( 'fd_news' == $post_type ) {
				$text = _n( '%s News', '%s News', $num_posts->publish );
				$icon = 'dashicons-admin-site';
			} elseif ( 'fd_opinion' == $post_type ) {
				$text = _n( '%s Opinion', '%s Opinions', $num_posts->publish );
				$icon = 'dashicons-format-chat';
			} elseif ( 'fd_banner' == $post_type ) {
				$text = _n( '%s Banner', '%s Banners', $num_posts->publish );
				$icon = 'dashicons-slides';
			}else {
				$text = _n( '%s Page', '%s Pages', $num_posts->publish );
				$icon = 'dashicons-admin-page';
			}
			$text = sprintf( $text, number_format_i18n( $num_posts->publish ) );
			$post_type_object = get_post_type_object( $post_type );
			
			if ( $post_type_object && current_user_can( $post_type_object->cap->edit_posts ) ) {
				printf( '<li class="%1$s-count"><span class="dashicons '.$icon.'"></span> <a href="edit.php?post_type=%1$s">%2$s</a></li>', $post_type, $text );
			} else {
				printf( '<li class="%1$s-count"><span>%2$s</span></li>', $post_type, $text );
			}

		}
	}
	// Comments
	$num_comm = wp_count_comments();
	if ( $num_comm && $num_comm->approved ) {
		$text = sprintf( _n( '%s Comment', '%s Comments', $num_comm->approved ), number_format_i18n( $num_comm->approved ) );
		?>
		<li class="comment-count"><a href="edit-comments.php"><?php echo $text; ?></a></li>
		<?php
		/* translators: Number of comments in moderation */
		$text = sprintf( _nx( '%s in moderation', '%s in moderation', $num_comm->moderated, 'comments' ), number_format_i18n( $num_comm->moderated ) );
		?>
		<li class="comment-mod-count<?php
			if ( ! $num_comm->moderated ) {
				echo ' hidden';
			}
		?>"><a href="edit-comments.php?comment_status=moderated"><?php echo $text; ?></a></li>
		<?php
	}

	/**
	 * Filter the array of extra elements to list in the 'At a Glance'
	 * dashboard widget.
	 *
	 * Prior to 3.8.0, the widget was named 'Right Now'. Each element
	 * is wrapped in list-item tags on output.
	 *
	 * @since 3.8.0
	 *
	 * @param array $items Array of extra 'At a Glance' widget items.
	 */
	$elements = apply_filters( 'dashboard_glance_items', array() );

	if ( $elements ) {
		echo '<li>' . implode( "</li>\n<li>", $elements ) . "</li>\n";
	}

	?>
	</ul>

	</div>
<?php


}


/*=== End of dashboard ====*/
if ( ! function_exists( 'factordailyv2_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Factor Daily 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function factordailyv2_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'factordailyv2' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'factordailyv2' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'factordailyv2' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'factordailyv2' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function factordailyv2_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'factordailyv2_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Factor Daily 1.0
 */
function factordailyv2_scripts() {
	wp_enqueue_style( 'factordailyv2-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', '2016337' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array( 'factordailyv2-style' ), '20161130' );
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'factordailyv2-fonts', factordailyv2_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'factordailyv2-style', get_stylesheet_uri(),array('factordailyv2-bootstrap') );

	// Load font stylesheet (for Nitya to test).
	wp_enqueue_style( 'factordailyv2-style-fonts', get_template_directory_uri().'/fonts.css',array('factordailyv2-style') );

	//Style for special posts
if(is_single('dabholkar-india-anti-superstition') || is_single('delhi-india-air-pm2-5-pollution') || is_single('factordaily-best-stories')){
	wp_enqueue_style( 'factordailyv2-tkstyle', get_template_directory_uri().'/css/tkstyle.css' );
}
	//swipe slider
	wp_enqueue_style( 'factordailyv2-slider', get_template_directory_uri().'/css/slider.css',array('factordailyv2-style') );	
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'factordailyv2-ie', get_template_directory_uri() . '/css/ie.css', array( 'factordailyv2-style' ), '20141010' );
	wp_style_add_data( 'factordailyv2-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'factordailyv2-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'factordailyv2-style' ), '20141010' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array( 'factordailyv2-style' ), '20161130' );
	wp_style_add_data( 'factordailyv2-ie7', 'conditional', 'lt IE 8' );
	wp_enqueue_script( 'factordailyv2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );
	//wp_enqueue_script( 'factordailyv2-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js',array('jquery') );
	//wp_enqueue_script( 'factordailyv2-matchheight', get_template_directory_uri() . '/js/jquery.matchHeight.js',array('jquery') );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js',array('jquery'), 1 , true);
	//swipe slider 
	wp_enqueue_script( 'jquery-swipe', get_template_directory_uri() . '/js/slider.js',array('jquery'),'20161201',false );
    wp_localize_script( 'custom', 'bobz', array(
        'nonce'    => wp_create_nonce( 'bobz' ),
        'ajax_url' => admin_url( 'admin-ajax.php' )
    ));
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'factordailyv2-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010', true  );
	}

	wp_enqueue_script( 'factordailyv2-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	wp_enqueue_script( 'factordailyv2-script-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '2016337', true );
	wp_localize_script( 'factordailyv2-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'factordailyv2' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'factordailyv2' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'factordailyv2_scripts' );
function custom_shortcode_scripts() {
    global $post;
    if( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'delited') ) {
  wp_enqueue_script( 'factordailyv2-delited',  '//delited.co/static/js/delited-gizmo-javascript-sdk-v1.0.js',array('jquery'));
    }
}
add_action( 'wp_enqueue_scripts', 'custom_shortcode_scripts');

/**
 * Add featured image as background image to post navigation elements.
 *
 *
 * @see wp_add_inline_style()
 */
function factordailyv2_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'factordailyv2-style', $css );
}
add_action( 'wp_enqueue_scripts', 'factordailyv2_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Factor Daily 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function factordailyv2_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'factordailyv2_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Factor Daily 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function factordailyv2_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'factordailyv2_search_form_modify' );

/**
 * Implement the Custom Header feature.
 *
 * @since Factor Daily 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Factor Daily 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Factor Daily 1.0
 */
require get_template_directory() . '/inc/customizer.php';

/** Step 2 (from text above). */
add_action( 'admin_menu', 'editing_desk_menu' );

/** Step 1. */
function editing_desk_menu() {
	add_theme_page( 'The Editing Desk', 'The Editing Desk', 'manage_options', 'the-editing-desk', 'editing_desk_options' );
}

function enqueue_related_pages_scripts_and_styles(){
	wp_enqueue_style('editing-desk-styles',  get_stylesheet_directory_uri() . '/css/editing-desk-styles.css');
	wp_enqueue_script('editing-desk-script', get_stylesheet_directory_uri() . '/js/editing-desk-scripts.js', array('jquery','jquery-ui-droppable','jquery-ui-draggable', 'jquery-ui-sortable'));
}
add_action('admin_enqueue_scripts','enqueue_related_pages_scripts_and_styles');


// Adjust the excerpt size 
function custom_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function fd_excerpt_more( $more ) {
    return '&nbsp;...';
}
add_filter( 'excerpt_more', 'fd_excerpt_more' );
//Moved everything about the Editing Desk to the following file
include('edit-desk/edit_desk.php'); 
function mytheme_custom_logo() {
    // Try to retrieve the Custom Logo
    $output = '';
    if (function_exists('get_custom_logo'))
        $output = get_custom_logo();

    // Nothing in the output: Custom Logo is not supported, or there is no selected logo
    // In both cases we display the site's name
    if (empty($output))
        $output = '<h1><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';

    echo $output;
}


/*----------------------------------------------------------------------------*/
/* Post types for news Post Type */
/*----------------------------------------------------------------------------*/
class fd_news {

	function fd_news() {
		add_action('init',array($this,'create_post_type_news'));
		add_action('init',array($this,'create_post_type_opinion'));
		add_action('init',array($this,'create_post_type_banner'));
		add_action('init',array($this,'create_post_type_longform'));
	}

	function create_post_type_news() {
		$labels = array(
		    'name' => 'News',
		    'singular_name' => 'News',
		    'add_new' => 'Add New ',
		    'all_items' => 'All News',
		    'add_new_item' => 'Add New News Item',
		    'edit_item' => 'Edit News',
		    'new_item' => 'New News Item',
		    'view_item' => 'View News',
		    'search_items' => 'Search News',
		    'not_found' =>  'No News Items found',
		    'not_found_in_trash' => 'No News Items  found in trash',
		    'parent_item_colon' => 'Parent Post:',
		    'menu_name' => 'News'
		);
		$args = array(
			'labels' => $labels,
			'description' => "The News items go here",
			'public' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => true,
			'show_in_menu' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 4,
			'menu_icon' => 'dashicons-admin-site',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('title','editor','author','custom-fields', 'shortlinks'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'news', 'with_front' => ''),
			'query_var' => true,
			'can_export' => true
		);
		register_post_type('fd_news',$args);
	}
	
	function create_post_type_opinion() {
		$labels = array(
		    'name' => 'Opinions',
		    'singular_name' => 'Opinion',
		    'add_new' => 'Add New ',
		    'all_items' => 'All Opinions',
		    'add_new_item' => 'Add New Opinion',
		    'edit_item' => 'Edit Opinion',
		    'new_item' => 'New Opinion',
		    'view_item' => 'View Opinion',
		    'search_items' => 'Search Opinion',
		    'not_found' =>  'No Opinion Items found',
		    'not_found_in_trash' => 'No Opinion Items  found in trash',
		    'parent_item_colon' => 'Parent Post:',
		    'menu_name' => 'Opinion'
		);
		$args = array(
			'labels' => $labels,
			'description' => "The Opinion goes here",
			'public' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => true,
			'show_in_menu' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 5,
			'menu_icon' => 'dashicons-format-chat',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('title','editor','author','custom-fields', 'shortlinks'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'opinions', 'with_front' => ''),
			'query_var' => true,
			'can_export' => true,
			'taxonomies' => array('category')
		);
		register_post_type('fd_opinion',$args);
	}
	
		function create_post_type_banner() {
		$labels = array(
		    'name' => 'Banners',
		    'singular_name' => 'Banner',
		    'add_new' => 'Add New ',
		    'all_items' => 'All Banners',
		    'add_new_item' => 'Add New Banner',
		    'edit_item' => 'Edit Banner',
		    'new_item' => 'New Banner',
		    'view_item' => 'View Banner',
		    'search_items' => 'Search Banners',
		    'not_found' =>  'No Banner found',
		    'not_found_in_trash' => 'No Banner  found in trash',
		    'parent_item_colon' => 'Parent Post:',
		    'menu_name' => 'Banners'
		);
		$args = array(
			'labels' => $labels,
			'description' => "Create banners for using at different points of the site",
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => true,
			'show_in_menu' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 6,
			'menu_icon' => 'dashicons-slides',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('title','editor','thumbnail'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'banner', 'with_front' => ''),
			'query_var' => true,
			'can_export' => true
		);
		register_post_type('fd_banner',$args);
	}
	function create_post_type_longform() {
		$labels = array(
		    'name' => 'Longform',
		    'singular_name' => 'Longform',
		    'add_new' => 'Add New ',
		    'all_items' => 'All Longform',
		    'add_new_item' => 'Add New Longform',
		    'edit_item' => 'Edit Longform',
		    'new_item' => 'New Longform',
		    'view_item' => 'View Longform',
		    'search_items' => 'Search Longform',
		    'not_found' =>  'No Longform Items found',
		    'not_found_in_trash' => 'No Longform Items  found in trash',
		    'parent_item_colon' => 'Parent Post:',
		    'menu_name' => 'Longform'
		);
		$args = array(
			'labels' => $labels,
			'description' => "The Longform goes here",
			'public' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => true,
			'show_in_menu' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 7,
			'menu_icon' => 'dashicons-media-document',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('title','editor','author','custom-fields', 'shortlinks','thumbnail'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'longform', 'with_front' => ''),
			'query_var' => true,
			'can_export' => true,
			'taxonomies' => array('category')
		);
		register_post_type('fd_longform',$args);
	}
	

}


$fd_news = new fd_news();

//Add an extra featured image box


add_action( 'add_meta_boxes', 'factordaily_metaboxes' );
function factordaily_metaboxes() {
	add_meta_box( 'listingimagediv', __( 'Card Image', 'text-domain' ), 'listing_image_metabox', 'fd_news', 'side', 'low');
	add_meta_box( 'listingimagediv', __( 'Card Image', 'text-domain' ), 'listing_image_metabox', 'fd_opinion', 'side', 'low');
	add_meta_box( 'addcattopage', __( 'Add category to Page', 'factordailyv2' ), 'add_cat_to_metabox', 'page', 'side', 'low');
	add_meta_box( 'addtagtobanner', __( 'Choose tag for # Tag Banner', 'factordailyv2' ), 'add_tag_to_metabox', 'fd_banner', 'side', 'high');
}
function add_cat_to_metabox($post) {
  echo "<h2>Select category for this page</h2>";
  $cat_id_meta = get_post_meta( $post->ID, '_add_cat_id', true );
  $banner_id = get_post_meta( $post->ID, '_baner_id', true );
  $args = array(
  'show_option_all' => '',
  'show_option_none' => '',
  'option_none_value' => '-1',
  'orderby' => 'ID',
  'order' => 'ASC',
  'hide_empty' => 1,
  'class' => 'post_form',
  'selected'  => $cat_id_meta,
  'exclude' => 0
  ); 
  wp_dropdown_categories($args);
}
add_action( 'save_post', 'cat_page_options_save', 10, 1 );
function cat_page_options_save($post_id) {
	if( isset( $_POST['cat'] ) ) {

		$cat_id = (int) $_POST['cat'];
		update_post_meta( $post_id, '_add_cat_id', $cat_id );
	}
}

function add_tag_to_metabox($post) {
	// To-Do : this should be somehow limited to just one place
  $tag_id_meta = get_post_meta( $post->ID, '_add_tag_id', true );
  $tag_id_meta = explode("|",$tag_id_meta);
  $banner_enable = get_post_meta( $post->ID, '_banner_enable', true );
  $my_tax_terms = get_terms( 'post_tag', array('hide_empty'=>true, 'orderby' => 'count','order' => 'DESC') );


  		if($banner_enable == ' ' || $banner_enable == 'false') {
            $content .= '<br /><input id="banner_enable" name="_banner_enable" type="checkbox" value="true">&nbsp;</input>';
			$content .= '<label for="_banner_enable">Enable</label>';		
		}elseif($banner_enable == 'true') {
            $content .= '<input id="banner_enable" name="_banner_enable" type="checkbox" value="true" checked>&nbsp;</input>';
			$content .= '<label for="_banner_enable">Enable </label>';
					
		}
	echo $content ;
	
echo '<select required multiple="multiple" name="tags[]" id="tags" class="post_tag">';
    foreach ($my_tax_terms as $tax_term) {
        $selected = !empty($tag_id_meta) && in_array( $tax_term->term_id, $tag_id_meta ) ? ' selected="selected" ' : '';
        echo '<option value="'. $tax_term->term_id .'" '. $selected .'>'. $tax_term->name .'</option>';
    }
echo '</select>';

}
add_action( 'save_post', 'tag_banner_options_save', 10, 1 );
function tag_banner_options_save($post_id) {
	if( isset( $_POST['tags'] ) ) {
		$tag_id = $_POST['tags'];
		$store_tags = implode('|',$tag_id);
		update_post_meta( $post_id, '_add_tag_id', $store_tags );
	}
	if( isset( $_POST['_banner_enable'] ) ) {
		$banner_enable = $_POST['_banner_enable'];
		}else{
		$banner_enable = 'false';
	}
		update_post_meta( $post_id, '_banner_enable', $banner_enable );

}
function main_tag_banner($bannerID) {

		$the_tag_query = new WP_Query( 
		array(
			'posts_per_page' => 1, 
			'order' => 'ASC', 
			'orderby' =>'meta_value_num', 
			'meta_key' => '_add_tag_id', 
			'fields' => 'ids', 
			'post_status' => 'publish', 
			'post_type' => 'fd_banner',
			'p' => $bannerID
			) );

		while ( $the_tag_query->have_posts() ) : $the_tag_query->the_post();
		$tag_id = get_post_meta( get_the_id(), '_add_tag_id', true );
		$banner_enabled = get_post_meta( get_the_id(), '_banner_enable', true );
		endwhile;	
		
		if($banner_enabled == 'false' || $banner_enabled == '' ) {
			//do nothing for now
		}else{
			echo '<div class="row hash-tags">
				<span class="col-md-2 main-name-tag"><h2>#'.get_tag($tag_id)->name.'</h2></span>';
					$the_query = new WP_Query( 
				array(
					'posts_per_page' => 5, 
					'order' => 'DESC', 
					'orderby' => 'date',
					'post_status' => 'publish', 
					'post_type' => 'post',
					'tag_id' => $tag_id
					) );	
				while ( $the_query->have_posts() ) : $the_query->the_post();
				echo '<a href="'.get_the_permalink().'">';
				the_title('<span class="col-md-2"><p>','</p></span>');
				echo '</a>';
				//the_title( '<span class="col-md-2"><p><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p></span>' );

				endwhile ;
			echo '</div>';
		}
	}

//Tags banner for category pages 
function category_tag_banner($bannerID , $category) {

		$the_tag_query = new WP_Query( 
		array(
			'posts_per_page' => 5, 
			'order' => 'ASC', 
			'orderby' =>'meta_value_num', 
			'meta_key' => '_add_tag_id', 
			'fields' => 'ids', 
			'post_status' => 'publish', 
			'post_type' => 'fd_banner',
			//'p' => $bannerID
			'name'	=> $bannerID
			) );

		while ( $the_tag_query->have_posts() ) : $the_tag_query->the_post();
		$tag_id = explode("|",get_post_meta( get_the_id(), '_add_tag_id', true ));
		$banner_enabled = get_post_meta( get_the_id(), '_banner_enable', true );
		endwhile;	

		if($banner_enabled == 'false' || $banner_enabled == '' ) {
			//do nothing for now
		}else{
		  $terms = get_terms( 'post_tag', array('hide_empty'=>false,'include' => $tag_id) );
		  ?>
           <div id="container-async" data-paged="12" class="sc-ajax-filter wrap ">
                <ul class="nav-filter">
                    <?php foreach ($terms as $term) : ?>
                        <li<?php if ($term->term_id == $a['active']) :?> class="active"<?php endif; ?>>
                        	<span class="btn btn-default tag_buttons">
                            <a href="<?php echo get_term_link( $term, $term->taxonomy ); ?>" data-filter="<?php echo $term->taxonomy; ?>" data-term="<?php echo $term->slug; ?>" data-category="<?php echo $category; ?>" data-page="1">
                                #<?php echo $term->name; ?>
                            </a>
							<span class="close-button"><a href="#" data-filter='close-these-tags'> X </a></span>
                            </span>
							
                        </li>
                    <?php endforeach; ?>
				
                </ul>
                  <div class="status text-center"></div>
                  <div class="content"></div>
            </div>
  <div class="row">

                
  </div>      
          <?php
		}
	}
	
	

//filed for setting card image for news and opinion

function listing_image_metabox ( $post ) {
	global $content_width, $_wp_additional_image_sizes;
	$image_id = get_post_meta( $post->ID, '_listing_image_id', true );
	$show_on_single = get_post_meta( $post->ID, '_show_on_single_post', true );
	$old_content_width = $content_width;
	$content_width = 254;
	if ( $image_id && get_post( $image_id ) ) {
		if ( ! isset( $_wp_additional_image_sizes['post-thumbnail'] ) ) {
			$thumbnail_html = wp_get_attachment_image( $image_id, array( $content_width, $content_width ) );
		} else {
			$thumbnail_html = wp_get_attachment_image( $image_id, 'post-thumbnail' );
		}
		if ( ! empty( $thumbnail_html ) ) {
			$content = $thumbnail_html;
			$content .= '<p class="hide-if-no-js"><a href="javascript:;" id="remove_listing_image_button" >' . esc_html__( 'Remove listing image', 'text-domain' ) . '</a></p>';
			$content .= '<input type="hidden" id="upload_listing_image" name="_listing_cover_image" value="' . esc_attr( $image_id ) . '" />';
		}
		$content_width = $old_content_width;
	} else {
		$content = '<img src="" style="width:' . esc_attr( $content_width ) . 'px;height:auto;border:0;display:none;" />';
		$content .= '<p class="hide-if-no-js"><a title="' . esc_attr__( 'Set listing image', 'text-domain' ) . '" href="javascript:;" id="upload_listing_image_button" id="set-listing-image" data-uploader_title="' . esc_attr__( 'Choose an image', 'text-domain' ) . '" data-uploader_button_text="' . esc_attr__( 'Set listing image', 'text-domain' ) . '">' . esc_html__( 'Set listing image', 'text-domain' ) . '</a></p>';
		$content .= '<input type="hidden" id="upload_listing_image" name="_listing_cover_image" value="" />';
	}
		if($show_on_single =='' || $show_on_single == 'false') {
            $content .= '<br /><input id="show_on_single_post" name="_show_on_single_post" type="checkbox" value="true">&nbsp;</input>';
			$content .= '<label for="_show_on_single_post">Show on Sinlge page</label>';		
		}elseif($show_on_single == 'true') {
            $content .= '<input id="show_on_single_post" name="_show_on_single_post" type="checkbox" value="true" checked>&nbsp;</input>';
			$content .= '<label for="_show_on_single_post">Show on Sinlge page</label>';
					
		}
	echo $content;
}
add_action( 'save_post', 'listing_image_save', 10, 1 );
function listing_image_save ( $post_id ) {
	if( isset( $_POST['_listing_cover_image'] ) ) {
		$image_id = (int) $_POST['_listing_cover_image'];
		update_post_meta( $post_id, '_listing_image_id', $image_id );
		update_post_meta( $post_id, '_thumbnail_id', $image_id ); //so that SEO picks up the image -gts 01mar17
	}
	if( isset( $_POST['_show_on_single_post'] ) ) {
		$show_on_single =  $_POST['_show_on_single_post'];
	}else{
		$show_on_single = 'false';	
	}
		update_post_meta( $post_id, '_show_on_single_post', $show_on_single );
}

function fd_sharing_buttons() {
	global $post;
		// Get current page URL 
		if (function_exists('wp_get_shortlink')) {
		//shortlink if available GTS
		$crunchifyURL =urlencode(wp_get_shortlink(get_the_ID())); 
		} else {
		$crunchifyURL = urlencode(get_permalink());
		}

 
		// Get current page title
		$crunchifyTitle = str_replace( ' ', '%20', get_the_title());
		//$crunchifyTitle = str_replace( ' ', '%20', $post->post_title);
		
		// Get Post Thumbnail for pinterest ?TB_iframe=true&width=600&height=550
		$crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
 
		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'?ref';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;
		$googleURL = 'https://plus.google.com/share?url='.$crunchifyURL;
		$bufferURL = 'https://bufferapp.com/add?url='.$crunchifyURL.'&amp;text='.$crunchifyTitle;
		$whatsappURL = 'whatsapp://send?text='.$crunchifyTitle . ' ' . $crunchifyURL;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$crunchifyURL.'&amp;title='.$crunchifyTitle;
 		$redditURL = 'http://reddit.com/submit?url='.get_permalink().'&amp;title='.$crunchifyTitle ;
		$pocketURL = 'https://getpocket.com/save?url='.$crunchifyURL.'&amp;title='.$crunchifyTitle ;
		// Based on popular demand added Pinterest too
		$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$crunchifyURL.'&amp;media='.$crunchifyThumbnail[0].'&amp;description='.$crunchifyTitle;
 
		// Add sharing button at the end of page/page content
			
		$content .= '<div class="social-media-icons navbar-fixed-bottom">';
		$content .= '<span class="facebook"><a  href="'.$facebookURL.'" target="_blank" ><i class="fa fa-facebook" aria-hidden="true"></i></a></span>';
		$content .= '<span class="twitter"><a href="'. $twitterURL .'" target="_blank" ><i class="fa fa-twitter" aria-hidden="true"></i></a></span>';
		$useragent=$_SERVER['HTTP_USER_AGENT'];
		if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
		$content .= '<span class="whatsapp"><a  href="'.$whatsappURL.'" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></span>';
		//$content .= '<span><a  href="'.$whatsappURL.'" target="_blank"><img src="'.get_template_directory_uri().'/images/whatsapp.svg" /></a></span>';
		}
		//$content .= '<span><a  href="'.$googleURL.'" target="_blank"><i class="fa fa-googleplus" aria-hidden="true"></i></a>';
		$content .= '<span class="reddit"><a  href="'.$redditURL.'" target="_blank"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></span>';
		$content .= '<span class="pocket"><a  href="'.$pocketURL.'" target="_blank"><i class="fa fa-get-pocket" aria-hidden="true"></i></a></span>';
		$content .= '<span class="email"><a href="mailto:?subject=Thought you would like this story!&amp;body=Here is an interesting story for you! '.$crunchifyURL.'"><i class="fa fa-envelope" aria-hidden="true"></i></a></span>';
		$content .= '</div>';

		//return $content;
		add_thickbox();
		echo $content;

};



function send_whatsapp_mail($data) {
	if(isset($_POST['phonenumber'])){
		$data = $_POST['phonenumber'];
	//wp_mail( 'sharma.hemu1994@gmail.com', 'whatsapp subscribers', $data  );
	wp_mail( 'saranghills@gmail.com', 'whatsapp subscribers', $data  );
	}
};

// include News and opinion in the category page - if necessary
//function wpse_category_set_post_types( $query ){
//if( $query->is_category ):
//$query->set( 'post_type', array( 'post', 'fd_news', 'fd_opinion' ) );
//endif;
//return $query;
//}
//
//add_action( 'pre_get_posts', 'wpse_category_set_post_types' );

//Increase the number of search results
function change_wp_search_size($query) {
	if ( $query->is_search ) // Make sure it is a search page
		$query->query_vars['posts_per_page'] = -1; 

	return $query; // Return our modified query variables
}
add_filter('pre_get_posts', 'change_wp_search_size'); // Hook our custom function onto the request filter


/**
 * AJAC filter posts by taxonomy term
 */
function vb_filter_posts() {

  //  if( !isset( $_POST['nonce'] ) || !wp_verify_nonce( $_POST['nonce'], 'bobz' ) )
  //     die('Permission denied');
    /**
     * Default response
     */
    $response = [
        'status'  => 500,
        'message' => 'Something is wrong, please try again later ...',
        'content' => false,
        'found'   => 0
    ];
    $tax  = sanitize_text_field($_POST['params']['tax']);
    $term = sanitize_text_field($_POST['params']['term']);
    $page = intval($_POST['params']['page']);
    $qty  = intval($_POST['params']['qty']);
    $category  = $_POST['params']['category'];

    /**
     * Check if term exists
     */
    if (!term_exists( $term, $tax) && $term != 'all-terms') :
        $response = [
            'status'  => 501,
            'message' => 'Term doesn\'t exist',
            'content' => 0
        ];
        die(json_encode($response));
    endif;
$qry = array(
	'post_type' => array('post','fd_news','fd_opinion'),
	'taxonomy' => 'post_tag',
	'field' => 'slug',
	'term' => $term,
	'posts_per_page' => -1,
	'category_name' => $category
);
    $query = new WP_Query($qry);
    ob_start();
        if ($query->have_posts()) :
		echo '<p>&nbsp;</p><div class="row">';
            while ($query->have_posts()) : $query->the_post();
        if($i % 3 == 0){
	        echo '<div class="row">';
        }
        if($i % 6 == 0 || ($i+1) % 6 == 0) {
	        echo '<div class="col-md-6 col-lg-6 grid-item">';
        }else{
	        echo '<div class="col-md-3 col-lg-3 grid-item">';
        }
        
        if($i % 6 == 2 || ($i+1) % 6 == 5) {
        	get_template_part( 'content2','displaycategory',get_post_format() );	        
        } else {
	        get_template_part( 'content','displaycategory',get_post_format() );
        }

        
        if($i % 6 == 0) {
	        echo '</div>';
        }else {
	        echo '</div>';
        }
        $i++;
        if($i % 3 == 0){
	        echo '</div>';
        }
			endwhile;
		echo '</div>';
            /**
             * Pagination
             */
            vb_ajax_pager($qry,$page);
            $response = [
                'status'=> 200,
                'found' => $qry->found_posts
            ];
            
        else :
            $response = [
                'status'  => 201,
                'message' => 'No posts found'
            ];
        endif;
    $response['content'] = ob_get_clean();
    die(json_encode($response));
}
add_action('wp_ajax_do_filter_posts', 'vb_filter_posts');
add_action('wp_ajax_nopriv_do_filter_posts', 'vb_filter_posts');

/**
 * Pagination
 */
function vb_ajax_pager( $query = null, $paged = 1 ) {
    if (!$query)
        return;
    $paginate = paginate_links([
        'base'      => '%_%',
        'type'      => 'array',
        'total'     => $query->max_num_pages,
        'format'    => '#page=%#%',
        'current'   => max( 1, $paged ),
        'prev_text' => 'Prev',
        'next_text' => 'Next'
    ]);
    if ($query->max_num_pages > 1) : ?>
        <ul class="pagination">
            <?php foreach ( $paginate as $page ) :?>
                <li><?php echo $page; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;
}


function get_post_category() {
	if(get_post_type() == 'fd_opinion') {
		echo '<a href="/opinions" >Opinion</a>';
	} elseif (get_post_type() == 'fd_news') {
		echo '<a href="/news" >News</a>';
	} elseif (get_post_type() == 'post'){
		foreach((get_the_category()) as $category) {
			if ($category->category_parent == 0) {
				if($category->name == 'Future' || $category->name == 'Culture' || $category->name == 'Lifestyle' || $category->name == 'Companies') {
					echo '<a class="cat-'.esc_html( $category -> slug ).'" href="/' .  $category->name  . '">' . esc_html( $category->name) . '</a>';
					break;
				}
			}
		}

	}
}

//Calculate read time, create a custom field and insert the same into the post - Himanshu 
function read_time_generation($ID, $post) {
	$examplePost = get_post();
	$word_count = str_word_count( strip_tags( apply_filters( 'the_content', $examplePost->post_content ) ) );
	
	$readtime = round($word_count/200);
	echo $readtime;
	echo '   ';

	update_post_meta($post->ID, 'read_time', $readtime);
}
add_action( 'publish_post', 'read_time_generation',10 ,2 );
function read_time_generation2($ID, $post) {
	$examplePost = get_post();
	$word_count = str_word_count( strip_tags( apply_filters( 'the_content', $examplePost->post_content ) ) );
	
	$readtime = round($word_count/200);
	echo $readtime;
	echo '   ';

	update_post_meta($post->ID, 'read_time', $readtime);
}
add_action( 'save_post', 'read_time_generation2',10 ,2 );

//Shortcode for delited gizmos
function fd_delited_gizmo( $atts ) {
    $a = shortcode_atts( array(
        'id' => '62',
        'type' => 'pollaroid',
    ), $atts );
return '<div class="delited-gizmo">'.$a['type'].'-'.$a['id'].'</div>';
}
add_shortcode( 'delited', 'fd_delited_gizmo' ); 
add_action( 'post_submitbox_misc_actions', 'fix_autosave' );
function fix_autosave() { ?>
<a href="javascript:;" 
   style="float:right;margin:10px;" 
   onclick="jQuery('#submitpost input').removeClass('disabled');return false;">unlock</a>
<?php
}
function fd_break_link( $atts ) {
    $a = shortcode_atts( array(
        'url' => ' ',
        'text' => ' ',
    ), $atts );
return '<hr />
<p class="also-read">
Also read: <a href="'.$a['url'].'" target="_blank">'.$a['text'].'</a>
</p>
<hr />';
}
add_shortcode( 'breaklink', 'fd_break_link' );

function fd_insert_whatsapp_form() {
return '<div class="subscribe-whatsapp col-md-12 col-xs-12">
				<div class="col-md-6 col-sm-6 col-lg-6">
					<div class="text-area">
						<h2>Subscribe to our WhatsApp Alerts</h2>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-6 hidden-xs">
                     <form action="'.bloginfo("stylesheet_directory").'/whatsapp_process.php" method="post" name="whatsappdata" class="whatsapp-form" >
                      <input name="text" type="text" class="whatsappnameW" required title="Please enter your name, not number" pattern="[a-zA-Z\s]+" value=""/>
                      <button type="submit" class="whatsappsendW"><i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i></button>
                   	 </form>
                     <div class="visible-md visible-lg visible-sm hidden-xs">
                        	<p>Enter your name and press the WhatsApp icon</p>
                	 </div>
                </div>
		</div>';
}
add_shortcode( 'whatsapp_form', 'fd_insert_whatsapp_form' );


function add_fd_custom_to_rss_feed( $args ) {
  if ( isset( $args['feed'] ) && !isset( $args['post_type'] ) )
    $args['post_type'] = array('post', 'fd_news');
  return $args;
}
add_filter( 'request', 'add_fd_custom_to_rss_feed' );


function jeherve_allow_my_post_types( $allowed_post_types ) {
    $allowed_post_types[] = 'fd_news';
    $allowed_post_types[] = 'fd_opinion';
    return $allowed_post_types;
}
add_filter( 'rest_api_allowed_post_types', 'jeherve_allow_my_post_types');

// Add instant article meta box to custom post type
add_filter( 'instant_articles_post_types', 'add_post_types', 10,1 );
function add_post_types($post_type_array){
    array_push($post_type_array,'fd_news');
    array_push($post_type_array,'fd_opinion');
   return $post_type_array;
}



