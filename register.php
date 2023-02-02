<?php
$title = "examplePage";
$description = "(説明)外部ファイルの読み込みテスト";
$is_home = true;  // ホームのページに行かないようにする
include 'inc/head.php'
?>
<link rel="stylesheet" href="css/register.css">
</head>
<body>
<div>
    <?php include 'inc/header.php'; ?>
    <!-- 特定ページのコンテンツをここに追加 -->
    <div id="register">
    <div class="contents flex-container">
        <a href="top.php" class="prev_button">←</a>
        <h2 class="register">新規登録</h2>
        <form action="#">
        <div class="register_form">
            <h3 class="mail_box">メールアドレス<span class="Required">必須</span></h3>
            <div class="mail_box">
                <input type="text" placeholder="E-mail" name="mail" class="form">
            </div>
            <h3 class="pw_box">パスワード<span class="Required">必須</span></h3>
            <div class="pw_box">
                <input type="password" placeholder="Password" name="pw" class="form">
            </div>
            <h3>パスワード(確認用)<span class="Required">必須</span></h3>
            <div class="pw2_box">
                <input type="password" placeholder="Password" name="pw2" class="form">
            </div>
            <h3>氏名<span class="optional">任意</span></h3>
            <div class="name_box">
                <input type="text" placeholder="例)お菓子　太郎" name="name" class="form">
            </div>
            
            
            <h3>郵便番号<span class="explanation">（ハイフンをつけて入力してください）</span><span class="optional">任意</span></h3>
            <div class="post_cord_box">
                <input type="text" placeholder="※※※-※※※※" name="name" class="form">
            </div>
        
            <h3>住所<span class="explanation">（市役所、番地マンション名等含む）</span><span class="optional">任意</span></h3>
            
            
            <div class="address_box">
                <input type="text" placeholder="○○県○○市○○" name="name" class="form">
            </div>
    <div class="side">
        <div>
            <h3>性別<span class="optional">任意</span></h3>
            
            <div class="gender_box">
                <select name="gender" class="pulldown">
                    <option value="male">男性</option>
                    <option value="female">女性</option>
                </select>
            </div>
        </div>          
    <div>
            <h3>年齢<span class="optional">任意</span></h3>
            
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

        <div class="high_and_low">
            <label><input type="checkbox" name="Terms" value="Terms"><a href="#">利用規約</a>に同意します。</label>
            <label><input type="checkbox" name="privacy" value="privacy"><a href="#">プライバシーポリシー</a>に同意します。</label>
        </div>
        
            <button class="register-button">登録</button>
        </div>
        <div class="transition_login">
            <label>アカウントをお持ちの方は<a href="login.php">コチラ</a></label>
        </div>
        </form>
    </div>
    </div>
</div>
</body>
</html>
