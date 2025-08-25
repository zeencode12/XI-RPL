<?php
$conn= mysqli_connect("localhost","root","","phpdasar");
function query($query) {
	global $conn;
	$result=mysql_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}



function registrasi($data) {
	global $conn;
	$username =strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
//cek username sudah ada apa belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username= '$username'");
if (mysqli_fetch_assoc($result)) {
	echo "<script>
	alert ('username sudah terdaftar')
	</script>";
return false;
}
//cek konfirmasi password
	if($password !== $password2) {
		echo "<script>
	alert('konfirmasi password tidak sesuai');
	</script>";
	return false;
}
//enskripsi password
$password = password_hash($password, PASSWORD_DEFAULT);
//tambahkan userbaru ke database
mysqli_query($conn, "INSERT INTO user values('','$username','$password')");
return mysqli_affected_rows($conn);
}
 
	function tambah
($nama,$nisn,$tempat_lahir,$tgl_lahir,$nama_ayah,$jk,$jml_sdr,$rt,$rw,$dsn,$ds,$kec,$kab,$no_telp,$asal_sekolah,$pj){
	global $conn;
	mysql_query("insert into siswa values('','$nama','$nisn','$_lahir','$tgl_lahir','$nama_ayah','$jk','$jml_sdr','$rt','$rw','$dsn','$ds','$kec','$kab','$no_telp','$asal_sekolah','$pj')");
}
	
?>