<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>Desa</th>
			<th>Kecamatan</th>
			<th>KabKota</th>
		</tr>
		<?php foreach($alamat as $a){ ?>
		<tr>
			<td><?php echo $a->Desa ;?></td>
			<td><?php echo $a->Kecamatan ;?></td>
			<td><?php echo $a->KabKota ;?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>