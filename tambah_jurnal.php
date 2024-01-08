<?php include "conn.php" ;
include "config/tglindo.php";
$edit=mysql_query("SELECT * FROM rb_login where nama_lengkap='$_SESSION[namalengkap]' ");
    $r=mysql_fetch_array($edit);
?>
	

<form class='form-horizontal' action='input_jurnal.php' method='POST'  enctype='multipart/form-data'>
	  <fieldset>
		<div class='alert alert-alert'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Silahkan Mengisi Data pada Form di bawah ini dengan baik dan benar.
		</div><br/>
		<div class='control-group'>
	      <label class='control-label' for='input01'>NIDN </label>
	      <div class='controls'>
	        <input type='text' data-field="x_username" id="x_username" name='nip' value="<?php echo "$r[nidn]";?>" class='required' readonly>      
	      </div>
	</div>
		 <div class='control-group'>
	      <label class='control-label' for='input01'>Nama Lengkap</label>
	      <div class='controls'>
	        <input type='text' data-field="x_username" id="x_username" name='nama' value="<?php echo "$r[nama_lengkap]";?>" class='required' readonly>      
	      </div>
	</div>
	
	 
	 
	 <div class='control-group'>
		<label class='control-label' for='input01'>Judul</label>
		<div class='controls'>
	     <textarea name="judul"></textarea> 
       </div>

	</div>
	 <div class="control-group">
								
								<label class="control-label" for="gambar">Pilih File:</label>
								<div class='controls'>
								<input type="file" id="gambar" placeholder="File Gambar" name="gambar" class="form-control input-small" />
							</div>
	</div>
	 
	<div class='control-group'>
		<label class='control-label' for='input01'></label>
	      <div class='controls'>
	       <button type='submit' name="simpan" class='btn btn-success' rel='tooltip' title='first tooltip'>Simpan</button> <a href="media.php?module=home" class='btn btn-warning'> Close</a>
	       
	      </div>
	
	</div> 
</fieldset>
	</form>