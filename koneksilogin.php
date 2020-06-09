<?php

include 'koneksi.php';

$user = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM admin WHERE username='$user' && password='$password'");
$test = mysqli_num_rows($sql);
if ($test>0){
	header("location:berandaadminn.php");
}
else{
	echo "<script>alert('Username atau Password salah!')</script>";
	echo "<script>location.href='login.php'</script>";
}
?>