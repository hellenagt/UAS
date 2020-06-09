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
			margin-top: 90px;
		}
		.footer img {
			margin-top: 15px;
			margin-bottom: 10px;
		}
		.footer p{
			color: white;
		}
		.form-container {
         margin-top: 80px;
        -webkit-box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
        -moz-box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
         box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
         background-color: white;
         width: 500px; 
         border-radius: 7px;  	
        }
   		.form-group label { padding: 20px;padding-bottom: 0px; font-weight: bold; font-size: 25px;}
   		.form-group a {  padding: 20px; font-weight: bold;}

   		


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
        		<a class="nav-link" href="cekverifikasi.sphp">Verifikasi</a>
      		</li>
		</ul>
	</div>
	</nav>
	</header>
	<body>
		<?php include 'koneksi.php';?>
	<div class="container-fluid">
		<section class="row justify-content-center">
		<div class="col-md-4">
			<form class="form-container">
				<div class="form-group">
					<label>Anda telah menyelesaikan pengisian formulir pendaftaran PPDB online SMAN 17 Surabaya</label>
					<label>Kode Pendaftaran anda adalah <?php echo $_GET['id'] ?></label><br><br>
					<a href="cetak.php?id=<?php echo $_GET['id'] ?>">Cetak Bukti Pendaftaran<br><br><br></a>
					
				</div>
			</form>
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