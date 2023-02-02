<?php
session_start();
require_once 'db_connect.php';
$buy_user_id = $_SESSION['buy_user_id'];
$buy_product_id = $_POST['buy_product_id'];
echo "カートの個数は".$_SESSION['kosu'];
if (isset($_POST["buy_product_id"])) {
    $_SESSION["kosu"] = $_SESSION["kosu"] + 1;
}
?>
<a href="buyform.php">戻る</a>
