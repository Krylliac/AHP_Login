
<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>

<div id="main" >
	<section class="content"><center>
			<h2 class="ui header">Analitycal Hierarchy Process (AHP)</h2>

			<p>Analytic Hierarchy Process (AHP) merupakan suatu model pendukung keputusan yang dikembangkan oleh Thomas L. Saaty. Model pendukung keputusan ini akan menguraikan masalah multi faktor atau multi kriteria yang kompleks menjadi suatu hirarki. Hirarki  didefinisikan sebagai suatu representasi dari sebuah permasalahan yang kompleks dalam suatu struktur multi level dimana level pertama adalah tujuan, yang diikuti level faktor, kriteria, sub kriteria, dan seterusnya ke bawah hingga level terakhir dari alternatif.</p>
			
			<h3 class="ui header">Tabel Tingkat Kepentingan menurut Saaty (1980)</h3>
			<table class="ui collapsing striped blue table">
				<thead>
					<tr>
						<th>Nilai Numerik</th>
						<th>Tingkat Kepentingan <em>(Preference)</em></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="center aligned">1</td>
						<td>Sama pentingnya <em>(Equal Importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">3</td>
						<td>Sedikit lebih penting <em>(Slightly more importance)</em></td>
					</tr>

					<tr>
						<td class="center aligned">5</td>
						<td>Jelas lebih penting <em>(Materially more importance)</em></td>
					</tr>

					<tr>
						<td class="center aligned">7</td>
						<td>Sangat jelas lebih penting <em>(Significantly more importance)</em></td>
					</tr>

					<tr>
						<td class="center aligned">9</td>
						<td>Mutlak lebih penting <em>(Absolutely more importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">2,4,5,6,8</td>
						<td>Nilai Tengah diantara dua pendapat <em>(Middle point of both arguments)</em></td>
					</tr>
				</tbody>
			</table>

	</section>
</div>

<?php include('footer.php'); ?>
