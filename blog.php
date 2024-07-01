<!doctype html>
<html lang="ja">

<head>
    <?php get_header(); ?>
    <!-- blog CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/css/blog.css" rel="stylesheet" type="text/css">
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
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $blog_query = new WP_Query(array(
                        'post_type' => 'post',
                        'category_name' => 'Blog',
                        'posts_per_page' => 4,
                        'paged' => $paged 
                    ));

                    if ($blog_query->have_posts()) :
                        while ($blog_query->have_posts()) : $blog_query->the_post();
                    ?>

                        <div class="col-12 col-lg-3 mb-5 d-flex align-items-stretch">
                            <div class="card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="animation-img">
                                        <?php the_post_thumbnail('full', ['class' => 'card-img-top']); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="card-body d-flex flex-column">
                                    
                                    <?php
                                        $categories = get_the_category(get_the_ID());
                                        if (!empty($categories)) {
                                            foreach ($categories as $category) {
                                                if ($category->category_parent != 0) {
                                                    if($category->name === 'Diet Blog'){
                                    ?>
                                                        <p class="calegory01 mb-2">
                                    <?php
                                                        echo $category->name;
                                    ?>
                                                        </p>
                                    <?php
                                                    }
                                                    if($category->name === 'Training Blog'){
                                    ?>
                                                        <p class="calegory02 mb-2">
                                    <?php
                                                            echo $category->name;
                                    ?>
                                                        </p>
                                    <?php             
                                                    }
                                                }
                                            }
                                        }
                                    ?>
                                    
                                    <!-- <h3 class="card-title"><?php the_title(); ?></h3> -->
                                    <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></h3>
                                    <!-- <a href="<?php the_permalink(); ?>" class="mt-auto align-self-start"><i class="bi bi-arrow-right me-1"></i>Read More</a> -->
                                    <div class="day">
                                        <ion-icon name="calendar-clear"></ion-icon>
                                        <p><?php echo get_the_date('Y.m.d'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                        endwhile;
                ?>
                <div class="d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-delay="300">
                    <nav>
                        <?php
                            echo custom_pagination(array(
                                'total' => $blog_query->max_num_pages,
                                'prev_text' => '<i class="fa fa-angle-left"></i>',
                                'next_text' => '<i class="fa fa-angle-right"></i>',
                            ));
                        ?>
                    </nav>
                </div>
                <?php
                        wp_reset_postdata();
                    endif;
                    // error_log('Pagination List : ' . $blog_query->post_count)
                ?>
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