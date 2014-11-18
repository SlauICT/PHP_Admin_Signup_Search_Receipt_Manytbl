
<?php
$db = mysql_connect("localhost", "root", "root");
mysql_select_db("registration",$db);

if(isset($_POST['Submit'])){
$a = $_POST['fname'];
$b = $_POST['lname'];
$c = $_POST['gender'];
$e = $_POST['email'];
$f = $_POST['password'];
$g = date("Y-m-d");

$sql = mysql_query("select * from users where email = '$e'");
if(mysql_num_rows($sql) == 1){
$report = "This email is already registered.";
}
else{
$query = mysql_query("insert into users values ('', '$a', '$b', '$c', '$e', md5('$f'), '$g')");
$report = "Thank you for registering..you may <a href ='index.php'>Login</a>";
}}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>Untitled Document</title>
<script language="javascript">
function check(){
if(document.form1.password.value != document.form1.cpassword.value){
window.alert("Password Entered does not match");
document.form1.password.focus();
return false;
}}
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="" onsubmit="return check()">
<?php echo $report;?>
  <table width="318" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><span class="header">New Member Sign Up Form </span></div></td>
    </tr>
    <tr>
      <td width="124"><span class="style14">Firstname</span></td>
      <td width="184"><input name="fname" type="text" id="fname" /></td>
    </tr>
    <tr>
      <td><span class="style14">Lastname</span></td>
      <td><input name="lname" type="text" id="lname" /></td>
    </tr>
    <tr>
      <td><span class="style14">Gender</span></td>
      <td><span class="style8">
        <input name="gender" type="radio" value="male" />
        Male 
        <input name="gender" type="radio" value="female" />
        Female</span></td>
    </tr>
    <tr>
      <td><span class="style14">Email</span></td>
      <td><input name="email" type="text" id="email" /></td>
    </tr>
    <tr>
      <td><span class="style14">Password</span></td>
      <td><input name="password" type="password" id="password" /></td>
    </tr>
    <tr>
      <td><span class="style14">Confirm Password </span></td>
      <td><input name="cpassword" type="password" id="cpassword" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Register Now" />
      </div></td>
    </tr>
  </table>
  <br />
</form>
</body>
</html>
