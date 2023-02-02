<?php
require_once 'db_connect.php';
session_start();
echo "<pre>";
var_dump($_POST);
echo "</pre>";
$error = false;
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$name = $_POST['name'];
$postcode = $_POST['postcode'];
$address = $_POST['address'];
$gender_id = $_POST['gender_id'];
$generation_id = $_POST['generation_id'];
// $rule = 0;
// $policy = 0;
$rule = $_POST['rule'];
$policy = $_POST['policy'];

$str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPUQRSTUVWXYZ';
$salt = substr(
  str_shuffle($str), 0, 20);
  echo $salt;

if(empty($email)){
    $error = true;
    $_SESSION['null_mail'] = "メールアドレスが入力されていません。";
    // header('Location:registerform.php');
}

if(empty($password)){
    $error = true;
    $_SESSION['null_pass'] = "パスワードが入力されていません。";
    // header('Location:registerform.php');
}

if(empty($password2)){
    $error = true;
    $_SESSION['null_pass2'] = "確認用のパスワードが入力されていません。";
    // header('Location:registerform.php');
}
echo "<pre>";
var_dump(strcmp($password,$password2));
echo "</pre>";
if(strcmp($password,$password2) === 1){
    $error = true;
    $_SESSION['error_pass'] = 'パスワードが一致していません。';
    // header('Location:registerform.php');
}

$sql2 = "SELECT email FROM users WHERE email = :email";
$stm2 = $pdo->prepare($sql2);
$stm2->bindValue(':email',$email,PDO::PARAM_STR);
$stm2->execute();
$count = $stm2->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($count['email']);
echo "</pre>";
echo "<pre>";
var_dump($email);
echo "</pre>";

if($count['email'] === $email){
    $error = true;
    $_SESSION['error_mail'] = "そのメールアドレスは既に登録されています。";
    // header('Location:registerform.php');
}

echo "<pre>";
var_dump($rule);
echo "</pre>";
echo "<pre>";
var_dump($policy);
echo "</pre>";
if($rule != 1){
    $error = true;
    $_SESSION['error_rule'] = "利用規約に同意してください。";
    // header('Location:registerform.php');
    // exit;
}

if($policy != 1){
    $error = true;
    $_SESSION['error_policy'] = "プライバシーポリシーに同意してください。";
}

if($error){
    header('Location:registerform.php');
    exit;
}

$sql = "INSERT INTO users (email,password,salt,name,postcode,address,gender_id,generation_id)
VALUES(:email,:password,:salt,:name,:postcode,:address,:gender_id,:generation_id)";
$stm = $pdo->prepare($sql);
$stm->bindValue(':email',$email,PDO::PARAM_STR);
$stm->bindValue(':password',$password,PDO::PARAM_STR);
$stm->bindValue(':salt',$salt,PDO::PARAM_STR);
$stm->bindValue(':name',$name,PDO::PARAM_STR);
$stm->bindValue(':postcode',$postcode,PDO::PARAM_STR);
$stm->bindValue(':address',$address,PDO::PARAM_STR);
$stm->bindValue(':gender_id',$gender_id,PDO::PARAM_INT);
$stm->bindValue(':generation_id',$generation_id,PDO::PARAM_INT);
$stm->execute();
$reg = $stm->fetch(PDO::FETCH_ASSOC);
header('Location:table.php');

?>

