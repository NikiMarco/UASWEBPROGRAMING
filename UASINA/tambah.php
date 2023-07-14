<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mp.css">
</head>
<body>
<header>
    <h1>Selamat datang di Marketplace</h1>
  </header>

  <nav>
    <ul>
      <li><a href="beranda.php">Beranda</a></li>
      <li><a href="tambah.php">Tambah Produk</a></li>
    </ul>
  </nav>
  <h3>Tambah Barang</h3>
  <form action="prosestambah.php" method="post">
    <table>
        <tr>
            <td width="130">Nama Barang</td>
            <td> <input type="text" name="nama_produk"></td>
        </tr>
        <tr>
            <td width="130">Deskripsi Produk</td>
            <td> <input type="text" name="deskripsi"></td>
        </tr>
        <tr>
            <td width="130">Harga Produk</td>
            <td> <input type="number" name="harga"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Tambah" name="tambah"></td>
        </tr>
    </table>
  </form>
</body>
</html>