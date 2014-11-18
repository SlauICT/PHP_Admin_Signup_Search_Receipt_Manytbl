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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
  <link rel="stylesheet" href="layout.css" type="text/css" />
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
<title>Slau</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.html" class="headcont">St.lawrence university registration system </a></h1>
      <p><em>Light your Candle </em></p>
    </div>
  </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php echo $report; ?>
<form id="form1" name="form1" method="post" action="" onsubmit="return validated()">
  <table width="338" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">ADMINISTRATOR LOGIN </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter the Correct username <span class="style15">*  </span></div></td>
    </tr>
    <tr>
      <td width="142"><div align="right"><span class="style11">Username</span></div></td>
      <td width="113"><input name="username" type="text" id="username" size="35" /></td>
    </tr>
    <tr>
      <td><div align="right"><span class="style11">Password</span></div></td>
      <td><input name="password" type="password" id="password" size="35" /></td>
    </tr>
    <tr>
      <td><div align="right"></div></td>
      <td><input type="submit" name="Submit" value="Login" /></td>
    </tr>
  </table>
  <p> <span class="style3">
  <marquee bgcolor="#800080">
  </marquee>
  </span></p>
</form>
  <p>
    

  </p>
  <p align="center">&nbsp;</p>

<!-- ####################################################################################################### -->
</body>
</html>