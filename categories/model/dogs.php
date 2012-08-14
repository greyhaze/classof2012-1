<?php

require 'database.php';
function get_dogs()
{
	global $db;
	$query = 'select name from dogs';
	return $db->query($query);
}
?>