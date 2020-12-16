<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sua loai san pham</title>
</head>
<body>
<h1>SUA LOAI SAN PHAM</h1>
    <form action="" method="post">
    MA LOAI SAN PHAM
    <input type="text" name="lsp_ma" id="lsp_ma"> <br>
    TEN LOAI SAN PHAM
    <input type="text" name="lsp_ten" id="lsp_ten"><br>
    MO TA
    <input type="text" name ="lsp_mota" id="lsp_mota"> <br>
        <button type="submit" name='btnsua' id='btnsua'> Luu </button>
    </form>
    <?php 
    
    if(isset($_POST['btnsua'])){
        include_once (__DIR__.'/connect.php');
        $lsp_ma = $_POST['lsp_ma'];
        $lsp_ten = $_POST['lsp_ten'];
        $lsp_mota = $_POST['lsp_mota'];
        $sql = "UPDATE SET loaisanpham GET ('$lsp_ma', '$lsp_ten', '$lsp_mota')";

        mysqli_query($conn, $sql);
    }
    ?>
</body>
</html>