<?php
require_once 'db_connect.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE email = :email";
$stm = $pdo->prepare($sql);
$stm->bindValue(':email',$email,PDO::PARAM_STR);
$stm->execute();
$membar = $stm->fetch(PDO::FETCH_ASSOC);


$data = array(
    'email' => $membar['email'],
    'password' => $membar['password']
  );
  if(strcmp($data['password'],$password) === 0){
    //セッションにemailアドレスを挿入する
    $_SESSION['email'] = $email;
    //マイページへ遷移
    header('Location:table.php');
    exit;
  }else{
    $_SESSION['err_msg'] = 'eメールアドレスまたはパスワードが違います';
    header('Location:loginform.php');
  }
