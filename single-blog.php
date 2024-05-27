<?php

get_header();
?>

<body class="blog-details" data-bs-spy="scroll" data-bs-target="#navmenu">

	<!-- PAN AREA -->
	<nav class="pan" data-aos="fade-up" data-aos-delay="100">
		<div class="container">
			<ol>
				<li><a href="<?php echo home_url(); ?>">Home</a></li>
				<li class="current">Blog</li>
				<li class="current">運動嫌いでも楽しく続けられる！パーソナルジムで無理なくダイエット</li>
			</ol>
		</div>
	</nav><!-- END PAN AREA -->


	<!-- BLOG DETAILS AREA -->
	<section data-aos="fade-up" data-aos-delay="200">
		<div class="container">
			<div class="row">

				<div class="col-lg-8">
					<?php
					if (have_posts()) :
					while (have_posts()) : the_post();
					?>
					<h1><?php the_title(); ?></h1>

					<?php if (has_post_thumbnail()) : ?>
					<div class="text-center mt-4">
						<?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
					</div>
					<p class="mt-4"><?php the_content(); ?></p>
					<?php endif; ?>
					<h2 class="mt-3 mb-3">お客様に合わせたトレーニングメニュー</h2>
					<p class="mb-4">パーソナルトレーナーは、お客様の体力や目標に合わせて、最適なトレーニングメニューを作成します。運動が苦手な方でも、安心して取り組めるメニューなので、無理なく続けることができます。</p>

					<h2 class="mt-3 mb-3">モチベーション維持のサポート</h2>
					<p class="mb-4">一人でダイエットをすると、モチベーションが下がってきてしまうことがあります。しかし、パーソナルトレーナーは、お客様のモチベーションを維持するために、常に励ましやアドバイスを与えてくれます。</p>

					<h2 class="mt-3 mb-3">食事指導</h2>
					<p class="mb-4">ダイエットには、運動だけでなく食事も重要です。パーソナルトレーナーは、お客様の体質や生活習慣に合わせて、適切な食事指導を行います。運動が苦手でも、パーソナルジムなら楽しくダイエットを続けられます。 ぜひ、パーソナルトレーナーのサポートを受けながら、理想の体型を目指しましょう。</p>
				</div>

				<div class="col-lg-4 side-area">

					<h1>Recent Posts</h1>
                    <?php
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => 4, 
                            'post_status' => 'publish' 
                        ));
                    ?>

                    <?php foreach ($recent_posts as $post) : setup_postdata($post); ?>
                        <div class="post mb-4" style="display: flex;">
						<div class="img-holder" style="flex-shrink: 0;">
                            <?php 
                                $thumbnail_attributes = array(
                                    'class' => 'img-fluid custom-thumbnail-class',
                                    'style' => "width: 112px;flex-shrink: 0;"
                                );
                                echo get_the_post_thumbnail($post['ID'], 'thumbnail', $thumbnail_attributes); 
                            ?>
						</div>
						<div class="details" style="margin-left: 20px;">
							<h4 style="font-size: 16px;font-weight: 500;line-height: 1.3em;margin: 0 0 0.3em;"><a href="#"><?php echo esc_html($post['post_title']); ?></a></h4>
							<span class="date" style="font-size: 0.86667rem;color: #969AA6;"><?php echo get_the_date('j M Y', $post['ID']); ?></span>
						</div>
					</div>
                        <!-- <li>
                            <a href="<?php echo get_permalink($post['ID']); ?>">
                                <?php echo esc_html($post['post_title']); ?>
                            </a>
                        </li> -->
                    <?php endforeach; wp_reset_query(); ?>
					
					<?php
					    endwhile;
					    endif;
					?>

                    <h1>Post Categories</h1>
                    <ul class="mb-5">
                    <?php
						$categories = get_categories();
                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                                if ($category->category_parent != 0) {
                                    $query = new WP_Query(array(
                                        'category_name' => $category->name, 
                                        'posts_per_page' => -1, 
                                        'fields' => 'ids' 
                                    ));
                                    
                        ?>
                        
                            <li class="mb-2"><a href="#"><?php echo $category->name; ?><span>(<?php echo $query->found_posts ?>)</span></a></li>
                        <?php  
                                    }
                                }
                            }
                        ?>
					</ul>
                  
					<h1>Archive</h1>
					<h2><?php echo date('Y'); ?>年</h2>
					<ul>
						<!-- <?php wp_get_archives(array('type' => 'monthly', 'limit' => 12, 'show_post_count' => true)); ?> -->
						<?php
							$monthly_archives = wp_get_archives(array(
								'type'            => 'monthly',
								'limit'           => 12, // Number of months to display
								'format'          => 'custom',
								'echo'            => 0 // Return the output instead of echoing it
							));

							// Use a regular expression to match and reformat the date string
							$monthly_archives = preg_replace_callback(
								'/(\d{4})\/(\d{2})/', // Match the year and month
								function ($matches) {
									$year = $matches[1];
									$month = intval($matches[2]); // Convert month to integer to remove leading zero
									return sprintf('%s年%d月', $year, $month);
								},
								$monthly_archives
							);

							// Echo the formatted monthly archives
							echo $monthly_archives;
							?>

					</ul>
					<h2 class="mt-4"><?php echo date('Y', strtotime('-1 year')); ?>年</h2>
					<ul>
						<?php wp_get_archives(array('type' => 'monthly', 'limit' => 12, 'show_post_count' => true, 'year' => date('Y', strtotime('-1 year')))); ?>
					</ul>
				</div>

			</div>
		</div>
	</section><!-- END BLOG DETAILS AREA -->

	<?php get_footer(); ?>