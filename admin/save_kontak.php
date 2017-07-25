<?php
include('includes/connection.php');
if (isset($_POST['kirim'])) {
	$nm_kontak = $_POST['nm_kontak'];
	$email_kontak = $_POST['email_kontak'];
	$phone_kontak = $_POST['phone_kontak'];
	$pesan_kontak = $_POST['pesan_kontak'];
//$gambar = $_POST['gambar'];
//$nm_kat = $_POST['kategori'];

			$sql = "INSERT INTO kontak VALUES('','$nm_kontak','$email_kontak','$phone_kontak','$pesan_kontak')";
			//$ins=mysqli_query($kon, $sql);
}

if (mysqli_query($kon,$sql))
{
	echo "<script>
	window.history.back();
	</script>";
}


?>
