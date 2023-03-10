<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body id="login">
    <div class="contents flex-container">
        <a href="toppage.css" class="prev_button">←</a>
        <h2 class="login">ログイン</h2>
        <!--エラーが出たらここに書く⇩-->
        <p class="notes">※アカウントが存在しないかまたはパスワードが違います</p>
        <form action="#">
        <div class="login_form">
            <div class="mail_box">
                <input type="text" placeholder="E-mail" name="mail">
            </div>
            <div class="pw_box">
                <input type="password" placeholder="Password" name="pw">
            </div>
                <input type="submit" value="ログイン">
        </div>
        </form>
        <p>アカウントをお持ちでない方は<a href="#">コチラ</a></p>
    </div>

    

</body>
</html>