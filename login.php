 <?php

 session_start();

 if(isset($_SESSION['username']))
{
  header("location:home1.php?error=you must.login first");
}
?>
<html>
<head>
<title> webpage</title>
<style>
body{

 background-color: black;
 background-image: url('3.jpg');
 background-position: 1px 1px;
 
  }
 form{
  min-height: 100px;
   max-width: 350px;
  border: 1px solid black;
  margin: 120px 0 0 450px;
  font-size: 22px;
  padding-top: 10px;
   background-color:white;
  padding-left:70px;
    }
	input:not([type="radio"]){
	height: 30px;
	width: 150px;
    border: 1px solid;
    margin: 10px;
    padding-left: 2px;
	
	border-top: 1px;
    border-radius: 20px;
	}
	
	button:hover{
	background-color: #FF7300;
	height: 20px;
	}
	input:focus{ border-bottom:3px solid;
	}
	
	button{
	margin: 30px;
	height: 25px;
	width: 200px;
	border-radius: 10px;
	
	}
 </style>
</head>
<body>

<form action="loginprint.php" method="post" style="border:1px  #FF7300;"> <br>

  <span style="color:#FF7300">
    <?php 
  if(!empty($_GET['error']))
    echo $_GET['error'];
  ?><br>
    </span>
   &nbsp &nbsp EMAIL: &nbsp &nbsp <input type="text" name="email"><br><br>
   
   PASSWORD:<input type="password" name="password" ><br><br>
   
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button type="Submit" name="Submit">login</button>

</body>
</html>