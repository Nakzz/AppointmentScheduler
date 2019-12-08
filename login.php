<!DOCTYPE html>
<html>
	<head>


        <?php 

        $title = "Login";


        include("connect.inc.php");
        function set_session($id,$pageid){
            session_start();
            $sess_id = session_id();
            $_SESSION['loginID']=$id;
            $_SESSION['pageID']=$pageid;
            $_SESSION['miscellaneous']="f*ckyou";
    
        }
        if(isset($_POST['page_fac_id'])){
            $page_fac_id=$_POST['page_fac_id'];
        }else{
            // die("can't get faculty id from page!");
        }
        if(isset($_POST['submit_button'])){
            $usrname=$_POST['fac_id'];
            $passwd=$_POST['password'];
            $query_sentence="SELECT * FROM FACULTY WHERE fac_id=\"$usrname\" AND password=\"$passwd\"";
            $auth_result = mysqli_query($conn,$query_sentence);
            if(!$auth_result){
                echo "<script type='text/javascript'>alert('connection failed!');</script>";
                echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=login.php\">";
            }else{
                $num = mysqli_num_rows($auth_result);
                if($num==0){
                    echo "<script type='text/javascript'>alert('incorrect fac_id or password!');</script>";
                    echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=login.php\">";
                }elseif($num==1){
                    echo "<script type='text/javascript'>alert('Logged in!');</script>";
                    echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=update.php\">";
                    set_session($usrname,$page_fac_id);
                    exit;
                }else{
                    echo "<script type='text/javascript'>alert('Database Error!');</script>";
                    echo "<META HTTP-EQUIV=\"refresh\" content=\"0; URL=login.php\">";
                }
            }
        }
        mysqli_close($conn);



        include_once("./includes/head.php");

        ?>      
	
	</head>
	   
   <body id="top" data-spy="scroll" data-target=".header" data-offset="80">
	  

		<!--HEADER-->

<?php include_once("./includes/nav-bar.php") ?>

		<!--/HEADER-->
        
        

					<!--SUBSCRIBE-->	
                    <section class="subscribe text-center">
			<div class="subscribe-overlay"></div>
			<div class="container wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
				<h1>Login</h1>
				<form action="login.php" name="login_form" method="POST" class="center-block align-center col-lg-5 col-md-5 col-sm-10 col-xs-10">
					<div class="input-group col-lg-12 align-center">
                      <input type="text" class="form-control email-add" name="fac_id" placeholder="Enter Faculty id">
                      <input type="text" class="form-control email-add" name="password" placeholder="Enter Password">
                      
					  <button class="btn btn-default notify-button"><i class="fa fa-paper-plane"></i><span>Send</span></button>
					</div>
				</form>
			</div>
        </section>
		<!-- /SUBSCRIBE -->

			
<!-- 		
        <h2>Login</h2>
<form name="login_form" action="login.php" method="POST">
    faculty id:  <input name="fac_id" type="text" size="20"></br>
    password:  <input name="password" type="text" size="20"></br>
    <input name="submit_button" type="submit" value="submit">
</form>
		 -->

        
<?php include_once("./includes/footer.php")?>

		<!-- SUBSCRIPTION FORM  -->
		<script type="text/javascript" src="assets/js/notifyMe.js"></script>
		
		<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>

	</div>	
		
    </body>
</html>