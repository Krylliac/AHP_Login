<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SPK Dengan Metode AHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<style>
</style>
</head>

<body>
	<nav id="navigation" role="navigation">
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
	  
</div>
<script>
function openNav() {
  document.getElementById("navigation").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("navigation").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html> 
