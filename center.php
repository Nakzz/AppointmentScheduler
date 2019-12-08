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
			  <img src="assets/img/slider/1.jpg" alt="Cinelli">
			  <img src="assets/img/slider/2.jpg" alt="Surly">
			  <img src="assets/img/slider/3.jpg" alt="Cinelli">
			  
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
				<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Grand Space, Portland. 21-26 Sept 2014</p>
				<a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s" data-scroll href="#intro">Learn more</a>
			</div>
		</section>
		<!--/HOME-->
		
        
		<!--ABOUT-->	
        <section class="intro text-center section-padding" id="intro">
			<div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="row">
					<div class="col-lg-8 align-center about">
						<h1 class="arrow">Center</h1>
						<hr>
						<p>Lorem ipsum dolor sit amet, ad eos iriure corpora prodesset. Partem timeam at vim, mel veritus accusata ea. Ius ei dicam inciderint, eleifend deseruisse ei mea. Alia dicam eam te, summo exerci ei mei.Ei sea debet choro omittantur. Ea nam quis aeterno, et usu semper senserit.</p>
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