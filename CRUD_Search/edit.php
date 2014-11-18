<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);

$strquery = "SELECT * from std_details_tbl where id= '" . $_GET["id"] . "' ";
$results = mysql_query ($strquery);
$row = mysql_fetch_array($results);

?>
<body>

<form id="form1" name="form1" method="get" action="update.php">
<label>
<h1 align="center">UPDATE YOUR DATABASE</h1>
<p align="center">&nbsp;</p>
<table width="53%" border="1" align="center">
  <tr>
    <td><strong>First Name:</strong></td>
    <td><input name="fname" type="text" id="fname" value=" <?php echo $row["fname"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Second Name: </strong></td>
    <td><label>
      <input name="secname" type="text" id="secname" value=" <?php echo $row["secname"]; ?>" />
    </label>
      <input name="id" type="hidden" id="section2"  value=" <?php echo $row["id"]; ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Update" /></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p>
<label></label>
</p>
<p>&nbsp;</p>
</form>
