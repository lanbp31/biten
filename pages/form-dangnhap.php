<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG ĐĂNG NHẬP</title>
</head>
<body>
    <h1> Đăng nhâp </h1>

    <form name="login-form" id="login-form" action="" method="GET">
        Tên đăng nhập <input type="text" name="username" id="username" /><br/>
        Mật khẩu <input type="text" name="password" id="password" /><br/>
        <input type="submit" name="button-login" value="Đăng nhập">
    </form>
</body>
</html>

<?php
 if(isset($_GET['button-login'])){
    $username = $_GET['username'];
    $password = $_GET['password'];
    if($username == 'admin' && $password =='123'){
        echo 'Đăng nhập thành công';
    }
    else{
        echo 'Thất bại';
    }
 }
?>