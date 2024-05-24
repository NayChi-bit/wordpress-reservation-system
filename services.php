<?php
/*************************************
サービステンプレートファイル
Template Name: Service Page Template
**************************************/
	get_header();
?>

<body class="services" data-bs-spy="scroll" data-bs-target="#navmenu">

	<!-- PAN AREA -->
	<nav class="pan" data-aos="fade-up" data-aos-delay="100">
		<div class="container">
			<ol>
				<li><a href="<?php echo home_url(); ?>">Home</a></li>
				<li class="current">Services</li>
			</ol>
		</div>
	</nav><!-- END PAN AREA -->

	<!-- SERVICES AREA -->
	<section id="services" class="services">

		<!--  SECTION TITLE -->
		<div class="container section-title" data-aos="fade-up">
			<h2 class="mb-3">Services</h2>
			<h3 class="mb-4">EASYWORKER FITのプログラム</h3>
			<p>あなたにに合わせたトレーニングで、安全に楽しく、健康的な身体づくりを目指しましょう！</p>
		</div><!-- END SECTION TITLE -->

		<div class="container">
			<div class="row gy-4">

			<?php
				$service_query = new WP_Query(array(
					'post_type' => 'post',
					'category_name' => 'Services'
				));
				$post_count = $service_query->found_posts;

				if ($service_query->have_posts()) :
					echo '<p>Total posts found: ' . $post_count . '</p>';
					while ($service_query->have_posts()) : $service_query->the_post();
			?>
				<div class="col-lg-12 " data-aos="fade-up" data-aos-delay="100">
					<div class="service-item d-md-flex d-block">
						<div class="icon flex-shrink-0">
						<?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                    	<?php endif; ?>
						</div>

						<div class="card mb-4">
							<div class="card-body p-3">
								<div class="custom-scrollbar-css p-2">
									<h4 class="title"><?php the_title(); ?></h4>
									<?php the_content(); ?>
								</div>
							</div>
						</div>

					</div>
				</div><!-- End Service Item -->
				<?php
                    endwhile;
            	?>
			<?php
                wp_reset_postdata();
            	endif;
            ?>

			</div>
		</div>
	</section><!-- END SERVICES AREA -->


	<!-- FLOW AREA -->
	<section class="flow">

		<!--  SECTION TITLE -->
		<div class="container section-title" data-aos="fade-up" data-aos-delay="100">
			<h2 class="mb-3">FLOW</h2>
			<h3 class="mb-4">パーソナルトレーニングの流れ</h3>
			<p>お客様の目的や悩みをお聞かせください。トレーナーがあなたにピッタリのトレーニングを提案します。</p>
		</div><!-- END SECTION TITLE -->

		<div class="container" data-aos="zoom-in" data-aos-delay="200">

			<div class="row">
				<div class="col-md-3 mb-3">
					<ul class="nav nav-pills flex-column" id="myTab" role="tablist">
						<li class="nav-item mb-3">
							<a class="nav-link active" id="flow01-tab" data-bs-toggle="tab" href="#flow01" role="tab" aria-controls="flow01" aria-selected="true"><i class="fa-solid fa-id-card"></i><span>ご入会について</span></a>
						</li>
						<li class="nav-item mb-3">
							<a class="nav-link" id="flow02-tab" data-bs-toggle="tab" href="#flow02" role="tab" aria-controls="flow02" aria-selected="false"><i class="fa-solid fa-calendar-days"></i><span>ご予約について</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="flow03-tab" data-bs-toggle="tab" href="#flow03" role="tab" aria-controls="flow03" aria-selected="false"><i class="fa-solid fa-dumbbell"></i><span>トレーニングについて</span></a>
						</li>
					</ul>
				</div>
				<div class="col-md-9">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="flow01" role="tabpanel" aria-labelledby="flow01-tab">
							<h2 class="mb-2"><i class="fa-solid fa-id-card"></i><span>ご入会について</span></h2>
							<p>無料体験をご予約いただく際には、予約カレンダーから希望の日程をお選びください。体験後、ご入会をご検討いただける場合には、スムーズな手続きをご案内いたします。個々の目標に合わせてトレーニングプランを立て、最適なサポートを提供いたします。</p>
						</div>
						<div class="tab-pane fade" id="flow02" role="tabpanel" aria-labelledby="flow02-tab">
							<h2 class="mb-2"><i class="fa-solid fa-calendar-days"></i><span>ご予約について</span></h2>
							<p>トレーニングをご予約いただく際には、予約カレンダーをご利用ください。お好きな日程を選んでいただき、ご自身のスケジュールに合わせて柔軟にトレーニングの予定を立てることができます。我々はお客様のご希望に添った効果的なトレーニングセッションを提供し、健康やフィットネスの目標に向けて一緒に取り組んでまいります。</p>
						</div>
						<div class="tab-pane fade" id="flow03" role="tabpanel" aria-labelledby="flow03-tab">
							<h2 class="mb-2"><i class="fa-solid fa-dumbbell"></i><span>トレーニングについて</span></h2>
							<p>経験豊富なトレーナーがお客様に合ったトレーニングを丁寧に指導いたします。ご参加いただくコースに応じて、個々の体調や体力に最適なプランを提案し、無理なくトレーニングを進めていきます。お客様一人ひとりのニーズに合わせ、安心して効果的なトレーニングをお楽しみいただけるよう心掛けております。</p>

						</div>
					</div>
				</div>
			</div>

		</div>
	</section><!-- END FLOW AREA -->


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
						<img src="<?php bloginfo('template_url'); ?>/assets/images/images02.png" class="img-fluid"/> 
					</div>
				</div>

			</div>

		</div>
	</section><!-- END CONTACT AREA -->
		
<?php get_footer(); ?>