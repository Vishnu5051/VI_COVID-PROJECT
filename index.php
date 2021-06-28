<?php 
	require('config.php');
	session_start();
	
	
	if(isset($_POST['submit']))
	{
		if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
		{
			$email =$_POST['email'];
			$password = $_POST['password'];
			$email = $_POST['email'];

			
			$host = 'localhost';
	                $DBUser = "root";
	                $DBPassword = '';
	                $db = 'demo';

	
	$conn = mysqli_connect($host,$DBUser, $DBPassword, $db);
			
			$sql=mysqli_query($conn,"SELECT * FROM users where email='$email' and password='$password'");
             $row  = mysqli_fetch_array($sql);
            if(is_array($row))
			
		    	{
				
				
				
					$_SESSION['user_id'] = $row['id'];
					$_SESSION['first_name'] = $row['first_name'];
					$_SESSION['last_name'] = $row['last_name'];
					
					//echo "<pre>";
					//print_r($_SESSION);
					//echo "</pre>";
					//exit;
					
					header('location:dashboard.php');
					exit;
					
				}
				else
				{
					$errorMsg =  "Wrong Email Or Password";
				}
			}
			else
			{
				$errorMsg =  "No User Found";
			}
		}
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page | PHP Login and logout example with session</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	
	<div class="container">
		<h1>PHP Login and Logout with Session</h1>
		<?php 
			if(isset($errorMsg))
			{
				echo "<div class='error-msg'>";
				echo $errorMsg;
				echo "</div>";
				unset($errorMsg);
			}
			
			if(isset($_GET['logout']))
			{
				echo "<div class='success-msg'>";
				echo "You have successfully logout";
				echo "</div>";
				
			}
			
			
			
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<div class="field-container">
				<label>Email</label>
				<input type="email" name="email" required placeholder="Enter Your Email">
			</div>
			<div class="field-container">
				<label>Password</label>
				<input type="password" name="password" required placeholder="Enter Your Password">
			</div>
			<div class="field-container">
				<button type="submit" name="submit">Submit</button>
			</div>
			
		</form>
	</div>
</body>
</html>