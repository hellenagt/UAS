<?php
include 'koneksi.php';
if(isset($_GET['id'])) {
$get = $_GET['id'];

$insert = mysqli_query($conn,"INSERT INTO verifikasi (kode_pendaftaran) VALUES ('$get')");

if ($insert) {
	header("location:berandaadminn.php");

}else{

	echo "<script>alert('Periksa Kembali')</script>";
	header("location:berandaadminn.php");

}
}
?>