<!DOCTYPE html>
<html>
<body>
<?php
$endpoint=strval(file_get_contents("/var/www/html/cred/db_end_point"));
$username=strval(file_get_contents("/var/www/html/cred/db_username"));
$password=strval(file_get_contents("/var/www/html/cred/db_password"));
$link = mysqli_connect($temp,"admin","adarsh1234");
if (!$link){
        die('Could not Connect: '.mysqli_error());
}
echo "Connected Successfully";
mysqli_close($link);
?>
</body>
</html>
