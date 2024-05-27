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
					<?php
						showArchievePost(3);
					?>
				
					
				</div>

			</div>
		</div>
	</section><!-- END BLOG DETAILS AREA -->

	<?php 
		function showArchievePost($category_id, $limit = 12){

			global $wpdb;

			$query = $wpdb->prepare("
				SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month, COUNT(ID) as post_count
				FROM $wpdb->posts
				LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
				LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
				WHERE $wpdb->term_taxonomy.term_id = %d
				AND $wpdb->term_taxonomy.taxonomy = 'category'
				AND post_type = 'post'
				AND post_status = 'publish'
				GROUP BY YEAR(post_date), MONTH(post_date)
				ORDER BY post_date DESC
				LIMIT %d
			", $category_id, $limit);

			$yearly_archives = $wpdb->get_results($query);

			if (!empty($yearly_archives)) {
				$current_year = null;
		
				foreach ($yearly_archives as $archive) {
					$year = $archive->year;
					$month = $archive->month;
					$post_count = $archive->post_count;
		
					//　年チャック
					if ($current_year !== $year) {
						//　初期年チャック
						if ($current_year !== null) {
							echo '</ul>'; // 前の年リストをクローズ
						}
						$current_year = $year;
						echo '<h2>' . esc_html($year) . '年</h2>';
						echo '<ul>'; // 新しい年リストスタート
					}
		
					$formatted_date = sprintf('%d年%d月', $year, $month);
					$archive_link = get_month_link($year, $month);
					echo '<li><a href="' . esc_url($archive_link) . '">' . esc_html($formatted_date) . '<span>(' . esc_html($post_count) . ')</span></a> </li>';
				}
		
				echo '</ul>'; // 最後の年リストクローズ
			}
		}
		
	?>

	<?php get_footer(); ?>