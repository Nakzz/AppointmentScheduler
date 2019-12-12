<html>
<head>

    
    <?php

    $title = "Faculty";

    include_once("./includes/head.php");



        include("./includes/connect.inc.php");
        include("./includes/appointment.auth.inc.php");
        $addSentence="";
        if($_POST['addNewRecord']){
            $date = $_POST['trip_start'];
            $fac_id=$_POST['fac_id'];
            $start_time=$_POST['start_time'];
            $end_time=$_POST['end_time'];
            $sentence = "INSERT INTO RECORD (fac_id,record_date,record_starttime,record_endtime) VALUES (\"$fac_id\",\"$date\",\"$start_time\",\"$end_time\")";
            $return = mysqli_query($conn,$sentence);
            if ($return == TRUE){
                echo "<script type='text/javascript'>alert('Updated');</script>";
                echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=professor_cPanel.php\">";
            }else{
                die("dead!".mysqli_error($conn));
		    }
        }
    ?>
    <?php
        if($_POST['chooseTime']){
            $selected_time = $_POST['trip_start'];
            $addSentence = " AND record_date=\"$selected_time\"";
        }
    ?>

</head>
<body id="top" data-spy="scroll" data-target=".header" data-offset="80">
	  

      <!--HEADER-->

<?php include_once("./includes/nav-bar.php") ?>


<section class="intro text-left section-padding autoheight" id="intro">
			<div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="row-lg-6">
					<div class="col-lg-6 about">

    <?php
    function addARecord($row){
        $record_id = $row['record_id'];
        $is_locked = $row['is_available'];
        $student_4digit = $row['student_4_digit'];
        $student_lastName = $row['student_lname'];
        $record_date = $row['record_date'];
        $start_time = $row['record_starttime'];
        $end_time = $row['record_endtime'];
        echo ("<tr>");
        echo("<td>$record_date</td>");
        echo("<td>$student_4digit</td>");
        echo("<td>$student_lastName</td>");
        echo("<td>$is_locked</td>");
        echo("<td>$start_time</td>");
        echo("<td>$end_time</td>");
        echo("<td>");
        echo ("<form action=\"prof_execute.php\" method=\"post\">");
		echo ("<a href=\"javascript:;\" onclick=\"parentNode.submit();\"><p>Lock</p></a>");
		echo ("<input type=\"hidden\" name=\"record_id\" value=$record_id>");
		echo ("<input type=\"hidden\" name=\"actionCode\" value=1>");
        echo ("</form>");
        echo("</td>");
        echo("<td>");
        if (empty($student_4digit)){
            echo ("<form action=\"prof_updateForm.php\" method=\"post\">");
            echo ("<a href=\"javascript:;\" onclick=\"parentNode.submit();\"><p>Change</p></a>");
            echo ("<input type=\"hidden\" name=\"record_id\" value=$record_id>");
            echo ("<input type=\"hidden\" name=\"actionCode\" value=2>");
            echo ("</form>");
        }
        echo ("</td>");
        echo("<td>");
        if (empty($student_4digit)){
            echo ("<form action=\"prof_execute.php\" method=\"post\">");
            echo ("<a href=\"javascript:;\" onclick=\"parentNode.submit();\"><p>Delete</p></a>");
            echo ("<input type=\"hidden\" name=\"record_id\" value=$record_id>");
            echo ("<input type=\"hidden\" name=\"actionCode\" value=3>");
            echo ("</form>");
            echo ("</td>");
            echo ("</tr>");
        }

    }

    ?>

<?php
    //authorization part
    session_start();
    if(!$_SESSION['miscellaneous']){
        echo ("Unauthorized! redirecting you to login page.");
        echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=professor_login.php\">";
        exit;
    }
    $prof_id = $_SESSION['loginID'];
    $prof_name = $_SESSION['prof_name'];
?>

<?php
    echo "<h2>$prof_name<h2>";
    $query_sentence="SELECT * FROM RECORD WHERE (fac_id=\"$prof_id\")".$addSentence;
	$result = mysqli_query($conn, $query_sentence);
	if (!$result){
		die("cannot processed select queryThis");
    }
    $rowNum = mysqli_num_rows($result);
										
	if($rowNum==0){
	    echo("<p>No Timeslot!</p>");
	}else{
        echo ("<table border=1><tr><td>Date</td><td>student 4digitId</td>
        <td>student LastName</td><td>is Locked</td><td>Record StartTime</td><td>Record EndTime</td>
        <td>Lock?</td><td>Change?</td>><td>delete?</td></tr>");

	
	    while($row = mysqli_fetch_assoc($result)){
	        addARecord($row);
        }
        echo ("</table>");
    }
    
    
?>  

<br></br>
    <FORM name="selectDae" action=professor_cPanel.php method=POST>
        <label for="start">Select Date You'd like to see:</label>
        <input type="date" id="start" name="trip_start"
        value="2019-12-02"
        min="2019-12-02" max="2019-12-06">
        <input type="submit" name="chooseTime" value="SUBMIT"> 
    </FORM>
    <h3>Add A Record></h3>
    <FORM name="addRecord" action=professor_cPanel.php method=POST>
        <label for="date">Time for new Timeslot:</label>
        <input type="date" id="date" name="trip_start"
        value="2019-12-02"
        min="2019-12-02" max="2019-12-06"></br>
        Start Time: <input type="text" size="10" maxlength="40" name="start_time"></br>
        End Time: <input type="text" size="10" maxlength="40" name="end_time"></br>
        <input type="hidden"  name="fac_id" value = "<?php echo($_SESSION['loginID']); ?>"></br>
        <input type="submit" name="addNewRecord" value="SUBMIT"> 
        
    </FORM>
					</div>
				</div>
			</div>
        </section>
        <?php include_once("./includes/footer.php")?>
	<script type="text/javascript" src="assets/js/init_<?php echo $title?>.js"></script>

</body>
</html>