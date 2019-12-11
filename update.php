<HTML>
<HEAD>
	
    <!--General Functions-->
    <?php

    $title= "Update";

        include('./includes/ChromePhp.php');
        ChromePhp::log('hello world');

        function write_an_update_area($faculty_id,$category,$connection){
            /*Title*/
            echo ("<h3>Update $category</h3>");
            /*mysql connection stuff*/
            $query_sentence="SELECT * FROM ITEMS WHERE fac_id=\"$faculty_id\" AND category=\"$category\" ORDER BY display_order ASC";
            $result = mysqli_query($connection,$query_sentence);
            if(!$result){
                echo "<script type='text/javascript'>alert('connection $blockName failed!');</script>";
                die;
            }
            /*Process sql result */
            $rowNum = mysqli_num_rows($result); 
            if($rowNum>0){
                while ($row = mysqli_fetch_assoc($result)) {
                    write_an_modification_record($row);
                }
            }else{
                echo ("<p>No Data found in this category!");
            }
        }

        function write_an_modification_record($specificRow){
            $description = $specificRow['description'];
            $display_order = $specificRow['display_order'];
            $active = $specificRow['active'];
            $itemId = $specificRow['item_code'];
            echo ("<form action=\"update_execute.php\" method=\"POST\">");
            echo ("Description: <input type=\"text\" size=\"60\" maxlength=\"220\" name=\"description\" value=\"$description\"></br>");
            echo ("Display Order: <input type=\"text\" size=\"5\" maxlength=\"5\" name=\"display_order\" value=\"$display_order\"></br>");
            echo ("Active: <select name=\"active\"> <option value=\"0\"");
            if($active!=1){
                echo(" selected=\"selected\"");
            }
            echo (">Inactive</option><option value=\"1\"");
            if($active==1){
                echo(" selected=\"selected\"");
            }
            echo (">Active</option> </select>");
            echo ("<input name=\"item_code\"type=\"hidden\" value=\"$itemId\">");
            echo ("<input name=\"update\"type=\"submit\" value=\"UPDATE\">");
            echo ("<input name=\"delete\"type=\"submit\" value=\"DELETE\">");
            echo ("</form>");
        }

        function write_an_addition_area($faculty_id,$connection){
            echo ("<h3>Add A New Record?</h3>");
            echo ("<form action=\"update_execute.php\" method=\"POST\">");
            echo ("Description: <input type=\"text\" size=\"60\" maxlength=\"220\" name=\"description\" ></br>");
            echo ("Display Order: <input type=\"text\" size=\"5\" maxlength=\"5\" name=\"display_order\" ></br>");
            echo ("Active: <select name=\"category\"> 
            <option value=\"PUBLICATIONS\" selected=\"selected\">PUBLICATIONS</option>
            <option value=\"CONFERENCE PRESENTATIONS\" >CONFERENCE PRESENTATIONS</option>
            <option value=\"RESEARCH IN PROGRESS\" >RESEARCH IN PROGRESS</option>
            <option value=\"COURSES TAUGHT\" >COURSES TAUGHT</option> </select>");
            echo ("Active: <select name=\"active\"> <option value=\"0\">Inactive</option>
            <option value=\"1\" selected=\"selected\">Active</option> </select>");
            echo ("<input name=\"fac_id\"type=\"hidden\" value=\"$faculty_id\">");
            echo ("<input name=\"add\"type=\"submit\" value=\"ADD A RECORD\">");
            echo ("</form>");
        }

        include_once("./includes/head.php");

    ?>
</head>
<body id="top" data-spy="scroll" data-target=".header" data-offset="80">
      
      <!--HEADER-->

      <?php include_once("./includes/nav-bar.php") ?>

<!--/HEADER-->

		<!--ABOUT-->	
        <section class="intro text-left section-padding autoheight" id="intro">
			<div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="row">
					<div class="col-lg-8 about">

    <?php
        // include("auth.inc.php"); TODO: uncomment later
        include("connect.inc.php");
    ?>
    <!--1. test if username is correct.-->
    <?php
        session_start();
        $loginId = $_SESSION['loginID'];
        $pageId = $_SESSION['pageID'];

        ChromePhp::log($loginId);
        ChromePhp::log($pageId);
            
        if ($loginId != $pageId){
            echo "<script type='text/javascript'>alert('Not your page! You'll be signed out.');</script>";
            echo "<META HTTP-EQUIV=\"refresh\" content=\"2; URL=logout.php\">";
        }
    ?>
    <!--2. Update Publications-->
    <?php
        write_an_update_area($loginId,"PUBLICATIONS",$conn);
    ?>
    <!--3. Update Conference Presentations-->
    <?php
        write_an_update_area($loginId,"CONFERENCE PRESENTATIONS",$conn);
    ?>
    <!--4. Update Research in Progress-->
    <?php
        write_an_update_area($loginId,"RESEARCH IN PROGRESS",$conn);
    ?>
    <!--5. Update Courses Taught-->
    <?php
        write_an_update_area($loginId,"COURSES TAUGHT",$conn);
    ?>
    <!--6. Write An Addition Area-->
    <?php
        write_an_addition_area($loginId,$conn);
    ?>
    <br>
    <form action="test_choosing_prof.php" method="post">
        <a href="javascript:;" onclick="parentNode.submit();"><font color=white>return to your Homepage</font></a>
        <input type="hidden" name="fac_id" value=<?php echo"$loginId"; ?>>
    </form>

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
    <script type="text/javascript" src="assets/js/init_faculty.js"></script>	
    
</body>
</html>
