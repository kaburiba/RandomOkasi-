<?php
    $title = "SnackTrigger | アソート作成";
    $description = "お菓子をランダムに選んでアソートを作成する";
    $is_home = false;  // ホームのページに行かないようにする
    $is_post = isset($_POST["submit"]);

    include 'inc/head.php'

?>
<!-- 特定のページで読み取るスタイルシート等あればここに追加 -->
<link rel="stylesheet" href="css/random_result.css">
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php'; ?>
    <!-- 特定ページのコンテンツをここに追加 -->
    <div class="container">
        <div class="text_style">
            <div>
                <h1 id="text">アソート作成結果</h1>
            </div>
            <div class="style">
                <div id="item-container" class="side"></div>
            </div>
        </div>
        <div class="ran_ran">
            <form class="random" method="post" action="random_result.php">
                <h4>抽選する個数</h4>
                <div class="num">
                    <input id="ran_num" type="number" name="ran_num" class="ran_num" value="5" min="1">
                </div>
                <h4>メーカー</h4>
                <div class="maker">
                    <select name="maker" class="maker_box">
                        <option value=""></option>
                        <option value="">ロッテ</option>
                        <option value="">カルビー</option>
                        <option value="">明治</option>
                        <option value="">小池屋</option>
                        <option value="">おやつカンパニー</option>
                    </select>
                </div>
                <h4>ジャンル</h4>
                <div class="genre">
                    <select name="genre" class="genre_box">
                        <option value=""></option>
                        <option value="">チョコレート</option>
                        <option value="">チップス</option>
                        <option value="">食玩</option>
                        <option value="">おつまみ</option>
                        <option value="">ラムネ</option>
                    </select>
                </div>
                <p></p>
                <div class="ser_button">
                    <input type="submit" name="submit" class="search_button" value="抽選する！"/>
                </div>
                <p></p>
                <div class="re_button">
                    <input type="reset" class="reset_button" value="条件のリセット"/>
                </div>
            </form>
            <p></p>
            <div class="tyu_button">
                <button class="cart"><p class="txt_cart">抽選したお菓子を</p>
                    <p class="text_cart" style="display:inline">全てカートに入れる</p></button>
            </div>
        </div>
    </div>
</div>
<?php
    $param = array(
            "max" => $_POST["ran_num"]
    );
    $param_json = json_encode($param);
    if ($is_post) {
?>
    <script type="text/javascript">
        const param = JSON.parse('<?php echo $param_json; ?>');
    </script>
    <script type="text/javascript" src="js/getRandomSnacks.js"></script>
<?php } ?>
</body>
</html>