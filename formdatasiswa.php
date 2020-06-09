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
$error_ns = "";
$error_jk = "";
$error_nisn = "";
$error_nik = "";
$error_tmptlhr = "";
$error_tgllhr = "";
$error_noakta = "";
$error_agama = "";
$error_kwn = "";
$error_alamat = "";
$error_tmpttnggl = "";
$error_mt = "";
$error_anak = "";
$error_telp = "";
$error_jurusan ="";

$ns = "";
$jk = "";
$nisn = "";
$nik = "";
$tmptlhr = "";
$tgllhr = "";
$noakta = "";
$agama = "";
$kwn = "";
$alamat = "";
$tmpttnggl = "";
$mt = "";
$anak = "";
$telp = "";
$jurusan = "";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if (empty($_POST["ns"]))
	{
		$error_ns = "Nama tidak boleh kosong";
	}
	else 
	{
		$ns = cek_input($_POST["ns"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $ns))
		{
			$error_ns = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["jk"]))
	{
		$error_jk = "<br> Jenis Kelamin tidak boleh kosong";
	}
	else
	{
		$jk = cek_input($_POST["jk"]); 
	}
	if (empty($_POST["nisn"]))
	{
		$error_nisn = "NISN tidak boleh kosong";
	}
	else
	{
		$nisn = cek_input($_POST["nisn"]); 
		if (!is_numeric($_POST["nisn"])) 
		{
			$error_nisn = "NISN hanya boleh angka";
		}
	}
	if (empty($_POST["nik"]))
	{
		$error_nik = "NIK tidak boleh kosong";
	}
	else
	{
		$nik = cek_input($_POST["nik"]); 
		if (!is_numeric($_POST["nik"])) 
		{
			$error_nik = "NIK hanya boleh angka";
		}
	}	
	if (empty($_POST["tmptlhr"]))
	{
		$error_tmptlhr = "Tempat Lahir tidak boleh kosong";
	}
	else
	{
		$tmptlhr = cek_input($_POST["tmptlhr"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $tmptlhr))
		{
			$error_tmptlhr = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["tgllhr"]))
	{
		$error_tgllhr = "Tanggal Lahir tidak boleh kosong";
	}
	else
	{
		$tgllhr = cek_input($_POST["tgllhr"]); 
	}
	if (empty($_POST["noakta"]))
	{
		$error_noakta = "Nomer registrasi tidak boleh kosong";
	}
	else
	{
		$noakta = cek_input($_POST["noakta"]);
		if (!is_numeric($_POST["noakta"])) 
		{
			$error_noakta = "Nomer registrasi hanya boleh angka";
		}
	}
	if (empty($_POST["agama"]))
	{
		$error_agama = "Agama tidak boleh kosong";
	}
	else
	{
		$agama = cek_input($_POST["agama"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $agama))
		{
			$error_agama = "Inputan hanya boleh huruf dan spasi";
		} 
	}
	if (empty($_POST["kwn"]))
	{
		$error_kwn = "<br> Kewarganegaraan tidak boleh kosong";
	}
	else
	{
		$kwn = cek_input($_POST["kwn"]); 
	}
	if (empty($_POST["bk"]))
	{
		$error_bk = "Berkebutuhan Khusus tidak boleh kosong";
	}
	else
	{
		$bk = cek_input($_POST["bk"]); 
	}
	if (empty($_POST["alamat"]))
	{
		$error_alamat = "Alamat tidak boleh kosong";
	}
	else
	{
		$alamat = cek_input($_POST["alamat"]); 
	}
	if (empty($_POST["tmpttnggl"]))
	{
		$error_tmpttnggl = "Tempat tinggal tidak boleh kosong";
	}
	else
	{
		$tmpttnggl = cek_input($_POST["tmpttnggl"]); 
	}
	if (empty($_POST["mt"]))
	{
		$error_mt = "Moda Transportasi tidak boleh kosong";
	}
	else
	{
		$mt = cek_input($_POST["mt"]); 
	}
	if (empty($_POST["anak"]))
	{
		$error_anak = "Anak keberapa tidak boleh kosong";
	}
	else
	{
		$anak = cek_input($_POST["anak"]);
		if (!is_numeric($_POST["anak"])) 
		{
			$error_anak = "Anak keberapa hanya boleh angka";
		} 
	}
	if (empty($_POST["telp"]))
	{
		$error_telp = "Nomer Telepon tidak boleh kosong";
	}
	else
	{
		$telp = cek_input($_POST["telp"]); 
		if (!is_numeric($_POST["telp"])) 
		{
			$error_telp = "Nomer Telepon hanya boleh angka";
		}
	}
	if (empty($_POST["jurusan"]))
	{
		$error_jurusan = "Peminatan jurusan tidak boleh kosong";
	}
	else
	{
		$jurusan = cek_input($_POST["jurusan"]); 
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
				DATA PRIBADI
			</div><br>
						<div class="form-group row">
							<label for="ns" class="col-sm-3 col-form-label">Nama Lengkap</label>
							<div class="col-sm-9">
							<input type="text" name="ns" class="form-control <?php echo($error_ns !="" ? "is-invalid" : "");?>" id="ns" placeholder = "Nama Lengkap" value="<?php echo $ns; ?>"><span class="warning"><?php echo $error_ns; ?></span>
							</div>
							</div>
							<div class="form-group row">
							<label form="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
							<div class="col-sm-9">
							<input type="radio" name="jk" class="<?php if(isset($jk) && $jk=="Laki") echo("checked");?>" value="Laki-Laki">Laki - Laki
							<input type="radio" name="jk"  class="<?php if(isset($jk) && $jk=="Perempuan") echo("checked");?>" value="Perempuan">Perempuan<span class="warning"><?php echo $error_jk;?></span>
							</div>
							</div>
							<div class="form-group row">
							<label form="nisn" class="col-sm-3 col-form-label">NISN</label>
							<div class="col-sm-9">
							<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn;?></span>
							</div>
							</div>
							<div class="form-group row">
							<label form="nik" class="col-sm-3 col-form-label">NIK/No. KITAS (untuk WNA)</label>
							<div class="col-sm-9">
							<input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik;?></span>
							</div>
							</div>
							<div class="form-group row">
							<label form="tmptlhr" class="col-sm-3 col-form-label">Tempat Lahir</label>
							<div class="col-sm-9">
							<input type="text" name="tmptlhr" class="form-control <?php echo($error_tmptlhr !="" ? "is-invalid" : ""); ?>" id="tmptlhr" placeholder="Tempat Lahir" value="<?php echo $tmptlhr; ?>"><span class="warning"><?php echo $error_tmptlhr;?></span>
							</div>
							</div>
							<div class="form-group row">
							<label form="tgllhr" class="col-sm-3 col-form-label">Tanggal Lahir</label>
							<div class="col-sm-9">
							<input type="text" name="tgllhr" class="form-control <?php echo($error_tgllhr !="" ? "is-invalid" : ""); ?>" id="tgllhr" placeholder="yyyy-mm-dd" value="<?php echo $tgllhr; ?>"><span class="warning"><?php echo $error_tgllhr;?></span>
							</div>
							</div>
				<div class="form-group row">
					<label form="noakta" class="col-sm-3 col-form-label">No Registrasi Akta Lahir</label>
					<div class="col-sm-9">
						<input type="text" name="noakta" class="form-control <?php echo($error_noakta !="" ? "is-invalid" : ""); ?>" id="noakta" placeholder="No Registrasi Akta Lahir" value="<?php echo $noakta; ?>"><span class="warning"><?php echo $error_noakta;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="agama" class="col-sm-3 col-form-label">Agama</label>
					<div class="col-sm-9">
						<select name="agama" class="form-control">	
							<option value="Islam" class="<?= ($_POST["agama"]=="1")?"selected":"" ?>">Islam</option>
							<option value="Katolik" class="<?= ($_POST["agama"]=="3")?"selected":"" ?>">Katolik</option>
							<option value="Kristen" class="<?= ($_POST["agama"]=="2")?"selected":"" ?>">Kristen</option>
							<option value="Hindu" class="<?= ($_POST["agama"]=="5")?"selected":"" ?>">Hindu</option>
							<option value="Budha" class="<?= ($_POST["agama"]=="4")?"selected":"" ?>">Budha</option>
						</select><span class="warning"><?php echo $error_agama;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="kwn" class="col-sm-3 col-form-label">Kewarganegaraan</label>
					<div class="col-sm-9">
						<input type="radio" name="kwn" class="<?php if(isset($kwn) && $kwn=="WNI") echo("checked");?>" value="Indonesia (WNI)">Indonesia (WNI)
						<input type="radio" name="kwn"  class="<?php if(isset($kwn) && $kwn=="WNA") echo("checked");?>" value="Asing (WNA)">Asing (WNA)<span class="warning"><?php echo $error_kwn;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="alamat" class="col-sm-3 col-form-label">Alamat</label>
					<div class="col-sm-9">
						<textarea type="text" name="alamat" class="form-control <?php echo($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Alamat Lengkap" value="<?php echo $alamat; ?>"></textarea><span class="warning"><?php echo $error_alamat;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="tmpttnggl" class="col-sm-3 col-form-label">Tempat Tinggal</label>
					<div class="col-sm-9">
						<select name="tmpttnggl" class="form-control">	
							<option value="Bersama Orang Tua" class="<?= ($_POST["tt"]=="1")?"selected":"" ?>">Bersama Orang Tua</option>
							<option value="Bersama Wali" class="<?= ($_POST["tt"]=="3")?"selected":"" ?>">Bersama Wali</option>
							<option value="Tinggal Sendiri" class="<?= ($_POST["tt"]=="2")?"selected":"" ?>">Tinggal Sendiri</option>
						</select><span class="warning"><?php echo $error_tmpttnggl;?></span>
					</div>
				</div>
					<div class="form-group row">
			<label for="mt" class="col-sm-3 col-form-label">Moda Transportasi</label>
			<div class="col-sm-9">
			<select name="mt" class="form-control">
				<option value="Motor">Sepeda Motor</option>
				<option value="Mobil">Mobil</option>
				<option value="Jalan">Jalan Kaki</option>
				<option value="Umum">Kendaraan Umum</option>
				<option value="Ojol">Ojek/Taxi Online</option>
			</select>
			<span class="warning"><?php echo $error_mt; ?></span>
			</div>
			</div>
				<div class="form-group row">
					<label form="anak" class="col-sm-3 col-form-label">Anak ke- (berdasakan KK)</label>
					<div class="col-sm-9">
						<input type="text" name="anak" class="form-control <?php echo($error_anak !="" ? "is-invalid" : ""); ?>" id="anak" placeholder="Anak Ke-" value="<?php echo $anak; ?>"><span class="warning"><?php echo $error_anak;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="telp" class="col-sm-3 col-form-label">No. Telepon </label>
					<div class="col-sm-9">
						<input type="text" name="telp" class="form-control <?php echo($error_telp !="" ? "is-invalid" : ""); ?>" id="telp" placeholder="Nomer Telepon" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="jurusan" class="col-sm-3 col-form-label">Peminatan Jurusan</label>
					<div class="col-sm-9">
						<select name="jurusan" class="form-control">	
							<option value="IPA" class="<?= ($_POST["jurusan"]=="1")?"selected":"" ?>">IPA</option>
							<option value="IPS" class="<?= ($_POST["jurusan"]=="3")?"selected":"" ?>">IPS</option>
						</select><span class="warning"><?php echo $error_jurusan;?></span>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary"onclick="return confirm('APAKAH DATA ANDA SUDAH BENAR?')">Kirim</button>
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
$query = "SELECT max(kode_pendaftaran) as maxKode FROM formsiswa";
    $hasil = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($hasil);
    $kd = $data['maxKode'];
    $kode = (int) substr($kd, 3, 5);
    $kode++;
    $char = "KD20";
    $kd = $char . sprintf("%04s", $kode);

if (!empty($ns) && !empty($jk) && !empty($nisn) && !empty($nik) && !empty($tmptlhr) && !empty($tgllhr) && !empty($noakta) && !empty($agama) && !empty($kwn) && !empty($alamat) && !empty($tmpttnggl) && !empty($mt) && !empty($anak) && !empty($telp) && !empty($jurusan)) {

	$insert = mysqli_query($conn,"INSERT INTO formsiswa (kode_pendaftaran,nama_lengkap,jenis_kelamin,nisn,nik,tempat_lahir,tanggal_lahir,no_akta,agama,kwn,alamat,tempat_tinggal,moda_transportasi,anak_ke,no_telepon,peminatan_jurusan) VALUES ('$kd','$ns','$jk','$nisn','$nik','$tmptlhr','$tgllhr','$noakta','$agama','$kwn','$alamat','$tmpttnggl','$mt','$anak','$telp','$jurusan')");

	if ($insert) {
	echo "<script>location.href='formdataortu.php'</script>";

}else{

	echo "<script>alert('Periksa Kembali Form Anda')</script>";

}
}
?>