<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>
<?php

$edit=mysql_query("SELECT * FROM rb_login where nama_lengkap='$_SESSION[namalengkap]' ");
    $r=mysql_fetch_array($edit);

?>
<form name="form1" method="post" action="./aksi.php?module=setting&act=update">
<input type="hidden" name="id" value="<?php echo "$r[username]";?>">
  <table width="521" class='table table-bordered table-striped'>
    <tr>
      <td colspan="2"><div align="center" class="style1">Edit Akun</div>        <div align="center"></div></td>
    </tr>
    <tr>
      <td width="123">Username</td>
      
        <td width="386"> : <input type="text" name="jangka" value="<?php echo "$r[username]";?>" size="15"></td>
      </tr>
    <tr>
      <td>Password </td>
      <td>
        : <input type="password" name="denda" value="<?php echo "$r[password]";?>" size="15"></tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" class="btn btn-info" value="Simpan">
      </label></td>
    </tr>
  </table>
</form>
