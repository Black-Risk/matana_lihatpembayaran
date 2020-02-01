<!DOCTYPE html>
<html>
<head>
	<title>Status Pembayaran</title>

	<style type="text/css">
		input 
		{ 
    		text-align: center; 
		}
	</style>

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
		include "koneksi.php";

		//$nim = $_POST['nim'];

		//$_SESSION['nim'] = $nim;

		$query = mysqli_query($koneksi, "SELECT * FROM `databayar` WHERE `nim` = '".$_SESSION['nim']."' ")or die(mysql_error());
		$data = mysqli_fetch_array($query);

		//$sql = " SELECT * FROM `databayar` ";

		//$data = $koneksi->query($sql);
		
		echo "<p align='center'> Selamat datang, " .$data['nama'];
		echo "<br>";
		echo "<br>" .$_SESSION['nim'];
		echo "<br>" .$data['prodi'];
		echo "<br>";
		echo "<br>";

		$nim = $_SESSION['nim'];
	?>

	<table border="0" width="40%" align="center">
		<input type="hidden" name="no" value="<?php echo $data['no']?>">
		<input type="hidden" name="nim" value="<?php echo $data['nim']?>">
		<thead>
			<tr>
				<td> </td>
				<td align="center"> Biaya </td>
				<td align="center"> Status </td>
			</tr>

			<tr></tr>
			<tr></tr>

			<tr>
				<th align="center"> Periode 1 </th>
				<th> <input type ="text" disabled="disabled" style type="text/css" value="Rp <?php echo $data['periode1']?>,00"> </th>
				<th> <input type ="text" disabled="disabled" style type="text/css" value="<?php echo $data['status1']?>"> </th>
			</tr>

			<tr></tr>
			<tr></tr>
			<tr></tr>

			<tr>
				<th align="center"> Periode 2 </th>
				<th> <input type ="text" disabled="disabled" style type="text/css" value="Rp <?php echo $data['periode2']?>,00"> </th>
				<th> <input type ="text" disabled="disabled" style type="text/css" value="<?php echo $data['status2']?>"> </th>
			</tr>

		</thead>
			
		<tbody>
	
		</tbody>
	</table>

	<?php
		include "koneksi.php";

		$query = mysqli_query($koneksi, "SELECT * FROM databayar WHERE `databayar`.`nim` = '$nim' ");

		while ($data = mysqli_fetch_array($query))
		{
			echo "<tr>
					<td>
						<a href='ganti_password.php?no=$data[no]'> Ganti Password | </a>
						<a href='logout.php'> Logout </a>
					</td>

				</tr>";
			
		}

	?>


			


</body>
</html>