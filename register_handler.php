<?php
require'config.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$duplicate=mysqli_query($conn,"SELECT*FROM register WHERE name='$name'OR email='$email'");
if(mysqli_num_rows($duplicate)>0){
	echo "<script> alert('Name or Email already Taken');</script>";
}
else{
	if ($password==$confirm_password) {
$query = "INSERT INTO register (name, email,username, password,confirm_password) VALUES ('$name', '$email', '$username','$password','$confirm_password')";
 mysqli_query($conn,$query);
			echo "<script> alert('Registration Sucessfull');</script>";
		header("location:detail.php");
}

else{
		echo "<script> alert('Registration Not Sucessfull');</script>";
		header("location:register.php");
	}
}
}

?>