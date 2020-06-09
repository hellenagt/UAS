<?php include 'koneksi.php' ?>
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
		.footer {
			background-color: #606060;
			height: 120px;
			text-align: center;
			margin-top: 150px;
		}
		.footer img {
			margin-top: 15px;
			margin-bottom: 10px;
		}
		.footer p{
			color: white;
		}
		.form-container {
         margin-top: 40px;
        -webkit-box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
        -moz-box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
         box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
         background-color: white;
         width: 500px; 
         border-radius: 7px;  
         margin-left: 400px;
        }
   		 .form-container h4, .form-container hr, .form-container button, .form-group {
   		 	margin-right: 35px;
   		 	margin-left: 35px;
   		 }
   		 .warning { color: red; }
   		 .form-group p {font-weight: bold; font-size: 30px; text-align: center; }
   		h2 {color: green; font-size: 35px; margin-top: 15px;}
   		h3 {color: red; font-size: 35px; margin-top: 15px;}


	</style>
</head>
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
			<li class="nav-item ">
        		<a class="nav-link" href="formdatasiswa.php">Pendaftaran </a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link active" href="cekverifikasi.php">Verifikasi<span class="sr-only">(current)</span></a>
      		</li>
		</ul>
	</div>
	</nav>
	</header>
	<body>
		<?php 
		$error_cari ="";
				$cari ="";
				if($_SERVER["REQUEST_METHOD"] == "POST"){
				if (empty(trim($_POST["cari"]))){
				$error_cari = "Masukan kode pendaftaran yang dicari";
				} else{
				$cari = mysqli_real_escape_string($conn,$_POST['cari']);
			} 
				if(empty($error_cari)){
				$data = mysqli_query($conn,"SELECT * FROM verifikasi WHERE kode_pendaftaran LIKE '$cari'");
				if(mysqli_num_rows($data)>0){
				 echo "<h2><center>SELAMAT ANDA LOLOS VERIFIKASI DATA</center> </h3>";
				} 
				else { echo "<h3><center>MAAF ANDA TIDAK LOLOS VERIFIKASI DATA</center> </h3>";
			} } }
				?>
			

	<div class="container-fluid">
		<section class="row ">
		<div class="col-md-4">
			<form class="form-container" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>"> 
				<br>
				<h4>HASIL VERIFIKASI BERKAS FORMULIR PENDAFTARAN</h4>
				<hr>
				<div class="form-group">
					<label>Silahkan masukan Kode Pendaftaran Anda</label><br>
					<input type="text" name="cari" placeholder="Masukan Kode Pendaftaran" class="form-control"><span class="warning"><?php echo $error_cari; ?></span>
				</div>
				<button class="btn btn-secondary" type="submit" value="cari">Lihat Hasil</button><br><br>
			</form>	
			<?php 

		?>	
					
				
		</div>
		</section>	
	</div>
	</body>
<br>
<div class="footer">
	<img src="sma17.png" width="50" height="50"><br>
	<p>&copy2020 PPDB SMAN 17 Surabaya. All right reserved.</p>
</div>
</body>

</html>