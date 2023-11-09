<?php
$conn = mysqli_connect("localhost","root","","tugas");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah($data){
    global $conn;
    $id = $data ["idSepeda"];
    $nama = $data ["nama"];
    $jenis = $data ["jenis"];
    $harga = $data ["harga"];


    $query = "INSERT INTO data_sepeda (idSepeda, nama, jenis, harga) VALUES ('$id','$nama','$jenis','$harga')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data ["idSepeda"];
    $nama = $data ["nama"];
    $jenis = $data ["jenis"];
    $harga = $data ["harga"];


    

    $query = "UPDATE data_sepeda SET
                
                nama = '$nama',
                jenis = '$jenis',
                harga = '$harga',
            WHERE idSepeda = '$id'
    ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
    return var_dump($data);
    
}

?>