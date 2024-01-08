<?php include "conn.php" ;
include "config/tglindo.php";?>

<style type="text/css">
<!--
.style3 {font-size: 12px}
-->
.style5 {font-size: 20px}
</style>

<div class="panel-heading">
                            <table width="100%">
							<tr>
							<td><div align="center">
							  <div align="center"><span class="style5">Laporan Pengajuan Jurnal</span></div> <hr>
							 </td>
							</tr>
							</table>
</div>

<table id='theList' border=1 width='100%' class='table table-bordered table-striped'>
<tr><th width="5%" bgcolor="#999999"><span class="style3">No.</span></th>
<th bgcolor="#999999"><span class="style3">NIDN </span></th>

<th bgcolor="#999999"><span class="style3">Nama Lengkap </span></th>
<th bgcolor="#999999"><span class="style3">Judul</span></th>

<th width="11%" bgcolor="#999999"><span class="style3">Status</span></th>
<th width="17%" bgcolor="#999999"><span class="style3">Catatan</span></th>
<th width="14%" bgcolor="#999999"><span class="style3">Aksi</span></th>

</tr>
<?php
$sql = mysql_query("select * from download where nama='$_SESSION[namalengkap]' ");
$no=1;
while($r = mysql_fetch_array($sql)){
if($r[aktif]==1){
$status="Online";
}else{
$status="Offline";
}
?>
<tr>
<td class='td' align='center'><span class="style3"><?echo$no;?></span></td>

<td class='td' width='9%' ><span class="style3"><?echo"$r[nidn]";?></span></td>
<td class='td' width='14%' ><span class="style3"><?echo"$r[nama]";?></span></td>
<td class='td' width='30%' ><span class="style3"><?echo"$r[judul]";?></span></td>

<td class='td'><span class="style3"><?echo$r[status];?></span></td>
<td class='td'><span class="style3"><?echo$r[catatan];?></span></td>
<td width='14%' align='center' class='td style3'>
<a  href='?module=edit_jurnal&id=<?echo$r[id_download];?>'>
<button class='btn btn-warning'>Edit</button></a>    </td>
</tr>
<?
$no++;
}
?>
</table>
<br>


