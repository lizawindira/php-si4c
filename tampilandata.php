<?php
 //mengambil program koneksidb, dengan menggunakan fungsi include
 include "DB.php";
 //Membuat SQL untuk menampilkan data
 $sqltampil = "SELECT * FROM mahasiswa";
 //Melakukan proses query ke basisdata
 $query = mysqli_query($koneksi, $sqltampil) or die("SQL Error");
 $nomor = 1;//untuk membuat nomor untuk di tabel hasil query
 ?>
 <h2>Data Mahasiswa STMIK Royal</h2>
 <!-- Disini kita buat link untuk menambahkan data, dimana link ini
nantinya akan memanggil form tambah data. -->
 <a href="FormTambah.php">Tambah Data</a>
 <table width="100%" border="1">
 <thead>
 <tr>
 <th>No</th>
 <th>Nim</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>jkl</th>
 <th>agama</th>
 <th>email</th>
 <th>pwd</th>
 </tr>
 </thead>
 <tbody>
 <?php
 while ($data = mysqli_fetch_assoc($query)) {
 ?>
 <tr>
 <!-- untuk menampilkan data, kita gunakan tag pandek php yaitu spt
dibawah -->
 <td><?= $nomor ?></td>
 <td><?= $data['nim'] ?></td>
 <td><?= $data['nama'] ?></td>
 <td><?= $data['alamat'] ?></td>
 <td><?= $data['jkl'] ?></td>
 <td><?= $data['agama'] ?></td>
 <td><?= $data['email'] ?></td>
  <td><?= $data['pwd'] ?></td>
 <td>
 <a href="edit.php?nim=<?=$data['nim']?>"> Edit</a> | <a
href="delete.php?nim=<?=$data['nim']?>">Delete</a> | <a
href="update.php?nim=<?=$data['nim']?>">Update</a> | <a
href="save.php?nim=<?=$data['nim']?>">Save</a>
 </td>
 </tr>
 <?php $nomor++;
 } //akhir dari perulangan ?>
 </tbody>
  </table>