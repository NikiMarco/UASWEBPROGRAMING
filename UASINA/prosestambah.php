<?php
include "koneksi.php";
if(isset($_POST['tambah'])){
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $query="INSERT INTO product (nama_produk, deskripsi, harga) VALUES('$nama_produk', '$deskripsi', '$harga')";
    $proses=mysqli_query($koneksi, $query);
      if ($proses) {
      echo "<script type='text/javascript'>
      alert ('Produk berhasil ditambahkan')
      </script>";
      include "beranda.php";
  }
  else{
	echo "<script type='text/javascript'>
			alert ('Produk gagal ditambahkan')
		</script>";
    }
}
?>