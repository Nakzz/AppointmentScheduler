<HTML>
<HEAD>
	<TITLE>Update</TITLE>
    <!--General Functions-->
    <?php
        function write_an_update_area($faculty_id,$category,$connection){
            /*Title*/
            echo ("<h3>Update $category</h3>");
            /*mysql connection stuff*/
            $query_sentence="SELECT * FROM ITEMS WHERE fac_id=\"$faculty_id\" AND category=\"$category\" ORDER BY 'display_order' ASC";
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
    ?>
</HEAD>
<BODY>
    <?php
        include("auth.inc.php");
        include("connect.inc.php");
    ?>
    <!--1. test if username is correct.-->
    <?php
        $loginId = $_SESSION['loginID'];
        $pageId = $_SESSION['pageID'];
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
    <form action="faculty.php" method="post">
        <a href="javascript:;" onclick="parentNode.submit();">return to your Homepage</a>
        <input type="hidden" name="fac_id" value=<?php echo"$loginId"; ?>>
    </form>
	
</BODY>
</HTML>