<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simple
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/dd960d1f1a.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simple' ); ?></a>
		<header>
			<nav class="navbar navbar-dark bg-dark">
				<div class="float-left">
					<i id="open-menu" class="fas fa-bars text-white" style="font-size: 24px"></i>
					<a class="navbar-brand text-white pl-2" href="/">
						<?php simple_header_logo(); ?>
					</a>
				</div>
				<div class="float-right">
					<a id="nav-greeting" class="text-white pr-2" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
						<?php echo simple_get_nav_login_link_text() ?>
					</a>

					<a href="<?php echo get_permalink( get_option('woocommerce_cart_page_id') ); ?>">
						<i class="fas fa-shopping-cart text-white" style="font-size: 24px"></i>
					</a>
				</div>
				<?php echo do_shortcode('[wcas-search-form]'); ?>
			</nav>
			<?php 
					wp_nav_menu( array(
						'theme_location'  => 'header-bottom',
						'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'div',
						'container_id'    => 'navbar-bottom',
						'container_class' => 'bg-dark navbar pt-0',
						'menu_class'      => 'navbar-nav flex-row m-0',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					) );
				?>
		</header>

	<div id="content" class="site-content">
