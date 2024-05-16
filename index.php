<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Poseidon
 */
?>

<?php get_header(); ?>


		<!-- HERO SECTION -->
		<section id="hero" class="hero">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/Fitness-Photography-Ideas.jpg" alt="" data-aos="fade-in">
			<div class="container text-center">
				<h2 class="hero-ttl01" data-aos="fade-up" data-aos-delay="100">Personal Trainer Website Templates</h2>
				<p data-aos="fade-up" data-aos-delay="200">Personal Trainer Website Templates</p>
				<p data-aos="zoom-in" data-aos-delay="600" class="mt-5"><a href="#" class="btn_01"><i class="bi bi-calendar-check-fill"></i>&nbsp;BOOKING CARENDAR</a></p>
			</div>
		</section><!-- END HERO SECTION -->

		<!--  CAMPAIN AREA -->
		<section class="campaign">
			<div class="container">
				<!--  SECTION TITLE -->
				<div class="section-title" data-aos="fade-up" data-aos-delay="100">
					<h2 class="mb-3">Campaign List</h2>
					<h3 class="mb-4">キャンペーン一覧Test</h3>
					<p>パーソナルトレーニングジム「デジタルワークフォース」では、新春新生活応援キャンペーンを実施中です！</p>
				</div><!-- END SECTION TITLE -->
				<!--  BANNER AREA -->
				<div class="container banner-area" data-aos="fade-up" data-aos-delay="200">
					<div class="swiper-container">
						<div class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/images/banner01.png" class="img-fluid"/></div>
								<div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/images/banner01.png" class="img-fluid"/></div>
								<div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/images/banner01.png" class="img-fluid"/></div>
								<div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/images/banner01.png" class="img-fluid"/></div>
							</div>
						</div>
						<div class="swiper-pagination"></div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div><!-- END BANNER AREA -->
			</div>
		</section><!-- END CAMPAIN AREA -->

		<!-- NFOMATION AREA -->
		<section class="infomation">
			<div class="container">

				<!--  SECTION TITLE -->
				<div class="section-title" data-aos="fade-up" data-aos-delay="100">
					<h2 class="mb-3">Infomation</h2>
					<h3 class="mb-4">インフォメーション</h3>
					<p>私たちは、あなたの目標達成を強力にサポートするために、常に最新の情報と確かな知識をお届けします。</p>
				</div><!-- END SECTION TITLE -->

				<div data-aos="fade-up" data-aos-delay="200">
					<dl class="d-md-flex align-items-center">
						<dt class="d-md-flex align-items-center">
							<span class="date">2024年08月30日</span>
							<span class="category">INFOMATION</span>
						</dt>
						<dd class="mb-0 mt-3 mt-md-0"><a href="information-post.html">【初心者向け】パーソナルジムって？自分に合った								ジムの見つけ方</a></dd>
					</dl>

					<dl class="d-md-flex align-items-center">
						<dt class="d-md-flex align-items-center">
							<span class="date">2024年08月30日</span>
							<span class="category">INFOMATION</span>
						</dt>
						<dd class="mb-0 mt-3 mt-md-0"><a href="#">【目的別】ダイエット、筋トレ、ボディメイク…パーソナルトレーニングで叶える理想の身体</a></dd>
					</dl>

					<dl class="d-md-flex align-items-center">
						<dt class="d-md-flex align-items-center">
							<span class="date">2024年08月30日</span>
							<span class="category">INFOMATION</span>
						</dt>
						<dd class="mb-0 mt-3 mt-md-0"><a href="#">【体験談】パーソナルジムに通ってみた！料金や効果、メリット・デメリットを徹底解説</a></dd>
					</dl>
				</div>

				<div class="text-center" data-aos="zoom-in" data-aos-delay="600" >
					<p class="mt-5"><a href="#" class="btn_01">INFOMATION一覧へ</a></p>
				</div>

			</div>
		</section><!-- END NFOMATION AREA -->
		<!-- ABOUT US AREA -->
		<section class="about">
			<div class="container" data-aos="fade-up" data-aos-delay="100">
				<div class="row align-items-xl-center gy-5">
					<div class="col-xl-5 content">
						<!--  SECTION TITLE -->
						<div class="section-title text-md-start">
							<h2 class="mb-3">About Us</h2>
							<h3>EASYWORKER FITについて</h3>
						</div><!-- END SECTION TITLE -->
						<h2 class="mt-3">結果にコミットする、パーソナルトレーニング</h2>
						<p class="mt-3 mb-3">EASYWORKER FITは、横浜にあるパーソナルトレーニングジムです。</p>
						<p>EASYWORKER FITは「身体が変われば心が変わる。心が変われば身体が変わる。」という理念に基づき、お客様一人ひとりに寄り添ったトレーニング指導を行っております。</p>
						<p class="mt-5 text-center text-md-start"><a href="#" class="btn_01">EASYWORKER FITの詳細へ</a></p>
					</div>

					<div class="col-xl-7">
						<div class="row gy-4 icon-boxes">

							<div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/1.jpg" class="img-fluid"/> 
							</div> <!-- End Icon Box -->

							<div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/2.jpg" class="img-fluid"/>
							</div> <!-- End Icon Box -->

							<div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/3.jpg" class="img-fluid"/>
							</div> <!-- End Icon Box -->

							<div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/4.jpg" class="img-fluid"/>
							</div><!-- END ABOUT US AREA -->
						</div>
					</div>
				</div>
			</div>
		</section><!-- END ABOUT US AREA -->
		
		<!-- SERVICES AREA -->
		<section class="services">
			<!--  SECTION TITLE -->
			<div class="container section-title" data-aos="fade-up">
				<h2 class="mb-3">Services</h2>
				<h3 class="mb-4">EASYWORKER FITのプログラム</h3>
				<p>あなたにに合わせたトレーニングで、安全に楽しく、健康的な身体づくりを目指しましょう！</p>
			</div><!-- END SECTION TITLE -->

			<div class="container">
				<div class="row gy-4">

					<div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
						<div class="service-item d-md-flex d-block">
							<div class="icon flex-shrink-0"><img src="<?php bloginfo('template_url'); ?>/assets/images/5.jpg" class="img-fluid"/></div>
							<div>
								<h4 class="title"><a href="services-details.html" class="stretched-link"><i class="fa-solid fa-user-minus"></i>美ボディメイク<br>
									しなやかで美しいボディラインを目指す</a></h4>
								<p class="description">しなやかで美しいボディラインを手に入れたいあなたへ、パーソナルトレーニングによる美ボディメイクプログラムをご提案いたします。</p>
							</div>
						</div>
					</div><!-- End Service Item -->
					<div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
						<div class="service-item d-md-flex d-block">
							<div class="icon flex-shrink-0"><img src="<?php bloginfo('template_url'); ?>/assets/images/7.jpg" class="img-fluid"/></div>
							<div>
								<h4 class="title"><a href="services-details.html" class="stretched-link">筋力アップ：力強く引き締まった身体を目指す</a></h4>
								<p class="description">全身を鍛えるトレーニングで、理想の引き締まった身体を実現。経験豊富なトレーナーが、あなたの目標に合わせた最適なメニューを作成します。</p>
							</div>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
						<div class="service-item d-md-flex d-block">
							<div class="icon flex-shrink-0"><img src="<?php bloginfo('template_url'); ?>/assets/images/9.jpg" class="img-fluid"/></div>
							<div>
								<h4 class="title"><a href="services-details.html" class="stretched-link">ダイエット：脂肪燃焼と引き締めを同時に目指す</a></h4>
								<p class="description">有酸素運動で脂肪を燃焼し、筋トレで引き締まった体を作り、食事指導で健康的な食生活もサポート。あなただけの最速プランで理想のボディへ導きます。</p>
							</div>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
						<div class="service-item d-md-flex d-block">
							<div class="icon flex-shrink-0"><img src="<?php bloginfo('template_url'); ?>/assets/images/8.jpg" class="img-fluid"/></div>
							<div>
								<h4 class="title"><a href="services-details.html" class="stretched-link">健康増進：体力向上と健康的な身体を目指す</a></h4>
								<p class="description">ウォーキング、筋トレ、ストレッチなど、無理なく続けられる運動を取り入れ、心身ともに健康な生活を実現。体力向上、ストレス解消、体型維持など、様々な効果が期待できます。</p>
							</div>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
						<div class="service-item d-md-flex d-block">
							<div class="icon flex-shrink-0"><img src="<?php bloginfo('template_url'); ?>/assets/images/10.jpg" class="img-fluid"/></div>
							<div>
								<h4 class="title"><a href="services-details.html" class="stretched-link">シニア向け：年齢に合わせた安全な運動を目指す</a></h4>
								<p class="description">年齢に合わせた運動で、体力向上、筋力アップ、転倒予防など、様々な効果が期待できます。無料体験やカウンセリングも実施しているので、お気軽にお問い合わせください。</p>
							</div>
						</div>
					</div><!-- End Service Item -->

					<div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
						<div class="service-item d-md-flex d-block">
							<div class="icon flex-shrink-0"><img src="<?php bloginfo('template_url'); ?>/assets/images/11.jpg" class="img-fluid"/></div>
							<div>
								<h4 class="title"><a href="services-details.html" class="stretched-link">食事管理：食べながら痩せられるおすすめの食事メニューも紹介</a></h4>
								<p class="description">トレーニングだけでなく食事に関する知識も豊富なプロフェッショナルです。また、より専門的な指導を行うために管理栄養士が在籍しています。</p>
							</div>
						</div>
					</div><!-- End Service Item -->
				</div>
				<div class="text-center" data-aos="zoom-in" data-aos-delay="800" >
					<p class="mt-5"><a href="#" class="btn_01">SERVICEの詳細へ</a></p>
				</div>
		</div>
	</section><!-- END SERVICES AREA -->

		<!-- PRICE AREA -->
		<section class="price">

			<div class="container" data-aos="fade-up" data-aos-delay="100">
				<div class="row gy-5">

					<div class="col-xl-5 content">
						<!--  SECTION TITLE -->
						<div class="section-title text-md-start">
							<h2 class="mb-3">Price List</h2>
							<h3>料金・価格表</h3>
						</div><!-- END SECTION TITLE -->
						<h2 class="mt-3">手ごろな料金でプロのアドバイス。トレーニングをより効果的に。</h2>
						<p class="mt-3">手軽な価格でパーソナライズドなトレーニングを受けませんか？当ジムではあなただけのプランを提供し、目標に合わせて最適な結果を得ることができます。費用対効果の高さが魅力です。</p>
						<p class="mt-5 text-center text-md-start"><a href="#" class="btn_01">PRICE LISTの詳細へ</a></p>
					</div>

					<div class="col-xl-7">
						<div class="row gy-4 icon-boxes">

							<div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
								<div class="icon-box first-time h-100">
									<div class="icon-item mb-3">
										<i class="bi bi-person-dash-fill"></i><p>初回体験コース</p>
										<h3>5,000円</h3>
									</div>
									<p>無料体験コースでは、専属トレーナーがマンツーマンで基本トレーニングを丁寧に指導いたします。</p>
								</div>
							</div> <!-- End Icon Box -->

							<div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
								<div class="icon-box h-100">
									<div class="icon-item mb-3">
										<i class="bi bi-person-plus-fill"></i><p>回数券6回コース</p>
									</div>
									<h3>100,000円</h3>
									<p>ダイエット、ボディメイク、体力向上など、専属トレーナーが6回の集中トレーニングをサポートします。</p>
								</div>
							</div> <!-- End Icon Box -->

							<div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
								<div class="icon-box h-100">
									<div class="icon-item mb-3">
										<i class="bi bi-person-plus-fill"></i><p>回数券8回コース</p>
									</div>
									<h3>150,000円</h3>
									<p>体の変化を実感しやすいコースです。専属トレーナーが8回の集中トレーニングをサポートします。</p>
								</div>
							</div> <!-- End Icon Box -->

							<div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
								<div class="icon-box h-100">
									<div class="icon-item mb-3">
										<i class="bi bi-person-plus-fill"></i><p>回数券10回コース</p>
									</div>
									<h3>200,000円</h3>
									<p>週に1回のペースでトレーニングを継続しやすいコースです。専属トレーナーが10回の集中トレーニングをサポートします。i</p>
								</div>
							</div> <!-- End Icon Box -->

						</div>
					</div>

				</div>
			</div>
		</section><!-- END PRICE AREA -->
	
		<!-- STAFF AREA -->
		<section class="staff">

			<!--  SECTION TITLE -->
			<div class="container section-title" data-aos="fade-up">
				<h2 class="mb-3">Gim Staff</h2>
				<h3 class="mb-4">ジムスタッフの紹介</h3>
				<p>お客様一人ひとりの目標や体調に合わせた、最適なトレーニングプログラムを提供します。</p>
			</div><!-- END SECTION TITLE -->

			<div class="container">
				<div class="row">

					<div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
						<div class="member d-md-flex">
							<div class="pic flex-shrink-0 text-center"><img src="<?php bloginfo('template_url'); ?>/assets/images/12.jpg" class="img-fluid" alt=""></div>
							<div class="member-info">
								<h4>田中&nbsp;太郎</h4>
								<p class="txt-limit">パーソナルトレーナーとして5年間、お客様の目標達成をサポートしてきました。ダイエット、筋力アップ、ボディメイクなど、一人ひとりに合わせたトレーニングプログラムで、理想の体づくりをお手伝いします。</p>
								<p class="mb-4"><a href="#">ジムスタッフの詳細へ<i class="fa-solid fa-arrow-right ms-2"></i></a></p>
								<div class="social">
									<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
									<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									<a href="#"><i class="fa-brands fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
						<div class="member d-md-flex d-block">
							<div class="pic flex-shrink-0 text-center"><img src="<?php bloginfo('template_url'); ?>/assets/images/13.jpg" class="img-fluid" alt=""></div>
							<div class="member-info">
								<h4>佐藤&nbsp;健太</h4>
								<p class="txt-limit mb-3">柔道整復師の国家資格を持つパーソナルトレーナーとして、お客様の健康と目標達成をサポートしています。怪我や痛みを抱える方でも安心してトレーニングできるよう、身体の状態に合わせたプログラムを提供いたします。</p>
								<p class="mb-4"><a href="#">ジムスタッフの詳細へ<i class="fa-solid fa-arrow-right ms-2"></i></a></p>
								<div class="social">
									<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
									<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									<a href="#"><i class="fa-brands fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="member d-md-flex d-block">
							<div class="pic flex-shrink-0 text-center"><img src="<?php bloginfo('template_url'); ?>/assets/images/14.jpg" class="img-fluid" alt=""></div>
							<div class="member-info">
								<h4>高橋&nbsp;美咲</h4>
								<p class="txt-limit mb-3">5年間パーソナルトレーナーとして、ダイエット、筋力アップ、姿勢改善など、お客様の目標達成をサポートしてきました。栄養士資格も活かし、食事指導も行い、効果的なトレーニングを実現します。</p>
								<p class="mb-4"><a href="#">ジムスタッフの詳細へ<i class="fa-solid fa-arrow-right ms-2"></i></a></p>
								<div class="social">
									<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
									<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									<a href="#"><i class="fa-brands fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
						<div class="member d-md-flex d-block">
							<div class="pic flex-shrink-0 text-center"><img src="<?php bloginfo('template_url'); ?>/assets/images/15.jpg" class="img-fluid" alt=""></div>
							<div class="member-info">
								<h4>伊藤&nbsp;真理</h4>
								<p class="txt-limit mb-3">運動が苦手な方でも安心してトレーニングを始められるよう丁寧に指導いたします。また、運動に慣れていない方でも無理なく続けられるよう、段階的に負荷を上げていくなど、お客様のペースに合わせてトレーニングを進めていきます。</p>
								<p class="mb-4"><a href="#">ジムスタッフの詳細へ<i class="fa-solid fa-arrow-right ms-2"></i></a></p>
								<div class="social">
									<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
									<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									<a href="#"><i class="fa-brands fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center" data-aos="zoom-in" data-aos-delay="800">
					<p class="mt-5"><a href="#" class="btn_01">GIM STAFFの詳細へ</a></p>
				</div>
			</div>
		</section><!-- END STAFF AREA -->
		<!-- FAQ AREA -->
		<section class="faq">
			<!--  SECTION TITLE -->
			<div class="container section-title" data-aos="fade-up">
				<h2 class="mb-3">FAQ</h2>
				<h3 class="mb-4">よくある質問</h3>
				<p>お客様から寄せられたよくあるご質問をFAQ形式でまとめています。</p>
			</div><!-- END SECTION TITLE -->

			<div class="container">
				<div class="row gy-4">

					<div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">

						<div class="faq-container">
							<div class="faq-item faq-active">
								<h3><span class="num">1.</span> <span>どのような方がパーソナルトレーニングを受けていますか？</span></h3>
								<div class="faq-content">
									<p>ダイエット、筋力アップ、体質改善、リハビリなど、様々な目的で利用されています。運動経験が少ない方、女性、シニアの方でも安心して取り組めるので、幅広い層の方にご利用いただいています。</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

							<div class="faq-item">
								<h3><span class="num">2.</span> <span>トレーニングは初心者でも大丈夫ですか？</span></h3>
								<div class="faq-content">
									<p>はい、大丈夫です。経験豊富なトレーナーが、お客様の体力や目的に合わせて丁寧に指導します。運動が苦手な方でも、無理なく安全にトレーニングを進めることができます。</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

							<div class="faq-item">
								<h3><span class="num">3.</span> <span>どのくらいの頻度で通えばいいですか？</span></h3>
								<div class="faq-content">
									<p>週1回から2回程度が目安です。目標達成までの期間は、お客様の目標や体質によって異なりますが、定期的に通うことでより効果を実感できます。</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

							<div class="faq-item">
								<h3><span class="num">4.</span> <span>食事指導はありますか？</span></h3>
								<div class="faq-content">
									<p>はい、EASYWORKER FITでは食事指導も行っています。トレーニングの効果を最大限に引き出すために、お客様の体質や目的に合わせた食事指導を行います。</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

							<div class="faq-item">
								<h3><span class="num">5.</span> <span>体験レッスンはできますか？</span></h3>
								<div class="faq-content">
									<p>はい、EASYWORKER FITでは体験レッスンを5,000円で実施しています。実際にトレーニングを体験して、ジムやトレーナーの雰囲気を確かめることができます。</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->
						</div>

					</div>
				</div>

				<div class="text-center" data-aos="zoom-in" data-aos-delay="400">
					<p class="mt-5"><a href="#" class="btn_01">FAQの一覧へ</a></p>
				</div>

			</div>
		</section><!-- END FAQ AREA -->


		<!-- BLOG AREA -->
		<section class="blog">

			<!--  SECTION TITLE -->
			<div class="container section-title" data-aos="fade-up">
				<h2 class="mb-3">Blog</h2>
				<h3 class="mb-4">ブログ</h3>
				<p>トレーニングやダイエット、健康に関する情報を発信しています。</p>
			</div><!-- END SECTION TITLE -->

			<div class="container">
				<div class="row">

					<div class="col-12 col-lg-3 mb-3 d-flex align-items-stretch">
						<div class="card">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/21.jpg" class="card-img-top" alt="Card Image">
							<div class="card-body d-flex flex-column">
								<p class="calegory01 mb-2">Diet Blog</p>
								<h5 class="card-title">運動嫌いでも楽しく続けられる！パーソナルジムで無理なくダイエット</h5>
								<p class="card-text mb-4">運動が苦手な方でも、プロのトレーナーがマンツーマンでサポートするので、無理なく楽しくダイエットを続けられます。お客様に合わせたトレーニングメニューや食事指導で、理想の体型を目指しましょう。</p>
								<a href="#" class="mt-auto align-self-start"><i class="bi bi-arrow-right me-1"></i>Read More</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-lg-3 mb-3 d-flex align-items-stretch">
						<div class="card">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/22.jpg" class="card-img-top" alt="Card Image">
							<div class="card-body d-flex flex-column">
								<p class="calegory02 mb-2">Training Blog</p>
								<h5 class="card-title">デスクワーク中心の方必見！姿勢改善・腰痛解消のためのパーソナルトレーニング</h5>
								<p class="card-text mb-4">デスクワークによる姿勢の悪さや腰痛にお悩みの方、パーソナルトレーニングで正しい姿勢を身につけましょう。ストレッチや筋力トレーニングで、体の歪みを改善し、痛みを解消します。</p>
								<a href="#" class="mt-auto align-self-start"><i class="bi bi-arrow-right me-1"></i>Read More</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-lg-3 mb-3 d-flex align-items-stretch">
						<div class="card">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/23.jpg" class="card-img-top" alt="Card Image">
							<div class="card-body d-flex flex-column">
								<p class="calegory01 mb-2">Diet Blog</p>
								<h5 class="card-title">産後太り解消・体型維持のためのパーソナルトレーニング</h5>
								<p class="card-text mb-4">出産後の体型変化にお悩みの方、パーソナルトレーニングで効率的に体型を戻しましょう。経験豊富なトレーナーが、産後の体質や体調に合わせたトレーニングメニューを提案します</p>
								<a href="#" class="mt-auto align-self-start"><i class="bi bi-arrow-right me-1"></i>Read More</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-lg-3 mb-3 d-flex align-items-stretch">
						<div class="card">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/24.jpg" class="card-img-top" alt="Card Image">
							<div class="card-body d-flex flex-column">
								<p class="calegory02 mb-2">Training Blog</p>
								<h5 class="card-title">運動初心者でも安心！パーソナルトレーニングで始める健康的な生活</h5>
								<p class="card-text mb-4">運動初心者の方でも、パーソナルトレーニングで運動習慣を身につけて、健康的な生活を始めましょう。基礎体力向上やストレス解消など、様々な効果が期待できます。</p>
								<a href="#" class="mt-auto align-self-start"><i class="bi bi-arrow-right me-1"></i>Read More</a>
							</div>
						</div>
					</div>

					<div class="text-center" data-aos="zoom-in" data-aos-delay="400">
						<p class="mt-5"><a href="#" class="btn_01">Blog一覧へ</a></p>
					</div>

				</div>
			</div>
		</section><!-- END BLOG AREA -->


		<!-- CONTACT AREA -->
		<section id="contact" class="contact">
			<div class="container" data-aos="fade-up">

				<!--  SECTION TITLE -->
				<div class="container section-title" data-aos="fade-up">
					<h2 class="mb-3">Contact</h2>
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
							<img src="<?php bloginfo('template_url'); ?>/assets/images/images02.png" class="img-fluid"/> </div>
					</div>

				</div>

			</div>
		</section><!-- END CONTACT AREA -->
	
			<?php
			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

<?php get_footer(); ?>
</body>