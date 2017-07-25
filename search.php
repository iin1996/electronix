<?php 
  include 'header.php';
?>

 </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="index.php" class="nav1"> Home</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav4">My account</a></li>
        <li class="divider"></li>
        <li><a href="admin/login.php" class="nav4">Sign in</a></li>
        <li class="divider"></li>
        <li><a href="#" class="nav5">Shipping</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav6">Contact Us</a></li>
        <li class="divider"></li>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
    <div class="left_content">

    <!-- tampil kategori -->
      <div class="title_box">Categories</div>
      <ul class="left_menu">
        <?php $kat = mysqli_query($kon, "SELECT * FROM kategori ORDER BY id_kategori DESC");
            if(mysqli_num_rows($kat) == 0){
            echo "Tidak ada produk!";
             }else{
              while($menu = mysqli_fetch_assoc($kat)){ 
      ?>
        <li class="odd"><a href="kategori.php?kategori=<?php echo $menu['nm_kategori']; ?>"><?php echo $menu['nm_kategori']; ?></a></li>
        <?php   
              }
              }
              
              ?>
      </ul>

     <?php 
        $sql3 = mysqli_query($kon, "SELECT * FROM barang ORDER BY id_brg DESC");
            if(mysqli_num_rows($sql3) == 0){
            echo "Tidak ada produk!";
          }
          $data3 = mysqli_fetch_assoc($sql3);
      ?>
      <div class="title_box">Special Products</div>
      <div class="border_box">
        <div class="product_title"><a href="details.php"><?php echo $data3['nama_barang']; ?></a></div>
        <div class="product_img"><a href="details.php?uID=<?php echo $data3['id_brg']; ?>"><img src="admin/upload/<?php echo $data3['gambar']; ?>" alt="" border="0" width="122" /></a></div>
        <div class="prod_price"><span class="price">Rp.<?php echo $data3['harga_barang']; ?></span></div>
      </div>
      <div class="title_box">Newsletter</div>
      <div class="border_box">
        <input type="text" name="newsletter" class="newsletter_input" value="your email"/>
        <a href="#" class="join">join</a> </div>
    </div>

<div class="center_content">
  <div class="center_title_bar">Latest Products</div>
<?php
//$cari = $_GET['cari'];
$nama_barang = $_GET['nama_barang']; //get the nama value from form
  $sql = mysqli_query($kon, "SELECT * FROM barang WHERE nama_barang LIKE '%$nama_barang%' ");
            if(mysqli_num_rows($sql) == 0){
            echo "Tidak ada produk!";
          }
          while($data = mysqli_fetch_assoc($sql)){ 


?>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.php"><?php echo $data['nama_barang']; ?></a></div>
          <div class="product_img"><a href="details.php?uID=<?php echo $data['id_brg']; ?>"><img src="admin/upload/<?php echo $data['gambar']; ?>" alt="" border="0" width="122" /></a></div>
          <div class="prod_price"><span class="price">Rp.<?php echo $data['harga_barang']; ?></span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.php?uID=<?php echo $data['id_brg']; ?>" class="prod_details">details</a> </div>
      </div>

<?php
  }
?>
</div>

 <!-- end of center content -->
    <div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title">Shopping cart</div>
        <div class="cart_details"> 3 items <br />
          <span class="border_cart"></span> Total: <span class="price">350$</span> </div>
        <div class="cart_icon"><a href="#" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      <?php 
        $sql2 = mysqli_query($kon, "SELECT * FROM barang ORDER BY id_brg DESC");
            if(mysqli_num_rows($sql2) == 0){
            echo "Tidak ada produk!";
          }
          $data2 = mysqli_fetch_assoc($sql2);
      ?>
      <div class="title_box">Whats new</div>
      <div class="border_box">
        <div class="product_title"><a href="details.php"><?php echo $data2['nama_barang']; ?></a></div>
        <div class="product_img"><a href="details.php?uID=<?php echo $data2['id_brg']; ?>"><img src="admin/upload/<?php echo $data2['gambar']; ?>" alt="" border="0" width="122" /></a></div>
        <div class="prod_price"><span class="price">Rp.<?php echo $data2['harga_barang']; ?></span></div>
      </div>
    </div>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
 <?php include 'footer.php'; ?>