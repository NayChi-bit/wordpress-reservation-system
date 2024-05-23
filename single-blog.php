<?php

get_header();
?>

<body class="blog-details" data-bs-spy="scroll" data-bs-target="#navmenu">

<!-- PAN AREA -->
<nav class="pan" data-aos="fade-up" data-aos-delay="100">
<div class="container">
<ol>
<li><a href="index.html">Home</a></li>
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
<div class="post mb-4" style="display: flex;">
<div class="img-holder" style="flex-shrink: 0;">
<img src="images/1.jpg" class="img-fluid" style="width: 112px;flex-shrink: 0;">
</div>
<div class="details" style="margin-left: 20px;">
<h4 style="font-size: 16px;font-weight: 500;line-height: 1.3em;margin: 0 0 0.3em;"><a href="#">ダイエット、筋トレ、ボディメイク…パーソナルトレーニングで叶える理想の身体</a></h4>
<span class="date" style="font-size: 0.86667rem;color: #969AA6;">19 Jun 2024 </span>
</div>
</div>

<div class="post mb-4" style="display: flex;">
<div class="img-holder" style="flex-shrink: 0;">
<img src="images/4.jpg" class="img-fluid" style="width: 112px;flex-shrink: 0;">
</div>
<div class="details" style="margin-left: 20px;">
<h4 style="font-size: 16px;font-weight: 500;line-height: 1.3em;margin: 0 0 0.3em;"><a href="#">パーソナルジムに通ってみた！料金や効果、メリット・デメリットを徹底解説</a></h4>
<span class="date" style="font-size: 0.86667rem;color: #969AA6;">19 Jun 2024 </span>
</div>
</div>

<div class="post mb-4" style="display: flex;">
<div class="img-holder" style="flex-shrink: 0;">
<img src="images/9.jpg" class="img-fluid" style="width: 112px;flex-shrink: 0;">
</div>
<div class="details" style="margin-left: 20px;">
<h4 style="font-size: 16px;font-weight: 500;line-height: 1.3em;margin: 0 0 0.3em;"><a href="#">パーソナルジム選びのポイント10選</a></h4>
<span class="date" style="font-size: 0.86667rem;color: #969AA6;">19 Jun 2024 </span>
</div>
</div>

<div class="post mb-5" style="display: flex;">
<div class="img-holder" style="flex-shrink: 0;">
<img src="images/8.jpg" class="img-fluid" style="width: 112px;flex-shrink: 0;">
</div>
<div class="details" style="margin-left: 20px;">
<h4 style="font-size: 16px;font-weight: 500;line-height: 1.3em;margin: 0 0 0.3em;"><a href="#">パーソナルジムに通う前に知っておきたい5つのこと</a></h4>
<span class="date" style="font-size: 0.86667rem;color: #969AA6;">19 Jun 2024</span>
</div>
</div>

<h1>Post Categories</h1>
<ul class="mb-5">
<li class="mb-2"><a href="#">ダイエット<span>(8)</span></a></li>
<li class="mb-2"><a href="#">ボディメイク<span>(5)</span></a></li>
<li class="mb-2"><a href="#">マタニティ<span>(7)</span></a></li>
<li class="mb-2"><a href="#">シニア <span>(7)</span></a></li>
</ul>

<h1>Archive</h1>
<h2><?php echo date('Y'); ?>年</h2>
                <ul>
                    <?php wp_get_archives(array('type' => 'monthly', 'limit' => 12, 'show_post_count' => true)); ?>
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