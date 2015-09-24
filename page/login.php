<?php
	
	// LOGIN.PHP
	
	// errori muutujad peavad igal juhul olemas olema 
	$email_error = "";
	$password_error = "";
	$name_error = "";
	$login_error = "";
	
	// kontrollime et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "ktonibuty nazhimal knopku";
		//CREATE LOG ===========================================================================
		//proverka pochty pustoy ili net
		if ( empty($_POST["email"]) ) {
			$email_error = "on vaja";
		}
		
		//proverka porolya, pustoi ili net
		if ( empty($_POST["password"])) {
			$password_error = "on vaja";
		} 
		
			} elseif(isset($_POST["create"])){
		
			//CREATE NUPP ======================================================================
			
			// kas NIMI on tühi
			if( empty($_POST["name"]) ) {
				
				// jah oli tühi
				$name_error = "on vaja";
			}
			//mnogo error, error net.
			if($name_error = ""){
				echo "salvestan abi ".$name;
			}	
		}
?>


<?php
	$page_title = "logi sisse";
	$file_name = "login.php";
?>



<?php require_once("../header.php"); ?>
		<h2>Log in</h2>
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
			<input type="submit" value="Log in">
		</form> 
	
		<h2>Create user</h2>
		<form action="login.php" method="post">
			<input name="name" type="text" placeholder="eesnimi" > <?php echo $name_error; ?><br><br>
			<input name="second name" type="text" placeholder="perekonnanim" > <?php echo $name_error; ?><br><br>
			<input name="login" type="login" placeholder="login" > <?php echo $login_error; ?><br><br>
			<input name="password" type="password" placeholder="pass" > <?php echo $password_error; ?><br><br>
			<input name="email" type="email" placeholder="email" > <?php echo $email_error; ?><br><br>
			<input name="create" type="submit" value="create user" > <br><br>
		</form>
<?php require_once("../footer.php"); ?>