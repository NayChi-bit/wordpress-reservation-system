<?php
/*********************************
About ページ
Template Name: About Page Template
*********************************/ 
?>
<!doctype html>
<html lang="ja">

<head>
	<title>ABOUT US｜EASTWORDKER FIT</title>
	<?php get_header(); ?>

</head>

<body>
	<!-- header-under START -->
	<<div id="header-under">

		<?php get_template_part('includes/nav'); ?>

		</div><!-- header-under END -->

		<!-- pan START -->
		<nav class="pan">
			<div class="container">
				<ol>
					<li><a href="<?php echo home_url(); ?>">Home</a></li>
					<li class="current">About Us</li>
				</ol>
			</div>
		</nav><!-- pan END -->

		<!-- about START -->
		<section class="about">

			<!--  SECTION TITLE -->
			<div class="container section-title" data-aos="fade-up" data-aos-delay="100">
				<h1 class="mb-3">About Us</h1>
				<h2 class="mb-4">EASYWORKER FITについて</h2>
				<p>あなたにに合わせたトレーニングで、安全に楽しく、健康的な身体づくりを目指しましょう！</p>
			</div><!-- END SECTION TITLE -->

			<div class="container">
				<div class="row gy-0 gx-0 align-items-center mb-5 mb-xl-0" data-aos="fade-up" data-aos-delay="200">

					<div class="col-xl-6 text-center mb-4 mb-xl-0">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/img01.jpg" class="img-fluid" />
					</div>

					<div class="col-xl-6">
						<div class="about-inner01">
							<h2 class="text-with-line">経験豊富なトレーナーがお客様の目標達成に向けてサポートいたします。</h2>
							<div class="text-area">
								<p>個々のニーズに合わせたカスタマイズされたトレーニングプランを提供、お客様のライフスタイルや体力レベルに合わせて、効果的なトレーニングを実施し、健康的な身体作りをサポートします。
								</p>
							</div>
						</div>
					</div>

					<div class="row gy-0 gx-0 align-items-center mb-5 mb-xl-0" data-aos="fade-up" data-aos-delay="300">

						<div class="col-xl-6 order-2 order-xl-1">
							<div class="about-inner02">
								<h2 class="text-with-line">充実した設備と快適な空間をご提供いたします。</h2>
								<div class="text-area">
									<p>広々としたトレーニングスペースには、最新のマシンや器具を完備しています。また、ロッカーやシャワールームも完備しているので、トレーニング後も快適にご利用いただけます。
									</p>
								</div>
							</div>
						</div>

						<div class="col-xl-6 text-center mb-4 mb-xl-0 order-1 order-xl-2">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/img02.jpg" class="img-fluid" />
						</div>

					</div>

					<div class="row gy-0 gx-0 align-items-center mb-5 mb-xl-0" data-aos="fade-up" data-aos-delay="400">

						<div class="col-xl-6 text-center mb-4 mb-xl-0">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/img03.jpg" class="img-fluid" />
						</div>

						<div class="col-xl-6">
							<div class="about-inner01">
								<h2 class="text-with-line">無料で体験およびカウンセリングを実施しております。ぜひこの機会にお試しください。</h2>
								<div class="text-area">
									<p>入会前に、施設見学や無料体験トレーニング、カウンセリングを受けることができます。お客様の目標や体力レベルに合わせた最適なプランをご提案いたします。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- about END -->


		<!-- access START -->
		<section class="access" data-aos="fade-up" data-aos-delay="600">
			<div class="access-area">

				<div class="container section-title">
					<h1 class="mb-3">Access</h1>
					<h2 class="mb-4">EASYWORKER FITのアクセス情報</h2>
					<p>あなたにに合わせたトレーニングで、安全に楽しく、健康的な身体づくりを目指しましょう！</p>
				</div><!-- END SECTION TITLE -->

				<div class="container mb-5">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3249.7871348512713!2d139.62227112960008!3d35.460063971387584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185dde212a6c31%3A0x85721d07bc5c0f96!2z5qCq5byP5Lya56S-44OH44K444K_44Or44Ov44O844Kv44OV44Kp44O844K5!5e0!3m2!1sja!2sjp!4v1713507824045!5m2!1sja!2sjp"
						width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>

				<div class="container">
					<div class="row">

						<div class="col-12 col-xl-4">
							<dl>
								<dt><i class="fa-solid fa-location-dot"></i>&nbsp;Address</dt>
								<dd class="mb-3">〒220‐0012<br>
									神奈川県横浜市西区みなとみらい4-4-2<br>
									横浜ブルーアベニュー5F</dd>
								<dt><i class="fa-solid fa-mobile-screen-button"></i>&nbsp;Phone</dt>
								<dd class="mb-3">000-0000-0000</dd>
								<dt><i class="fa-solid fa-clock"></i>&nbsp;Working Time</dt>
								<dd>月曜日–金曜日: 11:00–22:00<br>
									土曜日: 10:00–22:00<br>
									日曜日：休館日 </dd>
							</dl>
						</div>

						<div class="col-12 col-xl-8">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/31.png" class="img-fluid" />
							<img src="<?php bloginfo('template_url'); ?>/assets/images/32.png" class="img-fluid" />
						</div>

					</div>
				</div>

				<div class="text-center mt-5" data-aos="zoom-in" data-aos-delay="500">
					<p><a href="#" class="btn_01"><i class="fa-solid fa-calendar-days calendar"></i>&nbsp;BOOKING
							CARENDAR</a></p>
				</div>

			</div>
		</section><!-- access END -->


		<?php get_template_part('includes/footer'); ?>


		<!-- page-top START -->
		<p id="page-top"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></p>
		<?php get_footer(); ?>
		<script>
			// ヘッダーのスクロール制御
			const header = document.getElementById("header");
			window.addEventListener('scroll', function () {
				if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
					header.classList.add('resize');
				} else {
					header.classList.remove('resize');
				}
			});

			AOS.init()
		</script>

		<script>
			// アコーディオン制御
			$(document).ready(function () {
				$('.ab_accordion_header').click(function () {
					// toggle the content
					$(this).next('.ab_accordion_content').slideToggle(200);
					// toggle the arrow icon
					$(this).toggleClass('active');
					// hide the other contents
					$('.ab_accordion_content').not($(this).next()).slideUp(200);
					// remove the active class from other headers
					$('.ab_accordion_header').not($(this)).removeClass('active');
				});
			});
		</script>

		<script>
			$(function () {
				// ページトップ制御
				var pagetop = $('#page-top');
				pagetop.hide();
				$(window).scroll(function () {
					if ($(this).scrollTop() > 100) {
						pagetop.fadeIn();
					} else {
						pagetop.fadeOut();
					}
				});
				pagetop.click(function () {
					$('body, html').animate({ scrollTop: 0 }, 500);
					return false;
				});
			});
		</script>

</body>

</html>