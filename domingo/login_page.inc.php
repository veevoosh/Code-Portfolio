<form action="login.php" method="post"> 
	<p>
		<label class="register-label" for="email">Email Address: &nbsp; </label>
		<input type="email" class="email" name="email" size="30" maxlength="50" value="<?php if (isset($_POST['email'])) echo $_POST['email']?>">
	</p>
	<p>
		<label class="register-label" for="psword">Password: &nbsp; </label>
		<input type="password" class="psword1" name="psword" size="30" maxlength="40" value="<?php if (isset($_POST['psword1'])) echo $_POST['psword1']?>">
	</p>
	<p><input type="submit" class="register-submit" name="submit" value="Login!"></p>
</form>
	<br />