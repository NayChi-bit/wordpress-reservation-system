<?php
/****************************************
 * Informationテンプレートファイル
 * Template Name: Staff Page Template
 ****************************************/
get_header();   
?>

<body class="staff" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- PAN AREA -->
    <nav class="pan" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <ol>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="current">staff</li>
            </ol>
        </div>
    </nav><!-- END PAN AREA -->


    <!-- STAFF AREA -->
	<section class="staff">

		<!--  SECTION TITLE -->
		<div class="container section-title" data-aos="fade-up">
			<h2 class="mb-3">Staff</h2>
			<h3 class="mb-4">スタッフの紹介</h3>
			<p>EASYWORKER FITのパーソナルトレーナーは、あなたの目標達成に向けて専属でサポートいたします。</p>
		</div><!-- END SECTION TITLE -->

		<div class="staff-area">
			<div class="container">
				<div class="row">

					<div class="col-lg-4" data-aos="fade-right" data-aos-delay="200">
						<div class="staff-img">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/12.jpg" class="img-fluid"/> 
					    </div>
					<div class="social mt-3">
						<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
						<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
					</div>
				</div>

				<div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="200">
					<h1 class="mb-3">田中 太郎</h1>

					<div class="box">
						<dl class="mb-3">
							<dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>資&nbsp;格</span></dt>
							<dd>NSCA-CPT認定パーソナルトレーナー・NSCA-CPT認定パーソナルトレーナー</dd>
						</dl>

						<dl class="mb-3">
							<dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>経&nbsp;歴</span></dt>
							<dd>20XX年よりパーソナルトレーナーとして活動を開始。大手パーソナルトレーニングジムで5年間、1000人以上の指導経験を積み、幅広い年齢層のお客様の目標達成をサポートしてきました。</dd>
						</dl>

						<dl class="mb-3">
							<dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>トレーニング理念</span></dt>
							<dd>運動経験が少ない方や運動が苦手な方でも、楽しく続けられるトレーニングメニューを提供することで、お客様の目標達成をサポートします。</dd>
						</dl>

						<dl>
							<dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>得意分野</span></dt>
							<dd>運動経験のない方でも楽しく続けられるトレーニングメニューと食事指導で、3ヶ月で平均5kgの減量とリバウンドしにくい体づくりをサポートします！</dd>
						</dl>
					</div>
				</div>

			</div>

			<div data-aos="zoom-in" data-aos-delay="300">
				<h1 class="message" >パーソナルトレーナー田中太郎さんからのメッセージ</h1>
				<p class="mb-3">はじめまして！パーソナルトレーナーの田中太郎です。「運動が苦手」「続かない」「何をすればいいか分からない」 そんなお悩みをお持ちの方、ぜひ私にお任せください！運動経験がない方でも楽しく続けられるトレーニングメニューと丁寧な食事指導で、お客様の目標達成を全力でサポートします。</p>
				<p>3ヶ月で平均5kgの減量実績を持ち、リバウンドしにくい体づくりもサポートします。無料体験も実施していますので、お気軽にお問い合わせください。一緒に、理想の身体を目指しましょう！</p>
			</div>
		</div>
		</div>

        <div class="staff-area">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="400">
                        <div class="staff-img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/13.jpg" class="img-fluid"/> 
                    </div>
                    <div class="social mt-3">
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="500">
                    <h1 class="mb-3">佐藤 健太</h1>

                    <div class="box">
                        <dl class="mb-3">
                            <dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>資&nbsp;格</span></dt>
                            <dd>NSCA認定パーソナルトレーナー・柔道整復師国家資格</dd>
                        </dl>

                        <dl class="mb-3">
                            <dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>経&nbsp;歴</span></dt>
                            <dd>20XX年 柔道整復師国家資格取得し、20XX年 パーソナルトレーナーとして活動開始、これまでに1万人以上の指導経験してきました。
                            </dd>
                        </dl>

                        <dl class="mb-3">
                            <dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>トレーニング理念</span></dt>
                            <dd>お客様一人ひとりの個性や目標に合わせた、安全で効果的なトレーニングを提供すること</dd>
                        </dl>

                        <dl>
                            <dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>得意分野</span></dt>
                            <dd>柔道整復師国家資格を活かした、高齢者向けトレーニングが得意分野です。高齢者の体力や筋力維持、転倒予防などを目的としたトレーニング指導を行います。</dd>
                        </dl>
                    </div>
                </div>

            </div>

            <div data-aos="zoom-in" data-aos-delay="600">
                <h1 class="message" >パーソナルトレーナー佐藤健太さんからのメッセージ</h1>
                <p class="mb-3">はじめまして！パーソナルトレーナーの佐藤健太です。柔道整復師の国家資格を持つパーソナルトレーナーとして、お客様の健康と目標達成をサポートしています。怪我や痛みを抱える方でも安心してトレーニングできるよう、身体の状態に合わせたプログラムを提供いたします。</p>
                <p>お客様の健康状態や目標に合わせて、最適なトレーニングプログラムを提案します。怪我や痛みを抱える方でも、安心してトレーニングに取り組めるよう、身体の状態を丁寧に確認しながらサポートいたします。</p>
            </div>
        </div>
        </div>

        <div class="staff-area">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="700">
                        <div class="staff-img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/14.jpg" class="img-fluid"/> 
                    </div>
                    <div class="social mt-3">
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="800">
                    <h1 class="mb-3">高橋 美咲</h1>

                    <div class="box">
                        <dl class="mb-3">
                            <dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>資&nbsp;格</span></dt>
                            <dd>NSCA認定パーソナルトレーナー・栄養士資格</dd>
                        </dl>

                        <dl class="mb-3">
                            <dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>経&nbsp;歴</span></dt>
                            <dd>私は10年以上の経験を持つベテランパーソナルトレーナーです。トレーナーとしてのキャリアを築く前には、大手ジムでのフィットネスインストラクターとしての経験もあります。</dd>
                        </dl>

                        <dl class="mb-3">
                            <dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>トレーニング理念</span></dt>
                            <dd>バランスの取れたアプローチです。彼女は単に筋力を増やすだけでなく、姿勢の改善や柔軟性の向上、心身の調和を重視しています。トレーニングは単なる身体の変化だけでなく、生活全体の質を向上させる手段と捉えています。また、栄養士の資格を活かし、食事指導も含めたホリスティックなアプローチを大切にしています。</dd>
                        </dl>

                        <dl>
                            <dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>得意分野</span></dt>
                            <dd>栄養士の資格を活かした、食事管理や栄養指導にも精通しています。お客様の目標に合わせて適切な食事アドバイスを提供し、トレーニングとの組み合わせで効果的な結果をもたらします。</dd>
                        </dl>
                    </div>
                </div>

            </div>

            <div data-aos="zoom-in" data-aos-delay="900">
                <h1 class="message" >パーソナルトレーナー高橋美咲さんからのメッセージ</h1>
                <p class="mb-3">これまでの10年間、数多くの方々のパーソナルトレーナーとして、ダイエットから筋力アップ、姿勢改善まで、さまざまな目標を達成するお手伝いをさせていただきました。私のアプローチは、単に身体を鍛えるだけでなく、バランスの取れた食事とトレーニングの組み合わせにあります。</p>
                <p>私は栄養士の資格を持ち、食事面でもお客様に適切なアドバイスを提供することができます。お客様と共に目標を設定し、それを実現するための最適なプランを作成します。一緒に、健康で活力ある生活を手に入れましょう。</p>
            </div>
        </div>
        </div>

        <div class="staff-area">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="700">
                        <div class="staff-img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/15.jpg" class="img-fluid"/> 
                    </div>
                    <div class="social mt-3">
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="800">
                    <h1 class="mb-3">伊藤 真理</h1>

                    <div class="box">
                        <dl class="mb-3">
                            <dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>資&nbsp;格</span></dt>
                            <dd>パーソナルトレーナー資格・スポーツトレーニング指導員資格</dd>
                        </dl>

                        <dl class="mb-3">
                            <dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>経&nbsp;歴</span></dt>
                            <dd>私は運動が苦手だった経験を持っています。それが私がトレーナーとしての道を歩むきっかけでもあります。自分が同じような経験をしてきたからこそ、運動に苦手意識を持つ方々に寄り添い、サポートすることができると確信しています。ジムやトレーニングスタジオでの経験を積み、さまざまな方々と出会いながら、その方々のニーズに応えるためのアプローチを磨いてきました。</dd>
                        </dl>

                        <dl class="mb-3">
                            <dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>トレーニング理念</span></dt>
                            <dd>私のトレーニング理念は、"一歩ずつ、無理なく、確実に"です。私はお客様一人ひとりのペースや体力に合わせてトレーニングを進め、無理なく続けられるように心がけています。トレーニングはただ筋肉を鍛えるだけではなく、心身の健康を促進し、健やかな生活を支援する手段と捉えています。</dd>
                        </dl>

                        <dl>
                            <dt><i class="bi bi-check-square-fill"></i>&nbsp;<span>得意分野</span></dt>
                            <dd>私の得意分野は、運動が苦手な方や初心者の方へのトレーニングです。私自身が同じような経験をしてきたので、その方々の不安や疑問に共感し、丁寧な指導と温かいサポートで安心してトレーニングを始められるように尽力しています。また、段階的な負荷調整や柔軟なトレーニングプランの提供にも自信があります</dd>
                        </dl>
                    </div>
                </div>

            </div>

            <div data-aos="zoom-in" data-aos-delay="900">
                <h1 class="message" >パーソナルトレーナー伊藤真理さんからのメッセージ</h1>
                <p class="mb-3">運動が苦手な方でも安心してトレーニングを始められるよう丁寧に指導いたします。また、運動に慣れていない方でも無理なく続けられるよう、段階的に負荷を上げていくなど、お客様のペースに合わせてトレーニングを進めていきます。</p>
                <p>私のトレーニングは、単なる身体の変化だけでなく、心と体のバランスを整え、健康的な生活を送るための手助けとなるものです。ぜひ、一緒に健康で活力ある毎日を手に入れましょう。お会いできることを楽しみにしています。</p>
            </div>
        </div>
        </div>

    </section><!-- END STAFF AREA -->

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
						<img src="<?php bloginfo('template_url'); ?>/assets/images/images02.png" class="img-fluid"/> </div>
				</div>

			</div>

		</div>
	</section><!-- END CONTACT AREA -->

    <?php get_footer(); ?>




