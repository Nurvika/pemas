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
  <div class="container">
  	<div class="col-md-6 offset-3 pt-5">
  		<div class="card">
  			<div class="card-header">
  				<h3>Login</h3>
  			</div>
  			<div class="card-body">
				<form action="" method="post">
					<div class="form-group">
						<label for="">username</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label for="">password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<button type="submit" name="login" class="btn btn-primary">Login</button><br><br>
					<a href="admin/login.php" style="position: center;" >Login sebagai Admin/Petugas</a>
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
	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = md5($_POST["password"]);

		$result = $host->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");
		// print_r($result->fetch_object());
		if ($result->num_rows) {
			session_start();
			$data = $result->fetch_object();
			$_SESSION["nik"] = $data->nik;
			$_SESSION["nama"] = $data->nama; 
			header("location:masyarakat/index.php");
		} else{
			echo "<script>alert('Username atau Password salah!')</script>";
		}
	}
?>