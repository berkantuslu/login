<?php
$host ="localhost";
$user = "root";
$password = " ";
$db = "demo";

mysqli_connect($host,$user,$password);
mysqli_select_db($db);

if($isset($POST['username'])){
    
    
    $uname = $_POST['username'];
    $password=$_POST['password'];


    $sql="select * from loginform where user='".$user."' AND Pass='". $password."' limit 1";

    $result=$mysql_query($sql);


    if($mysql_num_rows($result)==1){
        echo "başarıyla giriş yaptınız";
        exit();
    }
    else{
        echo "yanlış kullanıcı adı ya da şifre girdiniz";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./stil.css">
</head>
<body>
    <div class="login-container">
        <img src="" alt="">
        <form method="POST" action="#">
            <div class="form-input">
                <input type="text" name="username" placeholder="enter your username">
            </div>
            <div class="form-input">
                <input type="text" name="password" placeholder="enter your password">
            </div>
            <input type="submit" name="submit" value="LogIn" class="btn-login">
        </form>
    </div>
</body>
</html>