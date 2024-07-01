<?php
/*********************************
Privacy ページ
Template Name: Privacy Page Template
*********************************/
?>
<!doctype html>
<html lang="ja">

<head>
	<title>Privacy｜EASTWORDKER FIT</title>
	<?php get_header(); ?>
	<!-- privacy CSS -->
	<link href="<?php echo get_template_directory_uri() ?>/css/privacy.css" rel="stylesheet" type="text/css">
</head>

<body>

	<!-- header-under START -->
	<div id="header-under">

		<?php get_template_part('includes/nav'); ?>

	</div><!-- header-under END -->


	<!-- PAN START -->
	<nav class="pan">
		<div class="container">
			<ol>
				<li><a href="index.html">Home</a></li>
				<li class="current">Privacy Policy</li>
			</ol>
		</div>
	</nav><!-- PAN END -->


	<!-- privacy START -->
	<section class="privacy">

		<!--  SECTION TITLE -->
		<div class="container section-title">
			<h1 class="mb-3">Privacy Policy</h1>
			<h2 class="mb-4">プライバシーポリシー</h2>
			<p>EASYWORKER FITは、お客様の個人情報を保護することを重視しています。</p>
		</div><!-- END SECTION TITLE -->


		<div class="container" data-aos="fade-up" data-aos-delay="300">

			<p class="mb-3">当社は、お客様のプライバシーを尊重し、保護することを重要な義務と考えています。当社は、以下の方針に基づき、お客様の個人情報の取り扱いについて定めます。</p>

			<h2 class="mb-3 headline">1. 取得する情報</h2>
			<p class="mb-4">当社は、お客様が当社のウェブサイトを利用する際に、お名前、連絡先情報、お住まいの地域などの個人情報を収集する場合があります。</p>

			<h2 class="mb-3 headline">2. 情報の利用</h2>
			<p class="mb-4">当社は、お客様から収集した個人情報を、以下の目的で利用します。</p>

			<ul class="mb-4">
				<li>お客様へのサービス提供およびカスタマーサポートの提供</li>
				<li>当社の商品やサービスに関する情報の提供</li>
				<li>当社のウェブサイトの改善およびカスタマイズ</li>
			</ul>

			<h2 class="mb-3 headline">3. 情報の共有と開示</h2>
			<p class="mb-4">当社は、法律により要求された場合を除き、お客様の個人情報を第三者と共有または開示することはありません。</p>

			<h2 class="mb-3 headline">4. セキュリティ</h2>
			<p class="mb-4">当社は、お客様の個人情報を適切に保護するために、適切な物理的、電子的、および管理的な手段を講じます。</p>

			<h2 class="mb-3 headline">5. クッキーについて</h2>
			<p class="mb-4">当社のウェブサイトは、クッキーを使用してお客様のブラウザに情報を保存する場合があります。これにより、お客様がウェブサイトを再訪問した際に、よりパーソナライズされた体験を提供できます。
			</p>

			<h2 class="mb-3 headline">6. お問い合わせ先</h2>
			<p class="mb-4">プライバシーポリシーに関するご質問やお問い合わせがある場合は、以下の連絡先までご連絡ください。</p>
			<p>〒220‐0012&nbsp;神奈川県横浜市西区みなとみらい4-4-2&nbsp;横浜ブルーアベニュー5F</p>
			<p>電話番号：045-264-9401 </p>
			<p>メールアドレス：privacy@example.com</p>

		</div>



	</section>


	<!-- access START -->
	<section class="access">
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
						<img src="<?php bloginfo('template_url'); ?>/images/31.png" class="img-fluid" />
						<img src="<?php bloginfo('template_url'); ?>/images/32.png" class="img-fluid" />
					</div>

				</div>
			</div>

			<div class="text-center mt-5" data-aos="zoom-in" data-aos-delay="500">
				<p><a href="#" class="btn_01"><i class="fa-solid fa-calendar-days calendar"></i>&nbsp;BOOKING
						CARENDAR</a></p>
			</div>

		</div>
	</section>
	<!-- access END -->

	<?php get_template_part('includes/footer'); ?>

	<?php get_footer(); ?>

	<script>
		// ヘッダーのスクロール制御
		const header = document.getElementById("header-under");
		window.addEventListener('scroll', function () {
			if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
				header.classList.add('resize');
			} else {
				header.classList.remove('resize');
			}
		});

		AOS.init()
	</script>

</body>

</html>