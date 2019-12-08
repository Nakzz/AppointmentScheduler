<?php
	$myUserName = "zexuanl0_group";
	$myPassword = "IS371Final";
	$myRemoteDB = "77.104.151.163";
	$myDB = "zexuanl0_finalpjkt";
	$conn = mysqli_connect($myRemoteDB, $myUserName, $myPassword, $myDB);
	if (!$conn) {
		die("Connection failed: ");
	}
?>