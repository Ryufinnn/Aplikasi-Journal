<?php
include "conn.php";
$edit=mysql_query("SELECT * FROM download where id_download='$_GET[id]'");
    $r=mysql_fetch_array($edit);
echo "<h4>Pemeriksaan Jurnal</h4>
	<hr><br>
          <form method=POST action=./aksi.php?module=jurnal&act=update>
          <input type=hidden name=id value='$r[id_download]'>
          <table class='table table-bordered table-striped'>
          <tr><td>NIDN </td><td> : <input type=text name='nip' value='$r[nidn]' size=15 readonly></td></tr>
<tr><td>Nama Lengkap </td><td> : <input type=text name='nama' value='$r[nama]' size=15 readonly></td></tr>

<tr><td>  Judul</td><td> :  <textarea name='judul' readonly>$r[judul] </textarea></td></tr>
<tr><td>  </td><td>   <a href='./files/$r[isi]' class='btn btn-primary edit'>Download</a></td></tr>
<tr><td>  Status </td><td> : <select name='status'><option value=''>Silahkan Dipilih...</option><option value='Perbaikan'>Perbaikan</option><option value='Disetujui'>Disetujui</option>
            </select></td></tr>
<tr><td>  Catatan </td><td> : <textarea name='catatan'>$r[catatan] </textarea></td></tr>

		  	  		  
		  
          <tr><td colspan=2><input type=submit value=Perbaikan class='btn btn-primary'>
                            <input type=button value=Batal onclick=self.history.back() class='btn btn-warning'></td></tr>
          </table></form>";
		  ?>