<?php

get_header();
?>

<body class="blog-details" data-bs-spy="scroll" data-bs-target="#navmenu">

	<!-- PAN AREA -->
	<nav class="pan" data-aos="fade-up" data-aos-delay="100">
		<div class="container">
			<ol>
				<li><a href="<?php echo home_url(); ?>">Home</a></li>
				<li class="current"><a href="<?php echo get_permalink(get_page_by_path('blog')->ID); ?>">Blog</a></li>
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
					<?php
						// Get the monthly archives
						$monthly_archives = wp_get_archives(array(
							'type'            => 'monthly',
							'limit'           => 12, // Number of months to display
							'show_post_count' => true,
							'format'          => 'custom', // Use custom format
							'echo'            => 0 // Return the output instead of echoing it
						));
						print_r($monthly_archives);
						echo '</pre>';
						
						$archives_array = explode('<br />', $monthly_archives);

						// Iterate through each month-year-postcount string and format it
						foreach ($archives_array as $archive) {
							// Trim whitespace and check if the archive string is not empty
							$archive = trim($archive);
							if (empty($archive)) {
								printf("xxxxxx");
								continue;
							}

							// Extract the month, year, and post count
							preg_match('/(\w+) (\d{4}) \((\d+)\)/', $archive, $matches);

							if (count($matches) === 4) {
								$month = $matches[1];
								$year = $matches[2];
								$count = $matches[3];

								// Convert month name to number
								$month_number = date('n', strtotime($month));

								// Reformat to desired format: 2024年5月
								$formatted_date = sprintf('%s年%d月', $year, $month_number);

								// Output the formatted date with post count as a link
								printf('<ul><li><a href="%s">%s</a> <span>(%d)</span></li></ul>', get_month_link($year, $month_number), $formatted_date, $count);
							}
						}
					?>

					<h2 class="mt-4"><?php echo date('Y', strtotime('-1 year')); ?>年</h2>
					<!-- <ul>
						<?php wp_get_archives(array('type' => 'monthly', 'limit' => 12, 'show_post_count' => true, 'year' => date('Y', strtotime('-1 year')))); ?>
					</ul> -->
				</div>

			</div>
		</div>
	</section><!-- END BLOG DETAILS AREA -->

	<?php get_footer(); ?>