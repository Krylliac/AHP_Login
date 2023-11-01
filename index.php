<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>
</head>
<body>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "";
		}else if($_GET['pesan'] == "belum_login"){
			echo "";
		}
	}
	?>
	<br/>
	<br/>
	<form class="login-form" method="post" action="cek_login.php">
	<div class="h1">Login Form</div>
		<table>
		<div class="group">
	                <label for="email">Username</label>
	                <div><input type="text" name="username" placeholder="Username"></div>
	            </div>
			<div class="group">
	                <label for="name">Password</label>
	                <div><input type="password" name="password" placeholder="Password"></div>
	            </div>
			<div class="group submit">
				<label class="empty"></label>
				<div><input type="submit" value="Submit"/></div>
			</div>

		</table>			
	</form>
</body>
</html>