<?php
/****************************************
 * Informationテンプレートファイル
 * Template Name: Information Page Template
 ****************************************/
    get_header();   
?>

<body class="information" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- PAN AREA -->
    <nav class="pan" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <ol>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="current">information</li>
            </ol>
        </div>
    </nav><!-- END PAN AREA -->


    <!-- INFORMATION AREA -->
    <section class="information">

        <!--  SECTION TITLE -->
        <div class="container section-title" data-aos="fade-up">
            <h2 class="mb-3">Information</h2>
            <h3 class="mb-4">インフォメーション</h3>
            <p>EASYWORKER FITの最新情報を発信しております。</p>
        </div><!-- END SECTION TITLE -->

        <div class="container">

            <div data-aos="fade-up" data-aos-delay="200">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $information_query = new WP_Query(array(
                    'post_type' => 'post',
                    'category_name' => 'Information',
                    'posts_per_page' => 5,
                    'paged' => $paged 
                ));

                if ($information_query->have_posts()) :
                    while ($information_query->have_posts()) : $information_query->the_post();
            ?>
                    <dl class="d-md-flex align-items-center">
                        <dt class="d-md-flex align-items-center">
                            <span class="date"><?php echo get_the_date('Y年m月d日'); ?></span>
                            <span class="category">INFORMATION</span>
                        </dt>
                        <dd class="mb-0 mt-3 mt-md-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                    </dl>
            <?php
                    endwhile;
            ?>
                   
            <div class="d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-delay="300">
                <nav>
                    <?php
                        echo custom_pagination(array(
                            'total' => $information_query->max_num_pages,
                            'prev_text' => '<i class="fa fa-angle-left"></i>',
                            'next_text' => '<i class="fa fa-angle-right"></i>',
                        ));
                    ?>
                </nav>
            </div>
            <?php
                    wp_reset_postdata();
                endif;
                // error_log('Pagination List : ' . $information_query->post_count)
            ?>

            </div>
        </div>
    </section><!-- END SITEMAP AREA -->


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