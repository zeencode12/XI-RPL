<?php
//fungsine session iki lo
session_start();
//cookie
if(isset($_COOKIE['login'])) {
if ($_COOKIE['login'] == 'true') {
	$_SESSION['login'] = true;
}

}
//session
if(isset($SESSION["login"])) {
	header ("Location: index.php");
	exit;
}

require 'functions.php';

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
	setcookie('login','true', time()+60);

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
<link rel="stylesheet" href="css/cardlogin1.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/formlogin1.css">
</head>
<body class="container">
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
	<button type="submit" name="login">Login</button>
	</li>
	<ul>
</form>
</body>
</html>
