<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>Id</th>
		<th>Nama</th>
	</tr>
	<?php
	foreach ($isi as $k0 => $v0) {
		?>
		<tr>
			<td><?php echo $v0['id'] ?></td>
			<td><?php echo $v0['nama'] ?></td>
			 <td><a href='<?php echo "tambah/".$v0["id"] ?>'>Tambah</a></td> 
			 <td><a href='<?php echo "ubah/".$v0["id"] ?>'>Ubah</a></td> 
			  <td><a href='<?php echo "hapus/".$v0["id"] ?>'>Hapus</a></td> 
		</tr>
	<?php } ?>
</table>
</body>
</html>