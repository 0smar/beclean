<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title><?php 
		global $page, $paged;
		wp_title( '|', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
	?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo( stylesheet_url ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/menu.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/index.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/posts.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/footer.css">

	<script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
	<div class="header">
		
		<div class="menu">
			<?php    /**
				* Displays a navigation menu
				* @param array $args Arguments
				*/
				$args = array(
					'theme_location' => '',
					'menu' => '',
					'container' => '',
					'container_class' => false,
					'container_id' => '',
					'menu_class' => '',
					'menu_id' => '',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '<div class="menu-hover"></div>',
					'link_before' => '',
					'link_after' => '',
					'items_wrap' => '%3$s',
					'depth' => 0,
					'walker' => ''
				);
			
				wp_nav_menu( $args ); ?>
				<?php
				if ( is_user_logged_in() ) { ?>
				     
				    <li class="menu-item"><a href="<?php echo admin_url(); ?>">Panel de Administrador</a></li>
				    <li class="menu-item"><a href="<?php echo wp_logout_url( home_url() ); ?>">Salir</a></li>
				    <?php
				} else {
					?>
				    <li class="menu-item"><a href="<?php echo wp_login_url(); ?>">Iniciar Sesión </a></li>
				    <?php
				}
				?>
		</div>

		<div onclick="openNav()" class="mobile-menu">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<div class="logo-box">
		<div class="logo">
			<a href="<?php echo get_home_url(); ?>">
				<img src="<?php bloginfo('template_url'); ?>/img/logonew.jpg" />
			</a>
		</div>
		<div class="social-links">
			<a href="https://www.facebook.com/becleanbyanutricional/" class="social-link-circle">
				<img src="<?php bloginfo('template_url'); ?>/img/icons-02.png" />
			</a>
			<a href="https://www.instagram.com/becleanbyanutricional/" class="social-link-circle">
				<img src="<?php bloginfo('template_url'); ?>/img/icons-03.png" />
			</a>
			<a href="https://www.youtube.com/user/anutricional" class="social-link-circle">
				<img src="<?php bloginfo('template_url'); ?>/img/icons-04.png" />
			</a>
		</div>
	</div>

	<!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <?php    /**
				* Displays a navigation menu
				* @param array $args Arguments
				*/
				$args = array(
					'theme_location' => '',
					'menu' => '',
					'container' => '',
					'container_class' => false,
					'container_id' => '',
					'menu_class' => '',
					'menu_id' => '',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'items_wrap' => '%3$s',
					'depth' => 0,
					'walker' => ''
				);
			
				wp_nav_menu( $args ); ?>
  </div>

</div>

<!-- Use any element to open/show the overlay navigation menu -->

