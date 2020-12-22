<?php
$servername = "localhost";
$username = "root";
$password ="";
include 'conn.php';
if (isset($_POST["search"])){

$typ = $_POST['doc_typ'];
$doc = $_POST['doc_no'];
$sql= "SELECT  doc_typ, col_pn, col_nm, doc_no FROM item  where doc_no='$doc'";

$result = $con->query($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>found</title>
  <link rel="stylesheet" href="public/css/bootstrap.min.css">

</head>
<body align="center">
  
<?php
if ($result->num_rows > 0){
 while ($row = $result->fetch_assoc())
 {
  echo'<table class="table table-responsive" border="1px" row="2" column="4">';
    echo'<tr>';
      echo'<th>Document Type</th>';
      echo'<th>Document Number</th>';
      echo'<th>Collector Phone</th>';
      echo'<th>Collector Name</th>';
    echo'</tr>';
echo "<tr>";
echo'<td>' .$row["doc_typ"]. '</td>';
echo'<td>' .$row["doc_no"]. '</td>';
echo'<td>' .$row["col_pn"]. '</td>';
echo'<td>' .$row["col_nm"]. '</td>';
echo'</tr>';
echo "</br>";
echo "</br>
<H1>We found Your Document.</h1> </br> 
  <h3> Kindly contact the following named person to get them</h3>
  <h4><i>(Remember to post a lost item whenever you come accross any. Thank you)</i></h4>";
 }
}else{
  echo "<h1>Sorry. No Match Found.</h1></br> <h3><i>We hope someone finds them soon.</i></h3>";
}
$con->close();

?>


</body>
</html>