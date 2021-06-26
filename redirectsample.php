<html>
<body>
<h1>Hello</h1>
<?php
if(array_key_exists('button1', $_POST))
{
	button1();
}
	function button1()
	{
     header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

 ?>
 <form method="post">
        <input type="submit" name="button1"
                class="button" value="Button1" />
    </form>
</body>
</html>