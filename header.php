<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
		<div class="top-header">
			<div class="logo-holder">
			
			</div>
			
		</div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container">
		<?php endif; ?>
		
		<button id="ham"class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
        class="fa fa-bars fa-1x"></i></span></button>

		 <!-- Collapsible content -->
		 <div class="collapse navbar-collapse" id="navbarSupportedContent1">

<!-- Links -->
<ul class="navbar-nav mr-auto" id="mobile_link">
  <li class="nav-item active">
	<a class="nav-link" href="http://restaurant.local/">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
	<a class="nav-link" href="http://restaurant.local/menu/">Menu</a>
  </li>
  <li class="nav-item">
	<a class="nav-link" href="http://restaurant.local/drinks/">Drinks</a>
  </li>
  <li class="nav-item">
	<a class="nav-link" href="http://restaurant.local/events/">Events</a>
  </li>
</ul>
<!-- Links -->

</div>
<!-- Collapsible content -->


<!--/.Navbar-->
				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>
			

		</nav><!-- .site-navigation -->
		<div class="social-holder">
				<i class="fa fa-twitter"></i>
				<i class="fa fa-instagram"></i>
				<i class="fa fa-facebook"></i>

			</div>
			

	</div><!-- #wrapper-navbar end -->
