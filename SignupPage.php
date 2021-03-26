<?php
session_start();
?>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FitnessGuide/SignUp Page</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="SignupPageCss.css">
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
      var username=document.form.username.value;
      var name=document.form.name.value;  
      var password=document.form.password.value;  
      
      if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
      }
      else if (username==null || username==""){  
      alert("Username can't be blank");  
      return false;  
      }
      else if(password.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
        }  
      }  
    </script>
</head>

<body>
  <div class="form">
  <p>Signup</p>
  <form action="validation.php"  method="post" name="form" onsubmit="return validateform()">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="username" placeholder="Username or EmailId">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" id="log" value="Signup">
    <button><a href="index.php" style="text-decoration: none;color: white;">Back to Login</a></button>
  </form>
  </div>
</body>
</html>