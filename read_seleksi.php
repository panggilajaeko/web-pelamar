<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL SELEKSI</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td>no</td>
                <td>scr</td>
                <td>teori</td>
                <td>praktek</td>
                <td>edit</td>
            </tr>
        </thead>
        <?php 
        include '../koneksi/koneksi.php';

        $no=1;
        $query="SELECT tbl_lamaran.nama,tbl_lamaran.jenis_kelamin,tbl_lamaran.nama_panggilan,tbl_lamaran.pendik,tbl_lamaran.agama,tbl_lamaran.nomer_telpon,tbl_lamaran.email,tbl_lamaran.status_perkawinan,tbl_lamaran.tanggal_lahir,tbl_lamaran.alamat,tbl_lamaran.rt,tbl_lamaran.rw,tbl_lamaran.nomor_rumah,tbl_lamaran.kode_pos,tbl_lamaran.nomer_telpon_darurat,tbl_lamaran.hubungan_no_darurat,tbl_lamaran.no_ktp,tbl_lamaran.no_kk,tbl_lamaran.foto_pelamar,

        FROM tbl_lamaran
        INNER JOIN seleksi
        ON tbl_lamaran.id = seleksi.id_pelamar";
        $hasil = mysqli_query($koneksi,$query);
        while($data= mysqli_fetch_array($hasil)) { 
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['nama']?></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <?php $no++;
        } ?>
    </table>
</body>
</html>