<?php
	require_once("koneksi.php");
	$nama_produk=$_GET['nama_produk'];
	$keterangan=$_GET['keterangan'];
	$harga=$_GET['harga'];
	$jumlah=$_GET['jumlah'];
	$query=mysqli_query($koneksi,"insert into produk values ('$nama_produk','$keterangan','$harga','$jumlah');");
	if($query){
		echo "<script>alert('Data berhasil disimpan');location.href='viewproduk.php'</script>";
	}else{
		echo "<script>alert('Data gagal disimpan');location.href='arkademy.php'</script>";
	}
?>