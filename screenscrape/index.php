<?php
 header("Content-Type: text/plain");
 $sIn = file_get_contents("http://api.flickr.com/services/feeds/photos_public.gne?id=51035594111@N01");
 if(preg_match_all("|<title(.*)</title>|U", $sIn, $aIn)){
 	//print_r($aIn);
 	foreach($aIn[0] as $sTitle){
	 	echo $sTitle ."\n";
 	}
 }else{
 	echo "nothing to display";
 }
?>
