<!DOCTYPE html>
<html>
	<head>


        <?php 
        $today = "monday";
        $spotAvailable = 0;
        $title = "Home";

        include("./includes/connect.inc.php");


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

       
	
	</head>
	   
   <body id="top" data-spy="scroll" data-target=".header" data-offset="80">
	  

		<!--HEADER-->

<?php include_once("./includes/nav-bar.php") ?>

		<!--/HEADER-->
		

		

				
		<!--HOME-->		
		<section id="sec_1" class="autoheight">
		
		<!--SLIDER-->
		<div id="slides">
			<div class="slides-container">
			  <img src="assets/img/art3.jpg" alt="Cinelli">
			  <img src="assets/img/art5.jpg" alt="Surly">
			  <img src="assets/img/art4.jpg" alt="Cinelli">
			  
			</div>
			<nav class="slides-navigation">
			  <a href="#" class="next  fa fa-2x fa-chevron-right"></a>
			  <a href="#" class="prev  fa fa-2x fa-chevron-left"></a>
			</nav>
		</div>
		<!--/SLIDER-->
		
			<div class="home-bg"></div>
			<div class="col-lg-12 landing-text-pos align-center">
				<h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s">WELCOME TO MENDOTA UNIVERSITY</h1>
				<hr id="title_hr"/>
				<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s"> Mendota University Center for the Arts</p>
				<a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s" data-scroll href="#intro">Learn more</a>
			</div>
		</section>
		<!--/HOME-->
		
        
		<!--ABOUT-->	
        <section class="intro text-center section-padding" id="intro">
			<div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="row">
					<div class="col-lg-8 align-center about">
						<h1 class="arrow">What We're About</h1>
						<hr>
						<p> At Mendota University, being yourself is powerful. We value unique individuals who strive to 
						be the best they can be. And we accept individuals of all backgrounds. Our students have the capabilities
						 to learn, teach, and empower others through our school's rigourous academic programs. We rank #1 in 
						 academics and diversity, according to US News & Reports. 
						 <br></br> <br></br>
						 <h1 class="arrow">Ranked #12 Among Undergraduates Arts Program</h1>
						 <hr>
						 <p>
						 The University is an iconic public institution of higher education, boasting nationally ranked schools
						 and programs, diverse and distinguished faculty, a major academic medical center and proud history as 
						 a renowned research university. The community and culture of the University are enriched by active student
						self-governance, sustained commitment to the arts and a robust NCAA Division I Athletics program. </br>
						 </p> <br> </br>
						 <table>
							<tr>
								<td> <img src="assets/img/music.jpg" width="200" height="200" alt="" /> </td>
								<td> <img src="assets/img/camera.jpg" width="300" height="200" alt="" /> </td>
								<td> <img src="assets/img/paint.jpg" width="250" height="200" alt="" /></td>
			</tr>
		</table>
					</div>
				</div>
			</div>
        </section>
		<!--/ABOUT-->	



        
<?php include_once("./includes/footer.php")?>

	<!-- LANDINGPAGE SLIDER  -->
    <script type="text/javascript" src="./assets/js/hammer.min.js"></script>	
		<script type="text/javascript" src="./assets/js/jquery.superslides.js"></script>

        		<!-- INITIALIZATION  -->
		<script type="text/javascript" src="assets/js/init_<?php echo $title?>.js"></script>

	</div>	
		
    </body>
</html>