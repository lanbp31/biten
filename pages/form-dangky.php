<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG ĐĂNG KÝ   </title>
</head>
<body>
    <h1> Đăng ký </h1>

    <form name="signin-form" id="signin-form" action="" method="POST">
        Tên đăng nhập <input type="text" name="username" id="username" /><br/>
        Mật khẩu <input type="text" name="password" id="password" /><br/>
        Tên <input type="text" name="name" id="name" /><br/>
        <input type="submit" name="button-login" value="Đăng ký">
    </form>
</body>
</html>
<?php
    if(isset($_POST['button-login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
    
        
    }
?>