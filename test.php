<html>
<head>
	<title>TEST</title>
</head>
<body>
<?php
	include("auth.inc.php");
    include("connect.inc.php");
	session_start();
	$query = "SELECT * FROM FACULTY WHERE fac_id=\"testAdmin\"";
	$result = mysqli_query($conn, $query);
	if (!$result){
		die("cannot processed select query");
	}
	$row = mysqli_fetch_assoc($result);
    $password = $row['password'];
	$office =$row['office'];
	$id = $_SESSION['loginID'];
	$mis = $_SESSION['miscellaneous'];
	$pageId = $_SESSION['pageID'];
    mysqli_close($conn);
	echo "<H2>Password: $password</H2>";
	echo "<H2>Office: $office</H2>";
	echo "<H2>id: $id</H2>";
	echo "<H2>Miscellaneous: $mis</H2>";
	echo "<H2>PageId: $pageId";
	echo "<input name =\"update\" type=\"submit\" value=\"UPDATE\">";
?>

</body>
</html>