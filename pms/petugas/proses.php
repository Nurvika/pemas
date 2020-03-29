<?php 
  require '../db/koneksi.php';
  $ambil= $host->query("UPDATE pengaduan SET status='proses' WHERE id_pengaduan='$_GET[id]' ");
  if ($ambil) {
  	header('location:petugas.php?halaman=verifikasi');
  }
 ?>