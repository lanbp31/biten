<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>DANH SACH LOAI SAN PHM</h1>
<?php
    require_once('connect.php');
    $sp = "INSERT INTO loaisanpham VALUES ('SP01', 'com')";
    $cmt = "INSERT INTO chudegopy VALUES ('gop y 01')";
    mysqli_query($conn, $cmt);
    mysqli_query($conn, $sp);

?>

</body>
</html>
