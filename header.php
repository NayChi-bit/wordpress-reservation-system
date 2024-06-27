<?php
/**************************************
 * ヘーダファイル.
 **************************************/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>> 

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>WEB01</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<!-- CSS FILES -->
	<?php wp_head(); ?>
</head>

	<!-- HEADER START -->
	<?php
		if(is_front_page()){
			echo '<header id="header" class="header fixed-top d-flex align-items-center">';
		}
		else{
			echo '<header id="header" class="header sticky-top d-flex align-items-center">';
		}
	?>

	<div class="container-fluid d-flex align-items-center justify-content-between">
		<a href="<?php echo home_url(); ?>" class="logo d-flex align-items-center me-auto me-xl-0">
			<?php 
				if(is_front_page()){
			?>
					<h1 class="logo"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" class="img-fluid"/></h1>
			<?php
				}else{
			?>
					<h1 class="logo"><img src="<?php bloginfo('template_url'); ?>/assets/images/alternate_logo.png" class="img-fluid"/></h1>
			<?php
				}
			?>
		</a>

		<!-- NAV MENU AREA -->
		<nav id="navmenu" class="navmenu">
			<?php 
				if (has_nav_menu('primary')){
					$args = array(
						'theme_location'    => 'primary',
						'menu_class'        => '',
					);
					wp_nav_menu( $args );
				}
			?>
			<i class="mobile-nav-toggle bi bi-list"></i>			
		</nav><!-- END NAV MENU AREA -->
	</div>
</header><!-- END HEADER -->
