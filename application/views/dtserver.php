<!DOCTYPE html>
<!DOCTYPE html>
<html>
<h2 align="center">Data Tables Server Side</h2>
<head>
	<title>Datatables Server Side</title>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</head>

<body>
<table id="tb">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
		</tr>
	</thead>
</table>

<script type="text/javascript">
	$(document).ready( function () {
		load();
	});

	function load() {
		table = $('#tb').DataTable({
			"bDestroy": true,
			"processing": true,
			"serverSide": true,
			"ordering": false,
			"pagingType": "simple",
			"order": [],
			"ajax": {
				"url": "<?php echo base_url('datatablesserver/showTable') ?>",
				"type": "POST"
			},
		});
	}

	function reload()
	{
		table.ajax.reload(null,false);
	}
</script>
</body>
</html>