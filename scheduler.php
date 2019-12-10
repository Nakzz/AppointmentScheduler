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



        $query = "SELECT * FROM FACULTY WHERE fac_id=\"testAdmin\""; // TODO: get all the appointentments
        $result = mysqli_query($conn, $query);
        if (!$result){
            die("cannot processed select query");
        }
        $row = mysqli_fetch_assoc($result);

		//TODO: sort the result for each day


        include_once("./includes/head.php");

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
						
					<?php 
					

				// 	<section id="section-i">	// THIS IS THE INDEX OF THE OUTTERMOST ARRAY
				// 	<div class="container">
				// 	<p> <?php echo  $spotAvailable ." spots available for "  </p>	// IF YOU WANT TO CALCULATE EACH DAY'S UNBOOKED APPOINTMENT TIMES

				// 		<div class="accordion">
				// 			<div class="day">September 15, 2014</div>	// DAY FOR THAT OUTTER ARRAY

				// INNER LOOP 

				// 			<div class="item clearfix"> 
				// 				<div id="$ID_OF_THE_APPOINTMENT" class="heading clearfix"> // very important, uses javascript in bottom of the page to redirect page
				// 					<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div> // TIME GOES HERE
				// 					<div class="e-title col-md-9 col-sm-12 col-xs-12">
				// 						Welcome speech and Overview<br/> //TEXT
				// 						<span class="name">Andrew Yang - </span> // TEXT
				// 						<span class="speaker-designaition">CEO, Microsoft</span>  // TEXT
				// 					</div>
				// 				</div>
				// 			</div>
						  
				// INNER LOOP ENDS

				// 		</div>        
				// 	</div><!--CONTAINER ENDS-->
				// </section>

					
					?>

                    <section id="section-1">
							<div class="container">
                            <p> <?php //echo  $spotAvailable ." spots available for " ?> </p>

								<div class="accordion">
									<div class="day">September 15, 2014</div>	


									<div class="item clearfix">
										<div id="566" class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">
												Office Hours<br/>
												<span class="name">Andrew Yang - </span>
												<span class="speaker-designaition">CEO, Microsoft</span>
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">The Standardistas are lecturers in interactive design<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Proin gravida nibh vel velit auctor aliquet<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>

									</div>
								</div>        
							</div><!--CONTAINER ENDS-->
						</section>

						<section id="section-2">
							<div class="container">
                            <p> <?php echo  $spotAvailable ." spots available for " ?> </p>

								<div class="accordion">
									<div class="day">September 15, 2014</div>


									<div class="item clearfix">
										<div id="566" class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">
												Welcome speech and Overview<br/>
												<span class="name">Andrew Yang - </span>
												<span class="speaker-designaition">CEO, Microsoft</span>
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">The Standardistas are lecturers in interactive design<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Proin gravida nibh vel velit auctor aliquet<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>

									</div>
								</div>        
							</div><!--CONTAINER ENDS-->
						</section>

						<section id="section-3">
							<div class="container">
                            <p> <?php echo  $spotAvailable ." spots available for " ?> </p>

								<div class="accordion">
									<div class="day">September 15, 2014</div>


									<div class="item clearfix">
										<div id="566" class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">
												Welcome speech and Overview<br/>
												<span class="name">Andrew Yang - </span>
												<span class="speaker-designaition">CEO, Microsoft</span>
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">The Standardistas are lecturers in interactive design<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Proin gravida nibh vel velit auctor aliquet<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>

									</div>
								</div>        
							</div><!--CONTAINER ENDS-->
						</section>
						
						<section id="section-4">
							<div class="container">
                            <p> <?php echo  $spotAvailable ." spots available for " ?> </p>

								<div class="accordion">
									<div class="day">September 15, 2014</div>


									<div class="item clearfix">
										<div id="566" class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">
												Welcome speech and Overview<br/>
												<span class="name">Andrew Yang - </span>
												<span class="speaker-designaition">CEO, Microsoft</span>
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">The Standardistas are lecturers in interactive design<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Proin gravida nibh vel velit auctor aliquet<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>

									</div>
								</div>        
							</div><!--CONTAINER ENDS-->
						</section>
						
						<section id="section-5">
							<div class="container">
                            <p> <?php echo  $spotAvailable ." spots available for " ?> </p>

								<div class="accordion">
									<div class="day">September 15, 2014</div>


									<div class="item clearfix">
										<div id="566" id="566" class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">
												Welcome speech and Overview<br/>
												<span class="name">Andrew Yang - </span>
												<span class="speaker-designaition">CEO, Microsoft</span>
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">The Standardistas are lecturers in interactive design<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Proin gravida nibh vel velit auctor aliquet<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>

									</div>
								</div>        
							</div><!--CONTAINER ENDS-->
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
	/*******Schedule Accordion *************/
	
	$('.accordion .item .heading').click(function(elem) {		
	
		console.log(elem.currentTarget.id)
		window.location.href = `student_login.php?key=${elem.currentTarget.id}`;
		


	});


</script>
	</div>	
		
    </body>
</html>