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
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Vendor CSS Files -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- CSS FILES -->
	<?php wp_head(); ?>


	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-6dXLPV0m/dsWhg5p9sqR6sDjePbf+o9ALq4x7UMmVl45OVMm+kswT6ZUtZ2BMQ0S6u8A1o5O8r1lK/eAZWx7tg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script>
		window.addEventListener('scroll', function() {
			var header = document.getElementById('header');
			var logoImage = document.querySelector('.logo img');
			var scrollPosition = window.scrollY;

			// 100px以上スクロールされた場合
			if(scrollPosition > 100) {
				// ロゴ画像を別の画像に変更する
				logoImage.src = '<?php echo get_template_directory_uri(); ?>/assets/images/alternate_logo.png'
			} else {
				// スクロールが100px未満の場合は元のロゴ画像を表示する
				logoImage.src = '<?php echo get_template_directory_uri(); ?>/assets/images/logo.png';
			}
		});
	</script>

</head>
<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
<!-- HEADER START -->
<header id="header" class="header fixed-top d-flex align-items-center">
	<div class="container-fluid d-flex align-items-center justify-content-between">

		<a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
			<h1 class="logo"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" class="img-fluid"/></h1>
		</a>

		<!-- NAV MENU AREA -->
		<nav id="navmenu" class="navmenu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="price.html">Price List</a></li>
				<li class="dropdown has-dropdown"><a href="staff.html"><span>Gim Staff</span> <i class="bi bi-chevron-down"></i></a>
					<ul class="dd-box-shadow">
						<li><a href="#">田中&nbsp;太郎</a></li>
						<li><a href="#">佐藤&nbsp;健太</a></li>
						<li><a href="#">高橋&nbsp;美咲</a></li>
						<li><a href="#">伊藤&nbsp;真理</a></li>
					</ul>
				</li>
				<li><a href="faq.html">FAQ</a></li>
				<li><a href="infomation.html">Infomation</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="#">Contact</a></li>
				<li class="carender"><a href="#"><i class="bi bi-calendar-check-fill"></i>&nbsp;BOOKING CARENDAR</a></li>
			</ul>

			<i class="mobile-nav-toggle bi bi-list"></i>
		</nav><!-- END NAV MENU AREA -->

	</div>
</header><!-- END HEADER -->
