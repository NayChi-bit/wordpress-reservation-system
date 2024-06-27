<?php
/****************************************
 * Loginテンプレートファイル
 * Template Name: Calender Page Template
 ****************************************/
get_header();
?>
<body>

<?php echo do_shortcode('[bookly-form]'); ?>


<?php echo do_shortcode('[bookly-appointments-list columns="service,date,time,time_zone" show_column_titles="1"]'); ?>

<?php echo do_shortcode('[bookly-cancellation-confirmation]'); ?>
</body>

<?php get_footer(); ?>

