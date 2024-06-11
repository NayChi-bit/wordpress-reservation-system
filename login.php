<?php
/****************************************
 * Loginテンプレートファイル
 * Template Name: Login Page Template
 ****************************************/
    get_header();
?>

<body class="login" data-bs-spy="scroll" data-bs-target="#navmenu">

<div class="login-form-container">
    <h2>ログイン</h2>
    <form id="login-form" action="" method="post">
        <p>
            <input type="text" name="log" id="user_login" placeholder="メールアドレス">
        </p>
        <p>
            <input type="password" name="pwd" id="user_pass" placeholder="パスワード">
        </p>
        <p class="forgot-password">
            <a href="<?php echo site_url('/forget-password'); ?>">パスワードを忘れた方（再設定）</a>
        </p>
        <p>
            <input type="submit" value="ログイン" class="login-button">
        </p>
    </form>
</div>

<div class="new-user-registration">
    <h3>はじめてご利用の方</h3>
    <a href="<?php echo site_url('/register'); ?>" class="registration-button">新規会員登録</a>
</div>


<?php get_footer(); ?>
