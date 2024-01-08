<?php
include "conn.php";
$page = $_GET[page];
$act = $_GET[act];
//if($page=='registrasi' and $act=='save')
//{
if(empty($_POST[nip]) 
or empty($_POST[nama])
or empty($_POST[username]) 
or empty($_POST[email]) 
or empty($_POST[nohp]) 

 
){
 echo"<script>alert('Silahkan Lengkapi Data Anda Terlebih Dahulu !');window.location.href='media.php?module=lihat_dosen'</script>";
}else{
$cek=mysql_query("select * from rb_login where nidn='$_POST[nip]'");
$jumlah=mysql_num_rows($cek);
if ($jumlah)
{
 echo"<script>alert('Maaf, data ini sudah terdaftar');window.location.href='media.php?module=lihat_dosen'</script>";
} else {
			
$kl=mysql_query("insert into rb_login(username,password,nidn,nama_lengkap,level,email,nohp,alamat)
 value('$_POST[username]','$_POST[password]','$_POST[nip]','$_POST[nama]','kepala','$_POST[email]','$_POST[nohp]','$_POST[alamat]')");
 
 
 echo"<script>alert('Data Anda Sukses Tersimpan');window.location.href='media.php?module=lihat_dosen'</script>";


}
}
?>