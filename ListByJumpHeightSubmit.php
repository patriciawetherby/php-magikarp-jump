<html>
  <head>
  	<title>LIST BY JUMP HEIGHT SUBMIT - Magikarp Contestants</title>
  </head>
  <body>
  LIST BY JUMP HEIGHT SUBMIT <br/> <br/>
  <a href="index.php">HOME</a> <br/>
  <a href="AddMagikarp.php">Add Magikarp</a> <br/>
  <a href="ListAllMagikarp.php">List All Magikarp</a> <br/>
  <a href="ListByJumpHeight.php">List By Jump Height</a> <br/>
  <img src="smallboi.jpg" /><br/><br/>
  <?php 
  
  	$jumpheight = $_GET['jumpheight'];
  	if($db = sqlite_open('pokemon.db',0666, $sqlLiteError)) 
		{ //successful opening
			//magikarp(name varchar(20), color varchar(10), jumpheight varchar(5))
			$query = sqlite_query($db,"SELECT name, color, jumpheight FROM magikarp WHERE jumpheight='$jumpheight'");
			$results = sqlite_fetch_all($query, SQLITE_ASSOC);
			
			foreach($results as $result) //all vs one of them //two-dimen array
			{
				printf("%s is a %s and can jump %s <br/>", $result['name'], $result['color'], $result['jumpheight']);
			}
		}
		else 
		{ //unsuccessful opening
			die($sqlLiteError);
		}  
  ?>
  </body>
</html>