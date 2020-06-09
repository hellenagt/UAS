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
			margin-left: 400px;
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
   		 }
   		 #sub {
   		 	font-size: 30px;
   		 	background-color: #606060;
   		 	color: white;
   		 }
   		 .card-header{
   		 	font-size: 20px
   		 }
   		 .footer{
			background-color: #606060;
			height: 120px;
			text-align: center;
			margin-top: 270px;
		}
		.footer img {
			margin-top: 15px;
			margin-bottom: 10px;
		}
		.footer p{
			color: white;
		}
		.data {background-color: #f1f1f1; color: black; text-align: center; font-size: 20px; margin: 15px; margin-top: 0px;}
		.card-header {background-color: #606060; font-size: 20px; color: white; margin: 15px; margin-bottom: 0px;}
		.card { margin-left: 200px; }
		.warning {color:#FF0000;}
		.form-group {
			margin: 15px;
		}

	</style>
</head>
<body>
	<body>
	<header>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #606060;">
	<a class="navbar-brand" href="beranda.php">
    	<img src="sma17.png" width="80" height="80" class="d-inline-block align-center"></a>
  	<p>PPDB Online <br> SMAN 17 Surabaya</p>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="beranda.php">Beranda</a>
			</li>
			<li class="nav-item ">
        		<a class="nav-link" href="informasi.php">Informasi</a>
      		</li>
			<li class="nav-item active">
        		<a class="nav-link" href="formdatasiswa.php">Pendaftaran <span class="sr-only">(current)</span></a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="cekverifikasi.php">Verifikasi</a>
      		</li>
		</ul>
	</div>
	</nav>
	</header>
<body>
<div class="row">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header"><center>FORMULIR PESERTA DIDIK</center></div>
			<div class="card-body">
				<form method="POST" action="" enctype="multipart/form-data" class="was-validated">
					<div class="data">UPLOAD BERKAS</div><br>
						<div class="form-group row">
							<label for="diri" class="col-sm-5 col-form-label">Foto Diri 3X4 (*format JPG)</label>
							<div class="col-sm-5">
								<div class="custom-file-mb-3">
									<input type="file" class="custom-file-input" name="diri" id="diri" required>
									<label class="custom-file-label" for="diri">Pilih File</label>
									<div class="invalid-feedback">File tidak valid atau tidak boleh kosong</div>
								</div>
							</div>
							</div>
							<div class="form-group row">
							<label for="kk" class="col-sm-5 col-form-label">Scan Kartu Keluarga (*format JPG)</label>
							<div class="col-sm-5">
								<div class="custom-file-mb-3">
									<input type="file" class="custom-file-input" name="kk" id="kk" required>
									<label class="custom-file-label" for="kk">Pilih File</label>
									<div class="invalid-feedback">File tidak valid atau tidak boleh kosong</div>
								</div>
							</div>
							</div>
							<div class="form-group row">
							<label for="raport3" class="col-sm-5 col-form-label">Scan Raport Semester 3 (*format JPG)</label>
							<div class="col-sm-5">
								<div class="custom-file-mb-3">
									<input type="file" class="custom-file-input" name="raport3" id="raport3" required>
									<label class="custom-file-label" for="raport3">Pilih File</label>
									<div class="invalid-feedback">File tidak valid atau tidak boleh kosong</div>
								</div>
							</div>
							</div>
							<div class="form-group row">
							<label for="raport4" class="col-sm-5 col-form-label">Scan Raport Semester 4 (*format JPG)</label>
							<div class="col-sm-5">
								<div class="custom-file-mb-3">
									<input type="file" class="custom-file-input" name="raport4" id="raport4" required>
									<label class="custom-file-label" for="raport4">Pilih File</label>
									<div class="invalid-feedback">File tidak valid atau tidak boleh kosong</div>
								</div>
							</div>
							</div>
							<div class="form-group row">
							<label for="raport5" class="col-sm-5 col-form-label">Scan Raport Semester 5 (*format JPG)</label>
							<div class="col-sm-5">
								<div class="custom-file-mb-3">
									<input type="file" class="custom-file-input" name="raport5" id="raport5" required>
									<label class="custom-file-label" for="raport5">Pilih File</label>
									<div class="invalid-feedback">File tidak valid atau tidak boleh kosong</div>
								</div>
							</div>
							</div>
							<div class="form-group row">
							<label for="nisn" class="col-sm-5 col-form-label">Scan Nisn  (*format JPG)</label>
							<div class="col-sm-5">
								<div class="custom-file-mb-3">
									<input type="file" class="custom-file-input" name="nisn" id="nisn" required>
									<label class="custom-file-label" for="nisn">Pilih File</label>
									<div class="invalid-feedback">File tidak valid atau tidak boleh kosong</div>
								</div>
							</div>
							</div>							
						<div class="form-group row">
						<div class="col-sm-10">
						<button type="submit" name="upload" class="btn btn-primary"onclick="return confirm('APAKAH DATA ANDA SUDAH BENAR?')"">Kirim</button>
						<button type="reset" class="btn btn-primary">Reset</button>
					</div>
				</div>
				</form>
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

<?php
include 'koneksi.php';
$query = "SELECT max(kode_pendaftaran) as maxKode FROM uploadberkas";
    $hasil = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($hasil);
    $kd = $data['maxKode'];
    $kode = (int) substr($kd, 3, 5);
    $kode++;
    $char = "KD20";
    $kd = $char . sprintf("%04s", $kode);

 if(isset($_POST['upload'])){
 	$filename1 = $_FILES['diri']['name'];
 	$filename2 = $_FILES['kk']['name'];
 	$filename3 = $_FILES['raport3']['name'];
 	$filename4 = $_FILES['raport4']['name'];
 	$filename5 = $_FILES['raport5']['name'];
 	$filename6 = $_FILES['nisn']['name'];

$insert = "INSERT INTO uploadberkas (kode_pendaftaran,gambar_diri,gambar_kk,gambar_raport3,gambar_raport4,gambar_raport5,gambar_nisn) VALUES ('$kd','$filename1','$filename2','$filename3','$filename4','$filename5','$filename6')";

mysqli_query($conn,$insert);
move_uploaded_file($_FILES['diri']['tmp_name'], "berkas/".$filename1);
move_uploaded_file($_FILES['kk']['tmp_name'], "berkas/".$filename2);
move_uploaded_file($_FILES['raport3']['tmp_name'], "berkas/".$filename3);
move_uploaded_file($_FILES['raport4']['tmp_name'], "berkas/".$filename4);
move_uploaded_file($_FILES['raport5']['tmp_name'], "berkas/".$filename5);
move_uploaded_file($_FILES['nisn']['tmp_name'], "berkas/".$filename6);

echo "<script>window.location.href='finishformulir.php?id=$kd'</script>";
 }
 else {
 	echo "<script></script>";
 }
?>

