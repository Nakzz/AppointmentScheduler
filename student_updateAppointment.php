
<!DOCTYPE html>
<html>
	<head>


        <?php 
        $title = "Student_Update";

$record_id = $_POST['record_id'];
$actionCode = $_POST['actionCode'];
$keyword;

if($actionCode==1){
    $keyword="ADD";
}elseif($actionCode==2){
    $keyword="DELETE";
}

include("./includes/connect.inc.php");
include_once("./includes/head.php");
include('./includes/ChromePhp.php');

if(isset($_POST['submit_button'])){

    ChromePhp::log("Post submit");
    
    $student_4digit = $_POST['student_4digit'];
    $student_lname = $_POST['student_lname'];
    $sentence;
    
    if ($actionCode==1){
        $sentence = "UPDATE RECORD SET student_4_digit=\"$student_4digit\", student_lname=\"$student_lname\" WHERE record_id=\"$record_id\"";
    }elseif($actionCode==2){
        $sentence = "UPDATE RECORD SET student_4_digit=NULL, student_lname=NULL WHERE (record_id=\"$record_id\") AND (student_4_digit=\"$student_4digit\") AND (student_lname=\"$student_lname\")";
    }

    $result = mysqli_query($conn, $sentence);
    if (!$result){
        die("cannot processed select query");
    }
    elseif(mysqli_affected_rows($conn)<=0){

        ChromePhp::log("Sql query was made succ");

        if($actionCode==1){
            echo "<script type='text/javascript'>alert('Unknown failure');</script>";
            echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=scheduler.php\">";
        }
        elseif($actionCode==2){
            echo "<script type='text/javascript'>alert('4 digit id or lastname mismatch!');</script>";
            echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=scheduler.php\">";
        }
    }else{
        echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
        echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=scheduler.php\">";
    }
}

ChromePhp::log("Past _POST");
ChromePhp::log($_POST);



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
						<h1 class="arrow"><?php echo($keyword) ?> an appointment </h1>
						<hr>
						<!-- <p>Lorem ipsum dolor sit amet, ad eos iriure corpora prodesset. Partem timeam at vim, mel veritus accusata ea. Ius ei dicam inciderint, eleifend deseruisse ei mea. Alia dicam eam te, summo exerci ei mei.Ei sea debet choro omittantur. Ea nam quis aeterno, et usu semper senserit.</p> -->
					</div>
				</div>
			</div>
        </section>
		<!--/ABOUT-->
        

					<!--SUBSCRIBE-->	
                    <section class="subscribe section-padding text-center ">
			<div class="subscribe-overlay"></div>
			<div class="container wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
				<!-- <h1>Login</h1> -->
				<form name="update_form" action="student_updateAppointment.php" method="POST" class="center-block align-center col-lg-5 col-md-5 col-sm-10 col-xs-10">
					<div class="input-group col-lg-12 align-center">
                      <input type="text" class="form-control email-add" name="student_4digit" placeholder="Enter StudentID last 4 digits:">
                      <input type="text" class="form-control email-add" name="student_lname" placeholder="Enter Student LastName">
                      <input name="record_id" type="hidden" value="<?php echo $record_id ?>">
                      <input name="actionCode" type="hidden" value="<?php echo $actionCode ?>">
					  <button name="submit_button" type="submit" class="btn btn-default notify-button"><i class="fa fa-paper-plane"></i><span>Send</span></button>
					</div>
				</form>
			</div>
        </section>
		<!-- /SUBSCRIBE -->
		

        
<?php include_once("./includes/footer.php")?>
		<script type="text/javascript" src="assets/js/init_Faculty.js"></script>



	</div>	
		
    </body>
</html>