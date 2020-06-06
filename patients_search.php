<!DOCTYPE html>

<html>
<head>
	<title>patients details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php 

include('ss.php');
if(isset($_POST['patients_search_submit']))
{


	$contact=$_POST['search'];
	$query="select * from doctorapp where contact='$contact'";


$result=mysqli_query($con,$query);
echo "
<div class='container-fluid' style='margin-top:20px;'>
<div class='card'>
<img src='images/3.jpeg' class='card-img-top' style='height:400px;'>
<div class='card-body' style='background-color:#3498DB; color:#ffffff;'>
<table class='table table-hover'>
  <thead>
    <tr>
      
      <th >First Name</th>
      <th >Last  Name</th>
      <th >Email id</th>
      <th >Contact</th>
      <th >Doctor Appoitment</th>
    </tr>
  </thead>
  <tbody>";
while ($row=mysqli_fetch_array($result)) {


		$fname=$row['fname'];
		$lname=$row['lname'];
		$email=$row['email'];
		$contact=$row['contact'];
		$docapp=$row['docapp'];
		echo "<tr>
		<td>$fname</td>
		<td>$lname</td>
		<td>$email</td>
		<td>$contact</td>
		<td>$docapp</td>
		</tr>

		";
}
echo "
</tbody>
</table>
</div>
</div>
</div>";
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.0/d3.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>