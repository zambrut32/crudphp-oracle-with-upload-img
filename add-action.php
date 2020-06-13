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

 // echo $nrp.$nama.$alamat.$umur.$tgl.$tempat.$foto.$hobby;  


    $filepath = "asset/img/" . $_FILES["file"]["name"];
    $filesaja = $_FILES["file"]["name"];
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
    {
      

    }
    else
    {
        echo "gagl upload";
    }



 $sql = "INSERT INTO biodata(nrp,nama,alamat,umur,tgl,tempat,foto,hobby,data_id)
    VALUES('$nrp','$nama','$alamat',$umur,'$tgl','$tempat','$filesaja','$hobby',			seq_id.nextval)";
$compiled = oci_parse($db, $sql);


oci_execute($compiled);

echo "<font color ='green'>berhasil di tambah.";
echo "<br/><a href='tampil.php'>lihat hasil</a>";    
 }
 else {
 	echo "gagal menambahkan";
 } 




 


 ?>
</body>
</html>
