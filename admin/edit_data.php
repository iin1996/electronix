<?php
$berID = $_GET['uID'];

	include('includes/connection.php');

	$sql ="SELECT * FROM barang where id_brg = '$berID' ";
	$result = mysqli_query($kon,$sql);

	//$num = mysqli_num_rows($result);

	//$i = 0;

	while ($row = mysqli_fetch_array($result))
	{
		$autoid = $row['id_brg'];
		$namabrg = $row['nama_barang'];
		$hargabrg = $row['harga_barang'];
		$jmlbrg = $row['jml_barang'];
		$rincianbrg = $row['rincian_barang'];
		$gambar = $row['gambar'];
		
	}

?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_four();
	require("includes/connection.php");
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update User's Data</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_data.php" enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nama barang</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="namabrg" id="focusedInput" type="text" value="<?php echo $namabrg; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Harga Barang:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="hargabrg" id="focusedInput" type="text" value="<?php echo $hargabrg; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Jumlah Barang:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="jmlbrg" id="focusedInput" type="text" value="<?php echo $jmlbrg; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput"><strong>Kategori</strong></label>
								<div class="controls">
								  <select class="input-xlarge focused" name="kategori" id="focusedInput" type="text">
								  	<option value="">----ALL----</option>
								  	<?php 
								  		 $query = "SELECT * FROM kategori";
								  		 $res=mysqli_query($kon,$query);
								         while($kat=mysqli_fetch_array($res))
								         { 
								               echo "<option value='$kat[1]'> $kat[1] </option>";
								               mysqli_error($kon);
								         }
								  	?>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Rincian barang:</label>
								<div class="controls">
								  <textarea class="input-xlarge focused" name="rincianbrg" id="focusedInput" type="text" value="<?php echo $rincianbrg; ?>"></textarea>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Gambar:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="gambar" id="focusedInput" type="file" value="<?php echo $gambar; ?>">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Save Changes</button>
								<input type="hidden" name="hid" value="<?php echo $autoid; ?>">
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->