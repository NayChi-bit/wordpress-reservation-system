<?php
/****************************************
 * Informationテンプレートファイル
 * Template Name: FAQ Page Template
 ****************************************/
?>
<!doctype html>
<html lang="ja">

<head>
	<title>FAQ｜EASTWORDKER FIT</title>
	<?php get_header(); ?>
	<!-- faq CSS -->
	<link href="<?php echo get_template_directory_uri() ?>/css/faq.css" rel="stylesheet" type="text/css">
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
				<li><a href="<?php echo home_url(); ?>">Home</a></li>
				<li class="current">FAQ</li>
			</ol>
		</div>
	</nav><!-- PAN END -->


	<!-- FAQ START -->
	<section class="faq">
		<div class="container">

			<!--  SECTION TITLE -->
			<div class="container section-title" data-aos="fade-up" data-aos-delay="100">
				<h1 class="mb-3">FAQ</h1>
				<h2 class="mb-4">よくある質問</h2>
				<p>お客様から寄せられたよくあるご質問をFAQ形式でまとめています。</p>
			</div><!-- END SECTION TITLE -->

			<div class="container" data-aos="fade-up" data-aos-delay="200">
				<div class="ab_accordion">
					<div class="ab_accordion_section">
						<div class="ab_accordion_header active">
							<p>1・どのような方がパーソナルトレーニングを受けていますか？</p><i class="fas fa-chevron-down"></i>
						</div>
						<div class="ab_accordion_content" style="display:block">
							ダイエット、筋力アップ、体質改善、リハビリなど、様々な目的で利用されています。運動経験が少ない方、女性、シニアの方でも安心して取り組めるので、幅広い層の方にご利用いただいています。
						</div>
					</div>
					<div class="ab_accordion_section">
						<div class="ab_accordion_header">
							<p>2・トレーニングは初心者でも大丈夫ですか？</p><i class="fas fa-chevron-down"></i>
						</div>
						<div class="ab_accordion_content">
							はい、大丈夫です。経験豊富なトレーナーが、お客様の体力や目的に合わせて丁寧に指導します。運動が苦手な方でも、無理なく安全にトレーニングを進めることができます。
						</div>
					</div>
					<div class="ab_accordion_section">
						<div class="ab_accordion_header">3・どのくらいの頻度で通えばいいですか？<i class="fas fa-chevron-down"></i></div>
						<div class="ab_accordion_content">
							週1回から2回程度が目安です。目標達成までの期間は、お客様の目標や体質によって異なりますが、定期的に通うことでより効果を実感できます。
						</div>
					</div>
					<div class="ab_accordion_section">
						<div class="ab_accordion_header">4・食事指導はありますか？<i class="fas fa-chevron-down"></i></div>
						<div class="ab_accordion_content">
							はい、EASYWORKER FITでは食事指導も行っています。トレーニングの効果を最大限に引き出すために、お客様の体質や目的に合わせた食事指導を行います。
						</div>
					</div>
					<div class="ab_accordion_section">
						<div class="ab_accordion_header">5・体験レッスンはできますか？<i class="fas fa-chevron-down"></i></div>
						<div class="ab_accordion_content">
							はい、EASYWORKER FITでは体験レッスンを5,000円で実施しています。実際にトレーニングを体験して、ジムやトレーナーの雰囲気を確かめることができます。
						</div>
					</div>
					<div class="ab_accordion_section">
						<div class="ab_accordion_header">6・運動が苦手でも大丈夫ですか？<i class="fas fa-chevron-down"></i></div>
						<div class="ab_accordion_content">
							はい、大丈夫です！むしろ、運動経験が少ない方こそパーソナルトレーニングがおすすめです。経験豊富なトレーナーが、お客様の体力や運動経験に合わせて、無理なく続けられるメニューを作成し、丁寧に指導します。運動初心者の方でも、基礎からしっかりと学べるので安心です。
						</div>
					</div>
					<div class="ab_accordion_section">
						<div class="ab_accordion_header">7・ウェアやシューズはレンタルできますか？<i class="fas fa-chevron-down"></i></div>
						<div class="ab_accordion_content">
							はい、ウェアやシューズをレンタルすることができます。手ぶらで通えるので、仕事帰りや外出先からの利用にも便利です。
						</div>
					</div>
					<div class="ab_accordion_section">
						<div class="ab_accordion_header">8・シャワーやロッカーはありますか？<i class="fas fa-chevron-down"></i></div>
						<div class="ab_accordion_content">
							はい、シャワーとロッカーを完備しています。アメニティ（シャンプー、リンス、ボディソープ、タオルなど）が備え付けられております。
						</div>
					</div>
					<div class="ab_accordion_section">
						<div class="ab_accordion_header">9・駐車場はありますか？<i class="fas fa-chevron-down"></i></div>
						<div class="ab_accordion_content">
							ジム専用の駐車場はありませんが、近くにコインパーキングがあります。
						</div>
					</div>
					<div class="ab_accordion_section">
						<div class="ab_accordion_header">10・目標達成までの期間はどれくらいですか？<i class="fas fa-chevron-down"></i></div>
						<div class="ab_accordion_content">
							一般的に、体重を5kg減らす場合は、2ヶ月～3ヶ月程度、体脂肪率を10％下げる場合は、3ヶ月～6ヶ月程度かかると言われています。
						</div>
					</div>

				</div>
			</div>

			<nav class="pager">
				<ul class="pagination d-flex justify-content-center flex-wrap pagination-flat pagination-success"
					data-aos="fade-up" data-aos-delay="200">
					<li class="page-item"><a class="page-link" href="#" data-abc="true"><i
								class="fa fa-angle-left"></i></a></li>
					<li class="page-item active"><a class="page-link" href="#" data-abc="true">1</a></li>
					<li class="page-item"><a class="page-link" href="#" data-abc="true">2</a></li>
					<li class="page-item"><a class="page-link" href="#" data-abc="true">3</a></li>
					<li class="page-item"><a class="page-link" href="#" data-abc="true">4</a></li>
					<li class="page-item"><a class="page-link" href="#" data-abc="true"><i
								class="fa fa-angle-right"></i></a></li>
				</ul>
			</nav>

		</div>
	</section><!-- FAQ END -->


	<!-- access START -->
	<section class="access" data-aos="fade-up" data-aos-delay="300">
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
	</section><!-- access END -->

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