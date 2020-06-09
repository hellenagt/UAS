<?php 
session_start();
include 'koneksi.php';
if (isset($_GET['id'])) {
	$get = $_GET['id'];

$peserta = mysqli_query($conn, "SELECT sis.*, o.*, s.*, n.* FROM formsiswa sis JOIN formortu o ON sis.kode_pendaftaran=o.kode_pendaftaran JOIN formsekolah s ON o.kode_pendaftaran=s.kode_pendaftaran JOIN formnilai n ON s.kode_pendaftaran=n.kode_pendaftaran WHERE sis.kode_pendaftaran = '$get'");
while ($id = mysqli_fetch_object($peserta)){

?>
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
			margin-left: 300px;
		}
		.collapse li a {
			margin-left: 330px;
			font-weight: bold;
			margin-right: 30px;
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
			margin-top: 200px;

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
		}
		.card h4{
   		 	margin: 15px;
   		 	font-weight: normal;
   		 }
   		 .card ol, .card hr, .uu, .row {
   		 	margin: 15px;
   		 }
   		 #uu {
   		 	margin: 25px;
   		 }
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
		</ul>
	</div>
	</nav>
	</header>
	<body>
		<div class="container-fluid">
   				 <div class="col-md-12 card">
    				  	<div class="col-md-12" id="judul"><p>DETAIL DATA PESERTA</p><hr></div>
    				  	<div class="row">
		    					<div class="col-md-6">
		    						<div class="card">
		    				<table class="table table-borderless col-md-12" >
		    				<h4>DATA SISWA</h4>
		 					<tr>
		 					<td>Kode Pendaftaran</td><td>:</td><td><?php echo $id->kode_pendaftaran ?></td></tr><tr>
		 					<td>Nama Lengkap</td><td>:</td><td><?php echo $id->nama_lengkap ?></td></tr><tr>
		 					<td>Jenis Kelamin</td><td>:</td><td><?php echo $id->jenis_kelamin ?></td></tr><tr>
		 					<td>NISN</td><td>:</td><td><?php echo $id->nisn ?></td></tr><tr>
		 					<td>NIK</td><td>:</td><td><?php echo $id->nik ?></td></tr></tr>	
		 					<td>Tempat, Tanggal Lahir</td><td>:</td><td><?php echo $id->tempat_lahir; echo ", ";echo $id->tanggal_lahir ; ?></td></tr>	
		 					<td>No. Akta</td><td>:</td><td><?php echo $id->no_akta ?></td></tr>	
		 					<td>Agama</td><td>:</td><td><?php echo $id->agama ?></td></tr>	
		 					<td>Kewarganegaraan</td><td>:</td><td><?php echo $id->kwn ?></td></tr>	
		 					<td>Alamat</td><td>:</td><td><?php echo $id->alamat ?></td></tr>	
		 					<td>Tempat Tinggal</td><td>:</td><td><?php echo $id->tempat_tinggal ?></td></tr>
		 					<td>Moda Transportasi</td><td>:</td><td><?php echo $id->moda_transportasi ?></td></tr>	
		 					<td>Anak Ke-</td><td>:</td><td><?php echo $id->anak_ke ?></td></tr>	
		 					<td>Nomer Telepon</td><td>:</td><td><?php echo $id->no_telepon ?></td><tr>
		 					<td>Peminatan Jurusan</td><td>:</td><td><?php echo $id->peminatan_jurusan ?></td>	
		 					</tr>
		 					</table>
		    						</div>
		    						<div class="card">
		    				<table class="table table-borderless col-md-10" >
		    				<h4>DATA ASAL SEKOLAH</h4>
		 					<tr>
		 					<td>NPSN</td><td>:</td><td><?php echo $id->npsn ?></td></tr><tr>
		 					<td>Nama Asal Sekolah</td><td>:</td><td><?php echo $id->nama_asal_sekolah ?></td></tr><tr>
		 					<td>Status</td><td>:</td><td><?php echo $id->status ?></td></tr><tr>
		 					<td>Alamat Asal Sekolah</td><td>:</td><td><?php echo $id->alamat_asal_sekolah ?></td></tr><tr>
		 					
		 					</table>
		    						</div>
		    					</div>
		    					<div class="col-md-6">
		    						<div class="card">
		    				<table class="table table-borderless col-md-12" >
		    				<h4>DATA ORANG TUA</h4>
		 					<tr>
		 					<td>Nama Ayah</td><td>:</td><td><?php echo $id->nama_ayah ?></td></tr><tr>
		 					<td>Pendidikan Ayah</td><td>:</td><td><?php echo $id->pendidikan_ayah ?></td></tr><tr>
		 					<td>Pekerjaan Ayah</td><td>:</td><td><?php echo $id->pekerjaan_ayah ?></td></tr><tr>
		 					<td>Penghasilan Ayah</td><td>:</td><td><?php echo $id->penghasilan_ayah ?></td></tr><tr>
		 					<td>Telepon Ayah</td><td>:</td><td><?php echo $id->telepon_ayah ?></td></tr></tr>	
		 					<td>Nama Ibu</td><td>:</td><td><?php echo $id->nama_ibu ?></td></tr><tr>
		 					<td>Pendidikan Ibu</td><td>:</td><td><?php echo $id->pendidikan_ibu ?></td></tr><tr>
		 					<td>Pekerjaan Ibu</td><td>:</td><td><?php echo $id->pekerjaan_ibu ?></td></tr><tr>
		 					<td>Penghasilan Ibu</td><td>:</td><td><?php echo $id->penghasilan_ibu ?></td></tr><tr>
		 					<td>Telepon Ibu</td><td>:</td><td><?php echo $id->telepon_ibu ?></td></tr></tr>
							<td>Nama Wali</td><td>:</td><td><?php echo $id->nama_wali ?></td></tr><tr>
		 					<td>Pendidikan Wali</td><td>:</td><td><?php echo $id->pendidikan_wali ?></td></tr><tr>
		 					<td>Pekerjaan Wali</td><td>:</td><td><?php echo $id->pekerjaan_wali ?></td></tr><tr>
		 					<td>Penghasilan Wali</td><td>:</td><td><?php echo $id->penghasilan_wali ?></td></tr><tr>
		 					<td>Telepon Wali</td><td>:</td><td><?php echo $id->telepon_wali ?></td></tr></tr>
		 					</tr>
		 					</table>
		    						</div>

		    						<div class="card">
		    				<table class="table table-border col-md-12" >
		    				<h4>DATA NILAI</h4>
		    				<thead><td>Semester</td><td>Bahasa Indonesia</td><td>Matematika</td><td>IPA</td><td>Bahasa Inggris</td></thead>
		 					<tbody>
		 						<tr><td>Semester 3</td><td><?php echo $id->semester3_bi ?></td><td><?php echo $id->semester3_mm ?></td><td><?php echo $id->semester3_ipa ?></td><td><?php echo $id->semester3_bing ?></td></tr>
		 						<tr><td>Semester 4</td><td><?php echo $id->semester4_bi ?></td><td><?php echo $id->semester4_mm ?></td><td><?php echo $id->semester4_ipa ?></td><td><?php echo $id->semester4_bing ?></td></tr>
		 						<tr><td>Semester 5</td><td><?php echo $id->semester5_bi ?></td><td><?php echo $id->semester5_mm ?></td><td><?php echo $id->semester5_ipa ?></td><td><?php echo $id->semester5_bing ?></td></tr>
		 					</tbody>
		 					</table>
		    						</div>
		    					</div>
		    				</div>
		    				<div class="card" id="uu">
		    				<table class="table table-borderless col-md-12" >
		    					<?php  
		    					$insert = mysqli_query($conn,"SELECT * FROM uploadberkas WHERE kode_pendaftaran= '$get'");
		    					while ($id = mysqli_fetch_array($insert)) {
		    					?>
		    				<h4>BERKAS</h4>
		    				<tr>
		    				<td>Foto 3x4<br><br><img src="berkas/<?php echo $id['gambar_diri']; ?>" width="50%" /></td>
		    				<td>Kartu Keluarga<br><br><img src="berkas/<?php echo $id['gambar_kk']; ?>" width="50%" /></td>
		    				</tr>
		    				<tr>
		    				<td>Raport Semester 3<br><br><img src="berkas/<?php echo $id['gambar_raport3']; ?>" width="50%" /></td>
		    				<td>Raport Semester 4<br><br><img src="berkas/<?php echo $id['gambar_raport4']; ?>" width="50%" /></td>
		    				</tr>
		    				<tr>
		    				<td>Raport Semester 5<br><br><img src="berkas/<?php echo $id['gambar_raport5']; ?>" width="50%" /></td>
		    				<td>NISN<br><br><img src="berkas/<?php echo $id['gambar_nisn']; ?>" width="50%" /></td>
		    				</tr>
		 					<?php } ?>
		 					</table>
		    						</div>
		    					<br>
		    					</div>
		    				</div>
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
<?php } }?>

