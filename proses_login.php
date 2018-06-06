<?php
$user =@$_REQUEST['user'];
$password =@$_REQUEST['pass'];
	if ($password == "admin123" && $user == "admin")
	{
	{
	
	?>
		<script language="Javascript">
		alert('Anda Dapat Masuk');
			document.location='home.php';
		</script>
		
	<?php
	}
	}
	else
	{
		{
			?>
			<script language="Javascript">
			alert('Password Atau Data Admin Salah, Silahkan Ulangi !!');
			document.location='index.php';
		</script>
	<?php
		}
	}
	?>
	