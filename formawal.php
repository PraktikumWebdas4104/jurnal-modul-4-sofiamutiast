<?php 

	session_start();
	error_reporting();

		$user = array('user' => "sofiamutiast" ,
						'pass' => "6701174062" );

		if (isset($_POST['submit'])) {
			if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']) {


				$_SESSION["username"] = $_POST["username"];

				echo "Anda Berhasil Login $_POST[username], Silahkan Klik disini <a href='proses.php'> klik disini </a>";
				# code...
			} else {
				display_login_form();
				echo "<p> Username atau Password Anda Salah</p>";
				# code...
			}
			
			
			# code...
		} else {
			display_login_form();
			# code...
		}

		function display_login_form(){ ?>

			<h1> LOGIN </h1>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
				<label for="username"> username </label>
				<input type="text" name="username" id="username"> <br><br>
				<label for="password"> password </label>
				<input type="password" name="password" id="password"><br><br>

				<input type="submit" name="submit" value="submit">


			</form>




		
		


 <?php }  ?>
