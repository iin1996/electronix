<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();
?>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Nama Kontak</th>
								  <th>Email kontak</th>
								  <th>Phone kontak</th>
								  <th>Pesan kontak</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						  <tbody>
							<?php
								include("includes/connection.php");

								$sql = "SELECT * FROM kontak ORDER BY nama_kontak";
								$result=mysqli_query($kon,$sql); //rs.open sql,con

							while ($row=mysqli_fetch_array($result))
							{ ?><!--open of while -->
							<tr>
								<td><?php echo $row['id_kontak']; ?></td>
								<td><?php echo $row['nama_kontak']; ?></td>
								<td><?php echo $row['email_kontak']; ?></td>
								<td><?php echo $row['phone_kontak']; ?></td>
								<td><?php echo $row['pesan_kontak']; ?></td>
								<td class="center">
									<a class="btn btn-danger" onclick="return confirmDel()" href="hapus_kontak.php?hapuslID=<?php echo $row['id_kontak'];?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php
							   } //close of while
							?>
						  </tbody>
					  </table>            
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