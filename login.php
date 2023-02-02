<?php
    $title = "examplePage";
    $description = "(説明)外部ファイルの読み込みテスト";
    $is_home = true;  // ホームのページに行かないようにする
    $error_message = "";
    include 'inc/head.php'
?>
<!-- 特定のページで読み取るスタイルシート等あればここに追加 -->
<link rel="stylesheet" type="text/css" href="./css/login.css">

</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php'; ?>
    <!-- 特定ページのコンテンツをここに追加 -->

    <div class="contents flex">
        <div class="flex-container">
            <a href="top.php" class="prev_button">←</a>
            <h2 class="login">ログイン</h2>

            <!--エラーが出たらここに書く⇩-->
            <p class="notice"><?php echo $error_message ?></p>

            <form class="login_form flex" action="login.php">
                <div class="mail_box">
                    <input type="text" placeholder="E-mail" name="mail">
                </div>
                <div class="pw_box">
                    <input type="password" placeholder="Password" name="pw">
                </div>
               <input type="submit" value="ログイン">
        </form>
        <div class="transition_login">
            <p>アカウントをお持ちでない方は<a href="register.php">コチラ</a></p>
        </div>
    </div>

</div>
</body>
</html>
