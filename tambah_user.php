	

<form class='form-horizontal' action='input_user.php' method='POST'  enctype='multipart/form-data'>
	  <fieldset>
		<div class='alert alert-alert'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Silahkan Mengisi Data pada Form di bawah ini dengan baik dan benar.
		</div><br/>
		<div class='control-group'>
	      <label class='control-label' for='input01'>Username </label>
	      <div class='controls'>
	        <input type='text' data-field="x_username" id="x_username" name='username' class='required'>      
	      </div>
	</div>
	<div class='control-group'>
	      <label class='control-label' for='input01'>Password</label>
	      <div class='controls'>
	        <input type='password' data-field="x_username" id="x_username" name='password' class='required'>      
	      </div>
	</div>
		 <div class='control-group'>
	      <label class='control-label' for='input01'>Nama Lengkap</label>
	      <div class='controls'>
	        <input type='text' data-field="x_username" id="x_username" name='nama' class='required'>      
	      </div>
	</div>
	
	 
	 <div class='control-group'>
		<label class='control-label' for='input01'>Email</label>
		<div class='controls'>
	     <input type='text'  id='nohp' name='email' rel='popover'>    
       </div>

	</div>
	 <div class='control-group'>
	      <label class='control-label' for='input01'>No Hp</label>
	      <div class='controls'>
	        <input type='text' data-field="x_username" id="x_username" name='nohp' class='required'>      
	      </div>
	</div>	
	<div class='control-group'>
	      <label class='control-label' for='input01'>Alamat</label>
	      <div class='controls'>
	        <label>
	        <textarea name="alamat"></textarea>
	        </label>
	      </div>
	</div>
	 
	<div class='control-group'>
		<label class='control-label' for='input01'></label>
	      <div class='controls'>
	       <button type='submit' name="simpan" class='btn btn-success' rel='tooltip' title='first tooltip'>Save</button> <a href="media.php?module=lihat_user" class='btn btn-warning'> Close</a>
	       
	      </div>
	
	</div> 
</fieldset>
	</form>