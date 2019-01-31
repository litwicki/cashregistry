<?php
$cr_root = "./";

include_once( $cr_root . "header.php" );
include_once( $cr_root . "linkbar.php" );
include_once( $cr_root . "includes/validatelogin.php" );

?>

<form action="./login.php" method="POST">
email<input type="TEXT" name="email"><br>
password<input type="password" name="password">
<input type="SUBMIT" value="Login">
</form>

<?php 
include_once( $cr_root . "footer.php" );
?>
