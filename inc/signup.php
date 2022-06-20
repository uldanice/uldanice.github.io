<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $passcon = $_POST['passcon'];

    if ($pass === $passcon){
        
        $pass = md5($pass);

        mysqli_query($connect, "INSERT INTO `user` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$pass')");

        $_SESSION['message'] = 'Регистрация прошла успешно';
        header( 'Location: ../index.php');

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header( 'Location: ../register.php');
    }
?>