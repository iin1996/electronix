<?php
$namabrg = $_POST['namabrg'];
$hargabrg = $_POST['hargabrg'];
$jmlbrg = $_POST['jmlbrg'];
$rincianbrg = $_POST['rincianbrg'];
//$gambar = $_POST['gambar'];
$nm_kat = $_POST['kategori'];

include('includes/connection.php');

$folder		= './upload/';
$file_name	= $_FILES['gambar']['name'];
if(move_uploaded_file($_FILES['gambar']['tmp_name'], $folder.$file_name)){
			//catat nama file ke database
			$sql = "INSERT INTO barang VALUES('','$namabrg','$hargabrg','$jmlbrg','$rincianbrg','$file_name','$nm_kat')";
			echo '<div id="msg">Berhasil mengupload file '.$file_name.'</div>';

		} else{
			echo "Proses upload eror";
		}


if (mysqli_query($kon,$sql))
{
	header('location:users.php');
}
else
{
	die('Unable to insert data:' .mysqli_error($kon));
}

?>