<!DOCTYPE html>
<!DOCTYPE html>
<html>
<h2 align="center">Data Tables Client Server</h2>
<head>
	<title>Datatables Client Side</title>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</head>

<body>
<table id="table_id" class="display">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $id=1;foreach ($isi as $k0 => $v0) {?>
		<tr>
			<td><?php echo $id++ ?></td>
			<td><?php echo $v0['nama'] ?></td>
			<td>
			 	<a href='<?php echo "Crud/ubah/".$v0["id"] ?>'>Ubah</a>
			  	<a href='<?php echo "Crud/hapus/".$v0["id"] ?>'>Hapus</a>
			</td> 
		</tr>
		<?php } ?>
	</tbody>
</table>
<td>
 	<button><a href='<?php echo "Crud/tambah/".$v0["id"] ?>'>Tambah</a></button>
</td>

<script type="text/javascript">
	$(document).ready( function () {
		$('#table_id').dataTable();
	});
</script>
</body>
</html>