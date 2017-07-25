<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_three();
	require("includes/connection.php");

?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add New Record (Testing Function Only)</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_data.php" enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nama Barang:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="namabrg" id="focusedInput" type="text" >
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Harga Barang</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="hargabrg" id="focusedInput" type="text" >
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Jumlah Barang:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="jmlbrg" id="focusedInput" type="text" >
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="focusedInput"><strong>Kategori</strong></label>
								<div class="controls">
								  <select class="input-xlarge focused" name="kategori" id="focusedInput" type="text">
								  	<option value="">----ALL----</option>
								  	<?php 
								  		 $query = "SELECT * FROM kategori";
								  		 $result=mysqli_query($kon,$query);
								         while($kat=mysqli_fetch_array($result))
								         { 
								               echo "<option value='$kat[1]'> $kat[1] </option>";
								               mysqli_error($kon);
								         }
								  	?>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Rincian Barang :</label>
								<div class="controls">
								  <textarea class="input-xlarge focused" name="rincianbrg" id="focusedInput" rows="5" cols="40"></textarea>
								</div>
							  </div trol-group">
								<label class="control-label" for="focusedInput">Gambar</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="gambar" id="focusedInput" type="file">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add New Record</button>
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