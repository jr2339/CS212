<?php  // Connects to your Database   
mysql_connect() or die(mysql_error()); 
mysql_select_db("Database_Name") or die(mysql_error());
if (isset($_POST['submit'])) { 
	if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
	die('You did not complete all of the required fields');
	}
	if (!get_magic_quotes_gpc()) {
	$_POST['username'] = addslashes($_POST['username']);
	}
	$usercheck = $_POST['username'];
	$check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'") or die(mysql_error());
	$check2 = mysql_num_rows($check);
	if ($check2 != 0) {
		die('Sorry, the username '.$_POST['username'].' is already in use.');
	}
	if ($_POST['pass'] != $_POST['pass2']) {
		die('Your passwords did not match. ');
	}
	$_POST['pass'] = md5($_POST['pass']);
	if (!get_magic_quotes_gpc()) {
	$_POST['pass'] = addslashes($_POST['pass']);
	$_POST['username'] = addslashes($_POST['username']);
	}
	$insert = "INSERT INTO users (username, password)  VALUES ('".$_POST['username']."', '".$_POST['pass']."')";
	
	$add_member = mysql_query($insert);
	?>
	
	<h1>Registered</h1>
	<p>Thank you, you have registered - you may now login</a>.</p>
	<?php 
	}
	else
	{
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<table border="0">
	<tr><td>Username:</td><td>
	<input type="text" name="username" maxlength="60">
	</td></tr>
	<tr><td>Password:</td><td>
	<input type="password" name="pass" maxlength="10">
	</td></tr>
	<tr><td>Confirm Password:</td><td>
	<input type="password" name="pass2" maxlength="10">
	</td></tr>
	<tr><th colspan=2><input type="submit" name="submit"  value="Register"></th></tr> </table>
	</form>
	<?php
	}
	?>