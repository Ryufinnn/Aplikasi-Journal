<?php
	
		include "conn.php" ;
include "config/tglindo.php";
		$batas =  10;
		$halaman = $_GET['halaman'];
		if(empty($halaman)){
			$posisi = 0;
			$halaman = 1;
		}else{
			$posisi = ($halaman - 1) * $batas;
		}
		
		
?>
<style type="text/css">
<!--
.style3 {font-size: 12px}
-->
.style4 {
	font-size: 16px;
	font-family: "Trebuchet MS";}
</style>



<table id='theList' border=1 width='100%' class='table table-bordered table-striped'>
<tr>
<th bgcolor="#999999"><span class="style3">NIDN </span></th>

<th bgcolor="#999999"><span class="style3">Nama Lengkap </span></th>
<th bgcolor="#999999"><span class="style3">Judul</span></th>
<th bgcolor="#999999"><span class="style3">Tanggal Upload</span></th>
<th bgcolor="#999999"><span class="style3">Tanggal Pemeriksaan</span></th>
<th bgcolor="#999999"><span class="style3">Status</span></th>







<th width="19%" bgcolor="#999999"><span class="style3">Aksi</span></th>



</tr>
<?php
$sql = mysql_query("select * from download order by id_download DESC limit $posisi, $batas");
$no=1;
while($r = mysql_fetch_array($sql)){
if($r[aktif]==1){
$status="Online";
}else{
$status="Offline";
}
?>
<tr>


<td class='td' width='4%' ><span class="style3"><?echo"$r[nidn]";?></span></td>
<td class='td' width='11%' ><span class="style3"><?echo"$r[nama]";?></span></td>
<td class='td' width='29%' ><span class="style3"><?echo"$r[judul]";?></span></td>
<td class='td' width='13%' ><span class="style3"><?echo"$r[tgl_upload]";?></span></td>
<td class='td' width='15%' ><span class="style3"><?echo"$r[tgl_periksa]";?></span></td>
<td class='td' width='9%' ><span class="style3"><?echo"$r[status]";?></span></td>





<td width='19%' align='center' class='td style3'>
<a  href='?module=periksa_jurnal&id=<?echo$r[id_download];?>'>
<button class='btn btn-warning'>Periksa</button></a>  <a  href='?module=pemeriksaan_jurnal&act=delete&id=<?echo$r[id_download];?>' onclick="return confirm('Anda yakin untuk menghapus data ini ?')">
 <button class='btn btn-danger'>Hapus</button></a> </td></tr>
<?
$no++;
}
?>
</table>
<?php
echo "Halaman : ";
		
		$sqlhal = mysql_query("select * from tunjangan" );
		$sqldat = mysql_query("select * from tunjangan");
		$jmldata = mysql_num_rows($sqlhal);
		$jmldat = mysql_num_rows($sqldat);
		$jmlhal = ceil($jmldata/$batas);
		
		// Membuat First dan Previous
		if($halaman > 1){
			$previous = $halaman - 1;
			echo "<a href='$_SERVER[PHP_SELF]?halaman=1&module=pemeriksaan_jurnal' class=\"btn btn-primary edit\">&laquo; First</a>  
			     <a href='$_SERVER[PHP_SELF]?halaman=$previous&module=pemeriksaan_jurnal' class=\"btn btn-primary edit\">&lsaquo; Prev</a>";
		}else{
			echo "&laquo; First | &lsaquo; Prev | ";
		}
			
		//Menampilkan Angka Halaman
		/*for($i=1; $i<=$jmlhal;$i++){
			if($i != $halaman){
				echo " <a href='$_SERVER[PHP_SELF]?halaman=$i'>$i</a> | ";
			}else{
				echo " <b>$i</b> | ";
			}
		}*/
		$angka = ($halaman > 3 ? " ... " : " ");
		
		for($i=$halaman-2; $i<$halaman; $i++){
			if($i < 1)
				continue;
			$angka .= "<a href='$_SERVER[PHP_SELF]?halaman=$i&module=pemeriksaan_jurnal' class=\"btn btn-primary edit\">$i</a> ";
		}
		
		$angka .= " <b>$halaman</b> ";
		
		for($i = $halaman+1; $i<($halaman+3); $i++){
			if($i > $jmlhal)
				break;
			$angka .= "<a href='$_SERVER[PHP_SELF]?halaman=$i&module=pemeriksaan_jurnal' class=\"btn btn-primary edit\">$i</a> ";
		}
		
		$angka .= ($halaman+2 < $jmlhal ? " ... <a href='$_SERVER[PHP_SELF]?halaman=$jmlhal&module=pemeriksaan_jurnal' class=\"btn btn-primary edit\">$jmlhal</a> " : " ");
		
		echo "$angka";
		
		// Membuat Next dan Last
		if($halaman< $jmlhal){
			$next = $halaman + 1;
			echo "<a href='$_SERVER[PHP_SELF]?halaman=$next&module=pemeriksaan_jurnal' class=\"btn btn-primary edit\">Next &rsaquo;</a>  
			     <a href='$_SERVER[PHP_SELF]?halaman=$jmlhal&module=pemeriksaan_jurnal' class=\"btn btn-primary edit\">Last &raquo;</a>";
		}else{
			echo "Next &rsaquo; | Last &raquo; | ";
		}
		
	
		
	
?>
<?
if($_GET[module]=='pemeriksaan_jurnal' and $_GET[act]=='delete'){
$sql=mysql_query("delete from download where id_download='$_GET[id]'");
echo"<script>window.location.href='?module=pemeriksaan_jurnal'</script>";
}

?>