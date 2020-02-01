<?php
	include "koneksi.php";

	$no = $_POST['no'];
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$prodi = $_POST['prodi'];
	$periode1 = $_POST['periode1'];
	$status1 = $_POST['status1'];
	$periode2 = $_POST['periode2'];
	$status2 = $_POST['status2'];

	$sql = " UPDATE `databayar` SET `nim` = '$nim', `nama` = '$nama', `password` = '$password', `prodi` = '$prodi', `periode1` = '$periode1', `status1` = '$status1', `periode2` = '$periode2', `status2` = '$status2' WHERE `databayar`.`no` = '$no' ";

	$hasil = $koneksi->query($sql);

	if($sql)
	{
		echo "<script type='text/javascript'>alert('Data Mahasiswa Berhasil Diperbarui')
		window.location='tampil_data.php';</script>";
		//header('Location: tampil_data.php');
	}

	else
	{
		echo "<script type='text/javascript'>alert('Data Mahasiswa Gagal Diperbarui')
		/*window.location='tampil_data.php'*/;</script>";
		//history.go(-1);
	}


?>