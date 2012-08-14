<?php

require 'database.php';
function get_categories()
{
	global $db;
	$query = 'select categoryName from categories';
	return $db->query($query);
}
?>