<?php 
include '../koneksi/koneksi.php';
$screening=$_POST['scr'];
$teori=$_POST['teori'];
$praktek=$_POST['praktek'];

$query= "INSERT INTO seleksi(screening,teori,praktek) VALUE ('$screening','$teori','$praktek')";

$hasil = mysqli_query($koneksi,$query);
echo "<script>
alert('simpan database berhasil');
window.location='seleksi_pelamar.php';
</script>";

?>