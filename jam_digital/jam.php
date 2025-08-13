<html>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>Jam Digital</title>
</head>
<body>
 
	<style>
    body {
    	background-color: #FFFFFF;
    }
	h1,h2,p,a{
		font-family: sans-serif;
		font-weight: normal;
	}
 
	.jam-digital-malasngoding {
		overflow: hidden;
		width: 330px;
		margin: 20px auto;
		border: 5px solid #FFFFFF;
	}
	.kotak{
		float: left;
		width: 110px;
		height: 100px;
		border-radius: 30px;
		background-color: #C80000;
	}
	.jam-digital-malasngoding p {
		color: #fff;
		font-size: 36px;
		text-align: center;
		margin-top: 30px;
	}
 
 
</style>
 
<center>
	<br>
	<br>
	<img src="images.png" style="height:50px;">
	<h1><b>ANBK 2023 - RUANG LAB 3</h1>
	<h1><b>SMK PEMBANGUNAN PACITAN</h1>
</center>
 
<div class="jam-digital-malasngoding">
	<div class="kotak">
		<p id="jam"></p>
	</div>
	<div class="kotak">
		<p id="menit"></p>
	</div>
	<div class="kotak">
		<p id="detik"></p>
	</div>
</div>
 
<script>
	window.setTimeout("waktu()", 1000);
 
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}
</script>
<p><center><h3>ASSESMEN NASIONAL BERBASIS KOMPUTER</center></h3></p>
</body>
</html>