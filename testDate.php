

<?php
if ($_POST['submit']) {
	echo $_POST['trip_start'];
}
?>

<FORM action=testDate.php method=POST>
<label for="start">Start date:</label>
<input type="date" id="start" name="trip_start"
       value="2018-07-22"
       min="2019-12-16" max="2019-12-20">
<input type="submit" name="submit" value="SUBMIT"> 
</FORM>