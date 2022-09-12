<?php
	session_start();

	$con =  mysqli_connect("localhost","root","","signup");


	$email = $_POST['Email'];
	$password = $_POST['Password'];

	//fetching db

	$sql = "SELECT `username` FROM `registration` WHERE `Email` = '$email';";
	
	$value = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($value);

	/*echo "$row[username]";*/

	$_SESSION['username'] = $row['username'];

	echo $_SESSION['username'];




	if ($con->connect_error) {
		die("failed to connect : ".$con->connect_error);
			
		}else {
			$stmt = $con->prepare("SELECT * FROM `registration` where Email= ?");
			$stmt->bind_param("s",$email);
			$stmt->execute();
			$stmt_result=$stmt->get_result();
			if ($stmt_result->num_rows > 0) {
				$data = $stmt_result->fetch_assoc();
				if ($data['Password']===$password) {
					echo "<h2>Login Successfully</h2>";
					// $_SESSION['username']=$username;
					?>
					<script>
						location.replace("game1.php")
					</script>
					<?php

				}else {
					echo "<h2> invald Email or Password </h2>";
					echo "<a href='SignIn.html'>Try Again</a>";
					
				}
				
			} else {
				echo "<h2> invald Email or Password </h2>";
				echo "<a href='SignIn.html'>Try Again</a>";
				
			}
		}
?>