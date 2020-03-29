<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		<script src="js/jquery-3.4.1.min.css"></script>
</head> 
<body>
	<section>
  <div class="container">
  	<div class="col-md-6 offset-3 pt-5">
  		<div class="card">
  			<div class="card-header">
  				<h3>Register</h3>
  			</div>
  			<div class="card-body">
				<form action="" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">nik</label>
								<input type="text" class="form-control" name="nik">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">nama</label>
								<input type="text" class="form-control" name="nama">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">username</label>
								<input type="text" class="form-control" name="username">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">password</label>
								<input type="password" class="form-control" name="password">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">telpon</label>
								<input type="text" class="form-control" name="telp">
							</div>
						</div>

					</div>
					<button type="submit" name="save" class="btn btn-primary">Save</button>
				</form>  				
  			</div>
  		</div>
  	</div>
  </div>
	
</body>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/dataTables.bootstrap4.min.js"></script>
	<script src="js/jquery.datadataTables.min.js"></script>
</html>
<?php
	require 'db/koneksi.php';
	if (isset($_POST["save"])) {
		$nik = $_POST["nik"];
		$nama = $_POST["nama"];
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
		$telp = $_POST["telp"];

		$result = $host->query("INSERT INTO masyarakat VALUES('$nik', '$nama', '$username', '$password', '$telp')"); 
		header("location:login.php");
	}
?>