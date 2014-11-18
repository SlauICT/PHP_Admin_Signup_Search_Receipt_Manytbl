
<?php
$db = mysql_connect("localhost", "root", "root");
mysql_select_db("slau_cwk",$db);
$q=$_GET['a'];
$sql=mysql_query("select * from student_reg where reg_id ='$q'");
$row=mysql_fetch_array($sql);
?>
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
      <h1><a href="index.html" class="headcont">st.lawrence universit registration system </a></h1>
      <p><em>Light your Candle </em></p>
    </div>
  </div>
</div>
<div class="style5" id="Layer2">Click here to Search a <a href="search.php">Student</a> </div>
<div class="style7" id="Layer3"><a href="index.php">Logout</a></div>
<form id="form1" name="form1" method="post" action="">
<table width="101%" height="428" border="1">
  <tr>
    <td width="604"><table width="730" border="0">
      <tr>
        <td colspan="4"><div align="center"><strong>STUDENT INFORMATION </strong></div></td>
      </tr>
      <tr>
        <td width="104">Registration </td>
        <td width="277"><input name="reg_id" type="text" id="reg_id2" value="<?php echo $row['reg_id'];?>" />
          <span class="style8">*</span></td>
        <td width="97">Tel.Number</td>
        <td width="224"><input name="tn" type="text" id="tn" value="<?php echo $row['tn'];?>" /></td>
      </tr>
      <tr>
        <td>Surname</td>
        <td><input name="sn" type="text" id="sn" value="<?php echo $row['sn'];?>" /></td>
        <td>Country of Org</td>
        <td><input name="c_o" type="text" id="c_n" value="<?php echo $row['c_o'];?>" /></td>
      </tr>
      <tr>
        <td>Middle Name</td>
        <td><input name="mn" type="text" id="mn" value="<?php echo $row['mn'];?>" /></td>
        <td>District</td>
        <td><input name="district" type="text" id="district" value="<?php echo $row['district'];?>" /></td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td><input name="ln" type="text" id="ln" value="<?php echo $row['mn'];?>" />
          <span class="style8">*</span></td>
        <td>County</td>
        <td><input name="country" type="text" id="country" value="<?php echo $row['country'];?>" /></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td><input name="gender" type="text" id="gender" value="<?php echo $row['gender'];?>"/></td>
        <td>Parish</td>
        <td><input name="parish" type="text" id="parish" value="<?php echo $row['parish'];?>" /></td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td><input name="date_b" type="text" id="date_b" value="<?php echo $row['date_b'];?>" /></td>
        <td>Village</td>
        <td><input name="village" type="text" id="village" value="<?php echo $row['village'];?>" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Email</td>
        <td><input name="email" type="text" id="email" value="<?php echo $row['email'];?>" /></td>
      </tr>
    </table></td>
    <td width="506">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><p class="style3">Please make sure you fill all from above sections including your Email so that we can get back to you in 24hours!!!! </p>
      <p></p></td>
    </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input name="Submit" type="submit" class="style1" value="Update  Now" />
    </div></td>
  </tr>
  <tr>
    <td height="20" colspan="2">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['Submit'])){
$a=$_POST['reg_id'];
$b=$_POST['sn'];
$c=$_POST['mn'];
$d=$_POST['ln'];
$e=$_POST['gender'];
$f=$_POST['date_b'];
$g=$_POST['tn'];
$h=$_POST['c_o'];
$i=$_POST['district'];
$j=$_POST['country'];
$k=$_POST['parish'];
$l=$_POST['village'];
$m=$_POST['email'];
$update=mysql_query("UPDATE student_reg SET reg_id='$a', sn='$b', mn='$c', ln='$d', gender='$e', date_b='$f', tn='$g', c_o='$h', district='$i', country='$j', parish='$k', village='$l', email='$m' where reg_id='$a'");
echo "student details successfully updated.Thank you";
}
?>