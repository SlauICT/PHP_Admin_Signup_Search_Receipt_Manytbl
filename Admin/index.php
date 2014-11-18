<?php 
//Administrator Login connection
 $search= mysql_connect("localhost", "root", "root")or die("Cannot connect to the Server");
mysql_select_db("admin", $search)or die("cannot connect to the Database");
?>
<?php
  <?php
//Start to check the Submittion button
        if(isset($_POST['Submit']))
      {
        //Verifying the Field in the Database 
        //Posting them

$sql=mysql_query("select * from login where username='$username' AND password='$password'");
    if(mysql_num_rows($sql)==0){
    $report= "Login failed";
    }
      else{
      $row = mysql_fetch_array($sql);
      $_SESSION['username'] == $row[username];
      $_SESSION['password'] == $row[password];

      $report=header("location: admin_page.php");
}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Slaubook | Admin Panel</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p align="center">ADMIN CONTROL PANEL
</p>
  <table width="35%" border="0" align="center">
    <tr>
      <td width="34%">USERNAME</td>
      <td width="66%"><label for="username"></label>
      <input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td>PASSWORD</td>
      <td><label for="password"></label>
      <input type="text" name="password" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="Submit" name="button" id="button" value="Login" /></td>
    </tr>
  </table>
  <p>&nbsp; </p>
</form>
</body>
</html>