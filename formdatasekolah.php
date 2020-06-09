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
<?php
$error_npsn = "";
$error_asalsklh = "";
$error_status = "";
$error_alamatsklh = "";

$npsn = "";
$asalsklh = "";
$status = "";
$alamatsklh = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
	if (empty($_POST["npsn"]))
	{
		$error_npsn = "NPSN tidak boleh kosong";
	}
	else
	{
		$npsn = cek_input($_POST["npsn"]);
		if (!is_numeric($_POST["npsn"])) 
		{
			$error_npsn = "NPSN hanya boleh angka";
		}
	}
	if (empty($_POST["asalsklh"]))
	{
		$error_asalsklh = "Nama Asal Sekolah tidak boleh kosong";
	}
	else 
	{
		$asalsklh = cek_input($_POST["asalsklh"]); 
	}
	if (empty($_POST["status"]))
	{
		$error_status = "Status Sekolah tidak boleh kosong";
	}
	else 
	{
		$status = cek_input($_POST["status"]); 
	}
	if (empty($_POST["alamatsklh"]))
	{
		$error_alamatsklh = "Alamat Sekolah tidak boleh kosong";
	}
	else 
	{
		$alamatsklh = cek_input($_POST["alamatsklh"]); 
	}
	
}
function cek_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
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
        		<a class="nav-link" href="cekverifkasi.php">Verifikasi</a>
      		</li>
		</ul>
	</div>
	</nav>
	</header>
<body>
		<div class="row">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header">
				<center>FORMULIR PESERTA DIDIK</center>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
				</div>
			<div class="data">
				DATA ASAL SEKOLAH
			</div><br>
						<div class="form-group row">
							<label for="npsn" class="col-sm-3 col-form-label">NPSN Asal Sekolah/Madrasah</label>
							<div class="col-sm-9">
							<input type="text" name="npsn" class="form-control <?php echo($error_npsn !="" ? "is-invalid" : "");?>" id="npsn" placeholder = "NPSN Asal Sekolah/Madrasah" value="<?php echo $npsn; ?>"><span class="warning"><?php echo $error_npsn; ?></span>
							</div>
							</div>
							<div class="form-group row">
							<label form="asalsklh" class="col-sm-3 col-form-label">Nama Asal Sekolah/Madrasah</label>
							<div class="col-sm-9">
							<input type="text" name="asalsklh" class="form-control <?php echo($error_asalsklh !="" ? "is-invalid" : ""); ?>" id="asalsklh" placeholder="Nama Asal Sekolah/Madrasah" value="<?php echo $asalsklh; ?>"><span class="warning"><?php echo $error_asalsklh;?></span>
							</div>
							</div>
							<div class="form-group row">
					<label form="status" class="col-sm-3 col-form-label">Status</label>
					<div class="col-sm-9">
						<select name="status" class="form-control">	
							<option value="Negri" class="<?= ($_POST["status"]=="1")?"selected":"" ?>">Negri</option>
							<option value="Swasta" class="<?= ($_POST["status"]=="3")?"selected":"" ?>">Swasta</option>
						</select><span class="warning"><?php echo $error_status;?></span>
					</div>
				</div>
				<div class="form-group row">
							<label for="alamatsklh" class="col-sm-3 col-form-label">Alamat Asal Sekolah</label>
							<div class="col-sm-9">
							<input type="text" name="alamatsklh" class="form-control <?php echo($error_alamatsklh !="" ? "is-invalid" : "");?>" id="alamatsklh" placeholder = "Alamat Asal Sekolah" value="<?php echo $alamatsklh; ?>"><span class="warning"><?php echo $error_alamatsklh; ?></span>
							</div>
							</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary"onclick="return confirm('APAKAH DATA ANDA SUDAH BENAR?')"">Kirim</button>
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uas";

$conn = mysqli_connect($servername,$username,$password,$dbname);
//kode //
$query = "SELECT max(kode_pendaftaran) as maxKode FROM formsekolah";
    $hasil = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($hasil);
    $kd = $data['maxKode'];
    $kode = (int) substr($kd, 3, 5);
    $kode++;
    $char = "KD20";
    $kd = $char . sprintf("%04s", $kode);

if (!empty($npsn) && !empty($asalsklh) && !empty($status) && !empty($alamatsklh)) {

	$insert = mysqli_query($conn,"INSERT INTO formsekolah (kode_pendaftaran,npsn,nama_asal_sekolah,status,alamat_asal_sekolah) VALUES ('$kd','$npsn','$asalsklh','$status','$alamatsklh')" );

	if ($insert) {
	echo "<script>location.href='formdatanilai.php'</script>";

}else{

	echo "<script>alert('Periksa Kembali Form Anda')</script>";

}
}
?>