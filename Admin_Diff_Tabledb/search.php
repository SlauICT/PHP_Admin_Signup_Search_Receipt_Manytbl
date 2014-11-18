<?php

include('conn.php');
if(isset($_POST['Submit'])){
$a=$_POST['Search'];

$sql= mysql_query("select * from student_reg, faculty, course where student_reg.reg_id= '$a' AND faculty.reg_id= '$a' AND course.reg_id= '$a'  ");
$row = mysql_fetch_array($sql);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Slau</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="layout.css" type="text/css" />
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<link rel="stylesheet" type="text/css" href="default.css"/>
<title>Search</title>
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.html" class="headcont">ST.LAWRENCE UNIVERSITY  REGISTRATION SYSTEM </a></h1>
      <p align="left" class="style13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Light your Candle </p>
      <p align="left" class="style13">&nbsp;</p>
    </div>
  </div>
</div>
<form id="form1" name="form1" method="post" action="" onsubmit="return validated()">
  <p>&nbsp;</p>
  <table width="789" border="0" align="center">
    <tr>
      <td width="282"><span class="style24">Enter  Student  ID here: </span></td>
      <td width="305"><input name="Search" type="text" id="Search" size="55" /></td>
      <td width="188"><input type="submit" name="Submit" value="Search" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="1487" border="1" align="center">
    <tr>
      <td width="78"><div align="center" class="style22">Student ID </div></td>
      <td width="90"><div align="center" class="style22">Firstname</div></td>
      <td width="96"><div align="center" class="style22">LastName</div></td>
      <td width="79"><div align="center" class="style22">Gender</div></td>
      <td width="88"><div align="center" class="style22">District </div></td>
      <td width="113"><div align="center" class="style22">Telephone </div></td>
      <td width="103"><div align="center" class="style22">Country of Origine </div></td>
      <td width="65"><div align="center" class="style22">Email </div></td>
      <td width="92"><div align="center" class="style22">Faculty Name </div></td>
      <td width="126"><div align="center" class="style22">Course Name </div></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center" class="style22"><?php echo $row['reg_id'];?></div></td>
      <td><div align="center" class="style22"><?php echo $row['sn'];?></div></td>
      <td><div align="center" class="style22"><?php echo $row['mn'];?></div></td>
      <td><div align="center" class="style22"><?php echo $row['gender'];?></div></td>
      <td><div align="center" class="style22"><?php echo $row['district']; ?></div></td>
      <td><div align="center" class="style22"><?php echo $row['tn'];?></div></td>
      <td><div align="center" class="style22"><?php echo $row['country'];?></div></td>
      <td><div align="center" class="style22"><?php echo $row['email'];?></div></td>
      <td><div align="center" class="style22"><?php echo $row['fac_n'];?></div></td>
      <td><div align="center" class="style22"><?php echo $row['course_n'];?></div></td>
      <td width="40"><a href="edite.php?a=<?php echo $row['reg_id'];?>">edit</a></td>
      <td width="63"><div align="center"><a href="delete.php?a=<?php echo $row['reg_id'];?>">delete</a></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <span class="style26">
  <marquee bgcolor="#800080">
  </marquee>
  </span>
  <marquee bgcolor="#800080">
  <div align="center" class="style18">This System is developed by Kevin janvier Faculty of Computer Science !!!Together we can do !!!! I Love My Jesus I m Light My Candle  </div>      
  </marquee>
</form>
  <p class="style25">  </p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <!-- ####################################################################################################### -->
</body>
</html>
</body>


</html>