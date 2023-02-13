


<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <title>PENDAFTARAN</title>
</head>
<body>
        <form action="act.php" method="POST" enctype="multipart/form-data" autocomplete="on">
    <input type="hidden" name="id">
<!-- nama -->
<input class="form-control" type="text" placeholder="Nama" aria-label="default input example" name="nama"  required >
<br><br>
<!-- jenis kelamin -->
<label for="">Jenis Kelamin :</label>
<input type="radio" name="jenis_kelamin" value="Laki-Laki" id="">Laki-Laki
<input type="radio" name="jenis_kelamin" value="Perempuan" id="">Perempuan

<br><br>
<!-- nama panggilan -->
<input class="form-control form-control-sm" type="text" placeholder="Nama Panggilan" aria-label=".form-control-sm example" name="nama_panggilan"  required>
<br><br>
<!-- agama -->
<select class="form-select" aria-label="Default select example" name="agama">
  <option selected value="tidak memilih">Agama</option>
<option value="islam">islam</option>
<option value="kristen">kristen</option>
<option value="hindu">hindu</option>
<option value="buddha">buddha</option>
</select>
<br><br>
<!-- nomor telpon -->
<input class="form-control" type="number" placeholder="Masukan No telpon" aria-label="default input example" name="nomer_telpon" autofocus  required>
<br><br>
<!-- email -->
<input class="form-control" type="text" placeholder="Masukan email" aria-label="default input example" name="email" autofocus  required>
<br><br>
<!-- status -->
<select class="form-select" aria-label="Default select example" name="status_perkawinan">
<option value="0">Status Perkawinan</option>
<option value="sudah menikah">sudah menikah</option>
<option value="belum menikah">belum menikah</option>
<option value="menikah anak 1">menikah anak 1</option>
<option value="menikah anak 2">menikah anak 2</option>
<option value="menikah anak 3">menikah anak 3</option>
</select>
<br><br>
<!-- tanggal lahir -->
<label for="">tanggal lahir</label>
<input type="date" name="tanggal_lahir">
<br><br>
<!-- alamat -->
<input class="form-control" type="text" placeholder="Masukan alamat" aria-label="default input example" name="alamat">
<br><br>
<!-- rt -->
<input class="form-control" type="number" placeholder="Masukan RT" aria-label="default input example" name="rt">
<br><br>
<!-- rw -->
<input class="form-control" type="number" placeholder="Masukan RW" aria-label="default input example" name="rw">
<br><br>
<!-- nomor rumah -->
<input class="form-control" type="number" placeholder="Masukan Nomor Rumah" aria-label="default input example" name="nomor_rumah">
<br><br>
<!-- kode pos -->
<input class="form-control" type="number" placeholder="Masukan Kode Pos " aria-label="default input example" name="kode_pos"  required>
<br><br>
<!-- nomor telpon darurat -->
<input class="form-control" type="number" placeholder="Masukan Nomor Telpon Darurat " aria-label="default input example" name="nomer_telpon_darurat"  required>
<br><br>
<!-- hubungan nomor telpon darurat -->
<input class="form-control" type="text" placeholder="Hubungan Dengan Nomor Telpon Darurat" aria-label="default input example" name="hubungan_no_darurat" required>
<br><br>
<!-- no ktp -->
<input class="form-control" type="number" placeholder="Masukan nomor ktp" aria-label="default input example" name="no_ktp" required>
<br><br>
<!-- no kk -->
<input class="form-control" type="number" placeholder="Masukan nomor kk" aria-label="default input example" name="no_kk" required>
<br><br>
<!-- foto pelamar -->
  <div class="mb-3">
  <label for="formFile" class="form-label">FOTO PELAMAR</label>
  <input class="form-control" type="file" id="formFile" name="foto_pelamar"  required>
<br>

<button class="btn btn-primary" type="submit" name ="submit">SIMPAN</button>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</form>
</body>
</html>






