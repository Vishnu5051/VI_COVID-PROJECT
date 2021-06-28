
        
    <!DOCTYPE html>
<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style_userpage.css">
</head>
<body>
<div class="container">
<h1>LOGIN</h1>  
<?php 
		
		
	if(isset($_SESSION['errorMsg'] ))
	{
	   	         echo  $_SESSION['errorMsg'];
				echo "<div class='error-msg'>";
				echo $_SESSION['errorMsg'];
				echo "</div>";
				unset($_SESSION['errorMsg']);
	}
			 if(isset($_GET['logout'])) 
			{
				echo "<div class='success-msg'>";
				echo "You have successfully logout";
				echo "</div>";
				
			}
		
			
		?>
     <form action="login_process.php" method="post">

          
        <div class="field-container">
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
		</div>
        <div class="field-container">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br> 
		</div>
        <div class="field-container">
        <button type="submit" name="login">Login</button>
        </div>
     </form>
</div>
</body>

</html>