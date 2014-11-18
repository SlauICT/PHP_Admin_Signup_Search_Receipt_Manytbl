<table width="749" border="1">
<tr>
<td width="289">Name</td>
<td width="214">Section</td>
<td width="57"> ID </td>
<td width="161"> Actions </td>
</tr>
<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);

$strquery = "SELECT * from std_details_tbl where fname like '" . $_GET["search"] . "%' ";
$results = mysql_query ($strquery);
$row = mysql_fetch_array($results);

$num=mysql_numrows($results);

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
