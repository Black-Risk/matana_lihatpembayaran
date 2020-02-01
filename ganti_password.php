<!DOCTYPE html>
<html>
<head>
	<title>Ganti Password</title>

	<script>
		function isi_form()
		{
			var password = document.getElementById("id_password").value;
			if (password == "") 
			{
				alert ("Harap masukkan Password baru anda!");
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
	</script>

	<?php
		session_start();

		if($_SESSION['status'] != "login")
		{
			echo "<script type='text/javascript'>alert('Maaf, Anda Belum Login!')
			window.location='halaman_home.php';</script>"; 
		}

	?>
</head>
<body>
	<?php
	if(isset($_GET['no']))
	{
		include "koneksi.php";

		$no = $_GET['no'];

		$query = " SELECT * FROM `databayar` WHERE `databayar`.`no` = '$no' ";
		//$data = mysqli_fetch_array($query);

		$hasil = $koneksi->query($query);

		//ambil data
		$data = $hasil->fetch_array(MYSQL_ASSOC);
	}

	?>

	<?php
		echo "<p align='center'>Ganti Password";
		echo "<br>";
		echo "<p align='center'> NIM : " .$_SESSION['nim'];
		echo "<p align='center'>=> SEGERA RUBAH PASSWORD ANDA JIKA ANDA PERTAMA KALI LOGIN! <=";
		echo "<p align='center'>Default Password : matana123";
		echo "<br>(Jika belum pernah mengganti password)";
	?>

	<form method="POST" action="proses_ganti_password.php" onsubmit="return isi_form()" autocomplete="off">
		<input type="hidden" name="no" value="<?php echo $data['no']?>">
		
		<table border="0" align="center">
			<thead>
				<tr>
					<td> Password Baru </td>
					<th> : </th>
					<th> <input type="password" name="password" id="id_password" autofocus="autofocus"></th>
					<th> <input type="checkbox" onclick="return lihat_password()">Lihat Password </th>
				</tr>

				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>

				<tr>
					<td colspan="3" align="center"><input type="submit" name="simpan" value="Ganti Password"></td>
					<th colspan="2" align="center">[<a href="halaman_mahasiswa.php"> Kembali ke Home </a>]</th>
				</tr>
			</thead>

		</table>

		
	</form>


</body>
</html>

