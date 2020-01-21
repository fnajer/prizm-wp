<?php
/**
 * prizmbotspace functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package prizmbotspace
 */

if ( ! function_exists( 'prizmbotspace_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function prizmbotspace_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on prizmbotspace, use a find and replace
		 * to change 'prizmbotspace' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'prizmbotspace', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'prizmbotspace' ),
			'menu-2' => esc_html__( 'Additional', 'prizmbotspace' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'prizmbotspace_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'prizmbotspace_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function prizmbotspace_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'prizmbotspace_content_width', 640 );
}
add_action( 'after_setup_theme', 'prizmbotspace_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function prizmbotspace_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'prizmbotspace' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'prizmbotspace' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'prizmbotspace_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function prizmbotspace_scripts() {
	wp_enqueue_style( 'prizmbotspace-style', get_stylesheet_uri() );
	wp_enqueue_style( 'jquery-ui-css', 'http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(), null );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array(), null, true );
	wp_enqueue_script( 'prizmbotspace-calculator', get_template_directory_uri() . '/assets/js/calculator.js', array('jquery', 'jquery-ui'), '20200121', true );
	wp_enqueue_script( 'prizmbotspace-index', get_template_directory_uri() . '/assets/js/index.js', array('jquery', 'jquery-ui', 'prizmbotspace-calculator'), '20200111', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'prizmbotspace_scripts' );
add_filter("the_excerpt", function($content) {
    $contentWithoutTags = strip_tags($content);
    return substr($contentWithoutTags, 0, 90) . '...';
});


function prizmbotspace_the_breadcrumb(){
	global $post;
	$home_title = get_the_title( get_option('page_on_front') );
	if(!is_home()){ 
		 echo "<a class='breadcrumbs__crumb' href='".site_url()."'>$home_title</a>
        <svg xmlns='http://www.w3.org/2000/svg' width='7' height='12' viewBox='0 0 7 12'>
          <g fill='none' fill-rule='evenodd'>
              <path d='M-9 18V-6h24v24z'/>
              <path fill='#e0e0ff' fill-rule='nonzero' d='M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z'/>
          </g>
       </svg>";

		if (is_page()) { // страницы
			if ($post->post_parent ) {
				$parent_id  = $post->post_parent;
				$breadcrumbs = array();
				while ($parent_id) {
					$page = get_page($parent_id);
					$breadcrumbs[] = '<a class="breadcrumbs__current-page" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
					$parent_id  = $page->post_parent;
				}
				$breadcrumbs = array_reverse($breadcrumbs);
				foreach ($breadcrumbs as $crumb) echo $crumb . ' <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
          <g fill="none" fill-rule="evenodd">
              <path d="M-9 18V-6h24v24z"/>
              <path fill="#e0e0ff" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
          </g>
       </svg> ';
			}
			echo '<a class="breadcrumbs__current-page">' . get_the_title() . '</a>';
		}
	}
}

function true_misha_func( $atts ){
	$path = get_template_directory_uri() . '/assets/img/plus.svg';
	return "<div class='faq__block'>
              <div class='faq__head'>
                <h4 class='faq__heading'>About @RewardSpaceBot (General Info)</h4>
                <div class='faq__btn'>
                  <img src='$path' class='faq__svg' alt='open faq'/>
                </div>
              </div>
              <div class='faq__body faq_hide-content'>
                <p class='faq__text'>This is easy to do on the BIT.TEAM exchange (100 PRIZM - this is only about 2000 rubles). You buy directly from the seller, therefore the price will be the most favorable.</p>
                <iframe width='682' height='383' src='https://www.youtube.com/embed/o-avwgbeD_8' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
              </div>
            </div>";
}
 
add_shortcode( 'misha', 'true_misha_func' );
  
if (function_exists('pll_register_string')) { 
	pll_register_string('Get in Touch button', 'get_in_touch', 'Shared');
	pll_register_string('Try Now button', 'try_now', 'Shared');
	
	pll_register_string('Promo Title', 'promo_title', 'Promo');
	pll_register_string('Promo Paragraph', 'promo_paragraph', 'Promo', true);
	pll_register_string('Promo Calculator Button', 'promo_btn', 'Promo');
	
	pll_register_string('Projects Subtitle', 'projects_subtitle', 'Projects');
	pll_register_string('Projects Title', 'projects_title', 'Projects');
	pll_register_string('Projects Paragraph', 'projects_paragraph', 'Projects', true);
	
	pll_register_string('Mobile Subtitle', 'mobile_subtitle', 'Mobile');
	pll_register_string('Mobile Title', 'mobile_title', 'Mobile');
	
	pll_register_string('Calculator Subtitle', 'calculator_subtitle', 'Calculator');
	pll_register_string('Calculator Title', 'calculator_title', 'Calculator');
	pll_register_string('Calculator Paragraph', 'calculator_paragraph', 'Calculator', true);
	
	pll_register_string('Steps Subtitle', 'steps_subtitle', 'Steps');
	pll_register_string('Steps Title', 'steps_title', 'Steps');
	pll_register_string('Steps Block Title 1', 'steps_title_1', 'Steps', true);
	pll_register_string('Steps Block Title 2', 'steps_title_2', 'Steps', true);
	pll_register_string('Steps Block Title 3', 'steps_title_3', 'Steps', true);
	pll_register_string('Steps Block Paragraph 1', 'steps_paragraph_1', 'Steps', true);
	pll_register_string('Steps Block Paragraph 2', 'steps_paragraph_2', 'Steps', true);
	pll_register_string('Steps Block Paragraph 3', 'steps_paragraph_3', 'Steps', true);
	
	pll_register_string('Affiliates Subtitle', 'affiliates_subtitle', 'Affiliates');
	pll_register_string('Affiliates Title', 'affiliates_title', 'Affiliates');
	pll_register_string('Affiliates Paragraph', 'affiliates_paragraph', 'Affiliates');
	
	pll_register_string('Trading Subtitle', 'trading_subtitle', 'Trading');
	pll_register_string('Trading Title', 'trading_title', 'Trading');
	
	pll_register_string('Ratings Subtitle', 'ratings_subtitle', 'Ratings');
	pll_register_string('Ratings Title', 'ratings_title', 'Ratings');
	pll_register_string('Ratings Paragraph', 'ratings_paragraph', 'Ratings');
	
	pll_register_string('News Subtitle', 'news_subtitle', 'News');
	pll_register_string('News Title', 'news_title', 'News');
	
	pll_register_string('Join Subtitle', 'join_subtitle', 'Join');
	pll_register_string('Join Title', 'join_title', 'Join');
}

function format_paragraph( $text ){
	$pos =  preg_match('/\[@\](.*?)\[@\]/', $text);
	
	if ($pos !== false) {
		preg_match_all('/\[@\](.*?)\[@\]/', $text, $result_text);
		echo preg_replace('/\[@\](.*?)\[@\]/', "<span class='text-purple'>@RewardSpaceBot</span>", $text);
	} else {
		echo $text;
	}
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/options-panel.php';

