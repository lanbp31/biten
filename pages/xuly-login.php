<?php
$username = $_GET['username'];
$password = $_GET['password'];

if ($username == 'admin' && $password == '12345'){
    echo '<h1>Đăng nhập thành công</h1>';
}
else{
        echo 'Thất bại';
    }
?>