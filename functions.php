<?php
/******************************
 * Functionファイル
 ******************************/
   // Favicons
   function add_custom_favicons() {
      echo '<!-- Favicons -->
      <link href="' . get_template_directory_uri() . '/assets/images/favicon.png" rel="icon">
      <link href="' . get_template_directory_uri() . '/assets/images/apple-touch-icon.png" rel="apple-touch-icon">';
   }
   add_action('wp_head', 'add_custom_favicons');

   // CSS 
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
      if (is_front_page()) { // Load on the homepage only
         wp_enqueue_style('index');
     }

      wp_register_style('services', get_template_directory_uri() . '/css/services.css', false,'0.1','all');
      if (is_page('services')) {
         wp_enqueue_style( 'services');
      } 

      wp_register_style('price', get_template_directory_uri() . '/css/price.css', false,'0.1','all');
      if (is_page('price')) {
         wp_enqueue_style( 'price');
      } 
	  
	   wp_register_style('aboutus', get_template_directory_uri() . '/css/about.css', false,'0.1','all');
      if (is_page('about')) {
         wp_enqueue_style( 'aboutus');
      }

      wp_register_style('information', get_template_directory_uri() . '/css/information.css', false,'0.1','all');
      if (is_page('information')) {
         wp_enqueue_style( 'information');
      } 
	  
	   wp_register_style('privacy', get_template_directory_uri() . 'css/privacy.css', false,'0.1','all');
      if (is_page('privacy')) {
         wp_enqueue_style( 'privacy');
      } 

      wp_register_style('faq', get_template_directory_uri() . '/css/faq.css', false,'0.1','all');
      if (is_page('faq')) {
         wp_enqueue_style( 'faq');
      } 

      wp_register_style('staff', get_template_directory_uri() . '/css/staff.css', false,'0.1','all');
      if (is_page('staff')) {
         wp_enqueue_style( 'staff');
      } 

      wp_register_style('blog', get_template_directory_uri() . '/css/blog.css', false,'0.1','all');
      if (is_page('blog')) {
         wp_enqueue_style( 'blog');
      } 

      wp_register_style('sitemap', get_template_directory_uri() . '/css/sitemap.css', false,'0.1','all');
      if (is_page('sitemap')) {
         wp_enqueue_style( 'sitemap');
      } 

      if (is_single()) {
         $post_categories = get_the_category();
         foreach ($post_categories as $category) {
            
             if ($category->slug === 'information') {
                 wp_enqueue_style('single-information', get_template_directory_uri() . '/css/information-post.css', array(), '0.1', 'all');
             } elseif ($category->slug === 'other-category') {
                
                 wp_enqueue_style('other-category', get_template_directory_uri() . '/css/other-category.css', array(), '1.0', 'all');
             }
             
         }
     }

   }

   add_action('wp_enqueue_scripts', 'add_css');

   // Javascript
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

   // Post Template
   function load_single_template($template) {
      global $post;
  
      if (in_category('information', $post)) {
          $new_template = locate_template(array('single-information.php'));
  
          if ('' != $new_template) {
              return $new_template;
          }
      }

      if (in_category('blog', $post)) {
         $new_template = locate_template(array('single-blog.php'));
 
         if ('' != $new_template) {
             return $new_template;
         }
     }
  
      return $template;
  }
  
  //各投稿ページ追加
  add_filter('single_template', 'load_single_template');
  
  // 投稿イメージ
  add_theme_support('post-thumbnails', array('post', 'page'));

  // ページネーショ
  function custom_pagination($args = array()) {
      $defaults = array(
         'prev_text' => '<i class="fa fa-angle-left"></i>',
         'next_text' => '<i class="fa fa-angle-right"></i>',
         'type' => 'array',
      );

      $args = wp_parse_args($args, $defaults);

      // Get the pagination links as an array
      $links = paginate_links($args);

      if ($links) {
         // Start the pagination HTML
         $pagination = '<ul class="pagination d-flex justify-content-center flex-wrap pagination-flat pagination-success">';

         foreach ($links as $link) {
            // Add custom classes
            if (strpos($link, 'current') !== false) {
                  $pagination .= '<li class="page-item active">' . str_replace('page-numbers', 'page-link', $link) . '</li>';
            } else {
                  $pagination .= '<li class="page-item">' . str_replace('page-numbers', 'page-link', $link) . '</li>';
            }
         }

         // Close the pagination HTML
         $pagination .= '</ul>';

         return $pagination;
      }

      return '';
   }

?>