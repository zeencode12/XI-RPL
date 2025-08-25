<?php
//kudu lewat session login
session_start();
if( !isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK PEMBANGUNAN </title>
</head>
<style type="text/css">
    *{padding: 0; margin: 0}
        .navbar {
float:left;
background:#000000;
width:100%;
}
.navbar li {
float:left;
list-style:none;
}
.navbar li a {
color:#FFFFFF;
text-decoration:none;
padding:5px 20px;
display:block;
font-weight:bold;
}
.navbar li a:hover {
background:#FFFFFF;
color:#000000;
}

        </style>
<body>
	<a href="logout.php">Keluar</a>
    <header>
        <h3>Sistem Informasi</h3>
        <h1>SMK PEMBANGUNAN &copy by Zainudin</h1>
    </header>
    <nav>
        <div class="navbar center">
            <ul>
            <li><a href="index.php?page=2">Daftar User Baru</a></li>
            <li><a href="index.php?page=3">Data Anggota</a></li>
            <li><a href="index.php?page=4">Data Peminjam</a></li>
            <li><a href="index.php?page=5">Transaksi</a></li>
        </ul>
        </div>
    </nav>
 <?php
 if (isset($_GET['page']))
   { 
$page=$_GET['page'];

if($page==1)
    include ("index.php");
elseif($page==2)
    include ("registrasi.php");
elseif($page==3)
    include ("dataanggota.php");
elseif($page==4)
    include ("ppdb.php");
else
    include("home.php");
 }
 ?>

    </body>
</html>

