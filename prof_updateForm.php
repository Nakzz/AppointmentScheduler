<html>
<head>
<title>UpdateForm</title>
</head>
<body>
<?php
    include("./includes/appointment.auth.inc.php");
    $record_id = $_POST['record_id'];
?>
<form name="modForm" method="POST" action="prof_execute.php">
    <input type="hidden" name="record_id" value="<?php echo($record_id); ?>">
    <input type="hidden" name="actionCode" value="2">
    <label for="date">NewDate</label>
        <input type="date" id="date" name="newDate"
        value="2019-12-02"
        min="2019-12-02" max="2019-12-06"></br>
    NEW Start Time<input type="text" size="10" maxlength="40" name="newStartTime"></br>
    NEW End Time<input type="text" size="10" maxlength="40" name="newEndTime"></br>
    <input type="submit" name="modifyRecord" value="SUBMIT"> 
</form>
</body>
</html>