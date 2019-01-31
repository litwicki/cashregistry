<?php 
$cr_root = "./";
include_once( $cr_root . "header.php" );
include_once( $cr_root . "linkbar.php" );

if( !$smgr->checkTimeout() )
{
	echo "You must login to use this feature<br>
			<a href=http://www.thezdin.com/clients/cashregistry/login.php>			
			http://www.thezdin.com/clients/cashregistry/login.php</a>";
	exit;
}
?>

<form method="POST" action="./viewinfo.php">
<table border="0" id="table1" cellspacing="0" cellpadding="5">
	<tr>
		<td><font face="Georgia" size="2">First Name</font></td>
		<td><font face="Georgia"><input type="text" value=<?php 
			echo $smgr->accountinfo['firstname'];
?> name="firstname" size="20"></font></td>
	</tr>
	<tr>
		<td><font face="Georgia" size="2">Last Name</font></td>
		<td><font face="Georgia"><input type="text" value=<?php 
echo $smgr->accountinfo['lastname'];
?> name="lastname" size="20"></font></td>
	</tr>
	<tr>
		<td><font face="Georgia" size="2">EMail</font></td>
		<td><font face="Georgia"><input type="text" value=<?php 
echo $smgr->accountinfo['email'];
?> name="email" size="20"></font></td>
	</tr>
	<tr>
		<td><font face="Georgia" size="2">Password</font></td>
		<td><font face="Georgia"><input type="text" value=<?php 
echo $smgr->accountinfo['password'];
?> name="state" size="20"></font></td>
	</tr>
	<tr>
		<td><font face="Georgia" size="2">Address</font></td>
		<td><input type="text" value=<?php 
echo $smgr->accountinfo['address'];
?> name="address" size="20"></td>
	</tr>
	<tr>
		<td><font face="Georgia" size="2">City</font></td>
		<td><font face="Georgia"><input type="text" value=<?php 
echo $smgr->accountinfo['city'];
?> name="city" size="20"></font></td>
	</tr>
	<tr>
		<td><font face="Georgia" size="2">State</font></td>
		<td><font face="Georgia"><input type="text" value=<?php 
echo $smgr->accountinfo['state'];
?> name="state" size="20"></font></td>
	</tr>
	<tr>
		<td><font face="Georgia" size="2">Zip</font></td>
		<td><font face="Georgia"><input type="text" value=<?php 
echo $smgr->accountinfo['zip'];
?> name="zip" size="20"></font></td>
	</tr>
	<tr>
		<td><font face="Georgia" size="2">Active</font></td>
		<td><font face="Georgia"><input type="text" value=<?php 
echo $smgr->accountinfo['active'];
?> name="active" size="20"></font></td>
	</tr>
	<tr>
		<td><font face="Georgia" size="2">Phone (Home)</font></td>
		<td><font face="Georgia"><input type="text" value=<?php 
echo $smgr->accountinfo['phone1'];
?> name="phone1" size="20"></font></td>
	</tr>
	<tr>
		<td><font face="Georgia" size="2">Phone (Work)</font></td>
		<td><font face="Georgia"><input type="text" value=<?php 
echo $smgr->accountinfo['phone2'];
?> name="phone2" size="20"></font></td>
	</tr>
	<tr>
		<td><font face="Georgia"><input type="submit" value="Submit" name="B1"></font></td>
		<td><font face="Georgia"><input type="reset" value="Reset" name="B2"></font></td>
	</tr>
	<tr>
		<td colspan=2>Note:  The password field is not supposed to return the plaintext value
		of your password.  That would be very bad security practise.  This is the hash of your password,
		which I can authenticate by comparing hash values(same password hashes to same value).  
		This makes it to where a sql injection attack won't be able to return all users passwords.
		<br><br>Password field also does not update from this page, just wanted to show the value
		held in the database</td>
	</tr>
</table>
</form>

<?php 
include_once( $cr_root . "footer.php" );
?>
