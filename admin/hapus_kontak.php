<?php
$id_kontak = $_GET['hapuslID'];

include('includes/connection.php');

$sql = "DELETE FROM kontak WHERE id_kontak=$id_kontak";
if(mysqli_query($kon,$sql))
{
	header('location:users.php');
}
else
{
	die('Could not delete record:' .mysqli_error($kon));
}
?>