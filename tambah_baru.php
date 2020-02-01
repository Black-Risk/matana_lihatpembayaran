<!DOCTYPE html>
<html>
<head>
	<title>Penambahan Data Pembayaran Mahasiswa</title>

	<?php
	session_start();

	if($_SESSION['status'] != "login")
	{
		echo "<script type='text/javascript'>alert('Maaf, Anda Belum Login!')
		window.location='halaman_home.php';</script>"; 
	}

	?>

	<script>
		function isi_form()
		{
			var nim = document.getElementById("id_nim").value;
			if(nim == "")
			{
				alert ("Harap masukkan NIM!");
				return false;
			}

			var nim = document.getElementById("id_nim").value;
			if (nim == "root") 
			{
				alert ("Root tidak boleh dimasukkan dalam NIM!");
				return false;
			}

			var nama = document.getElementById("id_nama").value;
			if (nama == "") 
			{
				alert ("Harap masukkan Nama!");
				return false;
			}

			var password = document.getElementById("id_password").value;
			if (password == "") 
			{
				alert ("Harap masukkan Password!");
				return false;
			}

			var password = document.getElementById("id_password").value;
			if (password == "root") 
			{
				alert ("Root tidak boleh dimasukkan dalam Password!");
				return false;
			}

			var prodi = document.getElementById("id_prodi").value;
			if (prodi == "") 
			{
				alert ("Harap masukkan Prodi!");
				return false;
			}

			var periode1 = document.getElementById("id_periode1").value;
			if (periode1 == "") 
			{
				alert ("Harap masukkan Periode 1!");
				return false;
			}

			var status1 = document.getElementById("id_status1").value;
			if (status1 == "") 
			{
				alert ("Harap masukkan Status 1!");
				return false;
			}

			var periode2 = document.getElementById("id_periode2").value;
			if (periode2 == "") 
			{
				alert ("Harap masukkan Periode 2!");
				return false;
			}

			var status2 = document.getElementById("id_status2").value;
			if (status2 == "") 
			{
				alert ("Harap masukkan Status 2!");
				return false;
			}
		}

		function lihat_password() 
		{
		    var x = document.getElementById("id_password");
		    if (x.type === "password") 
		    {
		        x.type = "text";
		    } 

		    else 
		    {
		        x.type = "password";
		    }
		}

		function cekInput(evt)
		{
			var charCode = (evt.which) ? evt.which : event.keyCode
			if(charCode > 31 && (charCode < 46 || charCode > 57))
			{
				return false;
			}

			else if (charCode == 47) 
			{
				return false;
			}

			else
			{
				return	true;
			}
		}

	</script>
</head>
<body>
	<?php
	echo "<p align='center'> Tambah Baru Data Mahasiswa ";
	?>

	<form method="POST" action="tambah_baru.php" onsubmit="return isi_form()" autocomplete="off">
		<table border="0" align="center">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" id="id_nim" autofocus="autofocus"></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" id="id_nama"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" id="id_password" value="matana123"></td>
				<th> <input type="checkbox" onclick="return lihat_password()">Lihat Password </th>
			</tr>

			<tr>
				<td colspan="3" align="center">(Default Password : "matana123")</td>
			</tr>

			<tr>
				<td>Prodi</td>
				<td>:</td>
				<td><select name="prodi" id="id_prodi">
					<option value="" disabled="disabled" selected="selected">--Pilih--</option>
					<option value="Sistem Komputer">Sistem Komputer</option>
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Sistem Informasi">Sistem Informasi</option>
					<option value="Fisika Medis & Instrumentasi">Fisika Medis & Instrumentasi</option>
					<option value="Akuntansi">Akuntansi</option>
					<option value="Manajemen">Manajemen</option>
					<option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
					<option value="Hospitality & Pariwisata">Hospitality & Pariwisata</option>
					<option value="Arsitektur">Arsitektur</option>
					<option value="Statistika Bisnis">Statistika Bisnis</option>
				</td>
			</tr>

			<tr>
				<td>Periode 1</td>
				<td>:</td>
				<td><input type="text" name="periode1" placeholder="XXX.XXX.XXX" id="id_periode1" onkeypress="return cekInput(event)"></td>
			</tr>

			<tr>
				<td>Status 1</td>
				<td>:</td>
				<td><select name="status1" id="id_status1">
				<option value="" disabled="disabled" selected="selected">--Pilih--</option>
				<option value="Lunas">Lunas</option>
				<option value="Belum Lunas">Belum Lunas</option>
				</select></td>
			</tr>

			<tr>
				<td>Periode 2</td>
				<td>:</td>
				<td><input type="text" name="periode2" placeholder="XXX.XXX.XXX" id="id_periode2" onkeypress="return cekInput(event)"></td>
			</tr>

			<tr>
				<td>Status 2</td>
				<td>:</td>
				<td><select name="status2" id="id_status2">
				<option value="" disabled="disabled" selected="selected">--Pilih--</option>
				<option value="Lunas">Lunas</option>
				<option value="Belum Lunas">Belum Lunas</option>
				</select></td>
			</tr>

			<tr>
				<td colspan="3" align="center"><input type="submit" name="tambah" value="Tambah Data Mahasiswa!"></td>
				<td>[<a href="tampil_data.php"> Kembali ke Tabel </a>]</td>
			</tr>

		
	</form>

	<?php
		if(isset($_POST['tambah']))
		{
			//echo $_POST['nim']."<br>";

			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$password = $_POST['password'];
			$prodi = $_POST['prodi'];
			$periode1 = $_POST['periode1'];
			$status1 = $_POST['status1'];
			$periode2 = $_POST['periode2'];
			$status2 = $_POST['status2'];

			include('koneksi.php');

			$koneksi = new mysqli($host, $user, $pass, $db) or die("Koneksi Database Gagal");

			$sql = " INSERT INTO `databayar` (`no`, `nim`, `nama`, `password`, `prodi`, `periode1`, `status1`, `periode2`, `status2`) VALUES (NULL, '$nim', '$nama', '$password', '$prodi', '$periode1', '$status1', '$periode2', '$status2'); ";

			$hasil = $koneksi->query($sql);

			if($koneksi)
			{
				echo "<script type='text/javascript'>alert('Data Mahasiswa Berhasil Ditambah!');
				window.location='tambah_baru.php';
				</script>";
			}

			else
			{
				echo "<script type='text/javascript'>alert('Data Mahasiswa Gagal Ditambah!');
				window.location='tambah_baru.php';
				</script>";
			}

		}
			

	?>

</body>
</html>