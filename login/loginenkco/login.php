<?php
//fungsine session iki lo
session_start();
//pindahin
require 'functions.php';
//cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
$id = $_COOKIE['id'];
$key = $_COOKIE['key'];

//ambil username berdasarkan id
$result = mysqli_query($conn,"SELECT username FROM user WHERE id=$id");
$row = mysqli_fetch_assoc($result);
//cek cookie dan username
if( $key === hash('sha256', $row['username'])){
$_SESSION['login'] = true;
}
}
//session
if(isset($SESSION["login"])) {
	header ("Location: index.php");
	exit;
}


if( isset($_POST["login"])){
$username =$_POST["username"];
$password =$_POST["password"];

$result = mysqli_query($conn, "SELECT * FROM user WHERE username ='$username'");
//cek username
if(mysqli_num_rows($result) === 1 ){
//cek password
	$row = mysqli_fetch_assoc($result);
if (password_verify($password, $row["password"])) {
	//set session
$_SESSION["login"] = true;
	
	//check remember ingat saya
if ( isset($_POST['remember'])) {
	//buat cookie
setcookie('id',$row['id'], time()+60);
setcookie('key', hash('sha256', $row['username']), time()+60);

}
header("location:index.php");
	exit;
}
}
$error = true;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>
Halaman Login
</title>
</head>
<body class="bg bg-gradient-primary">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="sb-admin-2.css">
<link rel="stylesheet" type="text/css" href="sb-admin-2.min.css">
<div class="card-body">
<div class="row-justify-content-center">
<div class="container col-md-8 col-lg-5">
<div class="card card-body p-0">
<div class="header">
<h1>Halaman Login</h1>

<?php if(isset($error)): ?>
<p style="color:red; font-style: italic;">username /
password salah</p>
<?php endif; ?>

<form action="" method="post">
<ul>
<li>
<label for="username">Username :</label>
<input type="text" name="username" id="username">
</li>
<li>
<label for="password">Password :</label>
<input type="password" name="password" id="password">
</li>
<li>
	<input type="checkbox" name="remember" id="remember">
	<label for="remember">ingat saya</label>
	</li>
<li>
	<button type="submit" name="login" class="btn btn-danger">Login</button>
	</li>
	<ul>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
