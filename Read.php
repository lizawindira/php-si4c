<?php
include_once "db.php";
$sql="SELECT * FROM mahasiswa";
$q=mysqli_query($koneksi,$sql);
?>
<table width="100%" border="1">
<thead>
<tr>
<th>No</th> <th>Nim</th> <th>Nama</th> <th>Alamat</th> <th>Jkl</th> <th>AGAMA</th> <th>Email</th> <th>Pwd</th>
</tr>
</thead>
<tbody>
<?php
$no=1;
while($data=mysqli_fetch_assoc($q)) {
?>
<tr>
<td><?=$no?></td>
<td><?=$data['nim']?></td>
<td><?=$data['nama']?></td>
<td><?=$data['alamat']?></td>
<td><?=$data['jkl']?></td>
<td><?=$data['agama']?></td>
<td><?=$data['email']?></td>
<td><?=$data['pwd']?></td>
<td>
<a href="edit.php?nim=<?=$data['nim']?>">Edit</a> 
<a href="delete.php?nim=<?=$data['nim']?>">Delete</a>
<a href="save.php?nim=<?=$data['nim']?>">Save</a> 
<a href="update.php?nim=<?=$data['nim']?>">Update</a>
</td>
</tr>
<?php $no++; } ?>
</tbody>
</table>