<?php 
require 'function.php';



 if (isset( $_POST ["submit"])) {
    $id = $_POST ["idSepeda"];
    $nama = $_POST ["nama"];
    $jenis = $_POST ["jenis"];
    $harga = $_POST ["harga"];


    $query = "INSERT INTO data_sepeda VALUES ('$id','$nama','$jenis','$harga')";

    mysqli_query($conn,$query);
    
    
    
    
 }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pencak sepeda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Latihan 1/index.php">
        
        pencak sepeda
        </a>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <div class="sp-3">
                <label for="idSepeda" class="form-label">idSepeda :</label>
                <input type="text" class="form-control" id="idSepeda" name ="idSepeda" required >
            </div>
            <div class="sp-3">
                <label for="nama" class="form-label">nama :</label>
                <input type="text" class="form-control" id="nama" name ="nama" required>
            </div>
            <div class="sp-3">
                <label for="jenis" class="form-label">jenis :</label>
                <input type="text" class="form-control" id="jenis" name ="jenis" required>
            </div>
            <div class="sp-3">
                <label for="harga" class="form-label">harga :</label>
                <input type="text" class="form-control" id="harga" name ="harga" required>
            </div>
            <div class="sp-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">SUBMIT !</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>