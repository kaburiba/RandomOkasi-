<?php
$title = "examplePage";
$description = "(説明)外部ファイルの読み込みテスト";
$is_home = true;  // ホームのページに行かないようにする
include 'inc/head.php'
?>
<!-- 特定のページで読み取るスタイルシート等あればここに追加 -->
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php'; ?>
    <!-- 特定ページのコンテンツをここに追加 -->
</div>
</body>
</html>