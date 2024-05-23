<?php
/*********************************
Privacy ページ
Template Name: Privacy Page Template
*********************************/
	get_header();
?>

<body class="privacy" data-bs-spy="scroll" data-bs-target="#navmenu">

	<!-- PAN AREA -->
	<nav class="pan" data-aos="fade-up" data-aos-delay="100">
		<div class="container">
			<ol>
				<li><a href="<?php echo home_url(); ?>">Home</a></li>
				<li class="current">Privacy Policy</li>
			</ol>
		</div>
	</nav><!-- END PAN AREA -->


	<!-- PRIVACY POLICY AREA -->
	<section>

		<!--  SECTION TITLE -->
		<div class="container section-title" data-aos="fade-up" data-aos-delay="200">
			<h2 class="mb-3">Privacy Policy</h2>
			<h3 class="mb-4">プライバシーポリシー</h3>
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
			<p class="mb-4">当社のウェブサイトは、クッキーを使用してお客様のブラウザに情報を保存する場合があります。これにより、お客様がウェブサイトを再訪問した際に、よりパーソナライズされた体験を提供できます。</p>

			<h2 class="mb-3 headline">6. お問い合わせ先</h2>
			<p class="mb-4">プライバシーポリシーに関するご質問やお問い合わせがある場合は、以下の連絡先までご連絡ください。</p>
			<p >〒220‐0012&nbsp;神奈川県横浜市西区みなとみらい4-4-2&nbsp;横浜ブルーアベニュー5F</p>
			<p>電話番号：045-264-9401 </p>
			<p>メールアドレス：privacy@example.com</p>

		</div>
	</section><!-- END PRIVACY POLICY AREA -->


	<!-- CONTACT AREA -->
	<section class="contact">
		<div class="container" data-aos="fade-up">

			<!--  SECTION TITLE -->
			<div class="container section-title" data-aos="fade-up">
				<h2 class="mb-3">CONTACT</h2>
				<h3 class="mb-4">お問い合わせ</h3>
				<p>各種お問い合わせ方法や予約カレンダーのご案内になります。</p>
			</div><!-- END SECTION TITLE -->

			<div class="row">

				<div class="col-lg-5 d-flex align-items-stretch">
					<div class="info" data-aos="fade-up" data-aos-delay="200">
						<div class="address">
							<i class="bi bi-geo-alt"></i>
							<h4>Address:</h4>
							<p>〒220‐0012<br>
							神奈川県横浜市西区みなとみらい4-4-2<br>
							横浜ブルーアベニュー5F</p>
						</div>

						<div class="phone">
							<i class="bi bi-phone"></i>
							<h4>Phone:</h4>
							<p>000-000-0000</p>
						</div>

						<div class="email">
							<i class="bi bi-envelope"></i>
							<h4>Contact From:</h4>
							<p>info@example.com</p>
						</div>

						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5158.761664648334!2d139.62605319712668!3d35.4593487695378!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185dde212a6c31%3A0x85721d07bc5c0f96!2z5qCq5byP5Lya56S-44OH44K444K_44Or44Ov44O844Kv44OV44Kp44O844K5!5e0!3m2!1sja!2sjp!4v1709861403057!5m2!1sja!2sjp" width="100%" height="290px;" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>

				</div>

				<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
					<div class="carender text-center">
						<h4>Booking Carender</h4>
						<img src="images/images02.png" class="img-fluid"/> 
					</div>
				</div>

			</div>

		</div>
	</section><!-- END CONTACT AREA -->
<?php get_footer(); ?>