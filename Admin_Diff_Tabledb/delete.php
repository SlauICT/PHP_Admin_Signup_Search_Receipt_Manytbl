<?php
$db = mysql_connect("localhost", "root", "root");
mysql_select_db("slau_cwk",$db);
$a=$_GET['a'];
$sql=mysql_query("DELETE from student_reg where reg_id ='$a'");
echo "Student details deleted successfully";
?>