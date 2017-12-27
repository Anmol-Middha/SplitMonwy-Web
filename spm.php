<!DOCTYPE html>
<html>
<head>
	<title>Split Money</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="splitmoney.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="splitmoney.js"></script>
    <script type="text/javascript" src="splitmoney_ajax.js"></script>
    
</head>

<body> 
	
<div class="container">
    <div class="row" style="padding-top: 15px; padding-bottom: 15px">
      <div class="col-xs-12">
        <div class="titlebar" style="float:right"> 
		     <button type="button" class="btn login btn_size"  onclick="login1()" data-toggle="modal" data-target="#myModal" >
			   <b>Log In</b>
			   </button>

			   <button type="button" class="btn signup btn_size"  onclick="signup()" data-toggle="modal" data-target="#myModal" >
			   <b>Sign Up</b>
			   </button>
       </div>
    </div>
  </div>
</div>

<div class="fgh">

	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content" style="background:rgba(0,0,0,0.3);">      
        <div class="modal-header">  	
          <div class="col-md-6">
        	 <center><button name="logb" class="btn mod_btn" onclick="login1()"><h4>LOG IN</h4></center>
          </div>

          <div class="col-md-6">
        	 <center><button name="logb" class="btn mod_btn" onclick="signup()"><h4>SIGN UP</h4></center>
          </div>
        </div>
        <div>
        <form method="POST" action="process.php">

      	<div class="modal-body">
       		<div class="form-group" id="loginbody" ng-app="login_form" ng_controller="login_validate">
       		 <center>
          		<input type="Email" name="luser" class="form-control" placeholder="Enter your Email ID"><br>
          		<input type="password" name="lpass" class="form-control" placeholder="Enter your Password"><br>
           </center>
       		</div>

       		<div class="form-group" id="signupbody">
       		 <center>
       			<input type="text" name="full" class="form-control" placeholder="Enter your Full Name"><br>
       			<input type="Email" name="eid" class="form-control" placeholder="Enter your Email ID"><br>
          	<input type="password" name="pass" class="form-control" placeholder="Enter your Password"><br>
       		 </center>
       		</div>
       	</div>
        
        <div class="modal-footer">
          	<button type="submit" class="btn btn-primary btn-md"> Submit </button>
        </div>

        </form>
      </div>
      </div> 
    </div>
  </div>
</div>
</body>
</html>