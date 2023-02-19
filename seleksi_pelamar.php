<?php
include '../koneksi/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SELEKSI PELAMAR</title>
</head>
<body>
<table border="1" >
  <thead width = "300px">
    <tr>
      <th>Nama</th>
      <th>Nama Panggilan</th>
      <th>Tanggal Lahir</th>
      <th>Email</th>
      <th>Nomer Telpon</th>
      <th>Nomer Telpon Darurat</th>
      <th>Status Nikah</th>
      <th>pendidikan terakhir</th>
      <th>Foto Pelamar</th>
    </tr>
  </thead>
  <?php
  $query  = "SELECT tbl_seleksi.nama_id,tbl_seleksi.nama_panggilan_id,tbl_seleksi.pendik_id,	tbl_seleksi.email_id,	tbl_seleksi.nomer_telpon_id,	tbl_seleksi.tanggal_lahir_id,	tbl_seleksi.status_nikah_id,	tbl_seleksi.nomdar_id,	tbl_seleksi.no_kk_id,	tbl_seleksi.no_ktp_id,	tbl_seleksi.alamat_id,	tbl_seleksi.foto_id	

  FROM tbl_lamaran
  INNER JOIN tbl_seleksi
  ON tbl_lamaran.id = tbl_seleksi.nama_id";
  $hasil = mysqli_query($koneksi,$query);
  while($data= mysqli_fetch_array($hasil)) { 
    ?>
<tbody>
  <tr> 
  <td><?=$data['nama_id'];?></td>
  <td><?=$data['nama_panggilan'];?></td>
  <td><?=$data['tanggal_lahir'];?></td>
  <td><?=$data['email'];?></td>
  <td><?=$data['nomer_telpon'];?></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tbody>
<?php }?>
</table>
</body>
</html>