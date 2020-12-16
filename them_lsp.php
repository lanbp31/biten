<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Them moi loai san pham</title>
</head>
<body>
<h1>THEM MOI LOAI SAN PHAM</h1>
    <form action="" method="post">
    TEN LOAI SAN PHAM
    <input type="text" name="lsp_ten" id="lsp_ten"><br>
    MO TA
    <input type="text" name ="lsp_mota" id="lsp_mota"> <br>
        <button type="submit" name='btnluu' id='btnluu'> Luu </button>
    </form>
    <?php 
    
    if(isset($_POST['btnluu'])){
        include_once (__DIR__.'/connect.php');

        $lsp_ten = $_POST['lsp_ten'];
        $lsp_mota = $_POST['lsp_mota'];
        $sql = "INSERT INTO loaisanpham(lsp_ten, lsp_mota) VALUES ('$lsp_ten', '$lsp_mota')";

        mysqli_query($conn, $sql);
    }
    ?>
</body>
</html>