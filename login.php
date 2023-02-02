<?php
    $error_message = "";
    // フォームの入力値がerrorならここにメッセージを格納する
    //　$error_message = "※アカウントが存在しないかまたはパスワードが違います";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>


<body>
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
        <div >
            <p>アカウントをお持ちでない方は<a href="register.php">コチラ</a></p>
        </div>
    </div>
</div>


</body>
</html>