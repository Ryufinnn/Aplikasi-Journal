<?php
include "conn.php";

$direktori = "files/"; // folder tempat penyimpanan file yang boleh didownload
$filename = $_GET['file'];

$file_extension = strtolower(substr(strrchr($filename,"."),1));


if ($file_extension=='php'){
  echo "<h1>Access forbidden!</h1>
        <p>Maaf, file yang Anda download sudah tidak tersedia atau filenya (direktorinya) telah diproteksi. <br />
        Silahkan hubungi webmaster</a>.</p>";
  exit;
}
else{
  mysql_query("update download set hits=hits+1 where isi='$filename'");

  header("Content-Type: octet/stream");
  header("Pragma: private"); 
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  header("Cache-Control: private",false); 
  header("Content-Type: $ctype");
  header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
  header("Content-Transfer-Encoding: binary");
  header("Content-Length: ".filesize($direktori.$filename));
  readfile("$direktori$filename");
  exit();   
}
?>
