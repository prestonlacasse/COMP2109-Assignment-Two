<?php
/**
 * The header.
 *
 * This is the file that displays all of the header information/links
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, inital=scale=1">
		<?php wp_head(); ?>
		<!-- add other files -->
		<!-- Adding local bootstrap link wasn't working for some read -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- link to custom css file -->
		<link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assignmenttwo/assets/css/custom-css.css'))?>">
		<!-- bootstrap js -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
	<body <?php body_class(); ?>>
		<header class="row">
			<div class="col-sm-12 col-md-6 col-lg-8">

			</div>
			<nav class="navbar navbar-light">
			<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
			<!-- Logo used is a free image by logopond -->
					<img src="<?php echo esc_url(home_url('wp-content/uploads/2022/04/tech-logo.png')); ?>" alt="logo" style="height: 80px;">
				</a>
				<?php
				wp_nav_menu(array(
					'menu' => 'main',
					'theme_location' => '',
					'depth' => 2,
					'fallback_cb'       => false,
					'container'      => 'ul',
					'menu_class'     => 'navbar'
				))
				?>
			</nav>
		</header>
