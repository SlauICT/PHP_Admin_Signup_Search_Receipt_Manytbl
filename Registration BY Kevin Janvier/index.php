
<?php
$conn=mysql_connect("localhost","root","root");
mysql_select_db("bank",$conn);
session_start();

if(isset($_POST['Submit'])){
$email=$_POST['email'];
$password=$_POST['password'];

$sql=mysql_query("select * from users where email = '$email' AND password = md5('$password')");
if(mysql_num_rows($sql)== 0){
$report= "Sorry this Email or Password is incorrect";
}
else{
$row = mysql_fetch_array($sql);
$_SESSION['email'] == $row[email];
$_SESSION['password'] == $row[password];
$report = header("location: userpage.php");
}}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>St.lawrence University | Registration Tutotrial</title>
<link rel="stylesheet" type="text/css" href="style.css">

<script language="javascript">
function validated(){

if(document.form1.email.value==""){
window.alert("Enter email address!!!");
document.form1.email.focus();
return false;

}
if(document.form1.password.value == ""){
window.alert("Enter Password");
document.form1.password.focus();
return false;
}}

</script>
</head>

<body>
<h1 align="center" class="header">WELCOME TO ST.LAWRENCE UNIVERSITY </h1>
<?php echo $report;?>
<form id="form1" name="form1" method="post" action="" onsubmit="return validated()">
  <table width="323" border="0" align="center">
    <tr>
      <td colspan="2">Login Form </td>
    </tr>
    <tr>
      <td width="60">Email</td>
      <td width="267"><label>
        <input name="email" type="text" id="email" size="40" />
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label>
        <input name="password" type="password" id="password" size="40" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input type="Submit" name="Submit" value="Login" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><a href="register.php">Register Now / Sign Up</a> </div></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
