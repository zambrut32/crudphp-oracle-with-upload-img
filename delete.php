<?php 
include_once('koneksi.php');

			if(isset($_GET['act'])) {
			$DATA_ID = $_GET['DATA_ID'];
			$sql = "delete from biodata where DATA_ID='$DATA_ID' ";
						/* mysql  way 
						 * mysql_query($sql) or die(mysql_error());
						 */
						 /*this is oracle way */
				$parsesql = oci_parse($db, $sql);
				oci_execute($parsesql) or die(oci_error());
				header('location:tampil.php');
			}
 ?>