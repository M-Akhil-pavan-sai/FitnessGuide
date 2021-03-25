<?php
session_start();
?>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FitnessGuide/Login Page</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="LoginPageCss.css">
  <style>
      .center {
      margin: auto;
      width: 60%;
      border: 3px solid grey;
      padding: 10px;
      }
      .mid
      {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 40%;
      }
    </style>
    <script type="text/javascript">
      function validateform()
      {  
      var name=document.form.username.value;  
      var password=document.form.password.value;  
  
      if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
      }else if(password.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
        }  
      }  
    </script>
  <script type="text/javascript" src="index.js">
  </script>
</head>
<body>
  <div class="form">
  <p>Login</p>
  <form action="verify.php"  method="post" name="form" onsubmit="validateform()">
    <input type="text" id="username" name="username" placeholder="Username or EmailId">
    <input type="password" id="password" name="password" placeholder="Password">
    <input type="submit" name="submit" id="log" value="Login" onclick="handleSubmit()">
    <p class="message">Not registered yet? <a href="SignupPage.php">Create an account</a></p>
  </form>
  </div>
</body>

</html>