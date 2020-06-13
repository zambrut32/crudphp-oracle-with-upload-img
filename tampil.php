
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
<?php 

include_once('koneksi.php');




$query="SELECT * from biodata order by data_id  ";
$parsesql = oci_parse($db, $query);
oci_execute($parsesql);


?>
<br>
<a href="index.php"><button style="float: right" type="button" class="btn-lg btn btn-outline-success right">NEW</button></a>
<br><br><br>

<div class="row">
    <?php 

    $no=1;
while($rows=oci_fetch_object($parsesql)){

	?>

  <div class="col-sm-4">
  	<div class="card" style="margin-bottom: 20px">
  <img class="card-img-top" height="300" src="asset/img/<?php echo $rows->FOTO; ?>" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title"><?php echo $rows->NAMA; ?></h5>
    <p class="card-text">ALAMAT : <?php echo $rows->ALAMAT; ?></p>
    <p class="card-text">UMUR : <?php echo $rows->UMUR; ?></p>
    <p class="card-text">TTL : <?php echo $rows->TGL.'/'.$rows->TEMPAT; ?></p>
    <p class="card-text">HOBBY : <?php echo $rows->HOBBY; ?></p>

  </div>
  <div class="card-body">
    <a href="edit.php?mod=biodata&pg=edit&DATA_ID=<?= $rows->DATA_ID;?>" class="card-link">EDIT</a>
  	<a href="delete.php?mod=biodata&pg=tampil&act=del&DATA_ID=<?=	$rows ->DATA_ID;?>"onclick="return confirm('Yakin data akan dihapus?') "; class='card-link text-danger'>DELETE</a>



    <b style="float: right;"> <?php echo $rows->NRP; ?></b>
  </div>
</div>
  </div>	
   <?php 

		}
    ?>
</div>
</div>
</body>
</html>