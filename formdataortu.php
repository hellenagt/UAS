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
$error_nmayah = "";
$error_pddkayah = "";
$error_pkrjnayah = "";
$error_pnghslayah = "";
$error_telpayah = "";
$error_nmibu = "";
$error_pddkibu = "";
$error_pkrjnibu = "";
$error_pnghslibu = "";
$error_telpibu = "";
$error_nmwali = "";
$error_pddkwali = "";
$error_pkrjnwali = "";
$error_pnghslwali = "";
$error_telpwali = "";


$nmayah = "";
$pddkayah = "";
$pkrjnayah = "";
$pnghslayah = "";
$telpayah = "";
$nmibu = "";
$pddkibu = "";
$pkrjnibu = "";
$pnghslibu = "";
$telpibu = "";
$nmwali = "";
$pddkwali = "";
$pkrjnwali = "";
$pnghslwali = "";
$telpwali = "";


 if($_SERVER["REQUEST_METHOD"] == "POST"){
 	if (empty($_POST["nmayah"]))
	{
		$error_nmayah = "Nama Ayah tidak boleh kosong";
	}
	else 
	{
		$nmayah = cek_input($_POST["nmayah"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $nmayah))
		{
			$error_nmayah = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["pddkayah"]))
	{
		$error_pddkayah = "Pendidikan Ayah tidak boleh kosong";
	}
	else
	{
		$pddkayah = cek_input($_POST["pddkayah"]); 
	}
	if (empty($_POST["pkrjnayah"]))
	{
		$error_pkrjnayah = "Pekerjaan Ayah tidak boleh kosong";
	}
	else
	{
		$pkrjnayah = cek_input($_POST["pkrjnayah"]); 
	}
	if (empty($_POST["pnghslayah"]))
	{
		$error_pnghslayah = "Penghasilan Ayah tidak boleh kosong";
	}
	else
	{
		$pnghslayah = cek_input($_POST["pnghslayah"]); 
	}
	if (empty($_POST["telpayah"]))
	{
		$error_telpayah = "Nomer Telepon tidak boleh kosong";
	}
	else
	{
		$telpayah = cek_input($_POST["telpayah"]);
		if (!is_numeric($_POST["telpayah"])) 
		{
			$error_telpayah = "Nomer Telepon hanya boleh angka";
		}
	}
	if (empty($_POST["nmibu"]))
	{
		$error_nmibu = "Nama Ibu tidak boleh kosong";
	}
	else 
	{
		$nmibu = cek_input($_POST["nmibu"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $nmibu))
		{
			$error_nmibu = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["pddkibu"]))
	{
		$error_pddkibu = "Pendidikan Ibu tidak boleh kosong";
	}
	else
	{
		$pddkibu = cek_input($_POST["pddkibu"]); 
	}
	if (empty($_POST["pkrjnibu"]))
	{
		$error_pkrjnibu = "Pekerjaan Ibu tidak boleh kosong";
	}
	else
	{
		$pkrjnibu = cek_input($_POST["pkrjnibu"]); 
	}
	if (empty($_POST["pnghslibu"]))
	{
		$error_pnghslibu = "Penghasilan Ibu tidak boleh kosong";
	}
	else
	{
		$pnghslibu = cek_input($_POST["pnghslibu"]); 
	}
	if (empty($_POST["telpibu"]))
	{
		$error_telpibu = "Nomer Telepon tidak boleh kosong";
	}
	else
	{
		$telpibu = cek_input($_POST["telpibu"]);
		if (!is_numeric($_POST["telpibu"])) 
		{
			$error_telpibu = "Nomer Telepon hanya boleh angka";
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
				DATA ORANG TUA
			</div><br>
						<div class="form-group row">
							<label for="nmayah" class="col-sm-3 col-form-label">Nama Ayah</label>
							<div class="col-sm-9">
							<input type="text" name="nmayah" class="form-control <?php echo($error_nmayah !="" ? "is-invalid" : "");?>" id="nmayah" placeholder = "Nama Lengkap Ayah" value="<?php echo $nmayah; ?>"><span class="warning"><?php echo $error_nmayah; ?></span>
							</div>
							</div>
				<div class="form-group row">
					<label form="pddkayah" class="col-sm-3 col-form-label">Pendidikan Ayah</label>
					<div class="col-sm-9">
						<select name="pddkayah" class="form-control">	
							<option value="Tidak Sekolah" class="<?= ($_POST["pddkayah"]=="1")?"selected":"" ?>">Tidak Sekolah</option>
							<option value="SD/MI" class="<?= ($_POST["pddkayah"]=="3")?"selected":"" ?>">SD/MI</option>
							<option value="SMP/MTs" class="<?= ($_POST["pddkayah"]=="2")?"selected":"" ?>">SMP/MTs</option>
							<option value="SMA/SMK/MAN" class="<?= ($_POST["pddkayah"]=="5")?"selected":"" ?>">SMA/SMK/MA</option>
							<option value="Diploma" class="<?= ($_POST["pddkayah"]=="4")?"selected":"" ?>">Diploma</option>
							<option value="S1" class="<?= ($_POST["pddkayah"]=="4")?"selected":"" ?>">S1</option>
							<option value="S2" class="<?= ($_POST["pddkayah"]=="4")?"selected":"" ?>">S2</option>
							<option value="S3" class="<?= ($_POST["pddkayah"]=="4")?"selected":"" ?>">S3</option>
						</select><span class="warning"><?php echo $error_pddkayah;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="pkrjnayah" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
					<div class="col-sm-9">
						<select name="pkrjnayah" class="form-control">	
							<option value="Buruh" class="<?= ($_POST["pkrjnayah"]=="1")?"selected":"" ?>">Buruh</option>
							<option value="Tani" class="<?= ($_POST["pkrjnayah"]=="3")?"selected":"" ?>">Tani</option>
							<option value="Wiraswasta" class="<?= ($_POST["pkrjnayah"]=="2")?"selected":"" ?>">Wiraswasta</option>
							<option value="PNS" class="<?= ($_POST["pkrjnayah"]=="5")?"selected":"" ?>">PNS</option>
							<option value="Porli/TNI" class="<?= ($_POST["pkrjnayah"]=="4")?"selected":"" ?>">Porli/TNI</option>
							<option value="Perangkat Desa" class="<?= ($_POST["pddkayah"]=="4")?"selected":"" ?>">Perangkat Desa</option>
							<option value="Nelayan" class="<?= ($_POST["pkrjnayah"]=="4")?"selected":"" ?>">Nelayan</option>
							<option value="Lainnya" class="<?= ($_POST["pddkayah"]=="4")?"selected":"" ?>">Lainnya</option>
						</select><span class="warning"><?php echo $error_pkrjnayah;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="pnghslayah" class="col-sm-3 col-form-label">Penghasilan Ayah</label>
					<div class="col-sm-9">
						<select name="pnghslayah" class="form-control">	
							<option value="<500rb" class="<?= ($_POST["pnghslayah"]=="1")?"selected":"" ?>"><500rb</option>
							<option value="500rb-1jt" class="<?= ($_POST["pnghslayah"]=="3")?"selected":"" ?>">500rb-1jt</option>
							<option value="1jt-3jt" class="<?= ($_POST["pnghslayah"]=="2")?"selected":"" ?>">1jt-3jt</option>
							<option value="3jt-5jt" class="<?= ($_POST["pnghslayah"]=="5")?"selected":"" ?>">3jt-5jt</option>
							<option value="5jt-10jt" class="<?= ($_POST["pnghslayah"]=="4")?"selected":"" ?>">5jt-10jt</option>
							<option value="10jt+" class="<?= ($_POST["pnghslayah"]=="4")?"selected":"" ?>">10jt+</option>
						</select><span class="warning"><?php echo $error_pnghslayah;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="telpayah" class="col-sm-3 col-form-label">No.Telp/Hp Ayah</label>
					<div class="col-sm-9">
						<input type="text" name="telpayah" class="form-control <?php echo($error_telpayah !="" ? "is-invalid" : ""); ?>" id="telpayah" placeholder="No.Telp/Hp Ayah" value="<?php echo $telpayah; ?>"><span class="warning"><?php echo $error_telpayah;?></span>
					</div>
				</div>
				<div class="form-group row">
							<label for="nmibu" class="col-sm-3 col-form-label">Nama Ibu</label>
							<div class="col-sm-9">
							<input type="text" name="nmibu" class="form-control <?php echo($error_nmibu !="" ? "is-invalid" : "");?>" id="nmibu" placeholder = "Nama Lengkap Ibu" value="<?php echo $nmibu; ?>"><span class="warning"><?php echo $error_nmibu; ?></span>
							</div>
							</div>
				<div class="form-group row">
					<label form="pddkibu" class="col-sm-3 col-form-label">Pendidikan Ibu</label>
					<div class="col-sm-9">
						<select name="pddkibu" class="form-control">	
							<option value="Tidak Sekolah" class="<?= ($_POST["pddkibu"]=="1")?"selected":"" ?>">Tidak Sekolah</option>
							<option value="SD/MI" class="<?= ($_POST["pddkibu"]=="3")?"selected":"" ?>">SD/MI</option>
							<option value="SMP/MTs" class="<?= ($_POST["pddkibu"]=="2")?"selected":"" ?>">SMP/MTs</option>
							<option value="SMA/SMK/MAN" class="<?= ($_POST["pddkibu"]=="5")?"selected":"" ?>">SMA/SMK/MA</option>
							<option value="Diploma" class="<?= ($_POST["pddkibu"]=="4")?"selected":"" ?>">Diploma</option>
							<option value="S1" class="<?= ($_POST["pddkibu"]=="4")?"selected":"" ?>">S1</option>
							<option value="S2" class="<?= ($_POST["pddkibu"]=="4")?"selected":"" ?>">S2</option>
							<option value="S3" class="<?= ($_POST["pddkibu"]=="4")?"selected":"" ?>">S3</option>
						</select><span class="warning"><?php echo $error_pddkibu;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="pkrjnibu" class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
					<div class="col-sm-9">
						<select name="pkrjnibu" class="form-control">
							<option value="Ibu Rumah Tangga" class="<?= ($_POST["pkrjnibu"]=="1")?"selected":"" ?>">Ibu Rumah Tangga</option>	
							<option value="Buruh" class="<?= ($_POST["pkrjnibu"]=="1")?"selected":"" ?>">Buruh</option>
							<option value="Tani" class="<?= ($_POST["pkrjnibu"]=="3")?"selected":"" ?>">Tani</option>
							<option value="Wiraswasta" class="<?= ($_POST["pkrjnibu"]=="2")?"selected":"" ?>">Wiraswasta</option>
							<option value="PNS" class="<?= ($_POST["pkrjnibu"]=="5")?"selected":"" ?>">PNS</option>
							<option value="Porli/TNI" class="<?= ($_POST["pkrjnibu"]=="4")?"selected":"" ?>">Porli/TNI</option>
							<option value="Perangkat Desa" class="<?= ($_POST["pkrjnibu"]=="4")?"selected":"" ?>">Perangkat Desa</option>
							<option value="Nelayan" class="<?= ($_POST["pkrjnibu"]=="4")?"selected":"" ?>">Nelayan</option>
							<option value="Lainnya" class="<?= ($_POST["pkrjnibu"]=="4")?"selected":"" ?>">Lainnya</option>
						</select><span class="warning"><?php echo $error_pkrjnibu;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="pnghslibu" class="col-sm-3 col-form-label">Penghasilan Ibu</label>
					<div class="col-sm-9">
						<select name="pnghslibu" class="form-control">	
							<option value="<500rb" class="<?= ($_POST["pnghslibu"]=="1")?"selected":"" ?>"><500rb</option>
							<option value="500rb-1jt" class="<?= ($_POST["pnghslibu"]=="3")?"selected":"" ?>">500rb-1jt</option>
							<option value="1jt-3jt" class="<?= ($_POST["pnghslibu"]=="2")?"selected":"" ?>">1jt-3jt</option>
							<option value="3jt-5jt" class="<?= ($_POST["pnghslibu"]=="5")?"selected":"" ?>">3jt-5jt</option>
							<option value="5jt-10jt" class="<?= ($_POST["pnghslibu"]=="4")?"selected":"" ?>">5jt-10jt</option>
							<option value="10jt+" class="<?= ($_POST["pnghslibu"]=="4")?"selected":"" ?>">10jt+</option>
						</select><span class="warning"><?php echo $error_pnghslibu;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="telpibu" class="col-sm-3 col-form-label">No.Telp/Hp Ibu</label>
					<div class="col-sm-9">
						<input type="text" name="telpibu" class="form-control <?php echo($error_telpibu !="" ? "is-invalid" : ""); ?>" id="telpibu" placeholder="No.Telp/Hp Ibu" value="<?php echo $telpibu; ?>"><span class="warning"><?php echo $error_telpibu;?></span>
					</div>
				</div>
				<div class="form-group row">
							<label for="data" class="col-form-label">Data wali diisi jika memang ada wali, jika tidak ada tidak perlu diisi. Pilihan ini bersifat optional</label>
							</div>
					<div class="form-group row">
							<label for="nmwali" class="col-sm-3 col-form-label">Nama Wali</label>
							<div class="col-sm-9">
							<input type="text" name="nmwali" class="form-control <?php echo($error_nmwali !="" ? "is-invalid" : "");?>" id="nmwali" placeholder = "Nama Lengkap Wali" value="<?php echo $nmwali; ?>"><span class="warning"><?php echo $error_nmwali; ?></span>
							</div>
							</div>
				<div class="form-group row">
					<label form="pddkwali" class="col-sm-3 col-form-label">Pendidikan Wali</label>
					<div class="col-sm-9">
						<select name="pddkwali" class="form-control">	
							<option value="Tidak Sekolah" class="<?= ($_POST["pddkwali"]=="1")?"selected":"" ?>">Tidak Sekolah</option>
							<option value="SD/MI" class="<?= ($_POST["pddkwali"]=="3")?"selected":"" ?>">SD/MI</option>
							<option value="SMP/MTs" class="<?= ($_POST["pddkwali"]=="2")?"selected":"" ?>">SMP/MTs</option>
							<option value="SMA/SMK/MAN" class="<?= ($_POST["pddkwali"]=="5")?"selected":"" ?>">SMA/SMK/MA</option>
							<option value="Diploma" class="<?= ($_POST["pddkwali"]=="4")?"selected":"" ?>">Diploma</option>
							<option value="S1" class="<?= ($_POST["pddkwali"]=="4")?"selected":"" ?>">S1</option>
							<option value="S2" class="<?= ($_POST["pddkwali"]=="4")?"selected":"" ?>">S2</option>
							<option value="S3" class="<?= ($_POST["pddkwali"]=="4")?"selected":"" ?>">S3</option>
						</select><span class="warning"><?php echo $error_pddkwali;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="pkrjnwali" class="col-sm-3 col-form-label">Pekerjaan Wali</label>
					<div class="col-sm-9">
						<select name="pkrjnwali" class="form-control">
							<option value="Ibu Rumah Tangga" class="<?= ($_POST["pkrjnwali"]=="1")?"selected":"" ?>">Ibu Rumah Tangga</option>	
							<option value="Buruh" class="<?= ($_POST["pkrjnwali"]=="1")?"selected":"" ?>">Buruh</option>
							<option value="Tani" class="<?= ($_POST["pkrjnwali"]=="3")?"selected":"" ?>">Tani</option>
							<option value="Wiraswasta" class="<?= ($_POST["pkrjnwali"]=="2")?"selected":"" ?>">Wiraswasta</option>
							<option value="PNS" class="<?= ($_POST["pkrjnwali"]=="5")?"selected":"" ?>">PNS</option>
							<option value="Porli/TNI" class="<?= ($_POST["pkrjnwali"]=="4")?"selected":"" ?>">Porli/TNI</option>
							<option value="Perangkat Desa" class="<?= ($_POST["pkrjnwali"]=="4")?"selected":"" ?>">Perangkat Desa</option>
							<option value="Nelayan" class="<?= ($_POST["pkrjnwali"]=="4")?"selected":"" ?>">Nelayan</option>
							<option value="Lainnya" class="<?= ($_POST["pkrjnwali"]=="4")?"selected":"" ?>">Lainnya</option>
						</select><span class="warning"><?php echo $error_pkrjnwali;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="pnghslwali" class="col-sm-3 col-form-label">Penghasilan Wali</label>
					<div class="col-sm-9">
						<select name="pnghslwali" class="form-control">	
							<option value="<500rb" class="<?= ($_POST["pnghslwali"]=="1")?"selected":"" ?>"><500rb</option>
							<option value="500rb-1jt" class="<?= ($_POST["pnghslwali"]=="3")?"selected":"" ?>">500rb-1jt</option>
							<option value="1jt-3jt" class="<?= ($_POST["pnghslwali"]=="2")?"selected":"" ?>">1jt-3jt</option>
							<option value="3jt-5jt" class="<?= ($_POST["pnghslwali"]=="5")?"selected":"" ?>">3jt-5jt</option>
							<option value="5jt-10jt" class="<?= ($_POST["pnghslwali"]=="4")?"selected":"" ?>">5jt-10jt</option>
							<option value="10jt+" class="<?= ($_POST["pnghslwali"]=="4")?"selected":"" ?>">10jt+</option>
						</select><span class="warning"><?php echo $error_pnghslwali;?></span>
					</div>
				</div>
				<div class="form-group row">
					<label form="telpwali" class="col-sm-3 col-form-label">No.Telp/Hp Wali</label>
					<div class="col-sm-9">
						<input type="text" name="telpwali" class="form-control <?php echo($error_telpwali !="" ? "is-invalid" : ""); ?>" id="telpwali" placeholder="No.Telp/Hp Wali" value="<?php echo $telpwali; ?>"><span class="warning"><?php echo $error_telpwali;?></span>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary" onclick="return confirm('APAKAH DATA ANDA SUDAH BENAR?')">Kirim</button>
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
$query = "SELECT max(kode_pendaftaran) as maxKode FROM formortu";
    $hasil = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($hasil);
    $kd = $data['maxKode'];
    $kode = (int) substr($kd, 3, 5);
    $kode++;
    $char = "KD20";
    $kd = $char . sprintf("%04s", $kode);

if (!empty($nmayah) && !empty($pddkayah) && !empty($pkrjnayah) && !empty($pnghslayah) && !empty($telpayah) && !empty($nmibu) && !empty($pddkibu) && !empty($pkrjnibu) && !empty($pnghslibu) && !empty($telpibu)) {

	$insert = mysqli_query($conn,"INSERT INTO formortu (kode_pendaftaran,nama_ayah,pendidikan_ayah,pekerjaan_ayah,penghasilan_ayah,telepon_ayah,nama_ibu,pendidikan_ibu,pekerjaan_ibu,penghasilan_ibu,telepon_ibu,nama_wali,pendidikan_wali,pekerjaan_wali,penghasilan_wali,telepon_wali) VALUES ('$kd','$nmayah','$pddkayah','$pkrjnayah','$pnghslayah','$telpayah','$nmibu','$pddkibu','$pkrjnibu','$pnghslibu','$telpibu','$nmwali','$pddkwali','$pkrjnwali','$pnghslwali','$telpwali')");

	if ($insert) {
	echo "<script>location.href='formdatasekolah.php'</script>";

}else{

	echo "<script>alert('Periksa Kembali Form Anda')</script>";

}
}
?>