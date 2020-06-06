<!DOCTYPE html>
<?php include('ss.php'); ?>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title> Staff details </title>
</head>
<body>

	 <div class='container-fluid'>
	 	<div class='card'>
	 	<img src='images/3.jpeg' style='height:400px;margin-top: 20px;' >

	 	<div class='card-body'>
	 		<table class='table table-dark'>
	 		<thead>
	 			<tr>
	 				<th>First Name </th>
	 				<th>Last Name </td>
	 				<th>Salary </th>
	 				<th>Degree </th>
	 				<th>Designation </th>
	 			</tr>
	 		</thead>
			<tbody>
					<tr>
					
						<?php get_staff_details(); ?>
					</tr>
				</tbody>
					</table>
				</div>
				</div>
				</div>

<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.0/d3.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
