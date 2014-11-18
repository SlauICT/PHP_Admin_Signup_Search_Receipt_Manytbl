<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>St.Lawrence University | Edit Delete</title>
</head>

<body>
<h1 align="center">ST.LAWRENCE UNIVERSITY EDIT AND DELETE </h1>
<form id="add" name="add" method="get" action="SAVE.php">
<table width="38%" border="1" align="center">
  <tr>
    <td width="44%"><strong>FIRST NAME:</strong></td>
    <td width="56%"><input name="fname" type="text" id="fname" /></td>
  </tr>
  <tr>
    <td>
     
        <strong>
        <label>SECOND NAME:</label>
      </strong></td>
    <td><input name="secname" type="text" id="secname" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Save to the Db" /></td>
  </tr>
</table>
<label><br />
</label>
<p>&nbsp;</p>
</form>
<h1 align="center">DISPLAY DATA FROM THE DB DELETE AND EDITE </h1>
<table width="749" border="1" align="center">
<tr>
<td width="289"><strong>First Name</strong></td>
<td width="214"><strong>Second Name</strong></td>
<td width="57"><strong> ID </strong></td>
<td width="161"><strong> Actions </strong></td>
</tr>

<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password)or die("Cannot connect to the Server");
$select_db=mysql_select_db($databasename)or die("Cannot connect to the Database");;

$strquery="SELECT * from std_details_tbl";
$results=mysql_query($strquery);
$num=mysql_num_rows($results);

$i=0;
while ($i< $num)

{
$f1=mysql_result($results,$i,"fname");
$f2=mysql_result($results,$i,"secname");
$f3=mysql_result($results,$i,"id");

?>

<tr>
<td><?php echo $f1 ; ?></td>
<td><?php echo $f2 ; ?></td>
<td><?php echo $f3 ; ?></td>
<td><?php echo " <a href='edit.php?do=edit&id=" . $f3 . "'> edit </a> "; ?> | <?php echo " <a href='delete.php?id=" . $f3 . "'> delete </a> "; ?></td>
</tr>

<?php

  $i++;
  }
  ?>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
<!-- SEARCH FORM START FROM HERE -->
<form id="form1" name="form1" method="get" action="search.php">
<label>Search:
<input name="search" type="text" id="search" />
</label>
<p>
<label>
<input name="do" type="submit" id="do" value="Search" />
</label>
</p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>

</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; </p>


</body>
</html>
