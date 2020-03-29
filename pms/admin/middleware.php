<?php 
 session_start();
 function auth()
 {
 	$response = [];
	require '../db/koneksi.php';
 	if (isset($_SESSION["id_petugas"])) {
 		// deklarasi variable
 		$id_petugas = $_SESSION['id_petugas'];
 		// query select petugas berdasarkan id petugas dari session
 		$query = $host->query("SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
 		if ($query->num_rows) {
 			// jika ditemukan
 			$response = [
 				"error" => "400",
 				"message" => "Ditemukan.",
 				"level" => $query->fetch_object()->level // admin atau petugas
 			];
 		}else{
 			// jika tidak ditemukan
 			// mengembalikan error
		 	$response = [
		 		"error" => "404",
		 		"message" => "Anda harus login."
		 	];
 		}
 	}else{
 		// mengembalikan error
	 	$response = [
	 		"error" => "404",
	 		"message" => "Anda harus login."
	 	];
 	}
 	// mengembalikan nilai
 	return $response;
 }
 ?> 