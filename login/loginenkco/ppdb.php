
<!DOCTYPE html>
<html lang="en">
<head>
    <link  rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa Baru</title>
</head>
<body class="body container">
    <center><h1>Formulir Pendaftaran Siswa Baru</h1></center>

    <form action="proses.php?aksi=tambah" method="post">
        <div>
            <label>Nama Lengkap</label> <br>
            <input name="nama" type="text" placeholder="Nama Lengkap"><br>
        </div>
        <div>
            <label>NISN</label> <br>
            <input name="nisn" type="text" placeholder="NISN"><br>
        </div>
         <div>
            <label>Tempat Lahir</label> <br>
            <input name="tempat_lahir" type="text" placeholder="Tempat Lahir"><br>
        </div>
         <div>
            <label>Tanggal lahir</label> <br>
            <input name="tgl_lahir" type="date"><br>
        </div>
        <div>
            <label>Jenis Kelamin</label> <br>
           <input type="radio" name="jk" value="Pria"> Pria <br>
           <input type="radio" name="jk" value="Wanita"> Wanita <br>
        </div>
         <div>
            <label>Nama Ayah</label> <br>
            <input name="nama_ayah" type="text" placeholder="Nama Ayah"><br>
        </div>
         <div>
            <label>Jumlah Saudara Kandung</label> <br>
            <input name="jml_sdr" type="number" placeholder="Jumlah Saudara Kandung"><br>
        </div>
          <div>
            <label>Alamat Rumah Lengkap</label> <br>
            Rt<br>
            <input name="rt" type="text" placeholder="Rt"><br>
            Rw<br>
            <input name="rw" type="text" placeholder="Rw"> <br>
            Dusun<br>
            <input name="dsn" type="text" placeholder="Dusun"> <br>
            Desa<br>
            <input name="ds" type="text" placeholder="Desa"><br>
            Kecamatan<br>
            <input name="kec" type="text" placeholder="Kecamatan"> <br>
            Kabupaten<br>
            <input name="kab" type="text" placeholder="Kabupaten"> <br>
        </div>

        <div>
            <label>Nomor Telepon/Whatsapp</label> <br>
            <input name="no_telp" type="number" placeholder="No telepon/Whatsapp"><br>
        </div>
        <div>
            <label>Asal Sekolah</label> <br>
            <input name="asal_sekolah" type="text" placeholder="asal sekolah"><br>
        </div>
       <div>
            <label>Pilihan Jurusan</label> <br>
           <input type="radio" name="pj" value="TKJ"> TKJ <br>
           <input type="radio" name="pj" value="RPL"> RPL <br>
           <input type="radio" name="pj" value="Akuntansi"> Akuntansi <br>
           <input type="radio" name="pj" value="TBs"> TBs <br>
        </div>
        <div>
           <input type="submit" value="simpan">
        </div>
    </form>
</body>
</html>
