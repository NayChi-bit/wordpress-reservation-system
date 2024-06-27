<?php
/****************************************
 * Loginテンプレートファイル
 * Template Name: Login Page Template
 ****************************************/
    get_header();
?>

<?php echo do_shortcode('[user_registration_login redirect_url="http://localhost/wordpress/calender/"]');?>
       
<div class="new-user-registration">
    <h3>はじめてご利用の方</h3>
    <a href="<?php echo site_url('/register'); ?>" class="registration-button">新規会員登録</a>
</div>


<?php get_footer(); ?>


