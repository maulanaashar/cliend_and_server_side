<?php echo "<h3>".$judul."</h3>"; ?>


<form method="post" action="<?php echo base_url('crud/simpan') ?>">
	Nama :
	<input type="text" name="nama">
	<input type="submit" name="simpan" value="Simpan">
</form>