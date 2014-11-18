<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);

$strquery="UPDATE std_details_tbl SET fname= '" . $_GET['fname'] . "', secname= '". $_GET['secname'] ."' WHERE id='". $_GET['id'] ."' ";
$results=mysql_query ($strquery);

header ('location:index.php'); 

?>
