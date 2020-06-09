<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Online SMAN 17</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		body {
			background-color: #f1f1f1;
		}
		.navbar p {
			font-size: 23px;
			font-weight: bold;
			color: white;
		}
		.navbar img {
			margin-left: 30px;
		}
		.collapse {
			margin-left: 550px;
		}
		.collapse li a {
			margin-left: 30px;
			font-weight: bold;
		}
		.card {
         margin-top: 10px;
        -webkit-box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
        -moz-box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
         box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
         margin-left: 0%;
   		 }
   		.isi {
   			margin: 50px;
   			text-align: center;
   		 }
   		 .isi h3{
   		 	text-align: left;
   		 	font-weight: normal;
   		 }
   		 .isi p{
   		 	text-align: justify;
   		 }
		.footer {
			background-color: #606060;
			height: 120px;
			text-align: center;
			margin-top: 300px;

		}
		.footer img {
			margin-top: 15px;
			margin-bottom: 10px;
		}
		.footer p{
			color: white;
		}
		#judul {
			font-weight: bold;
			font-size: 30px;
			padding-top: 10px;
			color: black;
		}
		#judul a { font-size: 20px; color: black; }
	</style>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #606060;">
	<a class="navbar-brand">
    	<img src="sma17.png" width="80" height="80" class="d-inline-block align-center"></a>
  	<p>Admin<br>PPDB SMAN 17 Surabaya</p>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="berandaadminn.php">Data Peserta <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">Logout</a>
			</li>	
		</ul>
	</div>
	</nav>
	</header>
	<body>
		<div class="container-fluid">
   				 <div class="col-md-12">
    				  <div class="card">
    				  	<div class="col-md-12" id="judul"><p>DATA PESERTA PENDAFTAR 2020</p><a href="printdaftar.php" target="_blank" ><img src="print.png" width="30px"> cetak</a>
    				  	<hr></div>
    				  		<table class="table table-borderless">
 					 <thead>
  					  <tr>
      					<th scope="col">No</th>
      					<th scope="col">Kode Pendaftaran</th>
      					<th scope="col">Nama Peserta</th>
      					<th scope="col">Jenis Kelamin</th>
     					<th scope="col">NISN</th>
     					<th scope="col">Asal Sekolah</th>
     					<th scope="col">Fitur</th>
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
			      		 <th scope="col">
			                <a href="detail.php?id=<?php echo $row['kode_pendaftaran']?>">Detail ||</a>
			                <a href="deleteadmin.php?id=<?php echo $row['kode_pendaftaran']?>" onclick="return confirm('Apakah anda yakin ingin menghapus?')" >Hapus ||</a>
			                <a href="verifikasi.php?id=<?php echo $row['kode_pendaftaran']?>" onclick="return confirm('Apakah anda yakin ingin verifikasi?')" >Verifikasi</a>

			              </th>
 					  </tr>
 					  <?php }?>
 					</tbody>
 					</table>			  
    				  </div>
  				</div>
		</div>
	</body>
<br>
<div class="footer">
	<img src="sma17.png" width="50" height="50"><br>
	<p>&copy2020 PPDB SMAN 17 Surabaya. All right reserved.</p>
</div>
</body>
</html>