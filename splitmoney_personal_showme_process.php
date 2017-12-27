<?php
	$connect=mysqli_connect('localhost','root','','splitmoney');
 
	if(mysqli_connect_errno($connect))
	{
		echo 'Failed to connect';
	}

// connecting with database
	mysqli_select_db($connect,'splitmoney')or die("connection failed");

	$fdate=$_POST['fdate'];
	$tdate=$_POST['tdate'];

// Applying required querries
	$show="SELECT dte,amount,type FROM personal_balance WHERE dte>='fdate' AND dte<='tdate' AND eamil_id='$_SESSION['email']'"; 

// output if query is valid

	if($result= mysqli_query($connect,$show))
		{
  // // Return the number of rows in result set
  			$rowcount=mysqli_num_rows($result);
  // printf("Result set has %d rows.\n",$rowcount);

  			
							
			
		}
?>
