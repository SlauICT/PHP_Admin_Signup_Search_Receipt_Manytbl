<p /><?php 
include('conn.php');

$a = $_POST['reg_id'];
$b = $_POST['sn'];
$c = $_POST['mn'];
$d = $_POST['ln'];
$e = $_POST['gender'];
$f = $_POST['date_b'];
$g = $_POST['tn'];
$h = $_POST['c_o'];
$j = $_POST['district'];
$k = $_POST['country'];
$l = $_POST['parish'];
$m = $_POST['village'];
$n = $_POST['email'];
$o = $_POST['fn'];
  $p = $_POST['of_n'];
  $q = $_POST['mob_n'];
  $r = $_POST['fax'];
  $s = $_POST['occupation'];
  $u = $_POST['fac_n'];
  $v = $_POST['fac_description'];
  $w = $_POST['mission_fac'];
  $y= $_POST['dep_n'];
  $z= $_POST['dep_description'];
  $bb= $_POST['course_n'];
  $cc= $_POST['course_description'];

$sql= mysql_query("insert into student_reg(reg_id, sn, mn, ln, gender, date_b, tn, c_o, district, country, parish, village, email) values('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$j', '$k', '$l', '$m', '$n')");
 $kev1 = mysql_query("insert into guardian(reg_id, fn, ln, gender, of_n, mob_n, fax, email, occupation, country) values ('$a', '$o', '$d', '$e', '$p', '$q', '$r', '$n', '$s', '$k')");
  $kev2 = mysql_query("insert into faculty(reg_id, fac_n, fac_description, mission_fac) values('$a', '$u', '$v', '$w')");
  $kev3 = mysql_query("insert into departement(reg_id, dep_n, dep_description) values('$a', '$y', '$z')");
  $kev4 = mysql_query("insert into course(reg_id, course_n, course_description) values('$a', '$bb', '$cc')");
echo "<align=centre> <b>Thank you for registaring at St.Lawrence University Kampala </b>";


?>
<p><a href="thanks.php">view the record from here</a><br />

