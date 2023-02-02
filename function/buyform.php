<?php
    session_start();
    // echo $_SESSION['kosu'];
    // $kosu = $_SESSION['kosu'];
    $_SESSION['buy_user_id'] = 1;
    ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cart.php" method="post">
    <input type="hidden" name = "buy_product_id" value="2">
    <button type="submit" >カートに入れる</button>
    </form>
</body>
</html>
 <?php
    