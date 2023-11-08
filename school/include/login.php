<?php
    session_start();
    require_once ('connect.php');

    $login = $_POST['login'];
    $pass = md5($_POST['pass']);

    if(empty($login) || empty($pass)){
        $_SESSION['message'] = 'Заполните пустые поля';
        header('Location: ../autorisation.php');
    } else{
        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'");
        if(mysqli_num_rows($check_user) > 0){
            
            $user = mysqli_fetch_assoc($check_user);

            $_SESSION['user'] = [
                "id_users" => $user['id_users'],
                "user_full_name" => $user['user_full_name'],
                "email" => $user['email'],
                "avatar" => $user['avatar'],
                "user_post_id" => $user['user_post_id']
            ];

            header('Location: ../profile.php');

        } else{
            $_SESSION['message'] = 'Неверный логин и/или пароль';
            header('Location: ../autorisation.php');
        } 

    
    }
?>
