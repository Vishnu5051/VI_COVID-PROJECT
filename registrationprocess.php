<?php
      
        
			session_start();


$name=($_POST['name']);
$pass=($_POST['pass']);

/*$_SESSION["userid"]=isset($uname);

$doneby=isset($_SESSION["useris"]);*/


$conn=mysqli_connect("localhost","root","","covid");


 
$sql = "INSERT INTO c_login (user_name,password) VALUES ('$name','$pass')";

if (mysqli_query($conn, $sql)) 
{
echo "New record saved successfully !";
	header('location:userdetailsentry.php');
 }
 else 
{
	echo "Error: " . $sql . " " . mysqli_error($conn);
	
 }
exit();

        
     
    ?>