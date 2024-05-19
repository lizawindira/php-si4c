<?php
 $nim=$_GET['nim'];
 //membuat sql tampil data
 $sqldata="SELECT * FROM mahasiswa WHERE nim='$nim'";
 //ambil koneksi data
 require_once "DB.php";
 //proses sql
 $query=mysqli_query($koneksi,$sqldata);
 //mengubah data ke array asosiatif, tidak menggunakan perulangan karena
 $data=mysqli_fetch_assoc($query);
 //selanjutnya tampilkan pada field dibawah.
 ?>
 <h2>Update Data Mahasiswa</h2>
 <!-- tag form -->
 <form action="insert.php" method="POST">
Nim : <br>
<input type="text" name="nim" id="">
<br>
Nama : <br>
<input type="text" name="nama" id="">
<br>
Alamat : <br>
<input type="text" name="alamat" id="">
<br>
Jkl : <br>
<select name="jkl" id="">
<option value="laki-laki">LAKI-LAKI</option>
<option value="perempuan">PEREMPUAN</option>
</select>
<br>
Agama : <br>
<select name="agama" id="">
<option value="islam">ISLAM</option>
<option value="kristen protestan">KRISTEN PROTESTAN</option>
<option value="kristen katolik">KRISTEN KATOLIK</option>
<option value="hindu">HINDU</option>
<option value="budha">BUDHA</option>
<option value="khong hu cu">KHONG HU CU</option>
</select>
<br> <br>
Email : <br>
<input type="text" name="email" id="">
<br>
pwd : <br>
<input type="text" name="pwd" id="">
<br>
<button type="submit">Simpan Mahasiswa</button>
</form>