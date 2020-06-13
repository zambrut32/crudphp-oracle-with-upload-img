<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php 
include_once('koneksi.php');

if(isset($_POST['save'])) { 
 
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$tgl = $_POST['tgl'];
$tempat = $_POST['tempat'];
$hobby = $_POST['hobby'];
$DATA_ID = $_POST['DATA_ID'];
  // echo $nrp.$nama.$alamat.$umur.$tgl.$tempat.$foto.$hobby.$DATA_ID      ;  


    $filepath = "asset/img/" . $_FILES["file"]["name"];

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
    {
      

    }

 $sql = "update biodata set nama='$nama' ,
        alamat='$alamat',umur = $umur,tgl ='$tgl' ,tempat = '$tempat',foto='$filepath',hobby='$hobby',nrp = '$nrp' where DATA_ID='$DATA_ID'";
$compiled = oci_parse($db, $sql);


oci_execute($compiled);

echo "<font color ='green'>berhasil di edit.";
echo "<br/><a href='tampil.php'>lihat hasil</a>";    
 }
 else {
    echo "gagal menambahkan";
 } 

 ?>
</body>
</html>
