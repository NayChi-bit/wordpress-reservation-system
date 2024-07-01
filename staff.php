<?php
/****************************************
 * Informationテンプレートファイル
 * Template Name: Staff Page Template
 ****************************************/
?>
<!doctype html>
<html lang="ja">

<head>
    <title>Staff｜EASTWORDKER FIT</title>
    <?php get_header(); ?>
    <!-- staff CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/css/staff.css" rel="stylesheet" type="text/css">

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
                <li class="current">Staff</li>
            </ol>
        </div>
    </nav><!-- PAN END -->


    <!-- staff START -->
    <section class="staff">

        <!--  SECTION TITLE -->
        <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
            <h1 class="mb-3">Staff</h1>
            <h2 class="mb-4">スタッフの紹介</h2>
            <p>EASYWORKER FITのパーソナルトレーナーは、あなたの目標達成に向けて専属でサポートいたします。</p>
        </div><!-- END SECTION TITLE -->

        <div class="container">

            <div class="row gy-0 gx-0 align-items-center mb-5 mb-xl-0" data-aos="fade-up" data-aos-delay="200">

                <div class="col-xl-6 text-center mb-4 mb-xl-0">
                    <img src="<?php bloginfo('template_url'); ?>/images/25.jpg" class="img-fluid" />
                </div>

                <div class="col-xl-6">
                    <div class="staff-inner01">
                        <h2 class="text-with-line">田中&nbsp;由美
                            <span class="social-icon">
                                <a href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                            </span>
                        </h2>
                        <div class="text-area">
                            <p class="mb-3">パーソナルトレーナー歴は10年以上の経験があります。健康的なライフスタイルの推進と、個々の目標に合わせたトレーニングプランの提供に情熱を注いでいます。
                            </p>
                            <dl>
                                <dt>学&nbsp;歴</dt>
                                <dd>スポーツ科学学士（〇〇大学卒業</dd>
                            </dl>
                            <dl>
                                <dt>資&nbsp;格</dt>
                                <dd>日本フィットネス協会認定パーソナルトレーナー</dd>
                                <dd>ピラティスインストラクター認定</dd>
                                <dd>コンディショニング協会認定パーソナルトレーナー (NSCA-CPT)</dd>
                            </dl>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row gy-0 gx-0 align-items-center mb-5 mb-xl-0" data-aos="fade-up" data-aos-delay="300">

                <div class="col-xl-6 order-2 order-xl-1">
                    <div class="staff-inner02">
                        <h2 class="text-with-line">得意分野について</h2>
                        <div class="text-area">
                            <p class="mb-3">
                                私の得意分野は、個々の体力や目標に合わせたオーダーメイドのトレーニングプランの作成です。体重管理やスポーツパフォーマンスの向上、リハビリテーションと怪我予防、高齢者向けの運動プログラムなど、幅広いニーズに対応しています。
                            </p>
                            <p>特に、初心者から上級者まで誰でも楽しめる、効果的で持続可能なトレーニングを提供することに情熱を持っています。皆様が健康で活力に満ちた生活を送れるよう、全力でサポートいたします。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 text-center mb-4 mb-xl-0 order-1 order-xl-2">
                    <img src="<?php bloginfo('template_url'); ?>/images/26.jpg" class="img-fluid" />
                </div>

            </div>

            <div class="row gy-0 gx-0 align-items-center mb-5 mb-xl-0" data-aos="fade-up" data-aos-delay="400">

                <div class="col-xl-6 text-center mb-4 mb-xl-0">
                    <img src="<?php bloginfo('template_url'); ?>/images/27.jpg" class="img-fluid" />
                </div>

                <div class="col-xl-6">
                    <div class="staff-inner01">
                        <h2 class="text-with-line">トレーニング理念について</h2>
                        <div class="text-area">
                            <p class="mb-3">
                                私のトレーニング理念は、一人ひとりの目標やライフスタイルに寄り添ったサポートを行うことです。トレーニングは単なる運動ではなく、心身の健康と幸せを追求するための手段だと考えています。
                            </p>
                            <p>科学的根拠に基づいた効果的なプログラムを提供し、楽しみながら続けられるトレーニングを大切にしています。目標達成の喜びを共有し、皆様が自分自身に自信を持てるよう、全力でサポートいたします。一緒に健康で充実した生活を実現しましょう！
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row gy-0 gx-0 align-items-center mb-5 mb-xl-0" data-aos="fade-up" data-aos-delay="500">

                <div class="col-xl-6 order-2 order-xl-1">
                    <div class="staff-inner02">
                        <h2 class="text-with-line">田中由美からのメッセージ</h2>
                        <div class="text-area">
                            <p class="mb-3">はじめまして！パーソナルトレーナーの田中由美です。「運動が苦手」「続かない」「何をすればいいか分からない」
                                そんなお悩みをお持ちの方、ぜひ私にお任せください！運動経験がない方でも楽しく続けられるトレーニングメニューと丁寧な食事指導で、お客様の目標達成を全力でサポートします。3ヶ月で平均5kgの減量実績を持ち、リバウンドしにくい体づくりもサポートします。
                            </p>
                            <p>無料体験も実施していますので、お気軽にお問い合わせください。一緒に、理想の身体を目指しましょう！</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 text-center mb-4 mb-xl-0 order-1 order-xl-2">
                    <img src="<?php bloginfo('template_url'); ?>/images/28.jpg" class="img-fluid" />
                </div>

            </div>
        </div>
    </section><!-- staff END -->


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