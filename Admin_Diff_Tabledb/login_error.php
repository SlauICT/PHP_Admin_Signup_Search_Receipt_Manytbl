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
?><style type="text/css">
<!--
.style1 {font-size: 18px}
.style2 {color: #FF0000}
-->
</style>
<?php echo $report;?>
<form id="form1" name="form1" method="post" action="">
  <p align="center" class="style2 style1"> *&nbsp;Login Failed ...Please Try again  !!!!!!!!!!!! </p>
  <table width="475" border="0" align="center">
    <tr>
      <td colspan="3"><div align="center">
        <h1>ADMINISTRATOR LOGIN </h1>
      </div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center"><img src="images/WCS-Globe-Icon-COLOR-TRANSPARENT-.png" width="108" height="149" longdesc="images/WCS-Globe-Icon-COLOR-TRANSPARENT-.png" /></div></td>
    </tr>
    <tr>
      <td width="237"><span class="style1">Username</span></td>
      <td colspan="2"><input name="username" type="text" id="username" size="30" /></td>
    </tr>
    <tr>
      <td><span class="style1">Password</span></td>
      <td colspan="2"><input name="password" type="password" id="password" size="30" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><input type="Submit" name="Submit" value="Submit" /></td>
    </tr>
  
  </table>
</form>
