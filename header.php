<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Alien Ship
 * @since Alien Ship 0.1
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<!-- Load Bootstrap CSS. Javascript is loaded in functions.php -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory');?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory');?>/css/bootstrap-responsive.css">
<!-- End of Bootstrap CSS -->

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>

<body <?php body_class(); ?> onload="prettyPrint()">


<!-- Load Top Menu -->
	<div class="navbar" data-scrollspy="scrollspy">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          <div class="nav-collapse">
            <?php wp_nav_menu( array( 'theme_location' => 'top', 'container' => false, 'menu_class' => 'nav' ) ); ?>
          </div>
        </div>
    </div>
  </div>
<!-- End Top Menu -->

<!-- Site title and description in masthead -->
<div id="page" class="container-fluid hfeed">
	<?php do_action( 'before' ); ?>
	<header id="masthead" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup><br />
<!-- End Site title and description in masthead -->

<!-- Load Primary Menu
	<nav role="navigation" class="site-navigation">
		<h1 class="assistive-text"><?php _e( 'Main menu', '_s' ); ?></h1>
		<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', '_s' ); ?></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav>
End Primary Menu -->	
	</header><!-- #masthead -->
	<div id="main">