<!DOCTYPE html>
<html>
<head>
	<title>Remove staff</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div  class="jumbotron" class="container" style="background:url('images/3.jpeg') no-repeat; background-size: cover; height: 400px;margin-top:40px ">

	</div>
	<div class="container" style="margin-bottom: 20px;">
		<div class="card">
			<div class="card-header" style="background-color:#3498DB; color:#ffffff;">
				<h3>Removing staff</h3>
			</div>
			<div class="card-body" style="margin-bottom: 20px">
				<form class="form-group" method="post" action="ss.php">
					<label>First Name:</label>
					<input type="text" name="fname" class="form-control"> <br>
					<label>Last Name :</label>
					<input type="text" name="lname" class="form-control"><br>
					<label>Highest Degree</label>
					<input type="text" name="degree" class="form-control"><br>
					<label>Specializtion</label>
					<input type="text" name="special" class="form-control"><br>
					<input type="submit" name="staff_remove" value="Submit" class="btn btn-primary">

				</form>
				
			</div>
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.0/d3.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>