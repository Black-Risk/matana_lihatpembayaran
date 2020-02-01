<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>

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
	if(isset($_GET['no']))
	{
		include "koneksi.php";

		//ambil parameter url : no
		$no = $_GET['no'];

		$query = " SELECT * FROM `databayar` WHERE `databayar`.`no` = '$no' ";

		$hasil = $koneksi->query($query);

		//ambil data
		$data = $hasil->fetch_array(MYSQL_ASSOC);

		echo "<p align='center'> Ganti Data Mahasiswa ";
	}

	?>

	<form method="POST" action="simpan_data.php" onsubmit="return isi_form()" autocomplete="off">
	<table border="0" align="center">
		<input type="hidden" name="no" value="<?php echo $data['no']?>">
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" id="id_nim" value="<?php echo $data['nim']?>"></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" id="id_nama" value="<?php echo $data['nama']?>"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password" id="id_password" value="<?php echo $data['password']?>"></td>
			<th> <input type="checkbox" onclick="return lihat_password()">Lihat Password </th>
		</tr>

		<tr>
			<td>Prodi</td>
			<td>:</td>
			<td><select name="prodi" id="id_prodi">
				<option value="" disabled="disabled">--Pilih--</option>
				<option value="Sistem Komputer" <?php echo $data['prodi'] === 'Sistem Komputer' ? 'selected' : '' ?> >Sistem Komputer</option>
				<option value="Teknik Informatika" <?php echo $data['prodi'] === 'Teknik Informatika' ? 'selected' : '' ?> >Teknik Informatika</option>
				<option value="Sistem Informasi" <?php echo $data['prodi'] === 'Sistem Informasi' ? 'selected' : '' ?> >Sistem Informasi</option>
				<option value="Fisika Medis & Instrumentasi" <?php echo $data['prodi'] === 'Fisika Medis & Instrumentasi' ? 'selected' : '' ?> >Fisika Medis & Instrumentasi</option>
				<option value="Akuntansi" <?php echo $data['prodi'] === 'Akuntansi' ? 'selected' : '' ?> >Akuntansi</option>
				<option value="Manajemen"  <?php echo $data['prodi'] === 'Manajemen' ? 'selected' : '' ?> >Manajemen</option>
				<option value="Desain Komunikasi Visual" <?php echo $data['prodi'] === 'Desain Komunikasi Visual' ? 'selected' : '' ?> >Desain Komunikasi Visual</option>
				<option value="Hospitality & Pariwisata" <?php echo $data['prodi'] === 'Hospitality & Pariwisata' ? 'selected' : '' ?> >Hospitality & Pariwisata</option>
				<option value="Arsitektur" <?php echo $data['prodi'] === 'Arsitektur' ? 'selected' : '' ?> >Arsitektur</option>
				<option value="Statistika Bisnis" <?php echo $data['prodi'] === 'Statistika Bisnis' ? 'selected' : '' ?> >Statistika Bisnis</option>
			</td>
		</tr>

		<tr>
			<td>Periode 1</td>
			<td>:</td>
			<td><input type="text" name="periode1" placeholder="XXX.XXX.XXX" autofocus="autofocus" id="id_periode1" onkeypress="return cekInput(event)"></td>
		</tr>

		<tr>
			<td>Status 1</td>
			<td>:</td>
			<td><select name="status1" id="id_status1" value="<?php echo $data['status1']?>">
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
			<td colspan="3" align="center"><input type="submit" name="simpan" value="Simpan Perubahan Data Mahasiswa!"></td>
			<td>[<a href="tampil_data.php"> Kembali ke Tabel </a>]</td>
		</tr>

	</form>



</body>
</html>