<<!DOCTYPE html>
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
<?php
    
    $hoten = 'lan';
    echo 'Ten ' . $hoten . '!!';
  
?>
<?php 
echo $hoten
?>
<?= $hoten ?>

    <a href="pages/contact.php"> CONTACT</a><br>
    <a href="pages/about.php"> ABOUT</a>

</body>
</html>
