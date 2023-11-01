<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SPK Dengan Metode AHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<style>
img {
	max-width: 100%;
	height: auto;
}
</style>
</head>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
<body>
<header>

<div id="wrapper1">
<div id="perusahaan" class="tabcontent">
  <img src="img/a.jpg">
  <div class="text">Perusahaan adalah tempat terjadinya kegiatan produksi dan berkumpulnya semua faktor produksi. Setiap perusahaan ada yang terdaftar di pemerintah dan ada pula yang tidak. Bagi perusahaan yang terdaftar di pemerintah, mereka mempunyai badan usaha untuk perusahaannya. Badan usaha ini adalah status dari perusahaan tersebut yang terdaftar di pemerintah secara resmi.</div>
</div>

<div id="pegawai" class="tabcontent">
	<img src="img/b.jpg">
	<div class="text">Pegawai adalah Orang pribadi yang bekerja pada pemberi kerja, berdasarkan perjanjian atau kesepakatan kerja baik secara tertulis maupun tidak tertulis, untuk melaksanakan suatu pekerjaan dalam jabatan atau kegiatan tertentu dengan memperoleh imbalan yang dibayarkan berdasarkan periode tertentu, penyelesaian pekerjaan, atau ketentuan lain yang ditetapkan pemberi kerja, termasuk orang pribadi yang melakukan pekerjaan dalam jabatan negeri.</div>
</div>

<div id="psycology" class="tabcontent">
  <img src="img/c.jpg">
  <div class="text">Pada masa lampau psikologi diartikan sebagai ilmu yang mempelajari tentang  “mind” (pikiran) atau the study of mind. Tapi dalam perkembangannya, kata mind berubah menjadi “behavior” (tingkah laku). Sehingga psikologi  didefinisikan sebagai ilmu yang mempelajari tentang tingkah laku manusia.</div>
</div>

<div id="metode" class="tabcontent">
  <img src="img/d.jpg">
  <div class="text">Sistem pendukung keputusan adalah bagian dari sistem informasi berbasis komputer yang dipakai untuk mendukung pengambilan keputusan dalam suatu organisasi atau perusahaan.

Dapat juga dikatakan sebagai sistem komputer yang mengolah data menjadi informasi untuk mengambil keputusan dari masalah semi-terstruktur yang spesifik.</div>
</div>
<button class="tablink" onclick="openCity('perusahaan', this, 'transparent')" id="defaultOpen">PERUSAHAAN</button>
<button class="tablink" onclick="openCity('pegawai', this, 'transparent')">PEGAWAI</button>
<button class="tablink" onclick="openCity('psycology', this, 'transparent')">PSYCOLOGY</button>
<button class="tablink" onclick="openCity('metode', this, 'transparent')">METODE</button>
</div>
</header>

	<nav id="navigation" role="navigation" >
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<ul>
			<li><a class="item" href="index.php">Home</a></li>
			<li>
				<a class="item" href="kriteria.php">Kriteria
					<div class="ui blue tiny label" style="float: right;"><?php echo getJumlahKriteria(); ?></div>
				</a>
			</li>
			<li>
				<a class="item" href="alternatif.php">Alternatif
					<div class="ui blue tiny label" style="float: right;"><?php echo getJumlahAlternatif(); ?></div>
				</a>
			</li>
			<li><a class="item" href="bobot_kriteria.php">Perbandingan Kriteria</a></li>
			<li><a class="item" href="bobot.php?c=1">Perbandingan Alternatif</a></li>
				<ul>
					<?php

						if (getJumlahKriteria() > 0) {
							for ($i=0; $i <= (getJumlahKriteria()-1); $i++) { 
								echo "<li><a class='item' href='bobot.php?c=".($i+1)."'>".getKriteriaNama($i)."</a></li>";
							}
						}

					?>
				</ul>
			<li><a class="item" href="hasil.php">Hasil</a></li>
			<li><a class="item" href="logout.php">Logout</a></li>
		</ul>
	</nav>
	<br>
	  <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>
	  
<script>
function openNav() {
  document.getElementById("navigation").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("wrapper1").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("navigation").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("wrapper1").style.marginLeft = "0";
}
function openCity(cityName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html> 
