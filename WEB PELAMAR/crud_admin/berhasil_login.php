<?php 
include '../koneksi/koneksi.php';
 
session_start();
 
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}
?>  
<!-- jika kamu merasa hampa  -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    

    <link rel="stylesheet" type="text/css" href="style1.css">
 
  </head>
    <title>Berhasil Login</title>
</head>
<tbody>
  <!-- form pencarian -->
  <nav class="navbar bg-body-tertiary bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">PRAKERJA NUSANTARA</a>
<form class="d-flex" role="search" ction="berhasil_login.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
        <button class="btn btn-outline-success" type="submit" value="Cari">Search</button>
      </form>
      </nav>
<!-- action pencarian -->
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil Pencarian : ".$cari."</b>";
}
?>

  <div class="container-logout">
    <form action="" method="POST" class="login-email">
    <?php echo "<center><h1>Selamat Datang, " . $_SESSION['username'] ."!". "</center></h1>"; ?>
    <div class="input-group">
      <!-- table  -->
      <table class="table table-bordered border-primary">
        <span class="border border-primary">
          <thead class="table-dark">
                <tr>
                  <th>no</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>            
                  <th>Nama Panggilan</th>
                  <th>Agama</th>
                  <th>No Telpon</th>
                  <th>email</th>
                  <th>Status Perkawinan</th>
                  <th>Tanggal Lahir </th>
                  <th>Alamat </th>
                  <th>Rt</th>
                  <th>Rw</th>
                  <th>Nomor Rumah</th>
                  <th>Kode Pos</th>
                  <th>Nomor Telpon Darurat</th>
                  <th>Hubungan No Darurat</th>
                    <th>no Ktp</th>
                    <th>no Kk</th>
                    <th>Foto Pelamar</th>
                  <th>Edit</th> 
                  <th>Hapus</th>
            </thead>
            <!--menghubungkan pencarian   -->
            <?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
  $query = ("SELECT * FROM tbl_lamaran WHERE nama LIKE '%$cari%' ORDER BY nama" );			
}else{
  $query = ("SELECT * FROM tbl_lamaran ");	
}
$hasil = mysqli_query($koneksi,$query);
 $no= 1;
 while($data= mysqli_fetch_array($hasil)) { ?>
   <span class ="border border-success-subtle">
   <tr>

     <td><?=$no;?></td>
     <td><?=$data['nama'];?></td>
     <td><?=$data['jenis_kelamin'];?></td>
     <td><?=$data['nama_panggilan'];?></td>
     <td><?=$data['agama'];?></td>
     <td><?=$data['nomer_telpon'];?></td>
     <td><?=$data['email'];?></td>
     <td><?=$data['status_perkawinan'];?></td>
     <td><?=$data['tanggal_lahir'];?></td>
     <td><?=$data['alamat'];?></td>
     <td><?=$data['rt'];?></td>
     <td><?=$data['rw'];?></td>
   <td><?=$data['nomor_rumah'];?></td>
   <td><?=$data['kode_pos'];?></td>
   <td><?=$data['nomer_telpon_darurat'];?></td>
   <td><?=$data['hubungan_no_darurat'];?></td>
   <td><?=$data['no_ktp'];?></td>
   <td><?=$data['no_kk'];?></td>
    <td><img src="../foto/<?= $data['foto_pelamar']; ?>" width="100"></td>
    <td>
      <a href="update.php?id=<?= $data['id']?>" class="btn1">Edit</a></td>
      <td><a href="hapus.php?id=<?= $data['id']?>"class="btn2">Hapus</a></td>

 </tr>
   </tbody>
   <?php $no++; ?>
   <?php }?>
  </span>
</div>
</div>
</table>
<a href="logout.php" class="btn">Logout</a>
<br><br>
<a href="seleksi_pelamar" class="btn">Seleksi Pelamar</a>
</form>

</body>
</html>