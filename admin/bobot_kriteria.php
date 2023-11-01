<?php
	include('config.php');
	include('fungsi.php');

	include('header.php');
?>
<div id="main">
<section class="content">
	<h2 class="ui header">Perbandingan Kriteria</h2>
	<?php showTabelPerbandingan('kriteria','kriteria'); ?>
</section>
</div>

<?php include('footer.php'); ?>