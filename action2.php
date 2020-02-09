<!DOCTYPE html>
<html lang="">
<head>
				<title>substrings</title>
</head>



<body>
	H 
	<?php
	//$com=escapeshellcmd('python pp.py');
	//echo $com;
	//putenv('PATH=/usr/local/bin');
	chdir('c:/xampp/htdocs/TeenHost/mc/folder/');
	$output= exec("/usr/bin/python desktop/pp.py ");
	echo $output;
	
	/*exec("ls",$o);
	echo*/	 
	?>
	
</body>
</html>
