<?php
$id = $_GET['delID'];

include('includes/connection.php');

$sql = "DELETE FROM barang WHERE id_brg=$id";
if(mysqli_query($kon,$sql))
{
	header('location:users.php');
}
else
{
	die('Could not delete record:' .mysqli_error($kon));
}
?>