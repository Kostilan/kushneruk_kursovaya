<?php
// подключение БД
include("connect.php");

if(!empty($_POST) && $_POST["password"]==$_POST["password_repeat"] ){
    $surname = htmlentities($_POST["surname"]);
    $name = htmlentities($_POST["name"]);
    $patronymic = htmlentities($_POST["patronymic"]);
    $password = htmlentities($_POST["password"]);
    $email = htmlentities($_POST["email"]);
    $birthday = htmlentities($_POST["birthday"]);
    $phone = htmlentities($_POST["phone"]);
    

    // Запрос
    $query = "INSERT INTO `users`( `surname`, `name`, `patronymic`, `password`, `email`, `birthday`, `phone`, `role` ) VALUES
                                ( '$surname', '$name', '$patronymic', '$password', '$email', '$birthday', '$phone', '3')
                                 Where phone != '$phone' AND password != '$password'";
    $result = mysqli_query($con, $query);
    if($result){    
        echo "<script>alert('Вы успешно зарегистрировались. Тепперь можете войти в ваш аккаунт');location.href='/index.php';</script>";
    }
    else{
        echo "<script>alert('Возникла ошибка, попробуйте снова.');
        
        </script>";
        echo mysqli_error($con);
        echo $query;
    }
}
?>
<!-- location.href='/index.php'; -->