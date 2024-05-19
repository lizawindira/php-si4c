<?php
//include koneksi
include "DB.php";
//buat sql
$sql="INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `jkl`, `agama`, `email`, `pwd`, `created_at`, `updated_at`) VALUES ('12346', 'liza winira', 'sei piring', 'WANITA', 'islam', 'eliksugigik@gmail.com', '1234567', current_timestamp(), '')";
//proses sql ke database
$q=mysqli_query($koneksi,$sql)or die('Data berhasil disimpan');
if($q){
    echo "Data berhasil disimpan";
}else{
    echo "Gagal menyimpan data!";
}
?>