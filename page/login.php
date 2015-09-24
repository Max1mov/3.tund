<style>
.error {color: #FF0000;}
</style>

<?php
	
	// LOGIN.PHP
	
	// errori muutujad peavad igal juhul olemas olema 
	$email_error = "";
	$password_error = "";
	$name_error = "";
	$reglog_error = "";
	$lastname_error = "";
	$regpassword_error = "";
	$regemail_error = "";
	
	// kontrollime et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "ktonibuty nazhimal knopku";
		//CREATE LOG ===========================================================================
		//proverka pochty pustoy ili net
		if (empty($_POST["email"])) {
			$email_error = "e-mail is required";
		}
  }
		//proverka porolya, pustoi ili net
		if ( empty($_POST["password"])) {
			$password_error = "password is required";
		} 
		
			 if(isset($_POST["create"])){
		
			//CREATE NUPP ======================================================================
			
				// kas NIMI on tühi
				if( empty($_POST["name"]) ) {
				// registre name on tühi
				$name_error = "Name is required";
			}
					if( empty($_POST["lastname"]) ) {
					// lastname on tühi
					$lastname_error = "perekonnanimi is required";
			}
						if( empty($_POST["login"]) ) {
						// login on tühi
						$reglog_error = "login is required";
			}
							if( empty($_POST["regpassword"]) ) {
							// reg pass on tühi
							$regpassword_error = "password is required";
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
			<input name="lastname" type="text" placeholder="perekonnanim" > <?php echo $lastname_error; ?><br><br>
			<input name="reglog" type="text" placeholder="login" > <?php echo $reglog_error; ?><br><br>
			<input name="regpassword" type="password" placeholder="passi" > <?php echo $regpassword_error; ?><br><br>
			<input name="regemail" type="email" placeholder="email" > <?php echo $regemail_error; ?><br><br>
			<input name="create" type="submit" value="create user" > <br><br>
			<textarea name="comment" rows="5" cols="40"></textarea>
			kas teil meeldib?<input type="radio" name="gender" value="female">jah	
			<input type="radio" name="gender" value="male">Ei
		</form>
<?php require_once("../footer.php"); ?>