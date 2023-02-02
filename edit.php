<?php
$title = "User informationPage";
$description = "(説明)ユーザー情報を更新・変更できるページ";
$is_home = false;  // ホームのページに行かないようにする
include 'inc/head.php'
?>
<link rel="stylesheet" href="css/edit.css">
<body>
<div>
    <?php include 'inc/header.php'; ?>
    <!-- 特定ページのコンテンツをここに追加 -->
    <div id="edit">
    <div class="contents flex-container">
        <a href="top.php" class="prev_button">←</a> <!--ここにショッピングのさいとにとばすURL-->
        <h2 class="edit">ユーザー情報</h2>
        <form action="#">
            <div class="edit_form">
            <h3>メールアドレス</h3>
            <div class="mail_box">
                <input type="email" placeholder="E-mail" name="mail" class="form">
            </div>
            <h3>パスワード</h3>
            <div class="pw_box">
                <input type="password" placeholder="Password" name="pw" class="form">
            </div>
            <h3>氏名</h3>
            <div class="name_box">
                <input type="text" placeholder="例)お菓子　太郎" name="name" class="form">
            </div>
            <h3>郵便番号<span class="explanation">（ハイフンをつけて入力してください）</span></h3>
            
            <div class="post2_cord_box">
                <input type="text" placeholder="※※※-※※※※" name="name" class="form">
            </div>
        
            <h3>住所<span class="explanation">（市役所、番地マンション名等含む）</span></h3>
            <div class="address_box">
                <input type="text" placeholder="○○県○○市○○" name="name" class="form">
            </div>
    <div class="side">
        <div>
            <h3>性別</h3>
            
            <div class="gender_box">
                <select name="gender" class="pulldown">
                    <option value="male">男性</option>
                    <option value="female">女性</option>
                </select>
            </div>
        </div>          
    <div>
            <h3>年齢</h3>
            
            <div class="age_box">
            <select name="age" >
                <option value="">選択してください</option>
                <option value="20歳未満">20歳未満</option>
                <option value="20-29歳">20-29歳</option>
                <option value="30-39歳">30-39歳</option>
                <option value="40-49歳">40-49歳</option>
                <option value="50-59歳">50-59歳</option>
                <option value="60-69歳">60-69歳</option>
                <option value="70-79歳">70-79歳</option>
                <option value="80歳以上">80歳以上</option>
            </select>
            </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</body>
</html>