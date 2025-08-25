<?php
	$database = new mysqli('localhost','root','','phpdasar');
	if($database->connect_errno){
		echo"Database Tidak Dapat Terhubung";
	}
	if(isset($_POST['simpan'])){
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
 
	$sql= "INSERT INTO siswa VALUES('','$nama','$nisn','$tempat_lahir','$tgl_lahir','$nama_ayah','$jk','$jml_sdr','$rt','$rw','$dsn','$ds','$kec','$kab','$no_telp','$asal_sekolah','$pj')";
	$data = $database->query($sql);
	header("location:proses.php");
	}
 
?>