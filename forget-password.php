<?php
/****************************************
 * Forget Passwordテンプレートファイル
 * Template Name: Forget Password Page Template
 ****************************************/
    get_header();
?>

<body class="forget-password" data-bs-spy="scroll" data-bs-target="#navmenu">

<div class="form-container">
    <form action="" method="post">
        <h2>登録しているメールアドレスを入力してください。</h2>
        <p>パスワード再設定のため認証メールを送信します。</p>
        <input type="email" id="email" name="email" placeholder="メールアドレス" required>
        <button type="submit">認証メールを送信する</button>
    </form>
</div>

<div class="note-container">
    <p class="note">※登録時のメールアドレスが利用できない場合、ご本人確認ができないためパスワード再発行できません。お手数ですが<a href="<?php echo site_url('/register'); ?>">新規会員登録</a>をお願いします。</p>
</div>

<?php get_footer(); ?>
