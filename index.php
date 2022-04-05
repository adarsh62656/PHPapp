<!DOCTYPE html>
<html>
<body>
<?php
$endpoint=hostname1;
$username=username1;
$password=password1;
$link = mysqli_connect($temp,$username,$password);
if (!$link){
        die('Could not Connect: '.mysqli_error());
}
        
echo "Connected Successfully";
mysqli_close($link);
?>
</body>
</html>
