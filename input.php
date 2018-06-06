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
		<h1>Input Data</h1>
		<div class="container">
			<form id="form_mahasiswa" action="input_proses.php" method="post">
			<fieldset>
			<legend>Input Data Mahasiswa</legend>
			<p>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" placeholder="Contoh: 12345678">
			</p>
			<p>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama">
			</p>
			<p>
				<label for="fakultas">Fakultas : </label>
					<select name="fakultas" id="fakultas">
					<option value="Kedokteran"> </option>
					<option value="Kedokteran">Kedokteran </option>
					<option value="MIPA">MIPA </option>
					<option value="Ekonomi">Ekonomi </option>
					<option value="Teknik">Teknik </option>
					<option value="Sastra">Sastra </option>
					<option value="Hukum">Hukum </option>
					</select>
				</p>
				<p>
					<label for="jurusan">Jurusan : </label>
					<input type="text" name="jurusan" id="jurusan">
				</p>
				<p>
					<label for="ipk">IPK : </label>
					<input type="text" name="ipk" id="ipk" placeholder="Contoh: 2.75">
				</p>
			
			</fieldset>
			<p>
			<input type="submit" name="input" value="Tambah Data">
			</p>
		</form>
	</div>
	</body>
</html>