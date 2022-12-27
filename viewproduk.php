<?php
	require_once("koneksi.php");	
	$query=mysqli_query($koneksi,"select * from produk");
	$row=mysqli_fetch_assoc($query);
	$jumdat=mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>View Produk</title>
</head>
<body>
	<table border="l" cellpadding="2" cellspacing="0">
	<tr>
		<td>Nama Produk</td>
		<td>Keterangan</td>
		<td>Harga</td>
		<td>Jumlah</td>	
		<td colspan="3">Ubah/Hapus</td>
	</tr>
	<?php
		if($jumdat>0){
			do{
	?>
	<tr>
		<td><?php echo $row['nama_produk']?></td>
		<td><?php echo $row['keterangan']?></td>
		<td><?php echo $row['harga']?></td>
		<td><?php echo $row['jumlah']?></td>
		<td><a href="editproduk.php?nama_produk=<?php echo $row['nama_produk']?>">Edit</a></td>
		<td><a href="deleteproduk.php?nama_produk=<?php echo $row['nama_produk']?>">Delete</a></td>
	</tr>
	<?php
			}while($row=mysqli_fetch_assoc($query));
		}
	?>
	</table>
</body>
</html>