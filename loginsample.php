<form action="custsave.php" onsubmit= "return validation()" name="form1" method="post">
   <table align="center" width="50%">
   <tr>	<th>Customer ID   	:</th>
	<th><input type="text" id="cname" name="cname" size="20"/></th>
   </tr>
   <tr>	<th>Customer Name</th>
	<th> <input type="text" id="cpass" name="cpass" size="20"/></th>
   </tr>
   <tr>	<th> <input type="Submit" value ="Save"> </th>
	<th> <input type="Reset"></th>
   </tr>
   </table>
</form>

<script>
function vaidation()
{
var cnam=document.form1.cname.value;
var cpas=document.form1.cpass.value;
if(cnam.length== "" || cpas.length=="")
{
alert("fields can not be empty");
return false;
}
}

</script>