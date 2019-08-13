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
  min-height: 100px;
   max-width: 400px;
  border: 1px solid black;
  margin: 100px 0 0 480px;
  font-size: 22px;
  padding-top: 10px;
   background-color: white;
  padding-left:50px;
    }
	input:not([type="radio"]){
	height: 20px;
	width: 150px;
    border-radius: 10px;
    margin: 10px;
    padding-left: 10px;
	
	border-top: 1px;
    border-bottom: 1px solid;
	}
	
	button:hover{
	background-color: #FF7300;
	height: 20px;
	}
	input:focus{ border-bottom:3px solid;
	}
	
	button{
	margin:30px;
	height: 20px;
	width: 150px;
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
   CONF_PASSWORD:<input type="password" name="conf_password" ><br><br>
   EMAIL:<input type="text" name="email"><br><br>
   DOB:<input type="date" name="DOB"><br><br>
   GENDER &nbsp<input type="radio" name="gender" value="male">male &nbsp
   <input type="radio" name="gender" value="female">female &nbsp<br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <input type="radio" name="gender" value="other">other<br><br>
     


 
  &nbsp &nbsp &nbsp <button type="Submit" name="Submit">Submit</button>

</body>
</html>