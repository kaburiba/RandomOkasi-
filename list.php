<!-- 一覧ページ -->
<?php
    session_start();
    require 'function/db_connect.php';

    var_dump($_POST['list']);

    if( isset($_POST['list']) ) {
        $path = './infomation.php';
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['posetdode'] = $_POST['postcode'];
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['generation'] = $_POST['generation'];
    } else {
        $path = './login.php';
        $_SESSION['email'] = NULL;
        $_SESSION['password'] = NULL;
        $_SESSION['name'] = NULL;
        $_SESSION['posetdode'] = NULL;
        $_SESSION['address'] = NULL;
        $_SESSION['gender'] = NULL;
        $_SESSION['generation'] = NULL;
    }
    
?>

<html>
    <head>
        <link rel="stylesheet" href="./css/common.css">
    </head>
    <header>
        <div>
            <!-- <a href="#">ユーザーアイコン</a>
            <ul>
                <li><a href="./infomation.php">ユーザー情報</a></li>
                <li><a href="./random_states.php">ランダム履歴</a></li>
                <li><a href="./buy_states.php">購入履歴</a></li>
                <li><a href="./toppage.php">ログアウト</a></li>
            </ul> -->
            <ul class="menu">
                <li class="menu__single">
                    <p class="init-bottom">ユーザーアイコン</p>
                    <ul class="menu__second-level">
                        <li><a href="./infomation.php">ユーザー履歴</a></li>
                        <li><a href="./random_states.php">ランダム履歴</a></li>
                        <li><a href="./but_states.php">購入履歴</a></li>
                        <li><a href="./toppage.php">ログアウト</a></li>
                    </ul>
                </li>
                <!-- 他グローバルナビメニュー省略 -->
            </ul>
            <!-- <input type="hidden" name="email" value="メールアドレス">
            <input type="hidden" name="password" value="パスワード">
            <input type="hidden" name="name" value="氏名">
            <input type="hidden" name="postcode" value="郵便番号">
            <input type="hidden" name="address" value="住所">
            <input type="hidden" name="gender" value="性別">
            <input type="hidden" name="generation" value="年代">
                <input type="submit" name="infomation" 
                onclick="location.href='<?php echo $path; ?>'" value="ユーザーアイコン"> -->
        </div>
    </header>
    <div>
        <body>
            <p>一覧ページ</p>
        </body>
    </div>
</html>