<!DOCTYPE html>
<?php include('ss.php');  ?>
<html>
<head>
	<title>patients details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<div  class="jumbotron" class="container" style="background: url('images/3.jpeg') no-repeat; background-size: cover; height:400px;">

	</div>
<div class="container">

   <div class="card">
	     <div class="card-header" style="background-color:#3498DB; color:#ffffff;">
			Patients Details
	      </div>

		<div class="card-body">
			<div class="row">
	
				<div class="col-md-2"> 

				<button type="button" class="btn btn-primary"><a style="color: white"href="admin-panel.php">Go Back</a></button>
				</div>

				<div class="col-md-2">
	
			        <h3>Patients Details</h3>
				</div>

				<div class="col-md-8">
				  <form class="form-group" action="patients_search.php" method="post">
					<div class="row">
						<div class="col-md-4">	<input type="text" name="search" class="fom-control" placeholder="Enter Name"> </div>
						<div class="col-md-8">	<input type="submit" name="patients_search_submit"  class="fom-control" value="Search"> </div>
					</div>
				  </form>
				</div>
			</div>
		</div>

   <div class="row">
	     <div class="col-md-12">
		       <table class="table">
  			       <thead>
    			       <tr>
      
      				        <th>First Name</th>
      				        <th>Last Name</th>
      				        <th>Email id</th>
      						<th>Contact</th>
      						<th>Doctor Appoitment</th>
    				   </tr>
  				    </thead>
 					<tbody>
    					<tr>
    						
     				 		<?php get_patients_details(); ?>
    					</tr>
   
  					</tbody>
				</table>
		  </div>
     </div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.0/d3.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>