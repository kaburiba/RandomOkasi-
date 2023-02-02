<?php
    session_start();
    require 'function/db_connect.php';
    if( isset( $_POST['infomation'] ) ) {
        $_SESSION['id'] = $_POST['id'];
        $_SESSION['name'] = $_POST['name'];
    }

    $snack_sql = "SELECT * FROM users 
    INNER JOIN gender ON users.gender_id = gender.id 
    INNER JOIN generation ON users.generation_id = generation.id
    WHERE users.id = {$_SESSION['id']}";
    $stm = $db->prepare($snack_sql);

    $stm->execute();
    $result = $stm->fetch(PDO::FETCH_ASSOC);

    echo $result['email'];
    echo $result['password'];
    echo $result['name'];
    echo $result['postcode'];
    echo $result['address'];
    echo $result['gender'];
    echo $result['generation'];
?>