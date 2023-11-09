<?php 
require 'function.php';

$plt = $_GET ["no_polisi"];

$mobil = read("SELECT * FROM data_mobil WHERE no_polisi = '$plt'")[0];


if (isset( $_POST ["submit"])) {

    if ( ubah ($_POST) > 0 ) {
        echo "
        <script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    }else {
        
        echo "
        <script>
            alert('DATA GAGAL DIUBAH');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
        
    }

   
    
 }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERPATI CAR WASH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Latihan 1/index.php">
        
        MERPATI CAR WASH
        </a>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="no_polisi" class="form-label">NOMOR POLISI :</label>
                <input type="text" class="form-control" id="no_polisi" name ="no_polisi" required disabled value="<?= $mobil ["no_polisi"];?>" >
            </div>
            <div class="mb-3">
                <label for="tipe_mobil" class="form-label">TIPE MOBIL :</label>
                <input type="text" class="form-control" id="tipe_mobil" name ="tipe_mobil" required value="<?= $mobil ["tipe_mobil"];?>">
            </div>
            <div class="mb-3">
                <label for="merek_mobil" class="form-label">MEREK MOBIL :</label>
                <input type="text" class="form-control" id="merek_mobil" name ="merek_mobil" required value="<?= $mobil ["merek_mobil"];?>">
            </div>
            <div class="mb-3">
                <label for="warna" class="form-label">WARNA :</label>
                <input type="text" class="form-control" id="warna" name ="warna" required value="<?= $mobil ["warna"];?>">
            </div>
            <div class="mb-3">
                <label for="pemilik" class="form-label">PEMILIK :</label>
                <input type="text" class="form-control" id="pemilik" name ="pemilik" required value="<?= $mobil ["pemilik"];?>">
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">UBAH !</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>