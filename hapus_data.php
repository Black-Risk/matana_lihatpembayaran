<?php
	//Ambil koneksi.php
	include('koneksi.php');

	//ambil parameter url : id
	$no = $_GET['no'];

	//1. koneksi server database
	//$koneksi = new mysqli($host, $user, $pass, $db) or die("Koneksi Database Gagal");

	//2. buat sql
	$sql = " DELETE FROM `databayar` WHERE `databayar`.`no` = '$no' ";

	//3. mmebuat query
	$hasil = $koneksi->query($sql);


	if($hasil)
	{
		echo "<script type='text/javascript'>alert('Data Mahasiswa Berhasil Dihapus!');
		window.location='tampil_data.php';
		</script>";
	}

	else
	{
		echo "<script type='text/javascript'>alert('Data Mahasiswa Gagal Dihapus!');
		window.location='tampil_data.php';
		</script>";
	}
	
?>