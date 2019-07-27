<html>
<head>
<title> webpage</title>
<style>
body{

 background-color: white;
 background-image: url('3.jpg');
 background-position: 1px 1px;
 
  }
 form{
  min-height: 40px;
   max-width: 400px;
  border: 1px solid black;
  margin: 100px 0 0 280px;
  font-size: 20px;
  padding-top: 100px;
   background-color: white;
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
	background-color: green;
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
<body>
<form action="formdata.php" method="post" style="border:1px  black; "><br>

  <span style="color:red">
    <?php 
  if(!empty($_GET['error']))
    echo $_GET['error'];
  ?><br>
    </span>
   USERNAME:<input type="text" name="username"><br> <br>
   PASSWORD:<input type="password" name="password" ><br><br>
   CONF_PASSWORD:<input type="password" name="conf_password" ><br>
   &nbsp&nbsp EMAIL:<input type="text" name="email"><br><br>
   DOB:<input type="date" name="DOB"><br>
   gender<input type="radio" name="gender" value="male">male
   <input type="radio" name="gender" value="female">female
   <input type="radio" name="gender" value="other">other<br><br>


 
  &nbsp &nbsp &nbsp <button type="Submit" name="Submit">Submit</button>

</body>
</html>