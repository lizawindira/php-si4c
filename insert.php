<?php
include_once "DB.php";
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jkl=$_POST['jkl'];
$agama=$_POST['agama'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$created_at = "current_timestam()";
$updated_at = "current_timestam()";
//buat SQL
$sql="INSERT INTO mahasiswa
VALUES('$nim','$nama','$alamat','$jkl','$agama','$email','$pwd','$created_at','$updated_at')";
//proses ke database
$simpan=mysqli_query($koneksi,$sql)or die("Error, $sql");
if($simpan){
echo "Sukses";
}else{
echo "Gagal";
}
?>