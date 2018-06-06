<?php
	include 'koneksi.php';
	
	if (isset($_GET['id'])) {
		$id = ($_GET["id"]);
		
		$query = "SELECT*FROM mahasiswa WHERE id='$id'";
		$result = mysqli_query($link,$query);
		if(!$result){
			die ("Query Error : ".mysqli_errno($link). " - ".mysqli_error($link));
		}
		$data = mysqli_fetch_assoc($result);
		$nim = $data["nim"];
		$nama = $data["nama"];
		$fakultas = $data["fakultas"];
		$jurusan = $data["jurusan"];
		$ipk = $data["ipk"];
		
	} else {
		header("location:home.php");
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
	<style type="text/css">
	body{
			background-image: url(image/1.jpg); background-size:cover}
			#test{padding:20px}
	h1{
		text-align: center;
		color: white;
	}
	.container{
		width: 400px;
		margin: auto;
	}
	/* Start http://www.cursors-4u.com */ * {cursor: url(http://cur.cursors-4u.net/others/oth-5/oth508.ani), url(http://cur.cursors-4u.net/others/oth-5/oth508.png), auto !important;} /* End http://www.cursors-4u.com */
	
	</style>
	<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="test">
		<h1>Edit Data</h1>
		<div class="container">
		<form id="form_mahasiswa" action="edit_proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<fieldset>
		<legend>Edit Data Mahasiswa</legend>
			<p>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" value="<?php echo $nim ?>">
			</p>
			<p>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
			</p>
			<p>
				<label for="fakultas">Fakultas : </label>
				<select name="fakultas" id="fakultas">
				<option value=" " <?php if($data['fakultas'] == ' '){ echo 'selected'; } ?>>  </option>
				<option value="Kedokteran" <?php if($data['fakultas'] == 'Kedokteran'){ echo 'selected'; } ?>> Kedokteran </option>
				<option value="MIPA" <?php if($data['fakultas'] == 'MIPA'){ echo 'selected'; } ?>> MIPA </option>
				<option value="Ekonomi" <?php if($data['fakultas'] == 'Ekonomi'){ echo 'selected'; } ?>> Ekonomi </option>
				<option value="Teknik" <?php if($data['fakultas'] == 'Teknik'){ echo 'selected'; } ?>> Teknik </option>
				<option value="Sastra" <?php if($data['fakultas'] == 'Sastra'){ echo 'selected'; } ?>> Sastra </option>
				<option value="Hukum" <?php if($data['fakultas'] == 'Hukum'){ echo 'selected'; } ?>> Hukum </option>
				</select>
			</p>
			<p>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" value="<?php echo $jurusan ?>">
			</p>
			<p>
				<label for="ipk">IPK : </label>
				<input type="text" name="ipk" id="ipk" value="<?php echo $ipk ?>">
			</p>
		</fieldset>
		<p>
			<input type="submit" name="edit" value="Update Data">
		</p>
	</form>
	</div>
	</body>
</html>