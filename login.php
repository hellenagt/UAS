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
         margin-top: 80px;
        -webkit-box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
        -moz-box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
         box-shadow: 0 1px 1px 0 rgba(159,167,194,.6);
         background-color: white;
         width: 400px; 
         border-radius: 7px;  	
        }
   		 .form-container h4, .form-container hr, .form-container button, .form-group {
   		 	margin-right: 35px;
   		 	margin-left: 35px;
   		 }
   		


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
        		<a class="nav-link" href="cekverifikasi.php">Verifikasi</a>
      		</li>
		</ul>
	</div>
	</nav>
	</header>
	<body>
	<div class="container-fluid">
		<section class="row justify-content-center">
		<div class="col-md-4">
			<form class="form-container" action="koneksilogin.php" method="POST">
				<br>
				<h4>LOGIN ADMIN</h4>
				<hr>
				<div class="form-group">
					<label>Username</label><br>
					<input type="text" name="username" placeholder="Masukan Username Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label><br>
					<input type="password" name="password" placeholder="Masukan Password Anda" class="form-control">
				</div>
				<button class="btn btn-secondary" type="submit">Login</button><br><br>
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