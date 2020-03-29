<?php 
  require '../db/koneksi.php';

	 $host->query("DELETE FROM masyarakat WHERE nik='$_GET[nik]'");
	 echo "<script>
	  window.location = 'index.php?halaman=masyarakat'
	 </script>";
 ?>