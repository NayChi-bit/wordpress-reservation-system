<?php
get_header();
?>

<body class="information-post" data-bs-spy="scroll" data-bs-target="#navmenu">
	<!-- PAN AREA -->
	<nav class="pan" data-aos="fade-up" data-aos-delay="100">
		<div class="container">
			<ol>
				<li><a href="<?php echo home_url(); ?>">Home</a></li>
				<li class="current"><a href="<?php echo get_permalink(get_page_by_path('information')->ID); ?>">Information</a></li>
				<li class="current"><?php the_title(); ?></li>
			</ol>
		</div>
	</nav><!-- END PAN AREA -->


	<!-- INFORMATION-POST AREA -->
	<section>

		<div class="container">
			<div class="row">
				<div class="col-lg-10 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                    ?>
					<h1><?php the_title(); ?></h1>
					<p class="mt-4"><?php the_content(); ?></p>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="text-center mt-4">
                            <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                        </div>
                    <?php endif; ?>
                    
					<h2 class="subheadline mt-4">●パーソナルジムのメリット</h2>

					<dl class="mt-3">
						<dt>目標達成に近づく</dt>
						<dd>レーナーが個々の目標や体力に合わせたトレーニングメニューを作成し、丁寧に指導してくれるので、効率的に目標に近づけることができます。</dd>
					</dl>

					<dl class="mt-3">
						<dt>モチベーションを維持できる</dt>
						<dd>一人だとサボりがちになってしまうトレーニングも、トレーナーがいることでモチベーションを維持しやすくなります。</dd>
					</dl>

					<dl class="mt-3">
						<dt>正しいフォームを身につける</dt>
						<dd>間違ったフォームでトレーニングを続けると、ケガに繋がる可能性があります。トレーナーが正しいフォームを指導してくれるので、安心です。</dd>
					</dl>

					<dl class="mt-3">
						<dt>食事指導を受けられる</dt>
						<dd>ダイエットやボディメイクには、トレーニングだけでなく食事も重要です。多くのパーソナルジムでは、食事指導も行っているので、トータルで体作りをサポートしてくれます</dd>
					</dl>

					<h2 class="subheadline mt-5">●自分に合ったジムの見つけ方</h2>

					<dl class="mt-3">
						<dt>目的を明確にする</dt>
						<dd>ダイエット、ボディメイク、運動不足解消など、パーソナルジムに通う目的を明確にしましょう。目的によって、自分に合ったジムが変わってきます。</dd>
					</dl>

					<dl class="mt-3">
						<dt>料金をチェック</dt>
						<dd>パーソナルジムの料金は、ジムによって大きく異なります。複数のジムを比較して、自分に合った料金プランを選びましょう</dd>
					</dl>

					<dl class="mt-3">
						<dt>体験レッスンを受けてみる</dt>
						<dd>多くのパーソナルジムでは、体験レッスンを実施しています。実際にトレーニングを体験してみて、ジムの雰囲気やトレーナーとの相性などを確認しましょう。</dd>
					</dl>

					<div class="d-flex text-small mt-5">
						<a href="#">Fitness</a>&nbsp;&nbsp;<span class="ml-1"><a href="#">11月</a></span>
					</div>
                    <?php
                            endwhile;
                        endif;
                    ?>
				</div>

                <div class="col-lg-2 side-area" data-aos="fade-up" data-aos-delay="300">
                    <h1>Archive</h1>
                    <?php showArchievePost(2); ?>
                </div>          
			</div>
		</div>

	</section><!-- END INFORMATION-POST AREA -->


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
