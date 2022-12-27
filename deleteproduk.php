<?php
 require_once("koneksi.php");
 $nama_produk=$_GET['nama_produk'];
 $query=mysqli_query($koneksi,"delete from produk where nama_produk='$nama_produk'");
 if($query){
  echo "<script>alert('Data berhasil dihapus');location.href='viewproduk.php'</script>";
 }
 else{
  echo "<script>alert('Data gagal dihapus');location.href='viewproduk.php'</script>";
 }
 ?>