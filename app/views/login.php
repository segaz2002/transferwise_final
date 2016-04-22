
<form action="/CodeIgnite/login/" method="POSt">

	<h3><?php echo $message; ?></h3>

	Name<br>
	<input type="text" name="user" value="<?php echo $name?>" /><br>

	Password<br>
	<input type="password" name="password" /><br>

	<input type="submit" />
</form>