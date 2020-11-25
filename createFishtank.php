<html>
  <head>
  	<title>HOME - Magikarp Contestants</title>
  </head>
  <body>
  HOME PAGE <br/> <br/>
  <a href="index.php">HOME</a> <br/>
  <a href="AddMagikarp.php">Add Magikarp</a> <br/>
  <a href="ListAllMagikarp.php">List All Magikarp</a> <br/>
  <a href="ListByJumpHeight.php">List By Jump Height</a> <br/>
  <?php
	if($db = sqlite_open('pokemon.db',0666, $sqlLiteError)) 
	{ //successful opening
    sqlite_query($db,'DROP TABLE magikarp');
    sqlite_query($db,'CREATE TABLE magikarp(name varchar(20), color varchar(10), jumpheight varchar(5))' );
		printf("Fishtank Created");
	}
	else 
	{ //unsuccessful opening
		die($sqlLiteError);
	}  
  
  ?>
  <br/><img src="smallboi.jpg" />
  </body>
</html>