<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password) or die("Unable to connect to The Server");
$select_db=mysql_select_db($databasename)or die("Unable to connect to The Server");

$strquery="INSERT INTO std_details_tbl SET fname= '" .$_GET['fname'] . "', secname= '". $_GET['secname'] ."' ";
$results=mysql_query ($strquery);
header( 'Location:index.php' ) ;
?>
