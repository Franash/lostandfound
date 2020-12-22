<?php
include 'conn.php';
$sql = "";
if (isset($_POST['submit']))
{
$documentType= mysqli_real_escape_string($con,htmlspecialchars($_POST['doc_typ'])) ;
$documentNumber =mysqli_real_escape_string($con,htmlspecialchars($_POST['doc_no'])) ;
$itemOwnerName =mysqli_real_escape_string($con,htmlspecialchars($_POST['itm_own'])) ; 
$collectorName =mysqli_real_escape_string($con,htmlspecialchars($_POST['col_nm'])) ;
$collectorPhone =mysqli_real_escape_string($con,htmlspecialchars($_POST['col_pn'])) ;
$dateCollected = mysqli_real_escape_string($con,htmlspecialchars($_POST['dat_c']));
$collectionPoint =mysqli_real_escape_string($con,htmlspecialchars($_POST['col_pnt'])) ;

$sql = "INSERT INTO item (doc_typ, doc_no, item_own, col_nm, col_pn, dat_c, col_pnt)VALUES ('{$documentType}', '{$documentNumber}', '{$itemOwnerName}', '{$collectorName}', '{$collectorPhone}', '{$dateCollected}', '{$collectionPoint}')";

$current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on occurred<br/>" . mysqli_error($conn));
}

if(isset($current_id))
{
	echo "Record Added Successfully";
	header("location:../index.php");
}
else{
	echo "error:" . $sql . "</br>" . $con->error;
}
$con->close();

 ?>
