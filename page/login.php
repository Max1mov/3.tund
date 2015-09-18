<html>
<head>
	<title>Login page</title>
</head>
<body>
	
	<h2>Log in</h2>
		<img src="/public_html/kodune/ width="280" height="125" title="Logo of a company" alt="Logo of a company" />
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
			<input type="submit" value="Log in">
		</form>
	
	<h2>Create user</h2>
<?php require_once("../footer.php");