<html>
<head></head>
<body>
<?php


$name=($_POST['uname']);
$pass=($_POST['password']);
if(isset($_POST['login']))
{
   $conn=mysqli_connect("localhost","root","","covid");
   $sql=mysqli_query($conn,"SELECT * FROM c_login where user_name='$name' and password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
			echo "login successful";
		}
    else
    {
        echo "Invalid Email ID/Password";
    }
}
exit();

   

  ?>
   </body>
</html>
	 

