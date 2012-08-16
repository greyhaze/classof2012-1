<html><body>
<?php 

foreach(CD::find('all') as $sCD){
	echo $sCD->name;
}
?>

<form action='.' method="post">
<input type='text' name='label' /> <input type='submit' value='add' />

</form>

</body></html>
