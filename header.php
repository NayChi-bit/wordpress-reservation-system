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
			<ul>
				<li><a href="<?php echo home_url(); ?>">Home</a></li>
				<li><a href="<?php echo get_permalink(get_page_by_path('about')->ID); ?>">About Us</a></li>
				<li><a href="<?php echo get_permalink(get_page_by_path('services')->ID); ?>">Services</a></li>
				<li><a href="<?php echo get_permalink(get_page_by_path('price')->ID); ?>">Price List</a></li>
				<li class="dropdown has-dropdown"><a href="<?php echo get_permalink(get_page_by_path('staff')->ID); ?>"><span>Gim Staff</span> <i class="bi bi-chevron-down"></i></a>
					<ul class="dd-box-shadow">
						<li><a href="<?php echo get_permalink(get_page_by_path('staff')->ID); ?>" onclick="staffScroll(event, 'tanaka-taro')">田中&nbsp;太郎</a></li>
						<li><a href="<?php echo get_permalink(get_page_by_path('staff')->ID); ?>" onclick="staffScroll(event, 'sato-kenta')">佐藤&nbsp;健太</a></li>
						<li><a href="<?php echo get_permalink(get_page_by_path('staff')->ID); ?>" onclick="staffScroll(event, 'takahashi-misaki')">高橋&nbsp;美咲</a></li>
						<li><a href="<?php echo get_permalink(get_page_by_path('staff')->ID); ?>" onclick="staffScroll(event, 'ito-mari')">伊藤&nbsp;真理</a></li>
					</ul>
				</li>
				<li><a href="<?php echo get_permalink(get_page_by_path('faq')->ID); ?>">FAQ</a></li>
				<li><a href="<?php echo get_permalink(get_page_by_path('information')->ID); ?>">Information</a></li>
				<li><a href="<?php echo get_permalink(get_page_by_path('blog')->ID); ?>">Blog</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="<?php echo get_permalink(get_page_by_path('login')->ID); ?>">Login</a></li>
				<li class="carender"><a href="#"><i class="bi bi-calendar-check-fill"></i>&nbsp;BOOKING CARENDAR</a></li>
			</ul>

			<i class="mobile-nav-toggle bi bi-list"></i>
		</nav><!-- END NAV MENU AREA -->

	</div>
</header><!-- END HEADER -->
