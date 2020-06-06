<?php
$con=mysqli_connect("localhost","root","","hmsdb");

if(isset($_POST['login_submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from logintb where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	header("Location:adminpanel.html");
}

else
{
	echo "<script> alert('Enter correct details'); </script>";

	echo "<script>window.open('index.html','_self')</script>";

}

}

if(isset($_POST['pat_submit']))
{

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$query1="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";

	$result1=mysqli_query($con,$query1);

	if($result1)
	{

		echo "<script> alert('Appointment booked'); </script>";
		echo "<script>window.open('adminpanel.html','_self')</script>";
	}
}

if(isset($_POST['staff_submit']))
{
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$Salary=$_POST['Salary'];
			$degree=$_POST['degree'];
			$specialzation=$_POST['special'];
			$query3="insert into staff(Fname,Lname,Salary,Highestdegree,Specialization)values('$fname','$lname','$Salary','$degree','$specialzation')";
			$result3=mysqli_query($con,$query3);
			if($result3)
			{
				echo "<script> alert('Staff Added'); </script>";
				echo "<script>window.open('addnewstaff.php','_self')</script>";
			}
}
if(isset($_POST['staff_remove']))
{
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$degree=$_POST['degree'];
			$specialzation=$_POST['special'];
			$query5="delete from staff where Fname='$fname' and Lname='$lname' and Highestdegree='$degree' and Specialization='$specialzation'";
			$result5=mysqli_query($con,$query5);
			if($result5)
			{
				echo "<script> alert('Staff Removed'); </script>";	
				echo "<script>window.open('admin-panel.php','_self')</script>";
			}
}
if(isset($_POST['pay_submit']))
{

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$payment=$_POST['amount'];
	$query6="insert into payment(fname,lname,email,contact,doctor,payment)values('$fname','$lname','$email','$contact','$docapp','$payment')";
	$result6=mysqli_query($con,$query6);
	if($result6)
	{
		echo "<script> alert('Patient Payment Done'); </script>";
		$query7="delete from doctorapp where fname='$fname' and lname='$lname' and  email='$email'";
		$result7=mysqli_query($con,$query7);
		if($result7)
		{
				echo "<script> alert('Patient Removed from doctor database'); </script>";
					echo "<script>window.open('admin-panel.php','_self')</script>";
		}
	}
	}
function get_patients_details()
{
	global $con;
	$query2="select * from doctorapp";
	$result2=mysqli_query($con,$query2);

	while($row=mysqli_fetch_array($result2))
	{

		$fname=$row['fname'];
		$lname=$row['lname'];
		$email=$row['email'];
		$contact=$row['contact'];
		$docapp=$row['docapp'];
		echo "			<tr>	<td> $fname </td>
				<td> $lname </td>
				<td> $email </td>
				<td> $contact </td>
				<td> $docapp </td>
				</tr> ";	}
	
}
function get_staff_details()
{
global $con;
$query4="select * from staff";
$result4=mysqli_query($con,$query4);

while ($row=mysqli_fetch_array($result4)) {
			$fname=$row['Fname'];
			$lname=$row['Lname'];
			$Salary=$row['Salary'];
			$degree=$row['Highestdegree'];
			$specialzation=$row['Specialization'];
			echo "<tr>	<td> $fname </td>
				<td> $lname </td>
				<td> $Salary </td>
				<td> $degree </td>
				<td> $specialzation</td>
				</tr>";
}
}
?>