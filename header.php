<?php include 'admin/includes/connection.php' ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text">Advanced Search</div>
      <form method="get" action="search.php">
        <input type="text" class="search_input" name="nama_barang" />
        <input type="image" src="images/search.gif" class="search_bt" name="cari" />
      </form>
    </div>
  </div>
  <div id="header">
    <div id="logo"> <a href="#"><img src="images/kerajinan.png" alt="" border="0" width="237" height="140" /></a> </div>
    <div class="oferte_content">
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
      <div class="oferta">
      <?php 
        $head = mysqli_query($kon, "SELECT * FROM barang ORDER BY id_brg DESC");
            if(mysqli_num_rows($head) == 0){
            echo "Tidak ada produk!";
          }
          $dat = mysqli_fetch_assoc($head);
      ?>
        <div class="oferta_content"> <img src="admin/upload/<?php echo $dat['gambar']; ?>" width="94" height="92" alt="" border="0" class="oferta_img" />
          <div class="oferta_details">
            <div class="oferta_title"><?php echo $dat['nama_barang']; ?></div>
            <div class="oferta_text"><?php echo $dat['rincian_barang']; ?></div>
        </div>
        <div class="oferta_pagination"> <span class="current">1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> </div>
      </div>
      <!-- <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div> -->
    </div>