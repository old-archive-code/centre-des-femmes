<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'business_theme' ); ?></a>
		<header id="masthead" class="site-header">
			<div class="site-header-wrapper">
				<?php if ( has_nav_menu( 'lang' ) ) : ?>
					<nav class="lang-navigation">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'lang',
								'menu_id'        => 'lang-menu',
							) );
						?>
					</nav>
				<?php endif; ?>
				
				<div class="site-identity">
					<?php the_custom_logo(); ?>

					<div class="site-brand">
						<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div>
				</div><!-- .site-identity -->

				<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'business_theme' ); ?></button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
				<?php endif; ?>
			</div><!-- .site-header-wrapper -->
		</header><!-- #masthead -->
