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

                    <h1>Our Faculty</h1>
                    
                    <h3> At Mendota University, our world-renowned faculty of scholars, artists, and designers delve deep into critical inquiry 
						every day to solve some of the world’s most pressing issues. Using various methodologies, these community leaders 
						ask questions that spark curiosity and open up possibilities. Our students are welcomed to collaborate with 
						faculty, ideaing together to reimagine a more sustainable future. Change begins with a question. 
						What will you ask?</h3>
						
<br> </br>
<center><table border="3">
	<tr>
		<td>
		<img src="assets/img/meghan.jpg" width="105" height="130" alt="" />
		<form action="faculty_meg.php" method="post">
        <a href="javascript:;" onclick="parentNode.submit();"><font color=white> Meghan Mitchell</font></a> <br></br>
        </form>
        </td>
        
        <td>
        	<p> <br> </br> <br> </p>
        	
    
		</td>
		<td>      
		<img src="assets/img/krista.jpg" width="105" height="130" alt="" />  
        <form action="faculty_krista.php" method="post">
        <a href="javascript:;" onclick="parentNode.submit();"><font color=white>Krista-Lee Malone</font></a>
        <input type="hidden" name="fac_id" value=testAdmin>
  	   </form>
  	   </td>
  </tr>
  </table>
  </center>
  	   
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