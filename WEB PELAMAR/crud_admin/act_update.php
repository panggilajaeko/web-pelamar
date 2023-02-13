<?php
include '../koneksi/koneksi.php';
$id = $_POST['id'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$nama_panggilan=$_POST['nama_panggilan'];
$agama=$_POST['agama'];
$nomer_telpon=$_POST['nomer_telpon'];
$status_perkawinan=$_POST['status_perkawinan'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$alamat=$_POST['alamat'];
$rt=$_POST['rt'];
$rw=$_POST['rw'];
$nomor_rumah=$_POST['nomor_rumah'];
$kode_pos=$_POST['kode_pos'];
$nomer_telpon_darurat=$_POST['nomer_telpon_darurat'];
$hubungan_no_darurat = $_POST['hubungan_no_darurat'];
$no_ktp= $_POST['no_ktp'];
$no_kk= $_POST['no_kk'];

$allowed = array('png','jpg','jpeg');
$lokasi_file= $_FILES['foto_pelamar']['tmp_name'];


$filename = $_FILES['foto_pelamar']['name'];


$ext = pathinfo ($filename, PATHINFO_EXTENSION);



$folder = "../foto/$filename";


if($filename == "") {
  $query = "UPDATE tbl_lamaran SET nama='$nama',jenis_kelamin='$jenis_kelamin',nama_panggilan='$nama_panggilan',agama='$agama',nomer_telpon='$nomer_telpon',status_perkawinan='$status_perkawinan',tanggal_lahir='$tanggal_lahir',alamat='$alamat',rt='$rt',rw='$rw',nomor_rumah='$nomor_rumah',kode_pos='$kode_pos',nomer_telpon_darurat='$nomer_telpon_darurat',hubungan_no_darurat='$hubungan_no_darurat',no_ktp='$no_ktp',no_kk='$no_kk',foto_pelamar='$filename' WHERE id='$id'";
  
  $hasil = mysqli_query($koneksi,$query);
  
  echo "<script>
        alert('DATA BERHASIL DI UBAH');
        window.location='index.php';
        </script>";

  
  }else {
    if(!in_array($ext,$allowed)){
      echo "<script>
            alert('ekstensi yang kamu masukan tidak di perbolehkan!');
            history.go (-1);
            </script>";
          }else{
              
              move_uploaded_file($lokasi_file,"$folder");
              
              $cek = "SELECT * FROM tbl_lamaran WHERE id='$id'";
              $ada = mysqli_query($koneksi,$cek);
              $data = mysqli_fetch_array($ada);
              
              if ($data) {  
                
                $fotolama = $data['foto_pelamar'];

              unlink("..foto/$fotolama");
                   }
                   $query = "UPDATE tbl_lamaran SET nama='$nama',jenis_kelamin='$jenis_kelamin',nama_panggilan='$nama_panggilan',agama='$agama',nomer_telpon='$nomer_telpon',status_perkawinan='$status_perkawinan',tanggal_lahir='$tanggal_lahir',alamat='$alamat',rt='$rt',rw='$rw',nomor_rumah='$nomor_rumah',kode_pos='$kode_pos',nomer_telpon_darurat='$nomer_telpon_darurat',hubungan_no_darurat='$hubungan_no_darurat',no_ktp='$no_ktp',no_kk='$no_kk',foto_pelamar='$filename' WHERE id='$id'";
                   
                   $hasil = mysqli_query($koneksi,$query);
                   echo "<script>
                   alert('simpan database berhasil');
                   window.location='index.php';
                   </script>";
                  }
              
              
            }

    

 ?>