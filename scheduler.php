<!DOCTYPE html>
<html>
	<head>


        <?php 

                 // DEBUG ONLY
        include('./includes/ChromePhp.php');
        ChromePhp::log('hello world');


        $title = "Scheduler";


       
        // ChromePhp::log($_GET["uid"]); 
        

        include("./includes/connect.inc.php");



        $query = "SELECT * FROM FACULTY WHERE fac_id=\"testAdmin\"";
        $result = mysqli_query($conn, $query);
        if (!$result){
            die("cannot processed select query");
        }
        $row = mysqli_fetch_assoc($result);


        //TODO: update this
        $spotAvailable = 0;


        //
        include_once("./includes/head.php");

        ?>  

		<!-- Universal Functions -->
		<?php

		include ("./includes/tagWriter.php");

		function redirectToUpdate($sendingId,$startTime,$endTime,$sentence,$actionCode){
			echo ("<form action=\"student_updateAppointment.php\" method=\"post\">");
			echo ("<a href=\"javascript:;\" onclick=\"parentNode.submit();\"><p>$sentence</p></a>");
			echo ("<input type=\"hidden\" name=\"record_id\" value=$sendingId>");
			echo ("<input type=\"hidden\" name=\"actionCode\" value=$actionCode>");
			echo ("</form>");
		}


		function addARecord($row){
			$record_id = $row['record_id'];
			$is_available = $row['is_available'];
			$student_4digit = $row['student_4_digit'];
			$startTime = $row['record_starttime'];
			$endTime = $row['record_endtime'];
			$student_lastName = $row['student_lname'];
			$fac_id = $row['fac_id'];
			$fac_name = "testAdmin";
			switch($fac_id){
				case "mmitchell":
					$fac_name="Meg";
				break;
				case "kmalone";
					$fac_name="Krista";
				break;

			}
			Functions::startTagwithClass("div","item clearfix");
				Functions::startTagwithClass("div","heading clearfix");
					Functions::startTagwithClass("div","time col-md-3 col-sm-12 col-xs-12");
					echo ("$startTime - $endTime");
					Functions::endTag("div");
					Functions::startTagwithClass("div","e-title col-md-9 col-sm-12 col-xs-12");
					if($is_available==1){
						if(empty($student_4digit)){
							echo ("Available for $fac_name !</br>");
						}else{
							echo ("Reserved</br>");
						}
						
					}else{
						echo ("Locked by Professor</br>");
					}
						Functions::startTagwithClass("span","name");
						if($is_available==1){
							if(empty($student_4digit)){
								echo ("You can add an appointment.");
							}else{
								echo ($student_lastName);
							}
						}else{
							echo ("This section is locked by professor.");
						}
						Functions::endTag("span");
					Functions::endTag("div");
				Functions::endTag("div");
				Functions::startTagwithClass("div","col-md-12 col-sm-12 col-xs-12");
					Functions::startTagwithClass("div","content venue col-md-3 col-sm-12 col-xs-12");
					echo ("Options:");
					Functions::endTag("div");
					Functions::startTagwithClass("div","content details col-md-9 col-sm-12 col-xs-12");
					if($is_available==1){
						if(empty($student_4digit)){
							redirectToUpdate($record_id,$startTime,$endTime,"Click HERE to SCHEDULE an appointment.",1);
						}else{
							redirectToUpdate($record_id,$startTime,$endTime,"Click HERE to DELETE this appointment.",2);
						}
					}else{
						echo ("This section is locked. No options currently available.");
					}
					Functions::endTag("div");
				Functions::endTag("div");
			Functions::endTag("div");

		}
		

		?>

       
	
	</head>
	   
   <body id="top" data-spy="scroll" data-target=".header" data-offset="80">
	  

		<!--HEADER-->

	<?php include_once("./includes/nav-bar.php") ?>
	

		<!--/HEADER-->
		

		

		
		<!--LINE UP-->        
        <section class="text-center section-padding" id="responsive">
			<div class="container wow animated fadeInLeft bottom-spacing">
				<div class="row">
					<div class="col-md-8 align-center wow animated fadeInLeft">
						<h1 class="arrow">Advising Hours </h1><hr>
					</div>
				</div>
			</div>
			
			<div class="container-schedule container wow animated fadeInDown animated" data-wow-duration="1s" data-wow-delay="1s">
				<div id="tabs-ui" class="tabs">
					<nav>
						<ul>
							<li id="1"><a href="#section-1"><span>Monday</span></a></li>
							<li id="2"><a href="#section-2"><span>Tuesday</span></a></li>
							<li id="3"><a href="#section-3"><span>Wednesday</span></a></li>
							<li id="4"><a href="#section-4"><span>Thursday</span></a></li>
							<li id="5"> <a href="#section-5"><span>Friday</span></a></li>
						</ul>
					</nav>
					<div class="content">
					<form name="selfForm" action="scheduler.php" method="POST">
						<select name="prof_name">
							<option>CHOOSE A PROFESSOR</option>
							<option>Meg</option>
							<option>Krista</option>
						</select>
						<input name="submit_self" type="submit" value="submit">
						<br>
						</br>
						
							
					</form>
						 <a href="professor_login.php">  <p >Click <span style="color: blue"> Here </span> for Professor Login </p>  </a> <br>
					<?php 
					$professor_name = $_POST['prof_name'];
					$prof_sentence;
						switch($professor_name){
							case "CHOOSE A PROFESSOR":
								$prof_sentence="";
								break;
							case "Meg":
								$prof_sentence=" AND (fac_id=\"mmitchell\")";
								break;
							case "Krista":
								$prof_sentence=" AND (fac_id=\"kmalone\")";

						}
					?>
                        
                    	<section id="section-1">

					


							<div class="container">

								<div class="accordion">


								<?php
								//test
								$query_sentence="SELECT * FROM RECORD WHERE (record_date=\"2019-12-02\")".$prof_sentence;
								$result = mysqli_query($conn, $query_sentence);
								if (!$result){
									die("cannot processed select queryThis");
								}
								
								?>

									<div class="day">December 02, 2019</div>
										
									<?php
									$rowNum = mysqli_num_rows($result);
										
									if($rowNum==0){
										echo("<p>No Timeslot this day</p>");
									}else{
										$available_slot = 0;
										while($row = mysqli_fetch_assoc($result)){
											addARecord($row);
											if(($row['is_available']==1)&&(empty($row['student_4digit']))){
												$available_slot ++;
											}
										}
									}
									?>
								  
								</div>
								<p> <?php echo  $available_slot ." spots available for " ?> </p>        
							</div><!--CONTAINER ENDS-->
						</section>
						<section id="section-2">
							<div class="container">
								<div class="accordion">
								<?php
								//Data
								$query_sentence="SELECT * FROM RECORD WHERE record_date=\"2019-12-03\"";
								$result = mysqli_query($conn, $query_sentence);
								if (!$result){
									die("cannot processed select queryThis");
								}
								?>
									<div class="day">December 03, 2019</div>
									<?php
									//Show
									$rowNum = mysqli_num_rows($result);
										
									if($rowNum==0){
										echo("<p>No Timeslot this day</p>");
									}else{
										
										while($row = mysqli_fetch_assoc($result)){
											addARecord($row);
										}
									}
									?>

								</div>        
							</div>
						</section>
						<section id="section-3">
							<div class="container">
								<div class="accordion">
								<?php
								//Data
								$query_sentence="SELECT * FROM RECORD WHERE record_date=\"2019-12-04\"";
								$result = mysqli_query($conn, $query_sentence);
								if (!$result){
									die("cannot processed select queryThis");
								}
								?>
									<div class="day">December 04, 2019</div>
									<?php
									//Show
									$rowNum = mysqli_num_rows($result);
										
									if($rowNum==0){
										echo("<p>No Timeslot this day</p>");
									}else{
										
										while($row = mysqli_fetch_assoc($result)){
											addARecord($row);
										}
									}
									?>
								</div>        
							</div>
						</section>
						<section id="section-4">
							<div class="container">
								<div class="accordion">
								<?php
								//Data
								$query_sentence="SELECT * FROM RECORD WHERE record_date=\"2019-12-05\"";
								$result = mysqli_query($conn, $query_sentence);
								if (!$result){
									die("cannot processed select queryThis");
								}
								?>
									<div class="day">December 05, 2019</div>
									<?php
									//Show
									$rowNum = mysqli_num_rows($result);
										
									if($rowNum==0){
										echo("<p>No Timeslot this day</p>");
									}else{
										
										while($row = mysqli_fetch_assoc($result)){
											addARecord($row);
										}
									}
									?>

									
								</div>        
							</div>   
						</section>
						<section id="section-5">
							<div class="container">
								<div class="accordion">
								<?php
								//Data
								$query_sentence="SELECT * FROM RECORD WHERE record_date=\"2019-12-06\"";
								$result = mysqli_query($conn, $query_sentence);
								if (!$result){
									die("cannot processed select queryThis");
								}
								?>
									<div class="day">December 06, 2019</div>
									<?php
									//Show
									$rowNum = mysqli_num_rows($result);
										
									if($rowNum==0){
										echo("<p>No Timeslot this day</p>");
									}else{
										
										while($row = mysqli_fetch_assoc($result)){
											addARecord($row);
										}
									}
									?>
								  
								</div>        
							</div>
						</section>
					</div><!-- /content -->
				</div><!-- /tabs -->
			</div>
        </section>
		
		

		<!--/SCHEDULE-->
        


        
<?php include_once("./includes/footer.php")?>
		<!-- SCHEDULE TABS  -->
        <script type="text/javascript" src="assets/js/modernizr.js" ></script>
        <script type="text/javascript" src="assets/js/cbpFWTabs.js" ></script>		
        
                		<!-- INITIALIZATION  -->
		<script type="text/javascript" src="assets/js/init_<?php echo $title?>.js"></script>
        
        
<script>
//TODO: remove if not implementation is found
// window.addEventListener("load", function(){

//     for(let i=1; i<6; i++){
//         document.getElementById(i).onclick = function(){  console.log(`Clicked ${i}`);

//         window.location.href=`scheduler.php?uid=${i}`;


//     }

// };
// });

</script>
	</div>	
		
    </body>
</html>