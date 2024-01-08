<?php
include "conn.php";

		
		$isiberita = $_POST['judul'];
		$nama = $_POST['nama'];
		$nip = $_POST['nip'];
		$nama_file=$_FILES['gambar']['name'];
		$path=$_FILES['gambar']['tmp_name'];
		$destination="./files/$nama_file";
		move_uploaded_file($path,$destination);
		$qry = mysql_query("INSERT INTO download(nidn,nama,judul,isi,status,tgl_upload) VALUES ('$nip','$nama','$isiberita','$nama_file','Belum Diperiksa',NOW())");
		if($qry){
			 echo"<script>alert('Jurnal Berhasil di Kirim');window.location.href='media.php?module=tambah_jurnal'</script>";
		}else{
			mysql_error();
		}?>