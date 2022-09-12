<?php
$username = $_GET['username'];
$email = $_GET['email'];
$Password = $_GET['Password'];
$cpassword = $_GET['confirmpassword'];

$conn = new mysqli('localhost','root','','signup');
if(isset($_POST['submit']))
{
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword']; 

if($password != $confirmPassword)
echo "Passwords do not match";
}
if($conn->connect_error){
	die('Connection Failed :  '.$conn->connect_error);
}elseif ($Password != $cpassword) {
	echo "<h2>passwords doesn't match</h2>";
	echo "<h2><a href='registration.html'> Back To Registration</a></h2>";
} 
else{
	$stmt = $conn->prepare("INSERT INTO `registration`(`username`, `Email`, `Password`) VALUES (?,?,?)");
	$stmt->bind_param("sss",$username, $email, $Password);
	$output = $stmt->execute();
	echo $output;
	echo "<h2>registration successfully...</h2>";
	echo "<h2><a href='SignIn.html'> Back To Sign In</a></h2>";
	$stmt->close();
	$conn->close();
}
?>