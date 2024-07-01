<?php
/*********************************
Voice ページ
Template Name: Voice Page Template
*********************************/
?>
<!doctype html>
<html lang="ja">

<head>
    <title>Voice｜EASTWORDKER FIT</title>
    <?php get_header(); ?>
    <!-- voice CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/css/voice.css" rel="stylesheet" type="text/css">
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
                <li class="current">Voice</li>
            </ol>
        </div>
    </nav><!-- PAN END -->


    <!-- voice START -->
    <section class="voice">

        <!--  SECTION TITLE -->
        <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
            <h1 class="mb-3">Voice</h1>
            <h2 class="mb-4">お客様の声</h2>
            <p>パーソナルトレーニングにおいて、数多くのクライアントから寄せられた声をご紹介します</p>
        </div><!-- END SECTION TITLE -->

        <div class="container">

            <div class="row gy-0 gx-0 align-items-center mb-5 mb-xl-0" data-aos="fade-up" data-aos-delay="200">

                <div class="col-xl-6 text-center mb-4 mb-xl-0">
                    <img src="<?php bloginfo('template_url'); ?>/images/31.jpg" class="img-fluid" />
                </div>

                <div class="col-xl-6">
                    <div class="voice-inner01">
                        <h2 class="text-with-line">健康なライフスタイルの発見</h2>
                        <div class="text-area">
                            <dl>
                                <dt>30歳&nbsp;女性&nbsp;</dt>
                                <dd>トレーニングを通じて、健康的な食習慣や効果的なエクササイズの重要性を学びました。今では自分の身体と心に対する新しい理解を持ち、健康的なライフスタイルを楽しんでいます。
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row gy-0 gx-0 align-items-center mb-5 mb-xl-0" data-aos="fade-up" data-aos-delay="300">

                <div class="col-xl-6 order-2 order-xl-1">
                    <div class="voice-inner02">
                        <h2 class="text-with-line">年齢を感じさせない体力向上</h2>
                        <div class="text-area">
                            <dl>
                                <dt>50歳&nbsp;女性&nbsp;</dt>
                                <dd>年齢を理由に諦めかけていましたが、トレーナーの助言とサポートで体力向上に成功。今、若い頃以上に元気でいられることに感謝しています.</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 text-center mb-4 mb-xl-0 order-1 order-xl-2">
                    <img src="<?php bloginfo('template_url'); ?>/images/32.jpg" class="img-fluid" />
                </div>

            </div>

            <div class="row gy-0 gx-0 align-items-center mb-5 mb-xl-0" data-aos="fade-up" data-aos-delay="400">

                <div class="col-xl-6 text-center mb-4 mb-xl-0">
                    <img src="<?php bloginfo('template_url'); ?>/images/33.jpg" class="img-fluid" />
                </div>

                <div class="col-xl-6">
                    <div class="voice-inner01">
                        <h2 class="text-with-line">ストレス解消と心の健康</h2>
                        <div class="text-area">
                            <dl>
                                <dt>30歳&nbsp;男性&nbsp;</dt>
                                <dd>ストレスフルな仕事に悩まされていたが、トレーニングを通じて心と体のバランスを取り戻しました。穏やかな日常に感謝しています。</dd>
                            </dl>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row gy-0 gx-0 align-items-center mb-5 mb-xl-0" data-aos="fade-up" data-aos-delay="500">

                <div class="col-xl-6 order-2 order-xl-1">
                    <div class="voice-inner02">
                        <h2 class="text-with-line">毎日のレーニングの大切さ</h2>
                        <div class="text-area">
                            <dl>
                                <dt>20歳&nbsp;男性&nbsp;</dt>
                                <dd>ストレスフルな仕事に悩まされていたが、トレーニングを通じて心と体のバランスを取り戻しました。穏やかな日常に感謝しています。</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 text-center mb-4 mb-xl-0 order-1 order-xl-2">
                    <img src="<?php bloginfo('template_url'); ?>/images/34.jpg" class="img-fluid" />
                </div>

            </div>
        </div>
    </section><!-- voice END -->


    <!-- voice-list START -->
    <section class="voice-list" data-aos="fade-up" data-aos-delay="600">

        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 mb-5 d-flex align-items-stretch">
                    <div class="d-flex flex-column">
                        <div class="text-start mb-2"><img src="<?php bloginfo('template_url'); ?>/images/30.jpg" /></div>
                        <div class="balloon-002 h-100">
                            <div class="text-container">
                                <p class="heading01 text-with-line mb-2">30歳&nbsp;女性&nbsp;「健康なライフスタイルの発見」</p>
                                <p>トレーニングを通じて、健康的な食習慣や効果的なエクササイズの重要性を学びました。今では自分の身体と心に対する新しい理解を持ち、健康的なライフスタイルを楽しんでいます。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-5 d-flex align-items-stretch">
                    <div class="d-flex flex-column">
                        <div class="text-start mb-2"><img src="<?php bloginfo('template_url'); ?>/images/30.jpg" /></div>
                        <div class="balloon-002 h-100">
                            <div class="text-container">
                                <p class="heading01 text-with-line mb-2">50歳&nbsp;女性&nbsp;「年齢を感じさせない体力向上」</p>
                                <p>年齢を理由に諦めかけていましたが、トレーナーの助言とサポートで体力向上に成功。今、若い頃以上に元気でいられることに感謝しています。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-5 d-flex align-items-stretch">
                    <div class="d-flex flex-column">
                        <div class="text-start mb-2"><img src="<?php bloginfo('template_url'); ?>/images/29.jpg" /></div>
                        <div class="balloon-002 h-100">
                            <div class="text-container">
                                <p class="heading01 text-with-line mb-2">30歳&nbsp;男性&nbsp;「ストレス解消と心の健康」</p>
                                <p>ストレスフルな仕事に悩まされていたが、トレーニングを通じて心と体のバランスを取り戻しました。穏やかな日常に感謝しています。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-5 d-flex align-items-stretch">
                    <div class="d-flex flex-column">
                        <div class="text-start mb-2"><img src="<?php bloginfo('template_url'); ?>/images/29.jpg" /></div>
                        <div class="balloon-002 h-100">
                            <div class="text-container">
                                <p class="heading01 text-with-line mb-2">20歳&nbsp;男性&nbsp;「リモートトレーニングの便利さ」</p>
                                <p>仕事の都合でジムに通うのが難しかった私にとって、リモートトレーニングは救世主でした。効果的なプログラムとフレキシブルなスケジュールで、理想的な結果を得られました。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-5 d-flex align-items-stretch">
                    <div class="d-flex flex-column">
                        <div class="text-start mb-2"><img src="<?php bloginfo('template_url'); ?>/images/30.jpg" /></div>
                        <div class="balloon-002 h-100">
                            <div class="text-container">
                                <p class="heading01 text-with-line mb-2">30歳&nbsp;女性&nbsp;「忙しいママのための自己ケア」</p>
                                <p>子育てに追われる毎日でしたが、パーソナルトレーニングで自分自身へのケアを再発見。エネルギッシュで健康なママに変身できました。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-5 d-flex align-items-stretch">
                    <div class="d-flex flex-column">
                        <div class="text-start mb-2"><img src="<?php bloginfo('template_url'); ?>/images/29.jpg" /></div>
                        <div class="balloon-002 h-100">
                            <div class="text-container">
                                <p class="heading01 text-with-line mb-2">40歳&nbsp;男性&nbsp;「エネルギッシュな自分」</p>
                                <p>私は40代の男性で、仕事の忙しさから健康を犠牲にしていました。しかし、このパーソナルトレーニングで生活が一変し、エネルギッシュな自分に出会えました。トレーナーの専念したサポートに感謝しています。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- voice-list END -->

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