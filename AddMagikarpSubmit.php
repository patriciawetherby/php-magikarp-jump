<html>
  <head>
   	<title>ADD SUBMIT - Magikarp Contestants</title>
  </head>
  <body>
  ADD SUBMIT <br /> <br/>
  <a href="index.php">HOME</a> <br/>
  <a href="AddMagikarp.php">Add Magikarp</a> <br/>
  <a href="ListAllMagikarp.php">List All Magikarp</a> <br/>
  <a href="ListByJumpHeight.php">List By Jump Height</a> <br/>
  
  <?php
  	$name = $_GET["name"]; 
  	$color = $_GET["color"];
  	$jumpheight = $_GET["jumpheight"];
  	//magikarp(name varchar(20), color varchar(10), jumpheight varchar(5))
  	if($db = sqlite_open('pokemon.db',0666, $sqlLiteError)) 
		{
			sqlite_query($db,"INSERT INTO magikarp VALUES('$name','$color','$jumpheight')");
			printf("%s is a %s and can jump %s INSERTED", $name, $color, $jumpheight);
		}
		else 
		{ //unsuccessful opening
			die($sqlLiteError);
		}  
			
  ?>
  <br/><img src="smallboi.jpg" />
  </body>
</html>