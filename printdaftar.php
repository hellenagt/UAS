<?php 
	include 'koneksi.php'; 
	?><!DOCTYPE html>
<html>
<head>
	
	<title>Pendaftaran Online SMAN 17</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<script > window.print() </script>
<body>
	<h2>DATA PESERTA PENDAFTAR 2020</h2>
	 		<table class="table table-bordered"  >
 					 <thead>
  					  <tr>
      					<th scope="col">No</th>
      					<th scope="col">Kode Pendaftaran</th>
      					<th scope="col">Nama Penserta</th>
      					<th scope="col">Jenis Kelamin</th>
     					<th scope="col">NISN</th>
     					<th scope="col">Asal Sekolah</th>
 					  </tr>
 					</thead>
 					<tbody>
 						<?php  
 						include 'koneksi.php';
 						$no= 1;
						$daftar = mysqli_query($conn, "SELECT sis.kode_pendaftaran, sis.nama_lengkap, sis.jenis_kelamin, sis.nisn, s.nama_asal_sekolah FROM formsiswa sis JOIN formsekolah s ON sis.kode_pendaftaran=s.kode_pendaftaran");
						while ($row = mysqli_fetch_array($daftar)) { ?>
 						<tr>
      					<th scope="col"><?php echo $no++ ?></th>
      					<th scope="col"><?php echo $row['kode_pendaftaran']?></th>
      					<th scope="col"><?php echo $row['nama_lengkap']?></th>
      					<th scope="col"><?php echo $row['jenis_kelamin']?></th>
     					<th scope="col"><?php echo $row['nisn']?></th>
      					<th scope="col"><?php echo $row['nama_asal_sekolah']?></th>
 					  </tr>
 					  <?php }?>
 					</tbody>
 					</table>
</body>
</html>