<html>
<head></head>
<script>  
function verifyPassword() {  
  var pw = document.getElementById("pass1").value;  
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  //maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  }  

var pw1 = document.getElementById("pass1");  
  var pw2 = document.getElementById("con_pass");  
  if(pw1.value!= pw2.value)  
  {   
    alert("Passwords did not match");  
	return false; 
  } else {  
    alert("Password created successfully");  
  }  
}
</script>  

<body>
<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "covid";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$q="select * from c_login";

if (!$conn) {

    echo "Connection failed!";

}

?>

<center>
<p color="#ff3300"><h1 align="center" >Employee Login Details</h1></p>
<form action = "registrationprocess.php" method = "POST" onsubmit ="return verifyPassword()">
  
Username:</br> <input type = "text" name = "name"  /></br>
Password: </br><input type = "password" id = "pass1" name="pass"  /></br>
Confirm Password:</br> <input type = "password" id = "con_pass" /></br>
<!--<button type ="submit" />Submit</button>-->
<input type="submit" value="Submit">
<!--<button type="submit" name="button1" " id="save"  value="Button1"/></button>-->
  <span id = "message" style="color:red"> </span> <br><br>               
</form>

</center?

<?php /* 
if(isset($_POST['button1'])) {
	echo "in the func";
$conn=mysqli_connect("localhost","root","","covid");
$q="select * from covid";
$result=mysqli_query($conn,$q);
if (mysqli_num_rows($result) > 0) 
{
$d=	"select max(id) from covid";
$str="select RIGHT(name,2) from covid";
$max_id=$d+intval($str);
echo $max_id;
}
}
*/?>
<?php

?>

</body>
</html>	

