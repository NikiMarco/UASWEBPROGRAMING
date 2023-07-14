<!DOCTYPE html>
<html>
<head>
  <title>Marketplace</title>
  <link rel="stylesheet" href="mp.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
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
  <h2 style="margin: 20px;">Rekomendasi</h2>
  <div class="container" style="margin-left: 330px; margin-right: 330px;">
    <div class="slider">
      <div>
          <center>
            <a href="detail-produk1.html">
            <img src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/26c9324913c021677768c36975d635ef.png" alt="rek3">
            </a>
          </center>
      </div>
      <div>
          <center>
            <a href="detail-produk2.html">
            <img src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/26c9324913c021677768c36975d635ef.png" alt="rek3">
            </a>
          </center>
      </div>
      <div>
          <center>
            <a href="detail-produk3.html">
            <img src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/26c9324913c021677768c36975d635ef.png" alt="rek3">
            </a>
          </center>
      </div>
    </div>
  </div>
  <?php include "koneksipr.php"?>
  <div class="container">
    <h2>Produk Terbaru</h2>
    <div class="product-list">
    <?php foreach ($products as $product): ?>
    <div class="product">
      <h3><?php echo $product['nama_produk']; ?></h3>
      <img src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/26c9324913c021677768c36975d635ef.png"" alt="<?php echo $product['nama_produk']; ?>">
      <p><?php echo $product['harga']?></p>
      <a href="detailproduk.php?id=<?php echo $product['id']; ?>">View Details</a>
    </div>
  <?php endforeach; ?>
    </div>
  </div>

  <footer>
    <p>Hak Cipta &copy; 2023 Marketplace</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script>
      $(Document).ready(function(){
          $(".slider").bxSlider({
              auto:true,
          })
      })
  </script>
</body>
</html>