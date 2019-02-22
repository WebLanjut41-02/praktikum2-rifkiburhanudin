<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/c_paket/pros_login" method="POST">
		<table>
		<tr>
			<td><h2>Login Karyawan</h2></td>
		</tr>
		<tr>
			<td>Nama karyawan<input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Nip karyawan<input type="text" name="nip"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="login"></td>
		</tr>
		</table>
	</form>
</body>
</html>