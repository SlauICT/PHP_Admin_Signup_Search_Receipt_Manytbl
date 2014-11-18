
<?php
include('conn.php');
session_start();

if(isset($_POST['Submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$sql=mysql_query("select * from admin where username='$username' AND password='$password'");
if(mysql_num_rows($sql)==0){
$report= header("location: login_error.php");
}
else{
$row = mysql_fetch_array($sql);
$_SESSION['username'] == $row[username];
$_SESSION['password'] == $row[password];

$report=header("location: user.php");
}}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>             SLAU</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css"/>

<script language="javascript">
function validated(){

if(document.form1.username.value==""){
window.alert("Enter Username Please!!!");
document.form1.username.focus();
return false;

}
if(document.form1.password.value == ""){
window.alert("Enter Your Password!!!!!");
document.form1.password.focus();
return false;
}}

</script>
<style type="text/css">
<!--
.style3 {font-size: 18px}
.style4 {
	font-size: 36px;
	font-style: italic;
	color: #FFFFFF;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
.style5 {
	font-size: 14px;
	font-style: italic;
	color: #CCCCCC;
}
.style6 {color: #FFFFFF}
.style7 {font-size: 16px}
.style8 {font-size: 16}
.style9 {
	font-size: 18px;
	color: #FFFFFF;
	font-weight: bold;
}
.style10 {color: #99FF33}
.style11 {
	font-size: 14px;
	font-style: italic;
	font-family: "Courier New", Courier, monospace;
	color: #999999;
}
-->
</style>
</head>
<body>
<div align="center"><?php echo $report;?> 
  <h1 class="style4">ST.LAWRENCE UNIVERSITY STUDENT REGISTRATION SYSTEM  </h1>
</div>
<form id="form1" name="form1" method="post" action="" onSubmit="return validated()">
  <p align="center" class="style5">Together we can do !!!! I Love My Jesus I m Light My Candle </p>
  <table width="367" border="0" align="center">
    <tr>
      <td colspan="3"><div align="center" class="style6">
          <h1 align="right" class="style11">ADMINISTRATOR LOGIN </h1>
      </div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/WCS-Globe-Icon-COLOR-TRANSPARENT-.png" width="121" height="119" longdesc="images/WCS-Globe-Icon-COLOR-TRANSPARENT-.png" /></div></td>
    </tr>
    <tr>
      <td width="171"><span class="style6 style1"><strong><span class="style1 style6 style7"><span class="style1 style6 style8"><span class="style1 style6">Username</span></span></span></strong></span></td>
      <td width="186" colspan="2"><input name="username" type="text" id="username" size="30" /></td>
    </tr>
    <tr>
      <td><span class="style6 style1"><strong><span class="style1 style6 style7"><span class="style1 style6 style8"><span class="style1 style6">Password</span></span></span></strong></span></td>
      <td colspan="2"><input name="password" type="password" id="password" size="30" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
  <form action="" method="post" name="form2" target="_top" class="style1" id="form2">
  <span class="style3">
  <marquee bgcolor="#800080">
  </marquee>
  </span>
  <marquee bgcolor="#800080"><div align="center" class="style9">This System is developed by Kevin janvier </div>
  </marquee>
</form>
  <p align="center"></p>
  <p align="center" class="style10">Copyright&copy; 2012   All rights reserved  by Kevin Janvier .Faculty of Computer Science </p>
</body>
</html>

</body>
</html>
