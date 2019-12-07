

<?php
$c=getcwd();
echo "<h2>".getcwd()."</h2><br>";
$files = scandir($c);
foreach($files as $file) {
	echo "<a href='";
	echo $file;
	echo "'>".$file."</a><br>";
}
?>
