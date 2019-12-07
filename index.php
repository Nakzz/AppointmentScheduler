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