<?php /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	//Add block editor support
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-line-height' );
	add_theme_support( 'custom-units', array() );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support('custom-spacing');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'elins-featured-image', 2000, 1200, true );
	add_image_size( 'elins-thumbnail-avatar', 100, 100, true );
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'main'    => __( 'Main Menu', 'elins' ),
			'social' => __( 'Social Links Menu', 'elins' ),
			'quick'		=>__('Quick Links Menuä', 'elins'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://wordpress.org/support/article/post-formats/
	 */
	add_theme_support(
		'post-formats',
		array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		)
	);
	// Add theme support for a custom logo.
	add_theme_support( 'custom-logo');
	//Add theme suport for Custom Header
	add_theme_support('custom-header');
    // Widgets
    function elins_widgets_init() {
        register_sidebar(
            array(
                'name'          => __( 'Blog widget', 'elins' ),
                'id'            => 'sidebar-1',
                'description'   => __( 'Add widgets here to display on the first colum on the frontpage', 'elins' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				//'class'			=> '', 
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '',
            )
        );
    
        register_sidebar(
            array(
                'name'          => __( 'text widget', 'elins' ),
                'id'            => 'sidebar-2',
                'description'   => __( 'Add widgets here to appear in your footer.', 'elins' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				//'class'			=> '', 
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    
        register_sidebar(
            array(
                'name'          => __( 'Footer 2', 'elins' ),
                'id'            => 'sidebar-3',
                'description'   => __( 'Add widgets here to appear in your footer.', 'elins' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				//'class'			=> '', 
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    }
	add_action( 'widgets_init', 'elins_widgets_init' );
	// Check if is single post and there is no sidebar.
	if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 740;
	}
// load the CSS
function elins_css() {
    wp_enqueue_style(  'main-css', get_stylesheet_directory_uri() . '/style.css', [], 'all'  );
}
add_action( 'wp_enqueue_scripts', 'elins_css' );
// Custom header 
function elins_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
	);
	}
add_action( 'after_setup_theme', 'elins_custom_header_setup' );
