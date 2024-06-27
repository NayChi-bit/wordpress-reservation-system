<?php
/******************************
 * Functionファイル
 ******************************/

   // Postテンプレート
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

   function mytheme_customize_register( $wp_customize ) {
      // セクションの追加
      $wp_customize->add_section( 'mytheme_hero_section', array(
          'title'    => __( 'Hero Section', 'mytheme' ),
          'priority' => 30,
      ) );
  
      // hero-ttl01 の設定の追加
      $wp_customize->add_setting( 'mytheme_hero_title', array(
          'default'   => __( 'Personal Trainer Website Templates', 'mytheme' ),
          'transport' => 'postMessage', // リアルタイムプレビューを有効にする
      ) );
  
      // コントロールの追加
      $wp_customize->add_control( 'mytheme_hero_title_control', array(
          'label'    => __( 'Hero Title', 'mytheme' ),
          'section'  => 'mytheme_hero_section',
          'settings' => 'mytheme_hero_title',
          'type'     => 'text',
      ) );
   }
   add_action( 'customize_register', 'mytheme_customize_register' );
  
   function mytheme_customizer_live_preview() {
      wp_enqueue_script(
          'mytheme-customizer',
          get_template_directory_uri() . '/assets/js/theme-customizer.js',
          array( 'jquery', 'customize-preview' ),
          null,
          true
      );
   }
   add_action( 'customize_preview_init', 'mytheme_customizer_live_preview' );
  
   function mytheme_customizer_preview_js() {
      wp_enqueue_script(
          'mytheme-customizer-preview',
          get_template_directory_uri() . '/assets/js/theme-customizer-preview.js',
          array( 'customize-preview' ),
          null,
          true
      );
   }
   add_action( 'customize_preview_init', 'mytheme_customizer_preview_js' );  

   function custom_theme_setup() {
      register_nav_menus( array(
              'primary' => esc_html__( 'Primary Menu', 'nepalbuzz' ),
              'footer1'  => esc_html__( 'Footer Menu1', 'nepalbuzz' ),
              'footer2'  => esc_html__( 'Footer Menu2', 'nepalbuzz' ),
      ) );
   }
   add_action( 'after_setup_theme', 'custom_theme_setup' );
?>