<?php


$cr_root = "./";

include_once($cr_root . "includes/search.php");

$search = new SearchCR();

if( isset( $_REQUEST['firstname'] ) && isset( $_REQUEST['lastname'] ) )
{
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
} else {
	echo "you have reached this page in error.";
}

$search->QueryFirstandLast( $firstname, $lastname );
$row = $search->EchoResults();

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome To The Cash Gift Registry</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
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
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #A3B7A3;
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
.style9 {font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #E6F1E4;
	letter-spacing: normal;
}
-->
</style>
</head>

<body onLoad="MM_preloadImages('images/sign-out2.gif')">
<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><a href="index.htm"><img src="images/home_01.gif" width="489" height="59" border="0"></a></td>
    <td><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','images/sign-out2.gif',1)"><img src="images/sign-out1.gif" name="Image4" width="191" height="59" border="0"></a></td>
    <td valign="bottom"><h3> <a href="giftshoppingbasket.htm"><img src="images/home_04.gif" width="40" height="59" border="0"></a></h3></td>
  </tr>
  <tr>
    <td colspan="3"><img src="images/home_05.gif" width="720" height="56"></td>
  </tr>
  <tr>
    <td colspan="3"><table width="97%"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><hr class="style9"></td>
      </tr>
      <tr>
        <td><span class="style1">REGISTRY LIST </span>
            <div align="right"></div></td>
      </tr>
      <tr>
        <td height="21"><hr class="style9"></td>
      </tr>
      <tr>
        <td class="style7">
<?php
echo $row['firstname'] . " " . $row['lastname'] . " and " . $row['cofirstname'] . " " . $row['colastname'];
?>
 </td>
      </tr>
      <tr>
        <td><hr class="style9"></td>
      </tr>
      <tr>
        <td><table width="70%"  border="0" cellpadding="0" cellspacing="10" class="style5">
            <tr class="style5">
              <td>Event: Anniversary </td>
              <td>Registry ID: 1502858 </td>
            </tr>
            <tr class="style5">
              <td>Date: October 08, 2005 </td>
              <td>Today&rsquo;s Date: 08/18/2005</td>
            </tr>
          </table>
            <br>
            <table width="100%"  border="0" cellspacing="10" cellpadding="0">
              <tr class="style5">
                <td colspan="3">To purchase an item, please check the box on the line of the gift and click Add to Basket.</td>
              </tr>
              <tr class="style5">
                <td width="50%">
                  <div align="right"><img src="images/print.gif" width="28" height="24" align="absmiddle">Print Version </div></td>
                <td width="30%">&nbsp;</td>
                <td width="20%"><div align="right"> </div></td>
              </tr>
              <tr valign="middle" class="style5">
                <td height="34" colspan="3"><div align="right">                  
                  <hr class="style9">
                  <a href="giftshoppingbasket.htm"><img src="images/button-addtobasket.gif" width="186" height="21" border="0"></a><br>
                </div></td>
              </tr>
          </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" align="right" cellpadding="0" cellspacing="10" class="style5">
            <tr class="style4">
              <td width="21%"><div align="center">Item</div></td>
              <td><div align="center">Price</div></td>
              <td width="22%"><div align="center">Purchase</div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#FFFFFF"><hr class="style9"></td>
            </tr>
            <tr>
              <td bgcolor="#B3BBA4"><div align="center"><img src="images/50dollars.gif" width="105" height="52"></div></td>
              <td><div align="center">$50.00</div></td>
              <td><div align="center">
                  <input type="checkbox" name="checkbox" value="checkbox">
              </div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#FFFFFF"><hr class="style9"></td>
            </tr>
            <tr>
              <td bgcolor="#B3BBA4"><div align="center"><img src="images/150dollars.gif" width="133" height="49"></div></td>
              <td><div align="center">$150.00</div></td>
              <td><div align="center">
                  <input type="checkbox" name="checkbox2" value="checkbox">
              </div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#FFFFFF"><hr class="style9"></td>
            </tr>
            <tr>
              <td bgcolor="#B3BBA4"><div align="center"><img src="images/250dollars.gif" width="133" height="49"></div></td>
              <td><div align="center">$250.00</div></td>
              <td><div align="center">
                  <input type="checkbox" name="checkbox3" value="checkbox">
              </div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#FFFFFF"><hr class="style9"></td>
            </tr>
            <tr>
              <td bgcolor="#B3BBA4"><div align="center"><img src="images/otherdollars.gif" width="102" height="34"></div></td>
              <td valign="middle">&nbsp;&nbsp;Fill in amount over $250.00&nbsp;&nbsp;&nbsp;                <input type="text" name="textfield"></td>
              <td><div align="center">
                  <input type="checkbox" name="checkbox4" value="checkbox">
              </div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#FFFFFF"><hr class="style9"></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td colspan="3"><div align="right">&nbsp;&nbsp;<a href="giftshoppingbasket.htm"><img src="images/button-addtobasket.gif" width="186" height="21" border="0"></a> </div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><hr class="style9"></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
