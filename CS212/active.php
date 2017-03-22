<?php         
//-----------------------------------------------------connects to my database
mysql_connect("tund.cefns.nau.edu", "jr2339script", "122333") or die(mysql_error());
mysql_select_db("jr2339") or die (mysql_error());
//--------------------------------------------------------------
mysql_query("mysqldump-u jr2339 -p users > jun.sql");
?>