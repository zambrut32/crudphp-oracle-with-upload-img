<?php


include_once('koneksi.php');

	$DATA_ID = $_GET['DATA_ID'];	
	$sql = "select * from biodata where DATA_ID='$DATA_ID'";

	$parsesql = oci_parse($db, $sql);
	oci_execute($parsesql) or die(oci_error());				
	$baris = oci_fetch_object($parsesql);	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
<script src="asset/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="asset/js/bootstrap.js" crossorigin="anonymous"></script>
<body>

<div class="container">


<form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="NRP">NRP</label>
    <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Enter Nrp" value="<?=$baris ->NRP;?>">
   
    <label for="nama">NAMA</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" value="<?=$baris ->NAMA;?>">


    <label for="alamat">ALAMAT</label>
    <input type="text" value="<?=$baris ->ALAMAT;?>" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat">


    <label for="umur">UMUR</label>
    <input type="text" class="form-control" id="umur" name="umur" placeholder="Enter Umur" value="<?=$baris ->UMUR;?>">


    <label for="TTL">TTL</label>
   	<div class="input-group">
 		<input type="text" name="tgl" value="<?=$baris ->TGL;?>" placeholder="Enter Tgl" class="form-control">
  		<input type="text" name="tempat" value="<?=$baris ->TEMPAT;?>" placeholder="Enter Tempat" class="form-control">
	</div>
    <?php $fotolama= $baris ->FOTO; ?>
    <label for="foto">Foto</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" name="file" value="<?=$baris ->FOTO;?>" class="custom-file-input" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01"><?php echo $baris->FOTO; ?></label>
  </div>
</div>

    <label for="hobby">HOBBY</label>
    <input value="<?=$baris ->HOBBY;?>" type="text" class="form-control" id="nrp" name="hobby" placeholder="Enter nrp">
  </div>
 	<input type="submit" name="save" class="save btn btn-primary" value="save">
</form>
</div>
</body>
</html>


<?php 
if(isset($_POST['save'])) { 
 
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];	
$umur = $_POST['umur'];
$tgl = $_POST['tgl'];
$tempat = $_POST['tempat'];
$hobby = $_POST['hobby'];
 // echo $nrp.$nama.$alamat.$umur.$tgl.$tempat.$foto.$hobby.$DATA_ID      ;  

$filepath = "asset/img/" . $_FILES["file"]["name"];
$fotosaja = $_FILES["file"]["name"];
if ($fotosaja=="") {
	$filepath = "asset/img/" . $fotolama;
	$fotosaja = $fotolama;

	$sql = "update biodata set nama='$nama' ,
        alamat='$alamat',umur = $umur,tgl ='$tgl' ,tempat = '$tempat',foto='$fotolama',hobby='$hobby',nrp = '$nrp' where DATA_ID='$DATA_ID'";
$compiled = oci_parse($db, $sql);


oci_execute($compiled);
header('location:tampil.php');
}
else {
	 $sql = "update biodata set nama='$nama' ,
        alamat='$alamat',umur = $umur,tgl ='$tgl' ,tempat = '$tempat',foto='$fotosaja',hobby='$hobby',nrp = '$nrp' where DATA_ID='$DATA_ID'";
$compiled = oci_parse($db, $sql);


oci_execute($compiled);
header('location:tampil.php');
}


}

 ?>