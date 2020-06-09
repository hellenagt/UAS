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
		.form-group {margin: 15px;}
		.table {margin: 15px; margin-top: 0px; text-align: justify;}

	</style>
</head>
<body>
<?php
$error_bi3 = "";
$error_mm3 = "";
$error_ipa3 = "";
$error_bing3 = "";
$error_bi4 = "";
$error_mm4 = "";
$error_ipa4 = "";
$error_bing4 = "";
$error_bi5 = "";
$error_mm5 = "";
$error_ipa5 = "";
$error_bing5 = "";


$bi3 = "";
$mm3 = "";
$ipa3 = "";
$bing3 = "";
$bi4 = "";
$mm4 = "";
$ipa4 = "";
$bing4 = "";
$bi5 = "";
$mm5 = "";
$ipa5 = "";
$bing5 = "";



if($_SERVER["REQUEST_METHOD"] == "POST"){
	if (empty($_POST["bi3"]))
	{
		$error_bi3 = "Nilai Tidak Boleh Kosong";
	}
	else
	{
		$bi3 = cek_input($_POST["bi3"]); 
		if (!is_numeric($_POST["bi3"])) 
		{
			$error_bi3 = "Inputan hanya boleh angka";
		}
	}
	if (empty($_POST["mm3"]))
	{
		$error_mm3 = "Nilai Tidak Boleh Kosong";
	}
	else
	{
		$mm3 = cek_input($_POST["mm3"]); 
		if (!is_numeric($_POST["mm3"])) 
		{
			$error_mm3 = "Inputan hanya boleh angka";
		}
	}
	if (empty($_POST["ipa3"]))
	{
		$error_ipa3 = "Nilai Tidak Boleh Kosong";
	}
	else
	{
		$ipa3 = cek_input($_POST["ipa3"]); 
		if (!is_numeric($_POST["ipa3"])) 
		{
			$error_ipa3 = "Inputan hanya boleh angka";
		}
	}
	if (empty($_POST["bing3"]))
	{
		$error_bing3 = "Nilai Tidak Boleh Kosong";
	}
	else
	{
		$bing3 = cek_input($_POST["bing3"]); 
		if (!is_numeric($_POST["bing3"])) 
		{
			$error_bing3 = "Inputan hanya boleh angka";
		}
	}
	if (empty($_POST["bi4"]))
	{
		$error_bi4 = "Nilai Tidak Boleh Kosong";
	}
	else
	{
		$bi4 = cek_input($_POST["bi4"]); 
		if (!is_numeric($_POST["bi4"])) 
		{
			$error_bi4 = "Inputan hanya boleh angka";
		}
	}
	if (empty($_POST["mm4"]))
	{
		$error_mm4 = "Nilai Tidak Boleh Kosong";
	}
	else
	{
		$mm4 = cek_input($_POST["mm4"]); 
		if (!is_numeric($_POST["mm4"])) 
		{
			$error_mm4 = "Inputan hanya boleh angka";
		}
	}
	if (empty($_POST["ipa4"]))
	{
		$error_ipa4 = "Nilai Tidak Boleh Kosong";
	}
	else
	{
		$ipa4 = cek_input($_POST["ipa4"]); 
		if (!is_numeric($_POST["ipa4"])) 
		{
			$error_ipa4 = "Inputan hanya boleh angka";
		}
	}
	if (empty($_POST["bing4"]))
	{
		$error_bing4 = "Nilai Tidak Boleh Kosong";
	}
	else
	{
		$bing4 = cek_input($_POST["bing4"]); 
		if (!is_numeric($_POST["bing4"])) 
		{
			$error_bing4 = "Inputan hanya boleh angka";
		}
	}
	if (empty($_POST["bi5"]))
	{
		$error_bi5 = "Nilai Tidak Boleh Kosong";
	}
	else
	{
		$bi5 = cek_input($_POST["bi5"]); 
		if (!is_numeric($_POST["bi5"])) 
		{
			$error_bi5 = "Inputan hanya boleh angka";
		}
	}
	if (empty($_POST["mm5"]))
	{
		$error_mm5 = "Nilai Tidak Boleh Kosong";
	}
	else
	{
		$mm5 = cek_input($_POST["mm5"]); 
		if (!is_numeric($_POST["mm5"])) 
		{
			$error_mm5 = "Inputan hanya boleh angka";
		}
	}
	if (empty($_POST["ipa5"]))
	{
		$error_ipa5 = "Nilai Tidak Boleh Kosong";
	}
	else
	{
		$ipa5 = cek_input($_POST["ipa5"]); 
		if (!is_numeric($_POST["ipa5"])) 
		{
			$error_ipa5 = "Inputan hanya boleh angka";
		}
	}
	if (empty($_POST["bing5"]))
	{
		$error_bing5 = "Nilai Tidak Boleh Kosong";
	}
	else
	{
		$bing5 = cek_input($_POST["bing5"]); 
		if (!is_numeric($_POST["bing5"])) 
		{
			$error_bing5 = "Inputan hanya boleh angka";
		}
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
			<div class="card-header">
				<center>FORMULIR PESERTA DIDIK</center>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
				</div>
			<div class="data">
				DATA NILAI
			</div><br>
						<table class="table table-borderless">
 					 <thead>
  					  <tr>
      					<th scope="col">Semester</th>
      					<th scope="col">Bahasa Indonesia</th>
      					<th scope="col">Matematika</th>
     					<th scope="col">IPA</th>
     					<th scope="col">Bahasa Inggris</th>
 					  </tr>
 					</thead>
  					<tbody>
  					  <tr>
      					 <th scope="row">3</th>
      					 <td><input type="text" name="bi3" class="form-control col-md-10 <?php echo($error_bi3 !="" ? "is-invalid" : "");?>" id="bi3"  value="<?php echo $bi3; ?>"><span class="warning"><?php echo $error_bi3; ?></span></td>
      					 <td><input type="text" name="mm3" class="form-control col-md-10 <?php echo($error_mm3 !="" ? "is-invalid" : "");?>" id="mm3"  value="<?php echo $mm3; ?>"><span class="warning"><?php echo $error_mm3; ?></span></td>
     					  <td> <input type="text" name="ipa3" class="form-control col-md-10 <?php echo($error_ipa3 !="" ? "is-invalid" : "");?>" id="ipa3" value="<?php echo $ipa3; ?>"><span class="warning"><?php echo $error_ipa3; ?></span></td>
      					 <td><input type="text" name="bing3" class="form-control col-md-10 <?php echo($error_bing3 !="" ? "is-invalid" : "");?>" id="bing3"  value="<?php echo $bing3; ?>"><span class="warning"><?php echo $error_bing3; ?></span></td>
    					 </tr>
    					 <tr>
    					   <th scope="row">4</th>
     					  <td><input  type="text" name="bi4" class="form-control col-md-10 <?php echo($error_bi4 !="" ? "is-invalid" : "");?>" id="bi4"  value="<?php echo $bi4; ?>"><span class="warning"><?php echo $error_bi4; ?></span></td>
      					 <td><input type="text" name="mm4" class="form-control col-md-10 <?php echo($error_mm4 !="" ? "is-invalid" : "");?>" id="mm4"  value="<?php echo $mm4; ?>"><span class="warning"><?php echo $error_mm4; ?></span></td>
     					  <td> <input type="text" name="ipa4" class="form-control col-md-10 <?php echo($error_ipa4 !="" ? "is-invalid" : "");?>" id="ipa4" value="<?php echo $ipa4; ?>"><span class="warning"><?php echo $error_ipa4; ?></span></td>
      					 <td><input type="text" name="bing4" class="form-control col-md-10 <?php echo($error_bing4 !="" ? "is-invalid" : "");?>" id="bing4"  value="<?php echo $bing4; ?>"><span class="warning"><?php echo $error_bing4; ?></span></td>
    					 </tr>
     					</tr>
    					 <tr>
    					   <th scope="row">5</th>
						 <td><input  type="text" name="bi5" class="form-control col-md-10 <?php echo($error_bi5 !="" ? "is-invalid" : "");?>" id="bi5"  value="<?php echo $bi5; ?>"><span class="warning"><?php echo $error_bi5; ?></span></td>
      					 <td><input type="text" name="mm5" class="form-control col-md-10 <?php echo($error_mm5 !="" ? "is-invalid" : "");?>" id="mm5"  value="<?php echo $mm5; ?>"><span class="warning"><?php echo $error_mm5; ?></span></td>
     					  <td> <input type="text" name="ipa5" class="form-control col-md-10 <?php echo($error_ipa5 !="" ? "is-invalid" : "");?>" id="ipa5" value="<?php echo $ipa5; ?>"><span class="warning"><?php echo $error_ipa5; ?></span></td>
      					 <td><input type="text" name="bing5" class="form-control col-md-10 <?php echo($error_bing5 !="" ? "is-invalid" : "");?>" id="bing5"  value="<?php echo $bing5; ?>"><span class="warning"><?php echo $error_bing5; ?></span></td>
    					 </tr>
    					 </tr>

    
  					 </tbody>
 					</table>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary" onclick="return confirm('APAKAH DATA ANDA SUDAH BENAR?')"">Kirim</button>
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
$query = "SELECT max(kode_pendaftaran) as maxKode FROM formnilai";
    $hasil = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($hasil);
    $kd = $data['maxKode'];
    $kode = (int) substr($kd, 3, 5);
    $kode++;
    $char = "KD20";
    $kd = $char . sprintf("%04s", $kode);

if (!empty($bi3) && !empty($mm3) && !empty($ipa3) && !empty($bing3) && !empty($bi4) && !empty($mm4) && !empty($ipa4) && !empty($bing4) && !empty($bi5) && !empty($mm5) && !empty($ipa5) && !empty($bing5)) {

	$insert = mysqli_query($conn,"INSERT INTO formnilai (kode_pendaftaran,semester3_bi,semester3_mm,semester3_ipa,semester3_bing,semester4_bi,semester4_mm,semester4_ipa,semester4_bing,semester5_bi,semester5_mm,semester5_ipa,semester5_bing) VALUES ('$kd','$bi3','$mm3','$ipa3','$bing3','$bi4','$mm4','$ipa4','$bing4','$bi5','$mm5','$ipa5','$bing5')");

	if ($insert) {
	echo "<script>window.location.href='upload.php'</script>";

}else{

	echo "<script>alert('Periksa Kembali Form Anda')</script>";

}
}
?>