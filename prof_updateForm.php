<html>
<head>

    
    <?php

    $title = "UpdateForm";

    include_once("./includes/head.php");


    include("./includes/appointment.auth.inc.php");
    $record_id = $_POST['record_id'];
       
    ?>

</head>
<body id="top" data-spy="scroll" data-target=".header" data-offset="80">
	  

      <!--HEADER-->

<?php include_once("./includes/nav-bar.php") ?>


<section class="intro text-left section-padding autoheight" id="intro">
			<div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="row">
					<div class="col-lg-8 about">

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
					</div>
				</div>
			</div>
        </section>
        <?php include_once("./includes/footer.php")?>
	<script type="text/javascript" src="assets/js/init_<?php echo $title?>.js"></script>

</body>
</html>
