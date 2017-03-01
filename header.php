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

	<script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo get_home_url(); ?>">
				<img src="<?php bloginfo('template_url'); ?>/img/logo.svg" />
			</a>
		</div>
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
		</div>
	</div>
