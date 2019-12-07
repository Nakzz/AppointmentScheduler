<!DOCTYPE html>
<html>
	<head>


        <?php 
        $today = "monday";
        $spotAvailable = 0;
        $title = "Home";

        include("connect.inc.php");


        //DEBUG ONLY
        // include('./includes/ChromePhp.php');
        // ChromePhp::log('hello world');

        $query = "SELECT * FROM FACULTY WHERE fac_id=\"testAdmin\"";
        $result = mysqli_query($conn, $query);
        if (!$result){
            die("cannot processed select query");
        }
        $row = mysqli_fetch_assoc($result);



        //
        include_once("./includes/head.php");

        ?>      

        <!-- TITLE -->
        <title>Scheduler: <?php echo $title; ?> </title>
	
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
						<h1 class="arrow">Advising Hours for <?php echo $today?> </h1><hr>
						<p> <?php echo  $spotAvailable ." spots available for " . $today ?> </p>
					</div>
				</div>
			</div>
			
			<div class="container-schedule container wow animated fadeInDown animated" data-wow-duration="1s" data-wow-delay="1s">
				<div id="tabs-ui" class="tabs">
					<nav>
						<ul>
							<li><a href="#section-1"><span>Monday</span></a></li>
							<li><a href="#section-2"><span>Tuesday</span></a></li>
							<li><a href="#section-3"><span>Wednesday</span></a></li>
							<li><a href="#section-4"><span>Thursday</span></a></li>
							<li><a href="#section-5"><span>Friday</span></a></li>
						</ul>
					</nav>
					<div class="content">
                        
                    <section id="section-1">
							<div class="container">
								<div class="accordion">
									<div class="day">September 15, 2014</div>
									<div class="item clearfix">
										<div class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">
												Welcome speech and Overview<br/>
												<span class="name">Andrew Yang - </span>
												<span class="speaker-designaition">CEO, Microsoft</span>
											</div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">The Standardistas are lecturers in interactive design<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Proin gravida nibh vel velit auctor aliquet<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								</div>        
							</div><!--CONTAINER ENDS-->
						</section>
						<section id="section-2">
							<div class="container">
								<div class="accordion">
									<div class="day">September 16, 2014</div>
									<div class="item clearfix">
										<div class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Overview - Nisi elit consequat<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Aenean sollicitudin quis bibendum auctor<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Sagittis sem nibh id elit<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								</div>        
							</div>
						</section>
						<section id="section-3">
							<div class="container">
								<div class="accordion">
									<div class="day">September 17, 2014</div>
									<div class="item clearfix">
										<div class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Welcome speech and Overview<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">The Standardistas are lecturers in interactive design<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Proin gravida nibh vel velit auctor aliquet<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								</div>        
							</div>
						</section>
						<section id="section-4">
							<div class="container">
								<div class="accordion">
									<div class="day">September 18, 2014</div>
									<div class="item clearfix">
										<div class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Overview - Nisi elit consequat<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Aenean sollicitudin quis bibendum auctor<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Sagittis sem nibh id elit<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								</div>        
							</div>   
						</section>
						<section id="section-5">
							<div class="container">
								<div class="accordion">
									<div class="day">September 19, 2014</div>
									<div class="item clearfix">
										<div class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Welcome speech and Overview<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">The Standardistas are lecturers in interactive design<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Proin gravida nibh vel velit auctor aliquet<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								</div>        
							</div>
						</section>
					</div><!-- /content -->
				</div><!-- /tabs -->
			</div>
        </section>
		
		

		<!--/SCHEDULE-->
        
		<!--ABOUT-->	
        <section class="intro text-center section-padding" id="intro">
			<div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="row">
					<div class="col-lg-8 align-center about">
						<h1 class="arrow">ABOUT THE PROJECT</h1>
						<hr>
						<p>Lorem ipsum dolor sit amet, ad eos iriure corpora prodesset. Partem timeam at vim, mel veritus accusata ea. Ius ei dicam inciderint, eleifend deseruisse ei mea. Alia dicam eam te, summo exerci ei mei.Ei sea debet choro omittantur. Ea nam quis aeterno, et usu semper senserit.</p>
					</div>
				</div>
			</div>
        </section>
		<!--/ABOUT-->	



        <!--SPEAKERS-->
        <section class="team text-center section-padding" id="team">
			<div class="container">
				<div class="row">
				  <div class="col-lg-8 wow animated fadeInUp align-center" data-wow-duration="1s" data-wow-delay="1s">
					<h1 class="arrow">Speakers</h1><hr>
					<p>Lorem ipsum dolor sit amet, alia honestatis an qui, ne soluta nemore eripuit sed. Falli exerci aperiam ut his, prompta feugiat usu minimum delicata.</p>
				  </div>
				</div>
				<div class="row">
					<div class="speakers-wrap">
						<div id="portfolioSlider">
							<ul class="slides">
								<li>
									<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
										<div class="overlay-effect effects clearfix">
											<div class="img">
											  <img src="assets/img/team/team1.jpg" alt="Portfolio Item">
											  <div class="overlay">
												<button class="md-trigger expand" data-modal="modal-1"><i class="fa fa-search"></i><br>View More</button>
											  </div>
											</div>
										</div>
										<h2>Mark Anderson</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet.</p>
									</div>

									<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
										<div class="overlay-effect effects clearfix">
											<div class="img">
												<img src="assets/img/team/team2.jpg" alt="Portfolio Item">
												<div class="overlay">
													<button class="md-trigger expand" data-modal="modal-2"><i class="fa fa-search"></i><br>View More</button>
												</div>
											</div>
										</div>
										<h2>Mary Doe</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet.</p>
									</div>

									<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
										<div class="overlay-effect effects clearfix">
											<div class="img">
												<img src="assets/img/team/team3.jpg" alt="Portfolio Item">
												<div class="overlay">
													<button class="md-trigger expand" data-modal="modal-3"><i class="fa fa-search"></i><br>View More</button>
												</div>
											</div>
										</div>
										<h2>John Thomson</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet.</p>
									</div>
								</li>
								<!-- <li> Second Set of Speakers -->
								<li>
									<div class="col-md-4 col-sm-4 wow animated fadeInUp">
										<div class="overlay-effect effects clearfix">
										<div class="img">
										  <img src="assets/img/team/team1.jpg" alt="Portfolio Item">
										  <div class="overlay">
											<button class="md-trigger expand" data-modal="modal-4"><i class="fa fa-search"></i><br>View More</button>
										  </div>
										</div>
										</div>
										<h2>Mark Anderson</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet.</p>
									</div>
									<div class="col-md-4 col-sm-4 wow animated fadeInUp">
										<div class="overlay-effect effects clearfix">
											<div class="img">
											  <img src="assets/img/team/team2.jpg" alt="Portfolio Item">
											  <div class="overlay">
												<button class="md-trigger expand" data-modal="modal-5"><i class="fa fa-search"></i><br>View More</button>
											  </div>
											</div>
										</div>
										<h2>Mary Doe</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet.</p>
									</div>
									<div class="col-md-4 col-sm-4 wow animated fadeInUp">
										<div class="overlay-effect effects clearfix">
											<div class="img">
											  <img src="assets/img/team/team3.jpg" alt="Portfolio Item">
											  <div class="overlay">
												<button class="md-trigger expand" data-modal="modal-6"><i class="fa fa-search"></i><br>View More</button>
											  </div>
											</div>
										</div>
									  <h2>John Thomson</h2>
									  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div> <!--Row Ends Here-->
			</div>
			<!-- Example Speaker -->
			<div class="md-modal md-effect-9" id="modal-1">
				<div class="md-content">
					<div class="folio">
						<div class="avatar1"></div>
						<div class="sp-name"><strong>Mark Anderson</strong><br/>Director, ABC</div>
						<div class="sp-dsc">
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
							<blockquote>
							<p>Here is a long quotation here is a long quotation proin gravida nibh vel velit auctor aliquet aenean sollicitudin.</p>
							</blockquote>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
						</div>
						<div class="sp-social">
							<ul>
								<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
						<button class="md-close"><i class="fa fa-times"></i></button>
					</div>
				</div>
			</div> 
			<div class="md-overlay"></div>
			<!-- /Example Speaker -->
			<!-- Example Speaker -->
			<div class="md-modal md-effect-9" id="modal-2">
				<div class="md-content">
					<div class="folio">
						<div class="avatar2"></div>
						<div class="sp-name"><strong>Mark Anderson</strong><br/>Director, ABC</div>
						<div class="sp-dsc">
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
							<blockquote>
							<p>Here is a long quotation here is a long quotation proin gravida nibh vel velit auctor aliquet aenean sollicitudin.</p>
							</blockquote>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
						</div>
						<div class="sp-social">
							<ul>
								<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
						<button class="md-close"><i class="fa fa-times"></i></button>
					</div>
				</div>
			</div> 
			<div class="md-overlay"></div>
			<!-- /Example Speaker -->
			<!-- Example Speaker -->
			<div class="md-modal md-effect-9" id="modal-3">
				<div class="md-content">
					<div class="folio">
						<div class="avatar3"></div>
						<div class="sp-name"><strong>Mark Anderson</strong><br/>Director, ABC</div>
						<div class="sp-dsc">
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
							<blockquote>
							<p>Here is a long quotation here is a long quotation proin gravida nibh vel velit auctor aliquet aenean sollicitudin.</p>
							</blockquote>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
						</div>
						<div class="sp-social">
							<ul>
								<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
						<button class="md-close"><i class="fa fa-times"></i></button>
					</div>
				</div>
			</div> 
			<div class="md-overlay"></div>
			<!-- /Example Speaker -->
			<!-- Example Speaker -->
			<div class="md-modal md-effect-9" id="modal-4">
				<div class="md-content">
					<div class="folio">
						<div class="avatar4"></div>
						<div class="sp-name"><strong>Mark Anderson</strong><br/>Director, ABC</div>
						<div class="sp-dsc">
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
							<blockquote>
							<p>Here is a long quotation here is a long quotation proin gravida nibh vel velit auctor aliquet aenean sollicitudin.</p>
							</blockquote>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
						</div>
						<div class="sp-social">
							<ul>
								<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
						<button class="md-close"><i class="fa fa-times"></i></button>
					</div>
				</div>
			</div> 
			<div class="md-overlay"></div>
			<!-- /Example Speaker -->
			<!-- Example Speaker -->
			<div class="md-modal md-effect-9" id="modal-5">
				<div class="md-content">
					<div class="folio">
						<div class="avatar5"></div>
						<div class="sp-name"><strong>Mark Anderson</strong><br/>Director, ABC</div>
						<div class="sp-dsc">
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
							<blockquote>
							<p>Here is a long quotation here is a long quotation proin gravida nibh vel velit auctor aliquet aenean sollicitudin.</p>
							</blockquote>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
						</div>
						<div class="sp-social">
							<ul>
								<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
						<button class="md-close"><i class="fa fa-times"></i></button>
					</div>
				</div>
			</div> 
			<div class="md-overlay"></div>
			<!-- /Example Speaker -->
			<!-- Example Speaker -->
			<div class="md-modal md-effect-9" id="modal-6">
				<div class="md-content">
					<div class="folio">
						<div class="avatar6"></div>
						<div class="sp-name"><strong>Mark Anderson</strong><br/>Director, ABC</div>
						<div class="sp-dsc">
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
							<blockquote>
							<p>Here is a long quotation here is a long quotation proin gravida nibh vel velit auctor aliquet aenean sollicitudin.</p>
							</blockquote>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
						</div>
						<div class="sp-social">
							<ul>
								<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
						<button class="md-close"><i class="fa fa-times"></i></button>
					</div>
				</div>
			</div> 
			<div class="md-overlay"></div>
			<!-- /Example Speaker -->
        </section>
		<!--/SPEAKER-->

        
<?php include_once("./includes/footer.php")?>


	</div>	
		
    </body>
</html>