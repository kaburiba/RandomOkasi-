<?php
require_once 'db_connect.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$postcode = $_POST['postcode'];
$address = $_POST['address'];
$gender_id = $_POST['gender_id'];
$generation_id = $_POST['generation_id'];

//メアドの編集
$mail_sql = "UPDATE users SET email = :email";
$mail_stm = $pdo->prepare($mail_sql);
$mail_stm->bindValue(':email',$email,PDO::PARAM_STR);
$mailstm->execute();
$mail_res = $mail_stm->fetch(PDO::FETCH_ASSOC);
header('Location:table.php');


//パスワードの編集
$pass_sql = "UPDATE users SET password = :password";
$pass_stm = $pdo->prepare($pass_sql);
$pass_stm->bindValue(':password',$password,PDO::PARAM_STR);
$pass_stm->execute();
$pass_res = $pass_stm->fetch(PDO::FETCH_ASSOC);
header('Location:table.php');


//ソルトの編集
$salt_sql = "UPDATE users SET salt = :salt";
$salt_stm = $pdo->prepare($salt_sql);
$salt_stm->bindValue(':salt',$salt,PDO::PARAM_STR);
$salt_stm->execute();
$salt_res = $salt_stm->fetch(PDO::FETCH_ASSOC);
header('Location:table.php');


//名前の編集
$name_sql = "UPDATE users SET name = :name";
$name_stm = $pdo->prepare($name_sql);
$name_stm->bindValue(':name',$name,PDO::PARAM_STR);
$name_stm->execute();
$name_res = $name_stm->fetch(PDO::FETCH_ASSOC);
header('Location:table.php');


//郵便番号の編集
$post_sql = "UPDATE users SET postcode = :postcode";
$post_stm = $pdo->prepare($post_sql);
$post_stm->bindValue(':postcode',$postcode,PDO::PARAM_STR);
$post_stm->execute();
$post_res = $post_stm->fetch(PDO::FETCH_ASSOC);
header('Location:table.php');


//住所の編集
$add_sql = "UPDATE users SET address = :address";
$add_stm = $pdo->prepare($add_sql);
$add_stm->bindValue(':address',$address,PDO::PARAM_STR);
$add_stm->execute();
$add_res = $add_stm->fetch(PDO::FETCH_ASSOC);
header('Location:table.php');


//性別の編集
$gen_sql = "UPDATE users SET gender_id = :gender_id";
$gen_stm = $pdo->prepare($gen_sql);
$gen_stm->bindValue(':gender_id',$gender_id,PDO::PARAM_INT);
$gen_stm->execute();
$gen_res = $gen_stm->fetch(PDO::FETCH_ASSOC);
header('Location:table.php');


//年齢の編集
$gene_sql = "UPDATE users SET generation_id = :generation_id";
$gene_stm = $pdo->prepare($gene_sql);
$gene_stm->bindValue(':generation_id',$generation_id,PDO::PARAM_INT);
$gene_stm->execute();
$gene_res = $gene_stm->fetch(PDO::FETCH_ASSOC);
header('Location:table.php');
