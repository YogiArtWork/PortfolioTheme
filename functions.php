<?php
/**
 * Load script, fonts and styles.
 *
 * @since 1.0
 */
function _yaw_enqueue_scripts() {
	$template_dir_uri = get_template_directory_uri() . '/';

	/**
	 * Fav icon
	 */
	wp_enqueue_style( 'ywa-fav-icon', "{$template_dir_uri}assets/images/favicon.ico" );

	/**
	 * Styles
	 */
	wp_enqueue_style( 'bootstrap-css', "{$template_dir_uri}assets/css/bootstrap.min.css" );
	wp_enqueue_style( 'owl-carousal-css', "{$template_dir_uri}assets/css/owl.carousel.css" );
	wp_enqueue_style( 'owl-theme-css', "{$template_dir_uri}assets/css/owl.theme.css" );
	wp_enqueue_style( 'magnific-popup-css', "{$template_dir_uri}assets/css/magnific-popup.css" );
	wp_enqueue_style( 'yaw-style-css', "{$template_dir_uri}assets/css/style.css" );
	wp_enqueue_style( 'yaw-responsive-style-css', "{$template_dir_uri}assets/css/responsive.css" );

	/**
	 * Fonts
	 */
	wp_enqueue_style( 'roboto-slab-font', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' );
	wp_enqueue_style( 'roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' );

	/**
	 * Scripts
	 */
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'html5-shiv', "{$template_dir_uri}assets/js/html5shiv.min.js" );
	wp_script_add_data( 'html5-shiv', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'jquery-appear', "{$template_dir_uri}assets/js/jquery.appear.js", array( 'jquery' ), false, true );
	wp_enqueue_script( 'bootstrap-js', "{$template_dir_uri}assets/js/bootstrap.min.js", array( 'jquery' ), false, true );
	wp_enqueue_script( 'classie-js', "{$template_dir_uri}assets/js/classie.js", array( 'jquery' ), false, true );
	wp_enqueue_script( 'owl-carousal-js', "{$template_dir_uri}assets/js/owl.carousel.min.js", array( 'jquery' ), false, true );
	wp_enqueue_script( 'magnific-popup-js', "{$template_dir_uri}assets/js/jquery.magnific-popup.min.js", array( 'jquery' ), false, true );
	wp_enqueue_script( 'masonry-pkgd-js', "{$template_dir_uri}assets/js/masonry.pkgd.min.js", array( 'jquery' ), false, true );
	wp_enqueue_script( 'masonry-js', "{$template_dir_uri}assets/js/masonry.js", array( 'jquery' ), false, true );
	wp_enqueue_script( 'smooth-scroll-js', "{$template_dir_uri}assets/js/smooth-scroll.min.js", array( 'jquery' ), false, true );
	wp_enqueue_script( 'typed-js', "{$template_dir_uri}assets/js/typed.js", array( 'jquery' ), false, true );
	wp_enqueue_script( 'yaw-main-js', "{$template_dir_uri}assets/js/main.js", array( 'owl-carousal-js', 'masonry-js' ), false, true );

}

add_action( 'wp_enqueue_scripts', '_yaw_enqueue_scripts' );


if ( ! function_exists( '_yaw_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0
	 */
	function _yaw_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/_yaw
		 * If you're building a theme based on _yaw, use a find and replace
		 * to change '_yaw' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'yaw' );

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

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		) );
	}
endif; // _yaw_setup
add_action( 'after_setup_theme', '_yaw_setup' );