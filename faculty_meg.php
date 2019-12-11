<html>
<head>

    
    <?php

    $title = "Faculty";

    include_once("./includes/head.php");
    include_once("./includes/connect.inc.php");


        /*Collect fac_id*/
        $fac_id="mmitchell";
        /*Universal Functions*/
        function write_if_not_blank($showName,$value){
            if(!empty($value)){
                echo ("<b>$showName:</b> ".$value."</br>");
            }
        }
        function write_a_block($facid,$blockName,$connection){
            /*try get all active items in the block with sql*/
            /* MySQL query */
            $query_sentence="SELECT * FROM ITEMS WHERE fac_id=\"$facid\" AND category=\"$blockName\" AND active=\"1\" ORDER BY 'display_order' ASC";
            $result = mysqli_query($connection,$query_sentence);
            if(!$result){
                echo "<script type='text/javascript'>alert('connection $blockName failed!');</script>";
                die;
            }
            /*Process sql result */
            $rowNum = mysqli_num_rows($result);
            if($rowNum>0){
                echo ("<h2>$blockName</h2>");
                while ($row = mysqli_fetch_assoc($result)) {
                    $description_in = $row ['description'];
                    echo "<p>$description_in</p>";
                }
            }
        }
    ?>
</head>
<body id="top" data-spy="scroll" data-target=".header" data-offset="80">
	  

      <!--HEADER-->

<?php include_once("./includes/nav-bar.php") ?>

      <!--/HEADER-->

    <!--part A: Prof Name,Pic--><!--DYNAMIC, retrieved from database-->
    <!--a.collect info-->
   

    <!--part B: Prof Basic Info--><!--DYNAMIC, includes Office, Phone, Email, if applicable.-->
    <!--a.collect info-->
    <?php
        /* MySQL query */
        $query_sentence="SELECT office, phone, email FROM FACULTY WHERE fac_id=\"$fac_id\"";
        $result = mysqli_query($conn,$query_sentence);
        if(!$result){
            echo "<script type='text/javascript'>alert('connection 2 failed!');</script>";
            die;
        }
        $row = mysqli_fetch_assoc($result);
        /*Process sql result */
        $prof_office = $row["office"];
        $prof_phone = $row["phone"];
        $prof_email = $row["email"];

    ?>
    
        
		<!--ABOUT-->	
        <section class="intro text-left section-padding autoheight" id="intro">
			<div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="row">
					<div class="col-lg-8 about">

                     <!--b. present info-->
    <form action="login.php" method="post">
        <a href="javascript:;" onclick="parentNode.submit();"><?php echo"<h1 class=\"arrow\"> Meghan Mitchell </h1>"; ?></a>
        <input type="hidden" name="page_fac_id" value=mmitchell>
    </form>
    <?php
        // echo ("<img src=\"$prof_img_loc\">"); TODO: remove when proper image path comes
        echo ("<img src=\"./assets/img/meghan.jpg \">");
        echo "<hr>";
    ?>

<!--b. present info-->
<?php 
        write_if_not_blank("Office",$prof_office);
        write_if_not_blank("Phone",$prof_phone);
        write_if_not_blank("Email",$prof_email);
    ?>

    <!--part C: Publications--><!--DYNAMIC-->
    <?php
        write_a_block($fac_id,"PUBLICATIONS",$conn);
    ?>

    <!--part D: Conference Presentations--><!--DYNAMIC-->
    <?php
        write_a_block($fac_id,"CONFERENCE PRESENTATIONS",$conn);
    ?>
    <!--part E: Research in Progress--><!--DYNAMIC-->
    <?php
        write_a_block($fac_id,"RESEARCH IN PROGRESS",$conn);
    ?>

    <!--part F: Courses Taught--><!--DYNAMIC-->
    <?php
        write_a_block($fac_id,"COURSES TAUGHT",$conn);
    ?>
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



	   

		

		

				
		
