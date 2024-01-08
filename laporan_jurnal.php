<?php include "conn.php" ;
include "config/tglindo.php";?>
<body onLoad="javascript:print()"> 
<style type="text/css">
<!--
.style3 {font-size: 16px}
-->
.style5 {font-size: 24px}
</style>

<div class="panel-heading">
                            <table width="100%">
							<tr>
							<td><div align="center">
							  <div align="center"><span class="style5">LAPORAN JURNAL YANG TELAH DISETUJUI </span></div> <hr>
							 </td>
							</tr>
							</table>
</div>

<table id='theList' border=1 width='100%' class='table table-bordered table-striped'>
<tr><th width="8%" bgcolor="#999999"><span class="style3">No.</span></th>
<th bgcolor="#999999"><span class="style3">NIDN </span></th>

<th bgcolor="#999999"><span class="style3">Nama Lengkap </span></th>
<th bgcolor="#999999"><span class="style3">Judul</span></th>

<th width="18%" bgcolor="#999999"><span class="style3">Status</span></th>

</tr>
<?php
$sql = mysql_query("select * from download where status='Disetujui' ");
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

<td class='td' width='13%' ><span class="style3"><?echo"$r[nidn]";?></span></td>
<td class='td' width='20%' ><span class="style3"><?echo"$r[nama]";?></span></td>
<td class='td' width='41%' ><span class="style3"><?echo"$r[judul]";?></span></td>

<td class='td'><span class="style3"><?echo$r[status];?></span></td>

</tr>
<?
$no++;
}
?>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" >
<tr>
<td width="63%" bgcolor="#FFFFFF">
							  
	  <p align="center"><br/>
    </td><td width="37%" bgcolor="#FFFFFF"><div align="center"> <?php $tgl = date('d M Y');
echo "Kabupaten Asahan, $tgl";?><br/>
  <br/><br/>
								<br/><br/>
								  Pimpinan<br/>
								  
								  
								  </div></td>
</tr></table>

