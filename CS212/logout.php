<html>
<body style = "background-color:#5CCE35;" style = "text-align:center;">
<?php   
$con = mysql_connect("tund.cefns.nau.edu", "jr2339script", "122333"); 
if(!$con){
	die(mysql_error());
	}
mysql_select_db("jr2339",$con) ;

$username = $_COOKIE['ID_my_site'];
$past = time() - 100;   //this makes the time in the past to destroy the cookie   
setcookie(ID_my_site, gone, $past);   
setcookie(Key_my_site, gone, $past); 
 mysql_query("INSERT INTO `log`(`date`, `description`) VALUES (NOW(),'${username} logout')") or die(mysql_error());
 header("Location: login.php");  
  ?>
<html>