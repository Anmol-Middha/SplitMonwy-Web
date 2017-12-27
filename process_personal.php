<?php
session_start();


$connect=mysqli_connect('localhost','root','','splitmoney');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 

mysqli_select_db($connect,'splitmoney')or die("connection failed");

$amount=$_POST["amt"];
$type=$_POST["tp"];
$dte=$_POST["dt"];
$description=$_POST["dscp"];
$eml=$_SESSION["email"];
$query="INSERT INTO personal_balance (email_id,amount,type,dte,description) VALUES ('$eml','$amount','$type','$dte','$description')";

if(mysqli_query($connect,$query)){
 
}
else{
	echo mysqli_error($connect);
}
?>

</html>
