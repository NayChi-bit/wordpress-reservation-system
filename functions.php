<?php
/******************************
 * Functionファイル
 ******************************/
   function add_custom_favicons() {
      echo '<!-- Favicons -->
      <link href="' . get_template_directory_uri() . '/assets/images/favicon.png" rel="icon">
      <link href="' . get_template_directory_uri() . '/assets/images/apple-touch-icon.png" rel="apple-touch-icon">';
   }
   add_action('wp_head', 'add_custom_favicons');

   function add_css()
   {
      // Vendor CSS ファイル
      wp_register_style('bootstrap_css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', false,'0.1','all');
      wp_enqueue_style( 'bootstrap_css');
      
      wp_register_style('bootstrapIcon', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', false,'0.1','all');
      wp_enqueue_style( 'bootstrapIcon');
      
      wp_register_style('swiper_css', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', false,'0.1','all');
      wp_enqueue_style( 'swiper_css');
      
      wp_register_style('aos_css', get_template_directory_uri() . '/assets/vendor/aos/aos.css', false,'0.1','all');
      wp_enqueue_style( 'aos_css');

      wp_register_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(),'6.5.1','all');
      wp_enqueue_style( 'font_awesome');

      // CSS ファイル
      wp_register_style('style', get_template_directory_uri() . '/style.css', false,'0.1','all');
      wp_enqueue_style( 'style');
      
      wp_register_style('index', get_template_directory_uri() . '/css/index.css', false,'0.1','all');
      if (!is_page()) {
         wp_enqueue_style( 'index');
      }

      wp_register_style('services', get_template_directory_uri() . '/css/services.css', false,'0.1','all');
      if (is_page('services')) {
         wp_enqueue_style( 'services');
      } 

      wp_register_style('price', get_template_directory_uri() . '/css/price.css', false,'0.1','all');
      if (is_page('price')) {
         wp_enqueue_style( 'price');
      } 
	  
	   wp_register_style('about', get_template_directory_uri() . '/css/about.css', false,'0.1','all');
      if (is_page('about')) {
         wp_enqueue_style( 'about');
      }

      wp_register_style('information', get_template_directory_uri() . 'css/information.css', false,'0.1','all');
      if (is_page('information')) {
         wp_enqueue_style( 'information');
      } 
	  
	  wp_register_style('privacy', get_template_directory_uri() . 'css/privacy.css', false,'0.1','all');
      if (is_page('privacy')) {
         wp_enqueue_style( 'privacy');
      } 

   }

   add_action('wp_enqueue_scripts', 'add_css');

   function add_script()
   {
      // Vendor JS ファイル
      wp_register_script('bootstrap_js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array ( 'jquery' ), 0.1, true);
      wp_enqueue_script( 'bootstrap_js');
      
      wp_register_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array ( 'jquery' ), 0.1, true);
      wp_enqueue_script( 'glightbox');
      
      wp_register_script('purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array ( 'jquery' ), 0.1, true);
      wp_enqueue_script( 'purecounter');
      
      wp_register_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array ( 'jquery' ), 0.1, true);
      wp_enqueue_script( 'isotope');
      
      wp_register_script('swiper_js', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array ( 'jquery' ), 0.1, true);
      wp_enqueue_script( 'swiper_js');

      wp_register_script('aos_js', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array ( 'jquery' ), 0.1, true);
      wp_enqueue_script( 'aos_js');

      // Main JS ファイル
      wp_register_script('js-script', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 0.1, true);
      wp_enqueue_script( 'js-script');
      
      // Swiper
      wp_register_script('swiper8', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array ( 'jquery' ), 0.1, true);
      wp_enqueue_script( 'swiper8');
      
   }

   add_action('wp_enqueue_scripts', 'add_script');
?>