<?php
    session_start();
    require 'function/db_connect.php';
    if( $_POST['id'] != NULL ) {
        $_SESSION['id'] = $_POST['id'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['gender_id'] = $_POST['gender_id'];
        $_SESSION['generation_id'] = $_POST['generation_id'];

        $snack_sql = "SELECT * FROM users 
        INNER JOIN gender ON users.gender_id = gender.id 
        INNER JOIN generation ON users.generation_id = generation.id
        WHERE users.id = {$_SESSION['id']}";
        $stm = $db->prepare($snack_sql);

        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);

        if( $_POST['gender_id'] == NULL || $_POST['generation_id'] == NULL ) {
            $snack_sql2 = "SELECT * FROM users 
            WHERE users.id = {$_SESSION['id']}";
            $stm2 = $db->prepare($snack_sql2);

            $stm2->execute();
            $result2 = $stm2->fetch(PDO::FETCH_ASSOC);

            echo $result2['email'];
            echo $result2['password'];

            if( $result2['name'] == NULL ) {
                $result2['name'] = "";
            }
            echo $result2['name'];
    
            if( $result2['postcode'] == NULL ) {
                $result2['postcode'] = "";
            }
            echo $result2['postcode'];
    
            if( $result2['address'] == NULL ) {
                $result2['address'] = "";
            }
            echo $result2['address'];

            if( $_POST['gender_id'] == NULL ) {
                if( $result2['gender_id'] == NULL ) {
                    $result2['gender_id'] = "";
                }
                echo $result2['gender_id'];
            } else {
                if( $result['gender'] == NULL ) {
                    $result['gender'] = "";
                }
                echo $result['gender'];
            }
            
            if( $_POST['generation_id'] == NULL ) {
                if( $result2['generation_id'] == NULL ) {
                    $result2['generation_id'] = "";
                }
                echo $result2['generation_id'];
            } else {
                if( $result['generation'] == NULL ) {
                    $result['generation'] = "";    
                }
                echo $result['generation'];
            }
        } else {
            echo $result['email'];
            echo $result['password'];

            if( $result['name'] == NULL ) {
                $result['name'] = "";
            }
            echo $result['name'];
    
            if( $result['postcode'] == NULL ) {
                $result['postcode'] = "";
            }
            echo $result['postcode'];
    
            if( $result['address'] == NULL ) {
                $result['address'] = "";
            }
            echo $result['address'];

            if( $result['gender'] == NULL ) {
                $result['gender'] = "";
            }
            echo $result['gender'];
    
            if( $result['generation'] == NULL ) {
                $result['generation'] = "";    
            }
            echo $result['generation'];
        }
    } else {
        redirect('./login.php');
    }
?>
