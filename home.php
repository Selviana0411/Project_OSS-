<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			body{
			background-image: url(image/1.jpg); background-size:cover}
			#test{padding:20px}
			table{
			width: 840px;
			margin: auto;
			}
			h1{
			text-align: center;
			color: white;
			}
			/* Start http://www.cursors-4u.com */ * {cursor: url(http://cur.cursors-4u.net/others/oth-5/oth508.ani), url(http://cur.cursors-4u.net/others/oth-5/oth508.png), auto !important;} /* End http://www.cursors-4u.com */
			
			</style>
			<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
		</head>
		<body>
			<div id="test">
			<h1>Tabel Biodata Mahasiswa</h1>
			<center><a href="input.php"><font face="Time New Roman" size="4" color="White">Input Data &Gt; </font></a></center>
			<center><a href="index.php"><font face="Time New Roman" size="4" color="White">Log Out &Gt; </font></a></center>
			<br/>
			<table border="1">
				<tr style="background-color: aqua;">
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Fakultas</th>
					<th>Jurusan</th>
					<th>IPK</th>
					<th>Pilihan</th>
				</tr>
				<?php
				$query = "SELECT*FROM mahasiswa ORDER BY nim ASC";
				$result = mysqli_query($link,$query);
				if(!$result){
					die ("Query Error: ".mysqli_errno($link).
					" - ".mysqli_error($link));
				}
				
				$no = 1;
				
				while($data = mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td >$no</td>";
					echo "<td>$data[nim]</td>";
					echo "<td>$data[nama]</td>";
					echo "<td>$data[fakultas]</td>";
					echo "<td>$data[jurusan]</td>";
					echo "<td>$data[ipk]</td>";
					echo '<td>
						<a href="edit.php?
						id='.$data['id'].'">Edit</a> /
							<a href="hapus.php?
						id='.$data['id'].'"
											onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
						</td>';
						echo "</tr>";
						$no++;
				}
				?>
			</table>
		</body>
</html>