<?php

$record_id = $_POST['record_id'];
$actionCode = $_POST['actionCode'];
$keyword;

if($actionCode==1){
    $keyword="ADD";
}elseif($actionCode==2){
    $keyword="DELETE";
}


?>

<html>
<head>
    <title><?php echo($keyword) ?> an appointment</title>
</head>
<body>
<?php
    include("./includes/connect.inc.php");
    if($_POST['submit_button']){
        $student_4digit = $_POST['student_4digit'];
        $student_lname = $_POST['student_lname'];
        $sentence;
        
        if ($actionCode==1){
            $sentence = "UPDATE RECORD SET student_4_digit=\"$student_4digit\", student_lname=\"$student_lname\" WHERE record_id=\"$record_id\"";
        }elseif($actionCode==2){
            $sentence = "UPDATE RECORD SET student_4_digit=NULL, student_lname=NULL WHERE (record_id=\"$record_id\") AND (student_4_digit=\"$student_4digit\") AND (student_lname=\"$student_lname\")";
        }
        $result = mysqli_query($conn, $sentence);
        if (!$result){
            die("cannot processed select query");
        }
        elseif(mysqli_affected_rows($conn)<=0){
            if($actionCode==1){
                echo "<script type='text/javascript'>alert('Unknown failure');</script>";
                echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=scheduler.php\">";
            }
            elseif($actionCode==2){
                echo "<script type='text/javascript'>alert('4 digit id or lastname mismatch!');</script>";
                echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=scheduler.php\">";
            }
        }else{
            echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
            echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=scheduler.php\">";
        }
    }
?>
    <h2><?php echo($keyword) ?> an appointment</h2>
    <form name="update_form" action="student_updateAppointment.php" method="POST">
        studentID last 4 digit:  <input name="student_4digit" type="text" size="20"></br>
        student Lastname:        <input name="student_lname" type="text" size="20"></br>
        <input name="record_id" type="hidden" value=<?php echo $record_id ?>>
        <input name="actionCode" type="hidden" value=<?php echo $actionCode ?>>
        <input name="submit_button" type="submit" value="submit">
    </form>
</body>
</html>