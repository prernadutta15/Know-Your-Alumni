

	<?php
$connection=mysqli_connect("localhost","root","","alumni");
	//$db=mysqli_select_db("alumni",$connection);
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
$year=$_POST['year'];
$last_course=$_POST['last_course'];
$job_ex=$_POST['job_ex'];
$com1=$_POST['com1'];
$com2=$_POST['com2'];
$com3=$_POST['com3'];
$com4=$_POST['com4'];
$com5=$_POST['com5'];
$job1=$_POST['job1'];
$job2=$_POST['job2'];
$job3=$_POST['job3'];
$job4=$_POST['job4'];
$job5=$_POST['job5'];
$pic=$_POST['pic'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$contact=$_POST['contact'];
$message=$_POST['message'];
	
	if(!empty($name) || !empty($year) || !empty($last_course) || !empty($job_ex) || !empty($email) || !empty($pass) || !empty($contact))
	{
		$query=mysqli_query($connection,"insert into alumni_signup(name, year, last_course, job_ex,com1,com2,com3,com4,com5,job1,job2,job3,job4,job5,pic,email,pass,contact,message) values('$name', '$year', '$last_course', '$job_ex','$com1','$com2','$com3','$com4','$com5','$job1','$job2','$job3','$job4','$job5','$pic','$email','$pass','$contact','$message')");
		echo "Data inserted";
	}
	else
	{
		echo "Insertion failed!";
	}
	}
	mysqli_close($connection);
?>

