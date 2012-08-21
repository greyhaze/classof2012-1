<?php
	if(!isset($_SERVER['HTTPS'])){
		// then we are not on https
		$url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		//echo $url . "\n";
		//print_r($_SERVER);
		header("Location: " . $url);
		exit();
	}
?>
<html>
<body>
Hello World!
</body>
</html>