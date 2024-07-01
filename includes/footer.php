<?php
/**************************************
 * ヘーダファイル.
 **************************************/
?>
<!-- footer START -->
<footer id="footer" data-aos="fade-up">
    <div class="footer-newsletter">
        <div class="container">
            <h4>LINE公式アカウント</h4>
            <p>EASYWORKER FIT.のお得な情報をお届けしますので、QRコードから登録してください。</p>
            <div class="d-flex justify-content-center mt-3">
                <img src="<?php bloginfo('template_url'); ?>/images/LINE_Brand_icon.png" class="img-fluid me-3"><img
                    src="<?php bloginfo('template_url'); ?>/images/qr.png" class="img-fluid ms-3" />
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3><img src="<?php bloginfo('template_url'); ?>/images/logo-scrolled.png" class="img-fluid" /></h3>
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
                    <?php
                    if (has_nav_menu('footer1')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footer1',
                            'menu_class' => 'bx bx-chevron-right',
                        ));
                    }
                    ?>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <?php
                    if (has_nav_menu('footer2')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footer2',
                            'menu_class' => 'bx bx-chevron-right',
                        ));
                    }
                    ?>
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
            &copy; Copyright <strong><span>EASYWORKER FIT</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Produce by <a href="https://bootstrapmade.com/">DIGITAL WORKFORCE</a>
        </div>
    </div>
</footer><!-- footer END -->

<!-- page-top START -->
<p id="page-top"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></p>