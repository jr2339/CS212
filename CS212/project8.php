<!DOCTYPE html>
<head>
	<title>CS212 Project #8 E-mail Again</title>
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
	<h2>CS212 Project#6 New E-mail</h2>
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
		$message=" ";
		$to = " ";
		$from = " ";
		$labels = array('to'=>"To: ",
		                'from'=>"From:",
		                'subject'=>"Subject",
		                'content'=>"Your Message:",
		                'submit'=>"When complete, press submit.");
		                
		$data = array('to'=> $_POST['to'],
		              'from'=> $_POST['from'],
		              'subject'=> $_POST['subject'],
		              'content'=> $_POST['content'],
	
						   		             
		$success = true;
		
		echo"-----------------------------------------------------</br>";
		
		foreach ($_POST as $field => $value){
			echo "The $field field is currently: $value<br/>\n";
			$message .= $value;
		}
		
		
		echo"------------------------------------------------------";
		
		if(empty($_POST['name'])){
			echo "<h4>The name field must be used</h4>";
			$success = false;
		}
		
		
		if(empty($_POST['message'])){
			echo"<h4>The message field must be used</h4>";
			$success = false;
		}
        if($success){
        	echo"<h4>successful!</h4>";
        	//mail($to,$_POST['subject'],$message);
        	mysql_query("INSERT INTO `jr2339`.`message` (`to`, `from`, `subject`, `content`) VALUES ('$to', '$from', '$subject', '$content')");
        	echo $content;
        	}
        else{
			echo "<form action='project8.php' method='POST'>";
			foreach ($labels as $field => $label){
		    	if($field === 'to' ||$field === 'from'||$field === 'subject'){
				echo "<div class='field'>";
				echo "<label for='$field'>$label</label>";
				echo "<input type='text' id='$field' name='$field' value='".$data[$field]."'>";
				echo "</div>";}
				if($field ==='content'){
				echo"<div class = 'field'>";
				echo "<label for='$field'>$label</label>";
				echo "<textarea  rows='8'  cols='50' id='$field' name='$field'>".$data[$field]."</textarea>";
				echo "</div>";}
				if($field ==='submit'){
				echo"<div class = 'field'>";
				echo "<label for='$field'>$label</label>";
				echo "<input type='submit' >";
				echo "</div>";}
			}
		}
	?>
		                
	
	</form>
	
    </body>
</html>