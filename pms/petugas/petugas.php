<?php
session_start();
if (!isset($_SESSION['nama_petugas'])) {
	die("Anda belum login");
	if ($_SESSION['level']!="petugas") {
		die("anda bukan petugas");
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Pengaduan Masyarakat</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="../assets/css/style.css">
		<script src="../assets/js/jquery-3.4.1.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/jquery.dataTables.min.js"></script>
	</head>
	<body>
		<div>
			<div class="d-inline-flex p-2 bd-highlight" id="wrapper">
				<!-- Sidebar -->
				<div class="bg-light border-right" id="sidebar-wrapper">
					<div class="sidebar-heading">Start Bootstrap </div>
					<div class="list-group list-group-flush">
						<a href="petugas.php?halaman=verifikasi" class="list-group-item list-group-item-action bg-light">Verifikasi Pengaduan</a>
						<a href="" class="list-group-item list-group-item-action bg-light">Pengaduan</a>
						<a href="../logout.php" class="list-group-item list-group-item-action bg-light">Logout</a>
					</div>
				</div>
				<!-- /#sidebar-wrapper -->
				<!-- Page Content -->
				<div  id="page-content-wrapper">
					<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
						<h4>Navvv</h4>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
					</nav>
					<div class="container-fluid">
						<?php
						if (isset($_GET['halaman'])) {
							if ($_GET['halaman']== "verifikasi") {
								require 'verifikasi_pengaduan.php';
							}
							if ($_GET['halaman']== "detailpengaduan") {
								require 'detail_pengaduan.php';
							}

						}
						?>

					</div>
				</div>
				<!-- /#page-content-wrapper -->
			</div>
		</div>
	</body>
</html>
<script src="../assets/js/jquery-3.4.1.min.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script>
$(document).ready(function($) {
$(".table").DataTable();
});
</script>