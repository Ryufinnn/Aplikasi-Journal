<?php
include "conn.php";
$edit=mysql_query("SELECT * FROM download where id_download='$_GET[id]'");
    $r=mysql_fetch_array($edit);
echo "<h4>Edit Data</h4>
	<hr><br>
          <form method=POST action=./aksi.php?module=revisi&act=update enctype='multipart/form-data'>
          <input type=hidden name=id value='$r[id_download]'>
          <table class='table table-bordered table-striped'>
          <tr><td>NIDN </td><td> : <input type=text name='nip' value='$r[nidn]' size=15 readonly></td></tr>
<tr><td>Nama Lengkap </td><td> : <input type=text name='nama' value='$r[nama]' size=15 readonly></td></tr>
<tr><td>Judul </td><td> : <textarea name='judul' >$r[judul]</textarea></td></tr>

<tr><td> File </td><td> : <input type='file' id='gambar' placeholder='File Gambar' name='gambar' class='form-control input-small' /></td></tr>


		  	  		  
		  
          <tr><td colspan=2><input type=submit value=Update class='btn btn-primary'>
                            <input type=button value=Batal onclick=self.history.back() class='btn btn-warning'></td></tr>
          </table></form>";
		  ?>