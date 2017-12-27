<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script type="text/javascript" src="splitmoney_ajax.js"></script>
</head>
<body>
<?php
session_start();
 
// building up connection
$connect=mysqli_connect('localhost','root','','splitmoney');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

// connecting with database
mysqli_select_db($connect,'splitmoney')or die("connection failed");

// declaring required variables
$fullname=$_POST["full"];
$email=$_POST["eid"];
$password=$_POST["pass"];
$log_email=$_POST["luser"];
$log_pass=$_POST["lpass"];
$_SESSION["email"]=$email;

if($log_email!=null && $log_pass!=null){
  $_SESSION["email"]=$log_email;
}

// creating querries
$signup="INSERT INTO user (full_name,email_id,password) VALUES ('$fullname','$email','$password');";
$login="SELECT * FROM user WHERE email_id='$log_email' AND password='$log_pass'";


//if user selects for login
if ($result=mysqli_query($connect,$login))
{
  // // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  // printf("Result set has %d rows.\n",$rowcount);
  if($rowcount==1){
  	header("location:splitmoney1.php");
  }
  else{
    echo '<script type="text/javascript">validate();</script>';
  }
}

//if user selects for signup
if(mysqli_query($connect,$signup))
{
	header("location:splitmoney1.php");
	
}
?>
</body>
</html>