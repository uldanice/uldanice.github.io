<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>Авторизацияирегистрация</title>
    <link rel="stylesheet"href="../assets/main.css">
</head>
<body>
     <!-- Форма регистрации -->
     <form action="../inc/signup.php" method="post" enctype="multipart/form data">
         <label>ФИО</label>
         <input type="text" name="full_name" placeholder="Введите свое полное имя">
         <label>Логин</label>
         <input type="text" name="login" placeholder="Введите свой логин">
         <label>Почта</label>
         <input type="text" name="email" placeholder="Введите адрес своей почты">
         <label>Пароль</label>
         <input type="password" name="pass" placeholder="Введите пароль">
         <label>Подтверждение пароля</label>
         <input type="password" name="passcon" placeholder="Подтвердите пароль">
         <button type="submit">Boйти</button>
         <p>
            У вас уже есть аккаунт? - <a href="./index.php">Авторизуйтесь</a>
         </p>
        
        <?php
            if ($_SESSION['message']){
                echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            }
            unset ($_SESSION['message']) ;  
        ?>
     </form>
</body>
</html>