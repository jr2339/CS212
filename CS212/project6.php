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
		<li><a href="project6.php">NEW E-mail</a></li>
		<li><a href="resume.html">Resume</a></li>
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
	<h3>Please fill out the form below and click sumbit to send an email</h3>
	
	<form action="checkin.php" method="post">
	<?php
	
		
	$labels = array('name'=>'Your Name: ',
		            'address'=>'Your E-mail address:',
		            'subject'=>'Subject',
		            'message'=>'Your Message:',
		            'messageNature'=>'Nature of message:',
		            'responserequired'=>'Would you like a response?',
		            'submit'=>'When complete, press submit.');
		                
		foreach ($labels as $field => $label){
		    if($field === 'address' ||$field === 'name'||$field === 'subject'){
			echo "<div class='field'>";
			echo "<label for='$field'>$label</label>";
			echo "<input type='text' id='$field' name='$field'>";
			echo "</div>";}
			if($field ==='message'){
			echo"<div class = 'field'>";
			echo "<label for='$field'>$label</label>";
			echo "<textarea rows='8'  cols='50' id='$field' name='$field'></textarea>";
			echo "</div>";}
			if($field ==='responserequired'){
			echo "<div class='field'>";
			echo "<label for='$field'>$label</label>";
			echo "<input type='checkbox' id='$field' name='$field' value='yes'>Yes,Please";
			echo "</div>";}
			if($field ==='messageNature'){
			echo"<div class = 'field'>";
			echo "<label for='$field'>$label</label>";
			echo "<select  name='messageNature'>
						<option value='Question'>Question</option>
						<option value='Comment'>Comment</option>
						<option value='Urgent'>Urgent</option>
				 	</select>";
			echo "</div>";}
			if($field ==='submit'){
			echo"<div class = 'field'>";
			echo "<label for='$field'>$label</label>";
			echo "<input type='submit' >";
			echo "</div>";}
		
		}	
		
	
		          
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
	
	
	
	


	


	
