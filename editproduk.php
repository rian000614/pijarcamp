<?php
 require_once("koneksi.php");
 $nama_produk=$_GET['nama_produk'];
 $query=mysqli_query($koneksi,"select * from produk where nama_produk='$nama_produk'");
 $row=mysqli_fetch_assoc($query);
 ?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
 <form method="get" action="saveeditproduk.php">
  <table>
   <tr>
    <th colspan="3">Ubah Produk</th>
   </tr>
   <tr>
    <td>Nama Produk</td>
    <td>:</td>
    <td>
    <input type="text" name="nama_produk" value="<?php echo $row['nama_produk']?>" disabled>
    <input type="text" name="nama_produk" value="<?php echo $row['nama_produk']?>" hidden>
    </td>
   </tr>
   <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td><input type="text" name="keterangan" value="<?php echo $row['keterangan']?>"></td>
   </tr>
   <tr>
    <td>Harga</td>
    <td>:</td>
    <td><input type="text" name="harga" value="<?php echo $row['harga']?>"></td>
   </tr>
   <tr>
    <td>Jumlah</td>
    <td>:</td>
    <td><input type="text" name="jumlah" value="<?php echo $row['jumlah']?>"></td>
   </tr>
   <tr>
    <td colspan="3"><input type="submit" value="Edit"></td>
   </tr>
  </table>
 </form>
</body>
</html>