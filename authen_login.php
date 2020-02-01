<?php
	//CARA 3
	include "koneksi.php";

	$nim = $_POST['nim'];
	$password = $_POST['password'];

	$query = "SELECT * FROM databayar WHERE nim='$nim' AND password='$password'";

	$result = mysqli_query ($koneksi, $query) or die(mysqli_error($koneksi));	

	$count = mysqli_num_rows($result);
	
	if($count > 0)
	{
		session_start();

		$_SESSION['nim'] = $nim;
		$_SESSION['password'] = $password;
		$_SESSION['status'] = "login";

		//echo "NIM Terdaftar!";
		//echo "<script type='text/javascript'>alert('NIM Terdaftar')</script>";
		header('Location: halaman_mahasiswa.php'); 
	}

	else if ($nim=='root' && $password=='root') 
	{
		session_start();

		$_SESSION['nim'] = $nim;
		$_SESSION['status'] = "login";

		echo "<script type='text/javascript'>alert('Selamat Datang Kembali Admin!')
		window.location='tampil_data.php';</script>";
		//header('Location: tampil_data.php'); 
	}

	else
	{
		//echo "NIM atau Password Salah!";
		echo "<script type='text/javascript'>alert('NIM atau Password Salah!')
		history.go(-1);
		</script>";

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" name="no" value="<?php echo $data['no']?>">
	<input type="hidden" name="nim" value="<?php echo $data['nim']?>">
</body>
</html>