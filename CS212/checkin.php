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
		$message="";
		$to = "jr2339@nau.edu";
		$labels = array('name'=>"Your Name: ",
		                'address'=>"Your E-mail address:",
		                'subject'=>"Subject",
		                'message'=>"Your Message:",
		                'messageNature'=>"Nature of message:",
		                'responserequired'=>"Would you like a response?",
		                'submit'=>"When complete, press submit.");
		                
		$data = array('name'=> $_POST['name'],
		              'address'=> $_POST['address'],
		              'subject'=> $_POST['subject'],
		              'message'=> $_POST['message'],
		              'messageNature'=>$_POST['messageNature']);
		                
		$dataNature=array('question'=>'Question',
						   'comment' =>"Comment",
						   'urgent'=>"Urgent");
						   		             
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
		
		/*if(empty($_POST['address'])){
			echo"<h4>The e-mail field must be used</h4>";
			$success = false;
		}*/
		
		if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.(?:com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum)$/", $_POST['address'])){
			echo"<h4>Email address invalid. Your E-mail address should be looks like xxx@.xxx.com</h4>";
			$success = false;
			}
		
		
		if(empty($_POST['message'])){
			echo"<h4>The message field must be used</h4>";
			$success = false;
		}
        if($success){
        	echo"<h4>successful!</h4>";
        	mail($to,$_POST['subject'],$message);
        	echo $message;}
        else{
			echo "<form action='checkin.php' method='POST'>";
			foreach ($labels as $field => $label){
		    	if($field === 'address' ||$field === 'name'||$field === 'subject'){
				echo "<div class='field'>";
				echo "<label for='$field'>$label</label>";
				echo "<input type='text' id='$field' name='$field' value='".$data[$field]."'>";
				echo "</div>";}
				if($field ==='message'){
				echo"<div class = 'field'>";
				echo "<label for='$field'>$label</label>";
				echo "<textarea  rows='8'  cols='50' id='$field' name='$field'>".$data[$field]."</textarea>";
				echo "</div>";}
				if($field ==='responserequired'){
				echo "<div class='field'>";
				echo "<label for='$field'>$label</label>";
				echo "<input type='checkbox' id='$field' name='$field' value='yes'>Yes,Please";
				echo "</div>";}
				if($field ==='messageNature'){
					echo"<div class = 'field'>";
					echo "<label for='$field'>$label</label>";
					echo "<select  name='messageNature'>";
					foreach($dataNature as $selector => $choice){
			    	    	if($choice === $data['messageNature']){
			        			echo"<option value='$selector' selected>".$choice."</option>";}
			        		else{
								echo"<option value='$selector' >".$choice."</option>";}
					}	
					echo"</select>";
					echo "</div>";
				}
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