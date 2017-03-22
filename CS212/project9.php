<!DOCTYPE html>
<head>
	<title>CS212 Project #6 E-mail</title>
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
		<li><a href="project6.php">E-mail</a></li>
		<li><a href="Resume.html">Resume</a></li>
	</ul>
	</div>
	
	<a id="top"></a>
	
	<div id="header">
	<h2>CS212 Project#9 E-mail Again</h2>
	</div>
	
	<div id ="leftSideBar">
	<h2>Project Links</h2>
	<ul>
		<li><a href="http://www.cefns.nau.edu/~jr2339/project1.html">CS212 Project #1</a>
		<li><a href="http://www.cefns.nau.edu/~jr2339/project2.html">CS212 Project #2</a>
		<li><a href="http://www.cefns.nau.edu/~jr2339/project3.html">CS212 Project #3</a>
		<li><a href="http://www.cefns.nau.edu/~jr2339/project6.php">CS212 Project #6</a>
	</ul>
	</div>
	
	</div>
	
	<div id="mainContent">
			
	<?php
		$message="";
		$to = "jr2339@nau.edu";
		$labels = array('name'=>"Username: ",
		                'address'=>"Email:",
		                'subject'=>"Subject",
		                'message'=>"Message:",
		                'submit'=>"Submit.");
		                
		$data = array('name'=> $_POST['name'],
		              'address'=> $_POST['address'],
		              'subject'=> $_POST['subject'],
		              'message'=> $_POST['message'],
		              );
		                
		
						   		             
		$success = true;
		
		echo"-----------------------------------------------------</br>";
		
		foreach ($_POST as $field => $value){
			echo "The $field field is currently: $value<br/>\n";
			$message .= $value;
		}
		
		
		echo"------------------------------------------------------";
		
		if(empty($_POST['name'])){
			echo "<h4>Successful！</h4>";
			$success = false;
		}
		
	?>
		                
	
	</form>
	
    </body>
</html>