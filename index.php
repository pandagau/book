<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>book</title>
</head>
<body>
	<?php 
		include_once("controller/Controller.php");  
	  
		$controller = new Controller();  
		$controller->invoke();  
	 ?>
</body>
</html>