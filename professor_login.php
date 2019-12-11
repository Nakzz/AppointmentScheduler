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