<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="splitmoney1.css">
   <script type="text/javascript" src="splitmoney_sidenav.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script type="text/javascript" src="splitmoney1.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="js/jquery-3.2.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  
   <script src="https://use.fontawesome.com/985877b1e2.js"></script>
   <title></title>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<!-- Use any element to open the sidenav -->

<!--
 Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
   <div id="cssmenu" style="position: fixed; top:0px; width:100%">
      <ul>
         <li><a><span class="glyphicon glyphicon-list" onclick="openNav()" style="cursor: pointer;"></span></a></li>
         <li><a href='splitmoney1.php'> Home</a></li>
         <li class='active'><a href='#'>Products</a>
            <ul>
               <li><a href='#'>Product 1</a>
                  <ul>
                     <li><a href='#'>Sub Product</a></li>
                     <li><a href='#'>Sub Product</a></li>
                  </ul>
               </li>
               <li><a href='#'>Product 2</a>
                  <ul>
                     <li><a href='#'>Sub Product</a></li>
                     <li><a href='#'>Sub Product</a></li>
                  </ul>
               </li>
            </ul>
         </li>
         <li><a href='#'>About</a></li>
         <li><a href='#'>Contact</a></li>
      </ul>
   </div>

   
      <div class="col-lg-4 jumbotron" style="margin-top: 55px; height: 500px;">
         <center>
         <h1 style="text-shadow: 1px 1px 1px black;" class="perExp">Personal Expense</h1>
         <a class="personal" href="splitmoney_personal.php"><i class="fa fa-user" style="font-size:250px;"></i></a>
         </center>
      </div>
      <div class="col-lg-4 jumbotron" style="margin-top: 55px; height: 500px;">
         <center>
         <h1 style="text-shadow: 1px 1px 1px black;"> Group Expense</h1>
         <a class="group" href="splitmoney_group.php"  id="group"><i class="fa fa-users" style="font-size:250px;  color:inherit;"></i></a>
         </center>
      </div>
      <div class="col-lg-4 jumbotron" style="margin-top: 55px; height: 500px;">
         <center>
         <h1 style="text-shadow: 1px 1px 1px black;">
         Trip <br> Expense
         </h1>
         <a class="trip" href="splitmoney_trip.php" id="trip"><i class="fa fa-car" style="font-size:250px ;"></i></a>
         </center>
      </div>
   </div>
</div>

</body>
<html>