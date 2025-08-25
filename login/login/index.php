<?php

if( !isset($_SESSION["login"])) {
	header("location: login.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK PEMBANGUNAN</title>
</head>

<body>
	<a href="logout.php">Keluar</a>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK PEMBANGUNAN</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    </body>
</html>

