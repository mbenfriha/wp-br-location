<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package br-location
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <?php wp_head(); ?>
</head>


<body class="<?=  is_front_page()  ? '' : 'bg-black'; ?>" <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id=" page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'br-location' ); ?></a>

    <header id="masthead" class="site-header grid grid-cols-2 lg:grid-cols-7">
      <div class="site-branding lg:col-span-2">
        <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
        <!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
        <?php
			else :
				?>
        <!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
        <?php
			endif;
			$br_location_description = get_bloginfo( 'description', 'display' );
			if ( $br_location_description || is_customize_preview() ) :
				?>
        <!-- <p class="site-description"><?php echo $br_location_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p> -->
        <?php endif; ?>
      </div><!-- .site-branding -->


      <nav id="site-navigation" class="main-navigation container flex justify-end col-span-1 lg:col-span-4 lg:block">

        <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
          'class' => 'flex',
					'menu_id'=> 'primary-menu',
				)
			);
			?>
        </php>
        <button
          class="bg-transparent text-white font-semibold hover:text-white py-2 px-4 border-2 border-white rounded menu-toggle"
          aria-controls="primary-menu" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </nav><!-- #site-navigation -->


    </header><!-- #masthead -->