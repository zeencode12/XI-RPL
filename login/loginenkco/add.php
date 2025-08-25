<?php
// Include / load file koneksi.php
include "koneksi.php";

// Ambil data yang dikirim dari form
$nama= $_POST['nama']; 
$nisn = $_POST['nisn']; 
$tempat_lahir = $_POST['tempat_lahir']; 
$tgl_lahir = $_POST['tgl_lahir'];
$nama_ayah = $_POST['nama_ayah'];
$jk = $_POST['jk'];
$jml_sdr= $_POST['jml_sdr'];
$rt= $_POST['rt'];
$rw= $_POST['rw'];
$dsn= $_POST['dsn'];
$ds= $_POST['ds'];
$kec= $_POST['kec'];
$kab= $_POST['kab'];
$no_telp= $_POST['no_telp'];
$asal_sekolah= $_POST['asal_sekolah'];
$pj= $_POST['pj'];

// query SQL untuk insert data
$query="INSERT INTO siswa SET nama='$nama',nisn='$nisn',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jk='$jk',nama_ayah='$nama_ayah',jml_sdr='$jml_sdr',rt='$rt',rw='$rw',dsn='$dsn',ds='$ds',kec='$kec',kab='$kab',no_telp='$no_telp',asal_sekolah='$asal_sekolah',pj='$pj'";
$result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }
?>