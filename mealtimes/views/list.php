<html><body>
<h1>Days we ate together</h1>
<form action='.' method="post">
<table>
<tr><th>date</th><th>members</th></tr>
<?php foreach(Meal::find('all') as $oMeal){ ?>
	<tr><td>
	<?php 
	$oDate = new DateTime($oMeal->date);
	echo $oDate->format("Y-m-d");
	?></td><td> <?php echo $oMeal->members; ?></td></tr>
<?php } ?>
<tr><td><input type='text' name='date' /></td><td> <input type='text' name='members' /> </td><td><input type='submit' value='add' /></td></tr>
</table>

</form>

</body></html>
