<?php
/*********************************
About ページ
Template Name: Sitemap Page Template
*********************************/
?>
<!doctype html>
<html lang="ja">

<head>
    <title>sitemap｜EASTWORDKER FIT</title>
    <?php get_header(); ?>
    <!-- sitemap CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/css/sitemap.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- header-under START -->
    <div id="header-under">

        <?php get_template_part('includes/nav'); ?>

    </div><!-- header-under END -->

    <!-- PAN START -->
    <nav class="pan" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <ol>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="current">sitemap</li>
            </ol>
        </div>
    </nav><!-- PAN END -->


    <!-- SITEMAP AREA -->
    <section class="sitemap">

        <!--  SECTION TITLE -->
        <div class="container section-title" data-aos="fade-up">
            <h1 class="mb-3">Sitemap</h1>
            <h2 class="mb-4">サイトマップ</h2>
            <p>EASYWORKER FITのサイトマップページになります。</p>
        </div><!-- END SECTION TITLE -->


        <div class="container">

            <dl class="border-bottom">
                <dt class="fs-4 mb-3">Home</dt>
                <dd class="mb-5"><a href="<?php echo home_url(); ?>">EASYWORKER FITのトップページになります。</a></dd>
            </dl>

            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-4">About Us</dt>
                <dd class="mb-5"><a href="<?php echo get_permalink(get_page_by_path('about')->ID); ?>">EASYWORKER
                        FITとはどのような会社なのか、理念や目指していることなどを記載しています。</a>
                </dd>
            </dl>

            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Services</dt>
                <dd class="mb-5"><a href="<?php echo get_permalink(get_page_by_path('services')->ID); ?>">EASYWORKER
                        FITが提供しているサービスの内容を説明しています。</a></dd>
            </dl>

            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Price List</dt>
                <dd class="mb-5"><a href="<?php echo get_permalink(get_page_by_path('price')->ID); ?>">EASYWORKER
                        FITのサービスごとの料金表を掲載しています。</a></dd>
            </dl>

            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Gim Staff</dt>
                <dd class="mb-5">
                    <div class="d-flex flex-wrap"><span class="me-5">田中&nbsp;太郎</span><span
                            class="me-5">佐藤&nbsp;健太</span><span class="me-5">高橋&nbsp;美咲</span><span
                            class="mt-3 mt-sm-0">伊藤&nbsp;真理</span></div>
                </dd>
            </dl>

            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Infomation</dt>
                <dd class="mb-5">EASYWORKER FITのお知らせやニュースなど、最新情報を掲載しています。</dd>
            </dl>

            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Blog</dt>
                <dd class="mb-5">EASYWORKER FITに関する情報やスタッフのコラムなどを掲載しています。</dd>
            </dl>

            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Contact</dt>
                <dd class="mb-5">お問い合わせフォームや連絡先情報を掲載しています。</dd>
            </dl>

            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">BOOKING CARENDAR</dt>
                <dd class="mb-5">予約カレンダーへのリンクを掲載しています。</dd>
            </dl>

            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Sitmap</dt>
                <dd class="mb-5"><a
                        href="<?php echo get_permalink(get_page_by_path('sitemap')->ID); ?>">サイトマップへのリンクを掲載しています。</a>
                </dd>
            </dl>

            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Privacy policy</dt>
                <dd class="mb-5">プライバシーポリシーについて説明しています。</dd>
            </dl>

        </div>
    </section><!-- END SITEMAP AREA -->


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