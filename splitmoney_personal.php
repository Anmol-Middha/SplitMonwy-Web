<html>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="splitmoney1.css">
   <link rel="stylesheet" type="text/css" href="split_personal.css">
   <script type="text/javascript" src="splitmoney_sidenav.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script type="text/javascript" src="splitmoney1.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="js/jquery-3.2.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="https://use.fontawesome.com/985877b1e2.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
   
   
   
   <title></title>
</head>
<body>


f
<!-- left side navbar -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div class="rightnav">
  <div class="Container-fluid" id="resultwindow">
    <fieldset class="form-group">
      <form method="POST" action="process_personal.php">
      <label>Amount</label>

      <select class="form-control" style="font-family:'FontAwesome'; width:15%;">
      <option value="fa-inr">&#xf156;</option>
      <option value="fa-eur">&#xf153;</option>
      <option value="fa-krw">&#xf159;</option>
      <option value="fa-rub">&#xf158;</option>
      <option value="fa-try">&#xf195;</option>
      <option value="fa-jpy">&#xf157;</option>
      <option value="fa-gbp">&#xf154;</option>
      <option value="fa-usd">&#xf155;</option>
      <option value="fa-ils">&#xf20b;</option>
      <option value="fa-gg" >&#xf260;</option>
      </select>
      <input type="number" class="form-control" name="amt" placeholder="Add Amount" style="float:right; width:83%;margin-top: -44px">
      <br>
      
      <label>Type Of Expenses</label><br>
      <select name="tp" class="form-control" style="width:50%">
        <option>Household</option>
        <option>Entertainment</option>
        <option>Medical</option>
        <option>Education</option>
        <option>Donation</option>
        <option>Investment</option>
      </select>
      <br>

      <label style="float:right; margin-top: -103px; margin-right:223px;">Date</label>
      <input type="date" name="dt">
      
      <label>Description</label>
      <textarea name="dscp" class="form-control" style="height:150px " placeholder="Describe your expense here!"></textarea><br>
      
      <button type="submit" class="btn btn-sm btn-success" id="add"><font style="font-size:25px">Add &nbsp;<i class="fa fa-plus-circle" aria-hidden="true"></i></font></button>
      </form>

      <button type="submit" class="btn btn-danger btn-sm" style="margin-left:510px; margin-top: -58px;"><font style="font-size:25px">Cancel &nbsp;<i class="fa fa-times" aria-hidden="true"></i></font></button>

      </fieldset>
    </div>
</div>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

<div id="main">
   <!-- creating upper navbar -->
   <div id='cssmenu' style="position: fixed;top:0px; width:100%" >
      <ul>
         <li><a><span class="glyphicon glyphicon-list" onclick="openNav()" style="cursor: pointer;"></span></a></li>
         <li><a href="splitmoney1.html"> Home</a></li>
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
   


   <!--forming a selection window-->
   <div class="conatiner">
      <div class="col-md-6">
        <div style="background: url(expense.jpg); width:200px;height:200px;" onclick="openRightNav()" style="cursor:pointer;"></div>
        <label>Add Expense</label>
      </div>
      <div class="col-md-6"></div>
      <div class="col-md-6"></div>
      <div class="col-md-6"></div>
   </div>
</div>

<!-- 
setting up the snack bar -->

<div id="snackbar"><b>Success!</b> Your Expenses has been updated successfully</div>

<style>

#snackbar {
    visibility: hidden; 
    min-width: 250px; 
    margin-left: -125px; 
    background-color: #333; 
    color: #fff; 
    text-align: center; 
    border-radius: 2px; 
    padding: 16px; 
    position: fixed; 
    z-index: 1; 
    left: 50%; 
    bottom: 30px; 
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
    visibility: visible; /* Show the snackbar */

/* Add animation: Take 0.5 seconds to fade in and out the snackbar. 
However, delay the fade out process for 2.5 seconds */
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {
      bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>


<!-- forming a graph window -->


<script type="text/javascript" src="splitmoney_ajax.js"></script>
</body>
</html>

