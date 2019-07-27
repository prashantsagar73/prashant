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

 background-color: white;
 background-image: url('d.jpg');
 background-position: 1px 1px;
 
  }
 form{
  min-height: 40px;
   max-width: 400px;
  border: 1px solid black;
  margin: 100px 0 0 280px;
  font-size: 20px;
  padding-top: 100px;
   background-color: #999;
  padding-left:50px;
    }
	input:not([type="radio"]){
	height: 20px;
	width: 150px;
    border: none;
    margin: 10px;
    padding-left: 1px;
	
	border-top: none;
    border-bottom: solid;
	}
	
	button:hover{
	background-color: red;
	height: 20px;
	}
	input:focus{ border-bottom:3px solid;
	}
	
	button{
	margin: 50px;
	height: 20px;
	width: 100px;
	border-radius: 10px;
	
	}
 </style>
</head>
<body>

<form action="loginbacknd.php" method="post" style="border:1px  black; "><br>

  <span style="color:red">
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