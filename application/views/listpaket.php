<html>
<head>
</head>
<body>
	<form action="" ></form>
	<table style="margin:30px auto;" border="0">
		<tr>
			<th>No</th>
			<th>tgldatang</th>
			<th>sasaran</th>
			<th>penerima</th>
			<th>isipaket</th>
			<th>tglambil</th>

		</tr>
		<?php 
		$no = 1;
		foreach($user as $a){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $a->tgldatang ?></td>
			<td><?php echo $a->sasaran ?></td>
			<td><?php echo $a->penerima ?></td>
			<td><?php echo $a->isipaket ?></td>
			<td><?php echo $a->tglambil ?></td>
		</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>


