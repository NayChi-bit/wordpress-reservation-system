<?php
/******************************
 * Functionファイル
 ******************************/

   function add_css()

   {
      //Favicons


      // Vendor CSS ファイル
      wp_register_style('bootstrap_css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', false,'0.1','all');
      wp_enqueue_style( 'bootstrap_css');
      
      wp_register_style('bootstrapIcon', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', false,'0.1','all');
      wp_enqueue_style( 'bootstrapIcon');
      
      wp_register_style('swiper_css', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', false,'0.1','all');
      wp_enqueue_style( 'swiper_css');
      
      wp_register_style('aos_css', get_template_directory_uri() . '/assets/vendor/aos/aos.css', false,'0.1','all');
      wp_enqueue_style( 'aos_css');

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