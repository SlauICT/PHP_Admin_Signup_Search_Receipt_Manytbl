<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
// start posting my form which look at the fields
$t=$_POST['t'];
$s=$_POST['s'];
$m=$_POST['m'];
$b=$_POST['b'];
$tie=$_POST['tie'];
$bl=$_POST['bl'];
$w=$_POST['w'];
$j=$_POST['j'];
$amount=$_POST['amount'];
$total=(($t*40000)+($s*15000)+($m*130000)+($b*10000)+($tie*5000)+($bl*12000)+($w*70000)+($j*30000));
$vat=($total*0.05);
$gtotal=($vat+$total);
$balance=($amount-$gtotal);
echo'
<table width="1087" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td colspan="3"><div align="center">RECEIPT</div></td>
    <td width="203"><div align="right">Date</div></td>
    <td width="122">'.date("d-m-y H:i").'</td>
  </tr>
  <tr>
    <td width="133">ITEM</td>
    <td width="427">DESCRIPTION</td>
    <td width="170">UNIT PRICE </td>
    <td>QUANTITY</td>
    <td>SUB-TOTAL</td>
  </tr>';
  if($t){
  echo'
  <tr>
    <td>Trousers</td>
    <td>Calvin Klein Blacksize 34 Men Trousers </td>
    <td>40000</td>
    <td>'.$t.'</td>
    <td>'.($t*40000).'</td>
  </tr>';}
  if($s){
  echo'
  <tr>
    <td>Skirts</td>
    <td>Gucci Female Attire </td>
    <td>35000</td>
    <td>'.$s.'</td>
    <td>'.($s*15000).'</td>
  </tr>';}
  if($m){
  echo'
  <tr>
    <td>Men shoes </td>
    <td>Bata size 45 Men Leather Shoes </td>
    <td>130000</td>
    <td>'.$m.'</td>
    <td>'.($m*130000).'</td>
  </tr>';}
  if($b){
  echo'
  <tr>
    <td>Belts</td>
    <td>Versace Gold Plated Mens Belt </td>
    <td>10000</td>
    <td>'.$b.'</td>
    <td>'.($b*10000).'</td>
  </tr>';}
  if($tie){
  echo'
  <tr>
    <td>Tie</td>
    <td>Calvin Klein Silk Tie </td>
    <td>5000</td>
    <td>'.$tie.'</td>
    <td>'.($tie*5000).'</td>
  </tr>';}
  if($bl){
  echo'
  <tr>
    <td>Blouses</td>
    <td>D&amp;G cotton blouses </td>
    <td>12000</td>
    <td>'.$bl.'</td>
    <td>'.($bl*12000).'</td>
  </tr>';}
  if($w){
  echo'
  <tr>
    <td>Women shoes </td>
    <td>Bata Size 10 Women Suede Shoes </td>
    <td>70000</td>
    <td>'.$w.'</td>
    <td>'.($w*70000).'</td>
  </tr>';}
  if($j){
  echo'
  <tr>
    <td>Jeans</td>
    <td>Apple Jeans </td>
    <td>30000</td>
    <td>'.$j.'</td>
    <td>'.($j*30000).'</td>
  </tr>';}
  echo'
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Total</td>
    <td>'.$total.' Ugx</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>VAT % </td>
    <td>'.$vat.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Grand Total </td>
    <td>'.$gtotal.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Amount Paid </td>
    <td>'.$amount.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Balance</td>
    <td>'.$balance.'</td>
  </tr>';
  echo' </table>'
  ?>
</table>
</body>
</html>
