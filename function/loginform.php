<?php
require_once 'db_connect.php';
echo "ログイン画面です。";
if(isset($_SESSION['err_msg'])){
    echo $_SESSION['err_msg'];
}
?>
<html>
<form action = "login.php" method="post">
メール<input type="text" name="email"><br>
パスワード<input type="password" name="password"><br>
<input type="submit" value="ログイン">
</form>
</html>