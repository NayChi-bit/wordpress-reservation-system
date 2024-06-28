<!doctype html>
<html lang="ja">

<head>
    <?php get_header(); ?>
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
                <li class="current">Blog</li>
            </ol>
        </div>
    </nav><!-- PAN END -->


    <!-- BLOG AREA -->
    <section>

        <!--  SECTION TITLE -->
        <div class="container section-title" data-aos="fade-up" data-aos-delay="200">
            <h1 class="mb-3">Blog</h1>
            <h2 class="mb-4">ブログ</h2>
            <p>トレーニングやダイエット、健康に関する情報を発信しています。</p>
        </div><!-- END SECTION TITLE -->

        <div class="container" data-aos="fade-up" data-aos-delay="300">
            <div class="row">

                <div class="col-12 col-lg-3 mb-3 mb-lg-5 d-flex align-items-stretch">
                    <div class="card">
                        <div class="animation-img">
                            <img src="<?php bloginfo('template_url'); ?>/images/21.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="card-body d-flex flex-column">
                            <p class="calegory01 mb-2">Diet</p>
                            <h3 class="card-title"><a href="#">運動嫌いでも楽しく続けられる！パーソナルジムで無理なくダイエット</a></h3>
                            <div class="day">
                                <ion-icon name="calendar-clear"></ion-icon>
                                <p>2024.04.01</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 mb-3 mb-lg-5 d-flex align-items-stretch">
                    <div class="card">
                        <div class="animation-img">
                            <img src="<?php bloginfo('template_url'); ?>/images/22.jpg" class="card-img-top" alt="Card Image">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <p class="calegory02 mb-2">Training</p>
                            <h3 class="card-title">デスクワーク中心の方必見！姿勢改善・腰痛解消のためのパーソナルトレーニング</h3>
                            <div class="day">
                                <ion-icon name="calendar-clear"></ion-icon>
                                <p>2024.04.01</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 mb-3 mb-lg-5 d-flex align-items-stretch">
                    <div class="card">
                        <div class="animation-img">
                            <img src="<?php bloginfo('template_url'); ?>/images/23.jpg" class="card-img-top" alt="Card Image">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <p class="calegory01 mb-2">Diet</p>
                            <h3 class="card-title">産後太り解消・体型維持のためのパーソナルトレーニング</h3>
                            <div class="day">
                                <ion-icon name="calendar-clear"></ion-icon>
                                <p>2024.04.01</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 mb-3 mb-lg-5 d-flex align-items-stretch">
                    <div class="card">
                        <div class="animation-img">
                            <img src="<?php bloginfo('template_url'); ?>/images/24.jpg" class="card-img-top" alt="Card Image">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <p class="calegory02 mb-2">Training</p>
                            <h3 class="card-title">運動初心者でも安心！パーソナルトレーニングで始める健康的な生活</h3>
                            <div class="day">
                                <ion-icon name="calendar-clear"></ion-icon>
                                <p>2024.04.01</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 mb-3 mb-lg-5 d-flex align-items-stretch">
                    <div class="card">
                        <div class="animation-img">
                            <img src="<?php bloginfo('template_url'); ?>/images/21.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="card-body d-flex flex-column">
                            <p class="calegory01 mb-2">Diet</p>
                            <h3 class="card-title"><a href="#">運動嫌いでも楽しく続けられる！パーソナルジムで無理なくダイエット</a></h3>
                            <div class="day">
                                <ion-icon name="calendar-clear"></ion-icon>
                                <p>2024.04.01</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 mb-3 mb-lg-5 d-flex align-items-stretch">
                    <div class="card">
                        <div class="animation-img">
                            <img src="<?php bloginfo('template_url'); ?>/images/22.jpg" class="card-img-top" alt="Card Image">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <p class="calegory02 mb-2">Training</p>
                            <h3 class="card-title">デスクワーク中心の方必見！姿勢改善・腰痛解消のためのパーソナルトレーニング</h3>
                            <div class="day">
                                <ion-icon name="calendar-clear"></ion-icon>
                                <p>2024.04.01</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 mb-3 mb-lg-5 d-flex align-items-stretch">
                    <div class="card">
                        <div class="animation-img">
                            <img src="<?php bloginfo('template_url'); ?>/images/23.jpg" class="card-img-top" alt="Card Image">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <p class="calegory01 mb-2">Diet</p>
                            <h3 class="card-title">産後太り解消・体型維持のためのパーソナルトレーニング</h3>
                            <div class="day">
                                <ion-icon name="calendar-clear"></ion-icon>
                                <p>2024.04.01</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 mb-3 mb-lg-5 d-flex align-items-stretch">
                    <div class="card">
                        <div class="animation-img">
                            <img src="<?php bloginfo('template_url'); ?>/images/24.jpg" class="card-img-top" alt="Card Image">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <p class="calegory02 mb-2">Training</p>
                            <h3 class="card-title">運動初心者でも安心！パーソナルトレーニングで始める健康的な生活</h3>
                            <div class="day">
                                <ion-icon name="calendar-clear"></ion-icon>
                                <p>2024.04.01</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
                        <div class="col-md-4 col-sm-6 grid-margin stretch-card">

                            <nav>
                                <ul
                                    class="pagination d-flex justify-content-center flex-wrap pagination-flat pagination-success">
                                    <li class="page-item"><a class="page-link" href="#" data-abc="true"><i
                                                class="fa fa-angle-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#" data-abc="true">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#" data-abc="true">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#" data-abc="true">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#" data-abc="true">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#" data-abc="true"><i
                                                class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- END BLOG AREA -->


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

    <!-- page-top START -->
    <p id="page-top"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></p>


    <?php get_footer(); ?>>

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