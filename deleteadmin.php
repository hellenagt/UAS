<?php
include 'koneksi.php';
if(isset($_GET['id'])) {
$get = $_GET['id'];
	$delete =mysqli_query($conn, "DELETE  sis.*, o.*, s.*, n.*  FROM formsiswa sis JOIN formortu o ON sis.kode_pendaftaran=o.kode_pendaftaran JOIN formsekolah s ON o.kode_pendaftaran=s.kode_pendaftaran JOIN formnilai n ON s.kode_pendaftaran=n.kode_pendaftaran WHERE sis.kode_pendaftaran = '$get'");

	header("location:berandaadminn.php");
}
?>