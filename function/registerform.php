<?php
require_once 'db_connect.php';
session_start();
    if(isset($_SESSION['null_mail'])){
        echo $_SESSION['null_mail'];
    }

    if(isset($_SESSION['null_pass'])){
        echo $_SESSION['null_pass'];
    }

    if(isset($_SESSION['null_pass2'])){
        echo $_SESSION['null_pass2'];
    }

    if(isset($_SESSION['error_pass'])){
        echo $_SESSION['error_pass'];
    }

    if(isset($_SESSION['error_mail'])){
        echo $_SESSION['error_mail'];
    }

    if(isset($_SESSION['error_rule'])){
        echo $_SESSION['error_rule'];
    }

    if(isset($_SESSION['error_policy'])){
        echo $_SESSION['error_policy'];
    }
?>
<html>
    <head>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
</head>
<form action="register.php" method="post">
    メールアドレス<input type="text" name="email"><br>
    パスワード<input type="password" name="password"><br>
    パスワード(確認用)<input type="password" name="password2"><br>
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
    <!-- <input type="hidden" name="rule" value="0"> -->
    <input type="checkbox" name="rule" value="1"><a href="#">利用規約</a>に同意します。<br>
    <!-- <input type="hidden" name="policy" value="0"> -->
    <input type="checkbox" name="policy" value="1"><a href="#">プライバシーポリシー</a>に同意します。<br>
    <input type="submit" value="登録">
</form>
</html>