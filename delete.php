<?php
include_once "DB.php";
$nim=$_GET['nim'];
$hapus= mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE nim=$nim");
if($hapus){
header("location:Read.php");
}else{
echo "Hapus Gagal";
}
?>