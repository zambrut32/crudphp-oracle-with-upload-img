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

	<div class="container"><!-- 
<form action="add-action.php" method="post" enctype="multipart/form-data">
	<p>nrp : <input type="text" name="nrp" ></p>
	<p>nama : <input type="text" name="nama" ></p>
	<p>alamat : <input type="text" name="alamat" ></p>
	<p>umur : <input type="text" name="umur" ></p>
	<p>tgl : <input type="text" name="tgl" ><input type="text" name="tempat" ></p>
	<p>foto : 
    <input type="file" name="file"><br/>
    <input type="submit" value="Upload" name="Submit1"> <br/></p>
	<p>hobby : <input type="text" name="hobby"></p>

	<input type="submit" name="save" class="save" value="save">
</form> -->

<form action="add-action.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="NRP">NRP</label>
    <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Enter Nrp">
   
    <label for="nama">NAMA</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama">


    <label for="alamat">ALAMAT</label>
    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat">


    <label for="umur">UMUR</label>
    <input type="text" class="form-control" id="umur" name="umur" placeholder="Enter Umur">


    <label for="TTL">TTL</label>
   	<div class="input-group">
 		<input type="text" name="tgl" placeholder="Enter Tgl" class="form-control">
  		<input type="text" name="tempat" placeholder="Enter Tempat" class="form-control">
	</div>
    
    <label for="foto">Foto</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>

    <label for="hobby">HOBBY</label>
    <input type="text" class="form-control" id="nrp" name="hobby" placeholder="Enter nrp">
  </div>
 	<input type="submit" name="save" class="save btn btn-primary" value="save">
</form>
</div>
</body>
</html>