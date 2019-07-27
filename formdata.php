<?php
include 'dbconnection.php';
if(isset($_POST['Submit']))
{
	$username = check($_POST['username']);
	$password = check($_POST['password']);
	$email = check($_POST['email']);
	$conf_password = check($_POST['conf_password']);
	$DOB = check($_POST['DOB']);
	$gender = $_POST['gender'];
	$hashpassword = password_hash($password, PASSWORD_DEFAULT);
	/*echo "username:".$username."email:".$email."password:".$password."conf_password:".$conf_password."gender:".$gender."DOB:".$DOB;*/
     if(empty($username) || empty($email) || empty($password) || empty($conf_password) || empty($DOB) || empty($gender))
	{
		header("location:sinup.php?error=all Fields are required");

	}
	else
	{
		if($password != $conf_password)
	{
		header("location:sinup.php?error=password do not match");
	}
	else
	{   
		$expression = "/^([a-zA-Z0-90*#]{8,15})$/";
		if(!preg_match($expression,$password))
		{
			header("location:sinup.php?error=password must be alphanumeric with minimum 8 characters");

		}
		 else
   {
   	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
   	{
   		header("location:sinup.php?error=email not valid");
   	}
   	else
   	{    $emailcheck = "SELECT * from sinup WHERE email = '$email'";
         $result = mysqli_query($conn,$emailcheck);
         if(mysqli_num_rows($result)> 0)
         {
         	header("location:sinup.php?error=email  already registred");
         }
         else
         {

   		 $sql = "INSERT into sinup (username,email,password,dob,gender) VALUES('$username','$email','$hashpassword','$DOB','$gender');";
   		 if(!mysqli_query($conn,$sql))
   		 {
   		 	header("location:sinup.php?error=Signup Error");
   		 } 
   		 else
   		 {
   		 	header("location:sinup.php?error=Signup Success");
   		}
   	}
   }
}

}
}
	
}
	else
{
	header("location:sinup.php");
}
function check($data)
{

       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

?>