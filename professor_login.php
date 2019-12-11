
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
						<h1> Login </h1>
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
				<form name="update_form" action="professor_login.php" method="POST" class="center-block align-center col-lg-5 col-md-5 col-sm-10 col-xs-10">
					<div class="input-group col-lg-12 align-center">
                      <input type="text" class="form-control email-add" name="username" placeholder="Faculty ID">
                      <input type="text" class="form-control email-add" name="password" placeholder="Password">
                      
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




























<!-- 
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php
    include("./includes/connect.inc.php");
    function set_session($id,$result_set){
        session_start();
        $sess_id = session_id();
        $_SESSION['loginID']=$id;
        $_SESSION['miscellaneous']="fuckyou";
        $row = mysqli_fetch_assoc($result_set);
        $_SESSION['prof_name']=$row["prof_name"];
    }

    if($_POST['submit_button']){
        $usrname=$_POST['username'];
        $passwd=$_POST['password'];
        $query_sentence="SELECT * FROM PROFESSOR WHERE (fac_id=\"$usrname\") AND (passwd=\"$passwd\")";
        $auth_result = mysqli_query($conn,$query_sentence);
        if(!$auth_result){
            echo "<script type='text/javascript'>alert('connection failed!');</script>";
            echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=professor_login.php\">";
        }else{
            $num = mysqli_num_rows($auth_result);
            if($num==0){
                echo "<script type='text/javascript'>alert('incorrect username or password!');</script>";
                echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=professor_login.php\">";
            }elseif($num==1){
                echo "<script type='text/javascript'>alert('Logged in!');</script>";
                echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=professor_cPanel.php\">";
                set_session($usrname,$auth_result);
                exit;
            }else{
                echo "<script type='text/javascript'>alert('Database Error!');</script>";
                echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=professor_login.php\">";
            }
        }
    }
    mysqli_close($conn);
?>
<h2>Login</h2>
<form name="login_form" action="professor_login.php" method="POST">
    fac_id:  <input name="username" type="text" size="20"></br>
    password:  <input name="password" type="text" size="20"></br>
    <input name="submit_button" type="submit" value="submit">
</form>
</body>
</html>
 -->