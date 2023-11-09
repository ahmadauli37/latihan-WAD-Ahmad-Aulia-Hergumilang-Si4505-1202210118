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


function hapus($plt){
    global $conn;
    mysqli_query($conn,"DELETE FROM data_sepeda WHERE idSepeda = '$plt'") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>