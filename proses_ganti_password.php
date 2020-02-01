<?php
	include "koneksi.php";

	$password = $_POST['password'];
	$no = $_POST['no'];

	$sql = " UPDATE `databayar` SET `password` = '$password' WHERE `databayar`.`no` = '$no' ";

	$hasil = $koneksi->query($sql);

	if($hasil)
	{
		echo "<script type='text/javascript'>alert('Password Anda Berhasil Diperbarui')
		window.location='halaman_mahasiswa.php';</script>";
		//header('Location: tampil_data.php');
	}

	else
	{
		echo "<script type='text/javascript'>alert('Password Anda Gagal Diperbarui')
		window.location='halaman_mahasiswa.php';</script>";
		//history.go(-1);
	}



?>