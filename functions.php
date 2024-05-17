<?php

   function add_css()

   {

      wp_register_style('style', get_template_directory_uri() . '/style.css', false,'0.1','all');
      wp_enqueue_style( 'style');
      
      wp_register_style('index', get_template_directory_uri() . '/assets/css/index.css', false,'0.1','all');
      wp_enqueue_style('index');
      
      
      wp_register_style('bootstrap_css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', false,'0.1','all');
      wp_enqueue_style( 'bootstrap_css');
      
      wp_register_style('bootstrapIcon', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', false,'0.1','all');
      wp_enqueue_style( 'bootstrapIcon');
      
      wp_register_style('swiper_css', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', false,'0.1','all');
      wp_enqueue_style( 'swiper_css');
      
      wp_register_style('services', get_template_directory_uri() . '/assets/css/services.css', false,'0.1','all');
      if (is_page('services')) {
         wp_enqueue_style( 'services');
      } 
      

      wp_register_style('aos_css', get_template_directory_uri() . '/assets/vendor/aos/aos.css', false,'0.1','all');
      wp_enqueue_style( 'aos_css');
   }

   add_action('wp_enqueue_scripts', 'add_css');

   function add_script()
   {
      wp_register_script('js-script', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 0.1, true);
      wp_enqueue_script( 'js-script');
      
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
      
      wp_register_script('swiper8', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array ( 'jquery' ), 0.1, true);
      wp_enqueue_script( 'swiper8');

      wp_register_script('aos_js', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array ( 'jquery' ), 0.1, true);
      wp_enqueue_script( 'aos_js');
   }
   add_action('wp_enqueue_scripts', 'add_script');
?>