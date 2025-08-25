<?php
//mulai sesion 

//skrip konek
require 'functions.php';
//proses
if(isset($_POST["register"])) {
	if(registrasi($_POST) > 0 ) {
		echo "<script>
		alert('user baru berhasil ditambahkan!');
		</script>";
	} else {
	echo mysqli_error($conn);

	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Registrasi
</title>
<style>
	label {
	display: block;
		margin-left: 20px;
	}
	button {
		margin-left: 20px;
		margin-top: 4px;
	}
	input {
		margin-left: 20px;
	}
	h1 {
		margin-left:20px;
	}
	</style>
</head>
<body>
<h1>
Halaman Registrasi User Baru
</h1>
<form action="" method="post">
<ul>
	<li>
	<label for="username">username :</label>
	<input type="text" name="username" id="username">
</li>
<li>
	<label for="password">password :</label>
	<input type="password" name="password" id="password">
</li>
<li>
	<label for="password2">konfirmasi password :</label>
	<input type="password" name="password2" id="password2">
</li>
</ul>
<button type="submit" name="register">Register!</button>
</form>



</body>

</html>