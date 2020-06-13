<?php
//membangun koneksi
$username="system";
$password="Riski123gaul";
$database="localhost/tugas";
 
$db=oci_new_connect($username,$password,$database);
 
// if($db){
// echo "Koneksi berhasil";
// }else{
// $err=oci_error();
// echo "Gagal tersambung ke ORACLE". $err['text'];
// }
?> 