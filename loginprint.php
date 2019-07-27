<?php 
include 'dbconnection.php';
session_start();

if(isset($_POST['Submit']))
{
	
	$password = check($_POST['password']);
	$email = check($_POST['email']);
	
	//echo $email."password ".$password;
     if( empty($email) || empty($password))
	{
		header("location:login.php?error=all Fields are required");
	}

	else
	{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			header("location:login.php?error=email not valid");
		}
		else
		{

		 $sql = "SELECT * from sinup where email='$email'";
		 $result = mysqli_query($conn,$sql);
		 if(mysqli_num_rows($result) < 1)
		  {
			header("location:login.php?error=user not registered");
		  }
		 else
		 {
			$data = mysqli_fetch_assoc($result);
			if(!password_verify($password,$data['password']))
			{
				header("location:login.php?error=passwword is wrong");
			}
			else
			{
				$_SESSION['username'] = $data['username'];
				$_SESSION['email'] = $data['email'];
				$_SESSION['gender'] = $data['gender'];
				$_SESSION['dob'] = $data['dob'];
				header("location:------.php");
			}

		 }
	    }
    }
}	

else
{
	header("location:login.php");
}
    function check($data)
   {

       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }



?>
