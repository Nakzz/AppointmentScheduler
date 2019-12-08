<html>
<head>
	<title>Faculty Information</title>
    <?php
        /*Collect fac_id*/
        $fac_id=$_POST['fac_id'];
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
                echo ("<h3>$blockName</h3>");
                while ($row = mysqli_fetch_assoc($result)) {
                    $description_in = $row ['description'];
                    echo "<p>$description_in</p>";
                }
            }
        }
    ?>
</head>
<body>
    <!--Prework: assure facid-->
    <?php
        include("connect.inc.php");
        if (empty($fac_id)){
            echo "No fac_id submitted by POST!";
            echo "<META HTTP-EQUIV=\"refresh\" content=\"2; URL=test_choosing_prof.php\">";
            exit;
        }
        //echo"<h2>Faculty ID: $fac_id</h2>";//debug
        
    ?>
    <!--part A: Prof Name,Pic--><!--DYNAMIC, retrieved from database-->
    <!--a.collect info-->
    <?php
        /* MySQL query */
        $query_sentence="SELECT * FROM FAC_INFOBOARD WHERE fac_id=\"$fac_id\"";
        $result = mysqli_query($conn,$query_sentence);
        if(!$result){
            echo "<script type='text/javascript'>alert('connection failed!');</script>";
            die;
        }
        $row = mysqli_fetch_assoc($result);
        /*Process sql result */
        $prof_name = $row["fac_name"];
        $prof_img_loc = $row["img_loc"];
        //echo"<h3>ProfName: $prof_name</h3>";//debug
        //echo"<h3>ImgLoc: $prof_img_loc</h3>";//debug
        //echo"<h2>END OF DEBUG</h2>";//debug
    ?>
    <!--b. present info-->
    <form action="login.php" method="post">
        <a href="javascript:;" onclick="parentNode.submit();"><?php echo"<h2>$prof_name</h2>"; ?></a>
        <input type="hidden" name="page_fac_id" value=testAdmin>
    </form>
    <?php
        echo ("<img src=\"$prof_img_loc\">");
        echo "</br>";
    ?>

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
</body>
</html>