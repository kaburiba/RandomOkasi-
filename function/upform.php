<?php
session_start();
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
<html>
    <head>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
</head>
<form action="register.php" method="post">
    メールアドレス<input type="text" name="email" ><br>
    パスワード<input type="password" name="password"><br>
    氏名<input type="text" name="name"><br>
    郵便番号<input type="text" name="postcode" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');"><br>
    住所<input type="text" name="address">
    性別
    <select name="gender_id">
        <option value="1">男</option>
        <option value="2">女</option>
        <option value="3">その他</option>
    </select><br>
    年齢
    <select name="generation_id" >
        <option value="10">非公開</option>
        <option value="1">10代以下</option>
        <option value="2">20代</option>
        <option value="3">30代</option>
        <option value="4">40代</option>
        <option value="5">50代</option>
        <option value="6">60代</option>
        <option value="7">70代</option>
        <option value="8">80代</option>
        <option value="9">90代以上</option>
    </select><br>
    <input type="submit" value="編集">
</form>
</html>

</body>
</html>