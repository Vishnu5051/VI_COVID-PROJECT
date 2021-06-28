<html>
<head></head>
<body>
<?php
    require('config.php');
	session_start();

/*$name=($_POST['uname']);
$pass=($_POST['password']);*/
if(isset($_POST['login']))
{
   if((isset($_POST['uname']) && $_POST['uname'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
	{
   $name=($_POST['uname']);
   $pass=($_POST['password']);
   $conn=mysqli_connect("localhost","root","","covid");
   $sql=mysqli_query($conn,"SELECT * FROM c_login where user_name='$name' and password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
			//echo "login successful";
			$_SESSION['name'] = $row['user_name'];
			header('location:userhomepage.php');
			exit();
		}
    else
				{
					session_start();
					$_SESSION['errorMsg'] =  "Wrong Email Or Password";
					   
					header('Location:user_login.php');
					exit();
				}
			}
			else
			{
				$errorMsg =  "No User Found";
			}
}


   

  ?>
   </body>
</html>
	 

