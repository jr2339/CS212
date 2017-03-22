<!DOCTYPE html>
<head>
	<title>CS212 Project #8 E-mail</title>                      
	<link type="text/css" rel = "stylesheet" href="stylesheet.css"/>   
	<style type ="text/css">
        <!--
            form {margin: 1.0em 0 0 0; padding: 0;}        
            .field {padding-top: .6em}
            label {font-weight: bold; float: left; width: 20%;
                   margin-right: 1em; text-align: right;}
            #submit {margin-left: 35%; padding-top: 1em;}
        -->
        </style>
</head>
<body>
	<body style = "background-color:#5CCE35;" style = "text-align:center;">

	
 	<div id="PageContainer">
 	
 	<div id="navbar">
 	<ul>
 		<li><a href="homepage.html">Home</a></li>
		<li><a href="project6.php">NEW E-mail</a></li>
		<li><a href="resume.html">Resume</a></li>          
	</div>
	
	<a id="top"></a>
	
	<div id="header">
	<h2>CS212 Project#8 E-mail Again</h2>
	</div>
	
	<div id ="leftSideBar">
	<h2>Project Links</h2>
	<ul>
		<li><a href="http://www.cefns.nau.edu/~jr2339/project1.html">CS212 Project #1</a>
		<li><a href="http://www.cefns.nau.edu/~jr2339/project2.html">CS212 Project #2</a>
		<li><a href="http://www.cefns.nau.edu/~jr2339/project3.html">CS212 Project #3</a>
		<li><a href="http://www.cefns.nau.edu/~jr2339/project6.php">CS212 Project #6</a>
		<li><a href="http://www.cefns.nau.edu/~jr2339/project7.html">CS212 Project #7</a>
	</ul>
	</div>
	
	</div>
	
	<div id="mainContent">
	<h3>Please fill out the form below and click sumbit to send an email</h3>
	<h3><a href=delete.php>After your send your message, please click here to see your information.</a></h3>
	<h4>
	
	<form action="message.php" method="post">  
	
	<?php
	$con = mysql_connect("tund.cefns.nau.edu", "jr2339script", "122333"); 
	if(!$con){
		die(mysql_error());
		}
	mysql_select_db("jr2339",$con) ;
	
	
	$labels = array('to'=>'To: ',                                        //display the form
		            'from'=>'From:',
		            'subject'=>'Subject',                                // such as our project 6
		            'content'=>'Your Message:',
		            'submit'=>'When complete, press submit.');
		                
		foreach ($labels as $field => $label){
		    if($field === 'to' ||$field === 'from'||$field === 'subject'){
			echo "<div class='field'>";
			echo "<label for='$field'>$label</label>";
			echo "<input type='text' id='$field' name='$field'>";
			echo "</div>";}
			if($field ==='content'){
			echo"<div class = 'field'>";
			echo "<label for='$field'>$label</label>";
			echo "<textarea rows='8'  cols='50' id='$field' name='$field'></textarea>";
			echo "</div>";}
			if($field ==='submit'){
			echo"<div class = 'field'>";
			echo "<label for='$field'>$label</label>";
			echo "<input type='submit' >";
			echo "</div>";}
		
		}	
		$data = array('to'=> $_POST['to'],
		              'from'=> $_POST['from'],
		              'subject'=> $_POST['subject'],
		              'content'=> $_POST['content'],
		             								);
		             								
    // now, we will insert our information to our database
	mysql_query("INSERT INTO `jr2339`.`message` (`to`, `from`, `subject`, `content`) VALUES ('${data['to']}', '${data['from']}', '${data['subject']}', '${data['content']}')") or die(mysql_error());
	?>
	
	</form>
	
	</div>
	
	<div id="footer">
	<div id="button">
	<p><a href="#top">Return to top</a></p>
	</div>
	</div>

</body>
</html>