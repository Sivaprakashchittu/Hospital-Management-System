<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
	<div  class="jumbotron" class="container" style="background:url('images/3.jpeg') no-repeat; background-size: cover; height: 400px; ">

	</div>
	<div class="container">
		<div class="card">
			<div class="card-header" style="background-color:#3498DB; color:#ffffff;">
				<h3>Payment details</h3>
					
				</div>
				<div class="card-body">

					<form class="form-group"   action ="ss.php" method="post">
						
						<label>First Name:</label>

						<input type="text" name="fname" class="form-control"><br>

						<label>Last Name :</label>

						<input type="text" name="lname" class="form-control"><br>
						<label>Email id:</label>
						<input type="text" name="email" class="form-control"><br>
						<label>Contact:</label>
						<input type="text" name="contact" class="form-control"><br>
						<label>Doctor Name</label>
						<select class="form-control" name="docapp">
						<option  value="Dr Sharma from 6pm to 8 pm" > Dr Sharma from 6pm to 8 pm </option>						
						<option  value="Dr Shetty from 4pm to 6 pm " > Dr Shetty from 4pm to 6 pm </option>
						</select><br>

						<label>Bill amount</label>
						<input type="text" name="amount" class="form-control"><br>
						<input type="submit" name="pay_submit" value="submit"  class="btn btn-primary">
					</form>
				  </div>
			</div>
			
		</div>
		
	</div>