<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="icon" href="images/icon.ico" type="image/x-icon">
		<link rel="stylesheet" href="assets/css/main.css" />
		<title>Kotak Saran | Kelurahan Pal Putih</title>
	</head>
	<body class="is-preload">

		<?php include "layout/header.php"; ?>
		<?php	
			if(@$_GET['page'] == ''){
				include "pages/form.php"; 
			}else{
				include "pages/help.php"; 
			}
		?>	
		<?php include "layout/footer.php"; ?>	

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>