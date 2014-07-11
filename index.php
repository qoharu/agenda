<?php
	include "connection.php";
	include "sesi.php";
	$page = @$_GET['page'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Agenda Surat BKPPW IV</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" >
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<?php
		if(! $sesi){
			include "login.php";
		}else{
			switch ($page) {
				case 'home':
					include 'home.php';
					break;
				
				case 'baru':
					include 'baru.php';
					break;

				case 'detail':
					include 'detail.php';
					break;
				default: include 'home.php';
			}
		}
	?>
</body>
</html>