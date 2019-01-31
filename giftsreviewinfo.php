<?php

$cr_root = "./";

include_once($cr_root . "includes/dbmgr.php");
include_once($cr_root . "includes/dbquerymgr.php");

$db = new DB("thezdin_cashreg", "d@db1sh", "thezdin_crusers", "localhost");
$qm = new DBQueryMGR();
$dbmgr = new DBMGR();

include_once($cr_root . "database-echo.php");

$email = $_REQUEST['email'];

$result = $dbmgr->Query( $qm->Select( "*", "users", "email", $email ), $db );

$row = mysql_fetch_array( $result );



?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome To The Cash Gift Registry</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #A0CFD5;
	font-weight: bold;
	letter-spacing: normal;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #E6F1E4;
	letter-spacing: normal;
}
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #A0CFD5;
	font-weight: bold;
	word-spacing: normal;
	letter-spacing: normal;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style7 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; color: #799779; letter-spacing: normal; }
.style8 {
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><a href="index.htm"><img src="images/home_01.gif" width="489" height="59" border="0"></a> </td>
  </tr>
  <tr>
    <td><img src="images/home_05.gif" width="720" height="56"></td>
  </tr>
  <tr valign="top">
    <td>      <table width="97%"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2"><hr class="style2"></td>
      </tr>
      <tr>
        <td><span class="style1">REVIEW INFORMATION </span></td>
        <td valign="middle" class="style1"><div align="right">CREATE A REGISTRY: <img src="images/1V2.gif" width="24" height="25" align="absmiddle"><img src="images/2V2.gif" width="24" height="25" align="absmiddle"><img src="images/3.gif" width="24" height="25" align="absmiddle"><img src="images/4V2.gif" width="24" height="25" align="absmiddle"><img src="images/5V2.gif" width="24" height="25" align="absmiddle"></div></td>
      </tr>
      <tr>
        <td colspan="2"><hr class="style2"></td>
      </tr>
      <tr>
        <td width="670" colspan="2"><span class="style7">Please review your Registry Account information below. To update your account, please click on the &quot;edit&quot; button in the section you wish to change. </span></td>
      </tr>
      <tr>
        <td colspan="2"><hr class="style2"></td>
      </tr>
      <tr>
        <td colspan="2"><span class="style4">EVENT INFORMATION</span></td>
      </tr>
      <tr>
        <td colspan="2"><p class="style5">October 8th, 2005<br>
        Ring Ceremony<br>
        <br>
        <a href="giftsprofile.htm"><img src="images/button-edit.gif" width="90" height="21" border="0"></a>        <br>
        </p></td>
      </tr>
      <tr>
        <td colspan="2"><hr class="style2"></td>
      </tr>
      <tr>
        <td colspan="2"><span class="style4">REGISTRANT INFORMATION </span></td>
      </tr>
      <tr>
        <td height="0" colspan="2"><table width="70%"  border="0" cellpadding="0" cellspacing="5" class="style5">
            <tr>
              <td><span class="style8">REGISTRANT</span></td>
              <td><span class="style8">CO - REGISTRANT </span></td>
            </tr>
            <tr>
              <td><?php
echo $row['firstname'] . " " . $row['lastname'];
?> </td>
              <td><?php
echo $row['cofirstname'] . " " . $row['colastname'];
?> </td>
            </tr>
            <tr>
              <td><?php
echo $row['address'];
?> </td>
              <td><?php
echo $row['coaddress'];
?>  </td>
            </tr>
            <tr>
              <td><?php
echo $row['city'] . ", " . $row['state'] . " " . $row['zip'];
?></td>
              <td><?php
echo $row['cocity'] . ", " . $row['costate'] . " " . $row['cozip'];
?></td>
            </tr>
            <tr>
              <td><?php
echo $row['phone1'];
?> </td>
              <td><?php
echo $row['cophone1'];
?></td>
            </tr>
            <tr>
              <td><?php
echo $row['phone2'];
?> </td>
              <td><?php
echo $row['cophone2'];
?> </td>
            </tr>
            <tr>
              <td><?php
echo $row['email'];
?></td>
              <td> </td>
            </tr>
            <tr>
              <td><a href="giftsprofile.htm"><img src="images/button-edit.gif" width="90" height="21" border="0"></a></td>
              <td>&nbsp;</td>
            </tr>
          </table>
            <hr class="style2"></td>
      </tr>
      <tr>
        <td colspan="2"><span class="style4">PASSWORD SELECTION </span></td>
      </tr>
      <tr>
        <td colspan="2" class="style5">Click to edit your Registry password.<br>
            <br>
            <a href="giftsprofile.htm"><img src="images/button-edit.gif" width="90" height="21" border="0"></a> </td>
      </tr>
      <tr>
        <td colspan="2"><hr class="style2"></td>
      </tr>
     
    </table></td>
  </tr>
</table>
This form is to lookup other entries to see pages dynamically become created.
<form action="./giftsreviewinfo.php" method="POST">
<input type="text" name="email">
<input type="SUBMIT" value="look up by email">
</form>
</body>
</html>
