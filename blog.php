<?php
/****************************************
 * Informationテンプレートファイル
 * Template Name: Blog Page Template
 ****************************************/
get_header();   
?>

<body class="blog" data-bs-spy="scroll" data-bs-target="#navmenu">

	<!-- PAN AREA -->
	<nav class="pan" data-aos="fade-up" data-aos-delay="100">
		<div class="container">
			<ol>
				<li><a href="<?php echo home_url(); ?>">Home</a></li>
				<li class="current">Blog</li>
			</ol>
		</div>
	</nav><!-- END PAN AREA -->


	<!-- BLOG AREA -->
	<section>

		<!--  SECTION TITLE -->
		<div class="container section-title" data-aos="fade-up" data-aos-delay="200">
			<h2 class="mb-3">Blog</h2>
			<h3 class="mb-4">ブログ</h3>
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
                                <?php the_post_thumbnail('full', ['class' => 'card-img-top']); ?>
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
                                    
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text mb-4"><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="mt-auto align-self-start"><i class="bi bi-arrow-right me-1"></i>Read More</a>
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

			<!-- <div class="page-content page-container" id="page-content">
				<div class="padding">
					<div class="row container d-flex justify-content-center">
						<div class="col-md-4 col-sm-6 grid-margin stretch-card">

							<nav>
								<ul class="pagination d-flex justify-content-center flex-wrap pagination-flat pagination-success">
									<li class="page-item"><a class="page-link" href="#" data-abc="true"><i class="fa fa-angle-left"></i></a></li>
									<li class="page-item active"><a class="page-link" href="#" data-abc="true">1</a></li>
									<li class="page-item"><a class="page-link" href="#" data-abc="true">2</a></li>
									<li class="page-item"><a class="page-link" href="#" data-abc="true">3</a></li>
									<li class="page-item"><a class="page-link" href="#" data-abc="true">4</a></li>
									<li class="page-item"><a class="page-link" href="#" data-abc="true"><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div> -->

		</div>
	</section><!-- END BLOG AREA -->


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
