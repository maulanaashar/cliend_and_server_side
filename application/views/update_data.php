<?php echo "<h3>".$judul."</h3>"; ?>

<form method="post" action="<?php echo base_url('crud/update') ?>"> 
	 <input type="hidden" name="id" value="<?php echo $id ?>"> 
	 Nama :
	  <input type="text" name="nama" value="<?php echo $nama ?>"> 
	  <input type="submit" name="simpan" value="Update">
	</form>
