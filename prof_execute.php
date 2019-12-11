<html>
<head>
<title>Execute</title>
</head>
<?php
    include("./includes/connect.inc.php");
    include("./includes/appointment.auth.inc.php");
    $record_id = $_POST['record_id'];
    $action_code = $_POST['actionCode'];
    switch($action_code){
        case 1:
            $sentence="UPDATE RECORD SET is_available=0 WHERE record_id=\"$record_id\"";
        break;
        case 2:
            $newDate = $_POST['newDate'];
            $newStartTime = $_POST['newStartTime'];
            $newEndTime = $_POST['newEndTime'];
            $sentence="UPDATE RECORD SET record_date=\"$newDate\", record_starttime=\"$newStartTime\", record_endtime=\"$newEndTime\" WHERE record_id=\"$record_id\"";
        break;
        case 3:
            $sentence="DELETE FROM RECORD WHERE record_id=\"$record_id\"";
        break;
    }
    $return = mysqli_query($conn,$sentence);
            if ($return == TRUE){
                echo "<script type='text/javascript'>alert('Updated');</script>";
                echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=professor_cPanel.php\">";
            }else{
                die("dead!".mysqli_error($conn));
		    }
?>