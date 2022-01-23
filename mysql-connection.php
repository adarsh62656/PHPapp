<!DOCTYPE html>
<html>
<body>
<?php
echo "Trying to Connect SQL Server <br>";
$link = mysqli_connect("localhost","root","Adarsh@1234");
if (!$link){
	die('Could not Connect: '.mysqli_error());
}
echo "Connected Successfully";
mysqli_close($link);
?>
</body>
</html>
