<?php
    $title = "examplePage";
    $description = "(説明)外部ファイルの読み込みテスト";
    $is_home = true;  // ホームのページに行かないようにする
    include 'inc/head.php'
?>
<!-- 特定のページで読み取るスタイルシート等あればここに追加 -->
<link rel="stylesheet" href="css/top.css">
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php'; ?>
    <!-- 特定ページのコンテンツをここに追加 -->
    <div class="contents flex">
        <div class="flex flex-item">
            <div>
                <h1 class="main-catchphrase">お菓子と幸せを届ける</h1>
                <p class="sub-catchphrase">毎日頑張ってるあなたやご友人、ご家族に素朴でありながら一息つけるものを...</p>
            </div>
            <div class="button-container">
                <button class="login-button" onclick="location.href='login.php'">
                    ログイン
                </button>
                <button class="guest-login-button">ログインせずに始める</button>
            </div>
        </div>
        <div class="flex flex-item img_container">
            <img src="img_show/Assorted.png" class="top_img" alt="おかしのソートボックスの画像">
        </div>
    </div>
</div>
</body>
</html>



