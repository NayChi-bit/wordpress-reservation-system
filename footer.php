<?php
/******************************************
 * フッターファイル
 ******************************************/

?>
<!-- FOOTER AREA -->
<footer id="footer" data-aos="fade-up">

	<div class="footer-newsletter">

		<div class="container">
			<h4>LINE公式アカウント</h4>
			<p>EASYWORKER FIT.のお得な情報をお届けしますので、QRコードから登録してください。</p>
			<div class="d-flex justify-content-center mt-3">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/LINE_Brand_icon.png" class="img-fluid me-3"><img src="<?php bloginfo('template_url'); ?>/assets/images/qr.png" class="img-fluid ms-3" /> 
			</div>
		</div>
	</div>

	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-contact">
					<h3><img src="<?php bloginfo('template_url'); ?>/assets/images/alternate_logo.png" class="img-fluid"/></h3>
					<p>
						〒220‐0012<br>
						神奈川県横浜市西区みなとみらい4-4-2<br>
						横浜ブルーアベニュー5F
						<div class="mt-4">
							<strong>Phone:</strong>000-000-0000<br>
							<strong>From:</strong> info@example.com<br>
						</div>
					</p>
				</div>
				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Our Services</h4>
					<ul>
						<li><i class="bx bx-chevron-right"></i> <a href="<?php echo home_url(); ?>">Home</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="<?php echo get_permalink(get_page_by_path('about')->ID); ?>">About us</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="<?php echo get_permalink(get_page_by_path('services')->ID); ?>">Services</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="<?php echo get_permalink(get_page_by_path('price')->ID); ?>">Price List</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="<?php echo get_permalink(get_page_by_path('staff')->ID); ?>">Gim Staff</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Our Services</h4>
					<ul>
						<li><i class="bx bx-chevron-right"></i> <a href="<?php echo get_permalink(get_page_by_path('information')->ID); ?>">Infomation</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="<?php echo get_permalink(get_page_by_path('blog')->ID); ?>">Blog</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="<?php echo get_permalink(get_page_by_path('sitemap')->ID); ?>">sitemap</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="privacy.html">Privacy policy</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Our Social Networks</h4>
					<div class="social mt-2">
						<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
						<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container footer-bottom clearfix">
		<div class="copyright">
			&copy; Copyright <strong><span>EASYWORKER FIT.</span></strong>. All Rights Reserved
		</div>
		<div class="credits">
			<!-- All the links in the footer should remain intact. -->
			<!-- You can delete the links only if you purchased the pro version. -->
			<!-- Licensing information: https://bootstrapmade.com/license/ -->
			<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
			Produce by <a href="https://bootstrapmade.com/">DIGITAL WORKFORCE</a>
		</div>
	</div>
</footer><!-- END FOOTER AREA -->

<!-- Scroll Top Button -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php wp_footer(); ?>

</body>

</html>



