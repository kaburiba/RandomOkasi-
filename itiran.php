<?php
    $title = "SnackTrigger | 一覧";
    $description = "お菓子の一覧ページ";
    $is_home = true;  // ホームのページに行かないようにする
    include 'inc/head.php'
?>
<!-- 特定のページで読み取るスタイルシート等あればここに追加 -->
<!--<script type="text/javascript" src="js/getAllSnack.js"></script>-->
<link rel="stylesheet" href="css/itiran.css">
</head>
<body>
    <?php include 'inc/header.php'; ?>
    <div class="container">
        <div class="text_style">
            <div>
                <h1 id="text">一覧</h1>
            </div>
            <div class="style">
                <div id="item-container" class="side"></div>
            </div>
        </div>

        <div class="search">
            <form action="#" class="search-form-011">
                <button type="submit" aria-label="検索"></button>
                <label>
                    <input type="text" id="keyword" placeholder="キーワードを入力">
                </label>
            </form>
            <h4>メーカー</h4>
            <select name="maker" class="maker_box">
                <option value=""></option>
                <option value="">ロッテ</option>
                <option value="">カルビー</option>
                <option value="">明治</option>
                <option value="">小池屋</option>
                <option value="">おやつカンパニー</option>
            </select>
            <h4>ジャンル</h4>
            <select name="genre" class="genre_box">
                <option value=""></option>
                <option value="">チョコレート</option>
                <option value="">チップス</option>
                <option value="">食玩</option>
                <option value="">おつまみ</option>
                <option value="">ラムネ</option>
            </select>
            <p></p>
            <button id="search_button" class="search_button">検索</button>
            <p></p>
            <button class="reset_button">条件のリセット</button>
        </div>
    </div>
<script type="text/javascript" src="js/getAllSnacks.js"></script>
<script type="text/javascript" src="js/getSearchSnack.js"></script>
</body>
</html>