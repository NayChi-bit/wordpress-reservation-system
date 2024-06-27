<?php
/****************************************
 * Registerテンプレートファイル
 * Template Name: Register Page Template
 ****************************************/
    get_header();
?>

<body class="register" data-bs-spy="scroll" data-bs-target="#navmenu">

<?php echo do_shortcode('[user_registration_form id="153"]');?>
<!-- <form action="" method="post" name="myForm">
	
    <div class="custom-form-container">
        <table>
            <tr>
                <h2>基本情報</h2>
            </tr>
            <tr>
                <td class="col"><label for="first-name">お名前 <span class="required">必須</span></label></td>
                <td>
                    <input type="text" class="custom-width" id="first-name" name="first-name" required>
                    <input type="text" class="custom-width" id="last-name" name="last-name" required>
                </td>
            </tr>

            <tr>
                <td class="col"><label for="kana">お名前（カナ） <span class="required">必須</span></label></td>
                <td>
                    <input type="text" class="custom-width" id="first-kana" name="first-kana" required>
                    <input type="text" class="custom-width" id="last-kana" name="last-kana" required>
                </td>
            </tr>
            <tr>
                <td class="col"><label for="gender">性別</label></td>
                <td>
                    <label><input type="radio" name="gender" value="男性"> 男性</label>
                    <label><input type="radio" name="gender" value="女性"> 女性</label>
                </td>
            </tr>
            <tr>
                <td class="col address pd-t"><label for="postal_code">郵便番号 <span class="required">必須</span></label></td>
                <td class="address pd-t">
                    <input type="text" class="custom-width" id="postal_code" name="postal_code" required>
                    <a href="http://www.post.japanpost.jp/zipcode/index.html" target="_blank">郵便番号を調べる<i class="fas fa-external-link-alt"></i></a>
                </td>
            </tr>
            <tr>
                <td class="col address"><label for="address1">都道府県 <span class="required">必須</span></label></td>
                <td class="address"><input type="text" class="custom-width" id="address1" name="address1" required></td>
            </tr>
            <tr>
                <td class="col address"><label for="address2">住所1 <span class="required">必須</span></label></td>
                <td class="address"><input type="text" id="address2" name="address2" required></td>
            </tr>
            <tr>
                <td class="col address"><label for="address3">住所2</label></td>
                <td class="address"><input type="text" id="address3" name="address3"></td>
            </tr>
            <tr>
                <td class="col pd-reset"><label for="phone">電話番号 <span class="required">必須</span></label></td>
                <td class="pd-reset"><input type="tel" class="custom-width" id="phone" name="phone" required></td>
            </tr>
            <tr>
                <td class="col"><label for="email">メールアドレス <span class="required">必須</span></label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td class="col"><label for="id">ID <span class="required">必須</span></label></td>
                <td><input type="text" class="custom-width" id="id" name="id" required></td>
            </tr>
            <tr>
                <td class="col"><label for="password">パスワード <span class="required">必須</span></label></td>
                <td><input type="password" class="custom-width" id="password" name="password" required></td>
            </tr>
        </table>
    </div>

    <div class="card-form-container">
        <table>
            <tr>
                <h2>クレジットカード情報</h2>
            </tr>
            <tr>
                <td class="col"><label for="card_number">カード番号</label></td>
                <td><input type="text" id="card_number" name="card_number"></td>
            </tr>
            <tr>
                <td class="col"><label for="security_code">セキュリティコード</label></td>
                <td><input type="text" id="security_code" name="security_code"></td>
            </tr>
            <tr>
                <td><label for="expiry_date">有効期限</label></td>
                <td>
                    <input type="text" id="expiry_month" name="expiry_month"><label>月</label>
                    <input type="text" id="expiry_year" name="expiry_year"><label>年</label>
                </td>
            </tr>
        </table>
    </div>
    <div class="btn-container">
        <button type="submit">登録する</button>
    </div>

</form> -->

</body>

<?php get_footer(); ?>
