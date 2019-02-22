<html>
<head>
</head>
<body>
	<form action="" ></form>
	<table style="margin:20px auto;" border="0">
		<tr>
			<th>No</th>
			<th>nama</th>
			<th>unit</th>
			<th>ktp</th>
		
		</tr>
		<?php 
		$no = 1;
		foreach($user1 as $a){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $a->nama ?></td>
			<td><?php echo $a->unit ?></td>
			<td><?php echo $a->ktp ?></td>
			
		</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>


