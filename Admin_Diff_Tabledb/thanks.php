
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">

<title>Slau</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1 align="center" class="headcont">st.lawrence universit registration system </h1>
      <p class="style8">Light your Candle </p>
    </div>
  </div>

<?php
include('conn.php');

$sql= mysql_query("select * from student_reg, guardian, faculty, departement, course where student_reg.reg_id= guardian.reg_id AND faculty.reg_id= departement.reg_id");
echo'
<table width="1348" height="94" border="1">
  <tr>
    <td height="43" colspan="18"><div align="center"><span class="style1">SCHOOL REGISTRATION SYSTEM RECORDS</span></div></td>
  </tr>
  <tr>
    <td width="86"><strong>Id Number</strong></td>
    <td width="65" height="43"><strong>Firstname</strong></td>
    <td width="69"><strong>Surname</strong></td>
    <td width="81"><strong>MiddleName</strong></td>
    <td width="67"><strong>Last Name</strong></td>
    <td width="62"><strong>Gender</strong></td>
    <td width="61"><strong>Date Birth</strong></td>
    <td width="49"><strong>Country</strong></td>
    <td width="53"><strong>Village</strong></td>
    <td width="41"><strong>Email</strong></td>
    <td width="63"><strong>Tel.No</strong></td>
	<td width="59"><strong>Parish</strong></td>
    <td width="71"><strong>Faculty Name </strong></td>
    <td width="73"><strong>Faculty Description </strong></td>
    <td width="82"><strong>Departement Name </strong></td>
    <td width="92"><strong>Departement Description </strong></td>
    <td width="84"><strong>Course Name </strong></td>
    <td width="78"><strong>Course Description </strong></td>
  </tr>';
  while($hello=mysql_fetch_array($sql)){
  echo'
  <tr>
    <td >'.$hello[reg_id].'</td>
    <td >'.$hello[sn].'</td>
    <td >'.$hello[mn].'</td>
    <td >'.$hello[ln].'</td>
    <td >'.$hello[gender].'</td>
    <td >'.$hello[date_b].'</td>
    <td >'.$hello[country].'</td>
    <td >'.$hello[village].'</td>
    <td >'.$hello[email].'</td>
	 <td>'.$hello[tn].'</td>
	<td> '.$hello[parish].'</td>
    <td >'.$hello[fn].'</td>
	<td>'.$hello[fac_description].'</td>
    <td>'.$hello[dep_n].'</td>
    <td >'.$hello[dep_description].'</td>
    <td>'.$hello[course_n].'</td>
    <td >'.$hello[course_description].'</td>
  </tr>';}
echo'</table>';
?>
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style4 {font-size: 18px}
.style3 {color: #FFFFFF}
-->
</style>

<p align="center" class="style1"><a href="user.php">Add another Student from here </a></p>
<form action="" method="post" name="form2" target="_top" class="style4" id="form2">
  <span class="style3">
   <br><a href="anthem.mp3">This sound funny !!!!I m Kevin Hacker</a></sbr>
 
  </span>
  
</form>
<p align="center" class="style1">&nbsp;</p>
</body>
</html>