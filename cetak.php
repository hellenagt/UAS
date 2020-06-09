<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    body {
      padding: 50px;
    }
    th h2 { padding-left: 115px; }
    #uuw {margin-left: 400px; margin-bottom: 20px;}
  </style>
  
  <title>Pendaftaran Online SMAN 17</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<script >  window.print()</script>
<body>
 <table>
    <tr><th><img src="sma17.png" width="130px" height="130px"></th>
 <th><h2><center>KARTU PENDAFTARAN <br> PPDB ONLINE TAHUN AJARAN 2020/2021 <br> SMAN 17 SURABAYA</center></h2></th></tr></table><hr>
 <?php  
            include 'koneksi.php';
            if (isset($_GET['id'])) {
              $get = $_GET['id']; ?>
              <?php  
                  $insert = mysqli_query($conn,"SELECT * FROM uploadberkas WHERE kode_pendaftaran= '$get'");
                  while ($id = mysqli_fetch_array($insert)) {
                  ?>
                 
                <img id="uuw" src="berkas/<?php echo $id['gambar_diri']; ?>" width="150px" /><?php } ?>
<table class="table table-bordered"  >
        
             <?php
            $peserta = mysqli_query($conn, "SELECT sis.*, s.* FROM formsiswa sis JOIN formortu o ON sis.kode_pendaftaran=o.kode_pendaftaran JOIN formsekolah s ON o.kode_pendaftaran=s.kode_pendaftaran JOIN formnilai n ON s.kode_pendaftaran=n.kode_pendaftaran WHERE sis.kode_pendaftaran = '$get'");
            while ($id = mysqli_fetch_object($peserta)){

            ?><br>
            <tr>
            <td>Kode Pendaftaran</td><td>:</td><td><?php echo $id->kode_pendaftaran ?></td></tr><tr>
              <td>Nama Lengkap</td><td>:</td><td><?php echo $id->nama_lengkap ?></td></tr><tr>
              <td>Jenis Kelamin</td><td>:</td><td><?php echo $id->jenis_kelamin ?></td></tr><tr>
              <td>NISN</td><td>:</td><td><?php echo $id->nisn ?></td></tr><tr>
              <td>NIK</td><td>:</td><td><?php echo $id->nik ?></td></tr></tr> 
              <td>Tempat, Tanggal Lahir</td><td>:</td><td><?php echo $id->tempat_lahir; echo ", ";echo $id->tanggal_lahir ; ?></td></tr>  <tr>
              <td>Peminatan Jurusan</td><td>:</td><td><?php echo $id->peminatan_jurusan ?></td> <tr>
              <td>Asal Sekolah</td><td>:</td><td><?php echo $id->nama_asal_sekolah ?></td></tr>

            <?php }}?>
          </table>
</body>
</html>
