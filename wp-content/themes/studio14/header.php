<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Studio14
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'studio14' ); ?></a>

	<header id="masthead" class="site-header">
		<!--NAV-->
		<div class="nav">
			<div class="site-wrapper">
				<nav>
					<div class="site-branding logo" id="logo">
						<?php the_custom_logo();?>
					</div><!-- .site-branding -->
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<?php esc_html_e( 'Primary Menu', 'studio14' ); ?>
							<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
  								<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
							</svg>
					
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' 	=> 'menu-1',
								'menu_class' 		=> 'list-menu',
								'container' 		=> 'div',
								'container_class' => 'nav-buttom-list', 
								'container_id' => 'nav-buttom-list-menu',
								'menu_id'        	=> 'primary-menu',
								'items_wrap' 		=> '<ul class="list-menu">%3$s</ul>',
								
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</nav>

			</div>
		</div>
	</header><!-- #masthead -->
