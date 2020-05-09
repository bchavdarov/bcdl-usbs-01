<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bcdl-usbs-01
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bcdl-usbs-01' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$bcdl_usbs_01_description = get_bloginfo( 'description', 'display' );
			if ( $bcdl_usbs_01_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $bcdl_usbs_01_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		 <!--nav site navigation-->
			<button class="navbar-toggler menu-toggle" type="button" data-toggle="collapse" data-target="#bcdl-navbar-dropdown01" aria-controls="bcdl-navbar-dropdown01" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bcdl-usbs-01' ); ?></button>
			<?php
			wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bcdl-navbar-dropdown01',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new BCDL_WP_Bootstrap_Navwalker(),
        ) );
        ?>
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
