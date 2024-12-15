<!DOCTYPE HTML>
<html>
	<head>
		<title>Desain Web Muhammad Hafiz</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">
			<!-- Header -->
			<?php include 'pages/navbar.php'; ?>

			<!-- Content -->
			<?php 
			if (isset($_GET['page'])){
				$page = $_GET['page'];
				switch ($page) {
					case 'home':
						include 'pages/beranda.php';
						break;

					case 'tentang':
						include 'pages/tentang.php';
						break;

					case 'berita':
						include 'pages/berita.php';
						break;
					
					case 'praktikum':
						include 'pages/praktikum.php';
						break;
					
					default:
						include 'pages/beranda.php';
						break;
				}
			}else{
				include 'pages/dashboard.php';
			}
			?>

		</div>

		<!-- footer -->
		<?php include 'pages/footer.php'; ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>