<?php
/****************************************
 * Loginテンプレートファイル
 * Template Name: Login Page Template
 ****************************************/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>> 

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>WEB01</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- CSS FILES -->
	<?php wp_head(); ?>
</head>

<body class="login" data-bs-spy="scroll" data-bs-target="#navmenu">

<div class="login-form-container">
    <h2>ログイン</h2>
    <form id="login-form" action="<?php echo wp_login_url(); ?>" method="post">
        <p>
            <input type="text" name="log" id="user_login" placeholder="メールアドレス">
        </p>
        <p>
            <input type="password" name="pwd" id="user_pass" placeholder="パスワード">
        </p>
        <p class="forgot-password">
            <a href="<?php echo wp_lostpassword_url(); ?>">パスワードを忘れた方（再設定）</a>
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


</body>
</html>
