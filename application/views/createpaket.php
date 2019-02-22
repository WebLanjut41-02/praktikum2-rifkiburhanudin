<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/c_paket/inputpaket" method="POST">
		
		<table>
			<tr>
				<td>Tanggal Datang <input type="date" name="tgldatang" value="<?php echo (date('Y-m-d')); ?>"></td>
			</tr>
			<tr>
				<td>Sasaran <select name="sasaran"> 
					<option>Amaw</option>
					<option>Agung</option>
					<option>Zaki</option>
					<option>Firman</option>
				</select></td>
			</tr>
			<tr>
				<td>Penerima <input type="textarea" name="penerima"> </td>
			</tr>
			<tr>
				<td>Isi Paket <input type="textarea" name="isipaket"></td>
			</tr>
			<tr>
				<td>Tanggal Ambil <input type="date" name="tglambil"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
			<tr>
				<td><a href="<?php echo base_url()?>index.php/c_paket/tampildatapeng">Daftar-Daftar Penghuni</a></td>
			</tr>
		</table>

	</form>
</body>
</html>