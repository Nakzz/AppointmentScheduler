<!DOCTYPE html>
<html>
	<head>


        <?php 
        
        $title = "Faculties";

        include_once("./includes/head.php");

        ?>      

        <!-- TITLE -->
	
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

                    <h1>Hi</h1>

                    <form action="faculty.php" method="post">
        <a href="javascript:;" onclick="parentNode.submit();">admin 1</a>
        <input type="hidden" name="fac_id" value=testAdmin>
    </form>
					</div>
				</div>
			</div>
        </section>
		<!--/ABOUT-->	

		

		

        
<?php include_once("./includes/footer.php")?>
        		<!-- INITIALIZATION  -->
                <script type="text/javascript" src="assets/js/init_<?php echo $title?>.js"></script>

	</div>	
		
    </body>
</html>