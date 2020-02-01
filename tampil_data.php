<!DOCTYPE html>
<html>
<head>
	<title>Data Pembayaran Mahasiswa</title>
</head>
<body>
	<table border="2" width="80%" align="center">
		<thead>
			<tr>
				<th> No </th>
				<th> NIM </th>
				<th> Nama </th>
				<th> Prodi </th>
				<th> Periode 1 </th>
				<th> Status 1 </th>
				<th> Periode 2 </th>
				<th> Status 2 </th>
			</tr>
		</thead>

		<tbody>

			<?php
				include "koneksi.php";
				include "refresh_data.php";

				session_start();

				if($_SESSION['status'] != "login")
				{
					echo "<script type='text/javascript'>alert('Maaf, Anda Belum Login!')
					window.location='halaman_home.php';</script>"; 
				}

				//Merupakan banyak data yang ditampilkan pada setiap halaman (paging)
				$batas = 20; 					
				
				if(isset($_GET["page"]))
				{
					$page = $_GET["page"];
				}
				
				else
				{
					$page = 1;
				}
				
				$starts_from =($page-1) * $batas;

				$nomor = 1;
				$query = mysqli_query($koneksi, "SELECT * FROM databayar ORDER BY nim ASC LIMIT $starts_from, $batas");
				
				while ($data = mysqli_fetch_array($query)) 
				{
					echo "<tr>
							<td align='center'>$nomor</td>
							<td>$data[nim]</td>
							<td>$data[nama]</td>
							<td>$data[prodi]</td>
							<td>$data[periode1]</td>
							<td>$data[status1]</td>
							<td>$data[periode2]</td>
							<td>$data[status2]</td>
							<td> 
								<a href='edit_data.php?no=$data[no]'>Edit | </a>
								<a href='hapus_data.php?no=$data[no]'>Hapus </a> 
							</td>

					</tr>";

					$nomor++;
				}
				
				


			?>

		</tbody>

	</table>

		<?php
			include "koneksi.php";

			$sql = mysqli_query($koneksi, "SELECT COUNT(nim) FROM databayar");
			$row = mysqli_fetch_row($sql);
			
			$total_data = $row[0];
			$total_halaman = ceil($total_data / $batas);
			
			$pagLink = "<div align='center'>";
			for($i=1; $i<=$total_halaman; $i++)
			{
				$pagLink .= "<a href='tampil_data.php?page=".$i."'>".$i."&nbsp;&nbsp;"."</a>";
			};
			
			echo "$pagLink&nbsp;&nbsp;"."</div>";
			
		?>
		
	[<a href="tambah_baru.php"> Tambah Baru </a>]
	[<a href="logout.php"> Logout </a>]

</body>
</html>