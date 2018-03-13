<!DOCTYPE HTML>
<html>
	<head>
		<title>Industrious by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
    <?php wp_head(); ?>
	</head>
	<body class="is-preload">
	<?php
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' )[0];
	?>
	<!-- Header -->
		<header id="header">
			<?php
			if ( is_active_sidebar( 'home_top_left' ) ) {
				dynamic_sidebar( 'home_top_left' );
			} ?>
			<!-- <a class="logo" href="index.html"><img src="<?php //echo $logo ?>" alt="">	</a> -->
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Nav -->
		<?php
		wp_nav_menu( array(
			'theme_location' => 'main-menu',
			'container' => 'nav',
			'container_id' => 'menu',
			'menu_class' => 'links'
		) );
		?>
