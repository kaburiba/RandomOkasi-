<!-- 一覧ページ -->
<?php
    session_start();
    require 'function/db_connect.php';

    var_dump($_POST['list']);
    $path = '';
    $_POST['list'] = 'test';

    if( isset($_POST['list']) ) {
        $path1 = '';
        $path2 = '';
        $path3 = '';
        $path4 = '';
        $_SESSION['id'] = $_POST['id'];
        $_SESSION['name'] = $_POST['name'];
    }
?>
