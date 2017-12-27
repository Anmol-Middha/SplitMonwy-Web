<!DOCTYPE html>
<html>
<head>
	<title></title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://d3js.org/d3.v4.min.js"></script>
</head>
<body>
	<div class="container">
		<form class="form-group" mehtod="POST" action="splitmoney_personal_showme_process.php">
			<div class="row">
				<div class="col-sm-6">
					<label>From:</label>
					<input class="form-control" type="date" name="fdate">
				</div>
				<div class="col-sm-6">
					<label>To:</label>
					<input class="form-control" type="date" name="tdate">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label>Type:</label>
					<select class="form-control">
						<option>Household</option>
        				<option>Entertainment</option>
        				<option>Medical</option>
        				<option>Education</option>
        				<option>Donation</option>
        				<option>Investment</option>
					</select>
				</div>
				<div class="col-sm-6">
					<label>Sort By:</label>
					<select class="form-control">
						<option>Date</option>
						<option>Amount</option>
					</select>
				</div>
			</div>
			<br>
			<div>
				<center><button class="btn btn-primary">Analyze</button></center>
			</div>
		</form>
	</div>
	<div class="container">
		<table class="table table-responsive" style="width: 100%">
			<tr>
				<th>Date</th>
				<th>Amount</th>
				<th>Type</th>
			</tr>
		</table>
	</div>
</body>
</html>