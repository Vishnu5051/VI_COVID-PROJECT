<?php
require('config.php');
session_start();
		
	if(!isset($_SESSION))
	{
		header('location:index.php');
		exit;
	}
$name=($_POST['full_name']);
$age=($_POST['age']);
$gender=($_POST['gender']);
$a_ward=($_POST['a_ward']);
$a_vill=($_POST['a_vill']);
$a_dist=($_POST['a_dist']);
$a_state=($_POST['a_state']);
$a_pin=($_POST['a_pin']);
$id_no=($_POST['id_no']);
$h_issue=($_POST['h_issue']);
$f_worker=($_POST['f_worker']);
$dt_created=date_create()->format('Y-m-d H:i:s');
$conn=mysqli_connect("localhost","root","","covid");
$sql = "INSERT INTO cdata (full_name,ref_id,age,gender,a_ward,a_vill,a_dist,a_state,a_pin,id_no,h_issue,f_worker,dt_created) VALUES ('$name','$dt_created','$age','$gender','$a_ward','$a_vill','$a_dist','$a_state','$a_pin','$id_no','$h_issue','$f_worker','$dt_created')";

if (mysqli_query($conn, $sql)) 
{
    echo "<p align='center'> <font color=blue  size='6pt'>User details updated successfully !!!</font> </p>";
	// header('Location: ' . $_SERVER['HTTP_REFERER']); 
	header('Location:userhomepage.php']);
 }
 else 
{
	echo "Error: " . $sql . " " . mysqli_error($conn);
	
 }
exit();
      
     
    ?>