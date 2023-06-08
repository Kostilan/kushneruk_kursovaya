<?php
// старт сессии
session_start();
// подключение БД
include("connect.php");

if(!empty($_POST)){
    $phone = htmlentities($_POST["phone"]);
    $password = htmlentities($_POST["password"]);

    if($phone && $password){
        $sql_user_info = "SELECT * FROM users WHERE phone = '$phone' AND password = '$password';";
        // var_dump($sql_user_info);

        $result_UI = mysqli_query($con, $sql_user_info);
        $user_check = mysqli_fetch_assoc($result_UI);
        if($user_check){
            $_SESSION["user"] = [
                "check"=>true,
                "id_user"=>$user_check["id_user"],
                "role"=>$user_check["role"],
            ];
            // echo "<script>location.href= '';</script>";
            if($_SESSION['user']['role']==1){
                header("location:/admin/index.php");
                exit();
            }
            
             
        }
        else{
            echo "<script>alert('Невеерно указаны логин и/или пароль!');
            location.href= '/';
             </script>";
            //  echo mysqli_error($con);
            //  echo $sql_user_info;
        }
    }
}
?>
