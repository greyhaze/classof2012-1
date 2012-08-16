<?php

function sayHello()
{
	echo "hello World!";
}

$fSayGoodDay = function()
{
	echo "good day!";
};

function callMeBack($fCallMe)
{
	$fCallMe();
}

?>

<html><body><?php callMeBack($fSayGoodDay); ?></body></html>