<?php
/*********************************
About ページ
Template Name: Sitemap Page Template
*********************************/
	get_header();
?>

<body class="sitemap" data-bs-spy="scroll" data-bs-target="#navmenu">
    <!-- PAN AREA -->
    <nav class="pan" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
    <ol>
    <li><a href="index.html">Home</a></li>
    <li class="current">sitemap</li>
    </ol>
    </div>
    </nav>
    <!-- END PAN AREA -->


    <!-- SITEMAP AREA -->
    <section class="sitemap">

        <!--  SECTION TITLE -->
        <div class="container section-title" data-aos="fade-up">
            <h2 class="mb-3">Sitemap</h2>
            <h3 class="mb-4">サイトマップ</h3>
            <p>EASYWORKER FITのサイトマップページになります。</p>
        </div>
        <!-- END SECTION TITLE -->

        <div class="container">
            <dl class="border-bottom">
                <dt class="fs-4 mb-3">Home</dt>
                <dd class="mb-5"><a href="<?php echo home_url(); ?>">EASYWORKER FITのトップページになります。</a></dd>
            </dl>
            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-4">About Us</dt>
                <dd class="mb-5"><a href="<?php echo get_permalink(get_page_by_path('about')->ID); ?>">EASYWORKER FITとはどのような会社なのか、理念や目指していることなどを記載しています。</a></dd>
            </dl>
            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Services</dt>
                <dd class="mb-5"><a href="<?php echo get_permalink(get_page_by_path('services')->ID); ?>">EASYWORKER FITが提供しているサービスの内容を説明しています。</a></dd>
            </dl>
            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Price List</dt>
                <dd class="mb-5"><a href="<?php echo get_permalink(get_page_by_path('price')->ID); ?>">EASYWORKER FITのサービスごとの料金表を掲載しています。</a></dd>
            </dl>
            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Gim Staff</dt>
                <dd class="mb-5"><div class="d-flex flex-wrap"><span class="me-5">田中&nbsp;太郎</span><span class="me-5">佐藤&nbsp;健太</span><span class="me-5">高橋&nbsp;美咲</span><span class="mt-3 mt-sm-0">伊藤&nbsp;真理</span></div></dd>
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
                <dt class="fs-4 mb-3">BOOKING CALENDAR</dt>
                <dd class="mb-5">予約カレンダーへのリンクを掲載しています。</dd>
            </dl>
            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Sitmap</dt>
                <dd class="mb-5"><a href="<?php echo get_permalink(get_page_by_path('sitemap')->ID); ?>">サイトマップへのリンクを掲載しています。</a></dd>
            </dl>
            <dl class="mt-5 border-bottom">
                <dt class="fs-4 mb-3">Privacy policy</dt>
                <dd class="mb-5">プライバシーポリシーについて説明しています。</dd>
            </dl>
        </div>
    </section>
    <!-- END SITEMAP AREA -->

    <!-- CONTACT AREA -->
    <section class="contact">
        <div class="container" data-aos="fade-up">

            <!--  SECTION TITLE -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="mb-3">CONTACT</h2>
                <h3 class="mb-4">お問い合わせ</h3>
                <p>各種お問い合わせ方法や予約カレンダーのご案内になります。</p>
            </div>
            <!-- END SECTION TITLE -->

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
                    <h4>Booking Calendar</h4>
                    <img  src="<?php bloginfo('template_url'); ?>/assets/images/images02.png" class="img-fluid"/> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT AREA -->


<?php get_footer(); ?>