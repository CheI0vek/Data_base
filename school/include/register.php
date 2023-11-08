<?php
    session_start();
    require_once ('connect.php');

    $user_full_name = $_POST['user_full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $user_post_id = $_POST['user_post_id'];
    $pass = $_POST['pass'];
    $repeatpass = $_POST['repeatpass'];


    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке сообщения';
        header('Location: ../registration.php');
    }

    if(empty($login) || empty($pass) || empty($repeatpass) || empty($email)){
        /* echo "Заполните пустые поля"; */
        $_SESSION['message'] = 'Заполните пустые поля';
        header('Location: ../registration.php');
    } else{
        if ($pass != $repeatpass){
            /* echo "Пароли не совпадают"; */
            $_SESSION['message'] = 'Пароли не совпадают';
            header('Location: ../registration.php');
        } else {
            $pass = md5($pass); /*хэширует пароль*/
            $sql = "INSERT INTO `users` (user_full_name, login, pass, email, user_post_id, avatar) VALUES ('$user_full_name', '$login', '$pass', '$email', '$user_post_id', '$path')";
            if ($connect -> query($sql) === TRUE){
                /* echo "Успешная регистрация"; */
                $_SESSION['message'] = 'Регистрация прошла успешно';
                header('Location: ../autorisation.php');
            } else{
                echo "Ошибка: " . $connect->error;
            }
        }

}

?>