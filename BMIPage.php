<?php
session_start();
if(isset($_GET['user']))
{
  $Username=$_GET['user'];
  echo "<script>var x = '$Username'</script>";
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FitnessGuide/BMI Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .BMICalculator h1{
        margin: 20px;
        margin-top: 0px;
        padding-top:5px;
        color:black;
        text-align: center;

      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .center {
      margin: auto;
      width: 60%;
      border: 3px solid #73AD21;
      padding: 10px;
      }
      .mid
      {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 40%;
      }
      table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
    </style>
    <link href="HomePageCss.css" rel="stylesheet">

    <script type="text/javascript" src="BMIPage.js"></script>

  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="HomePage.php">FitnessGuide</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item" >
            <a class="nav-link" href="BMIPage.php">BMI Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ProfileandAnalysis.php">Profile & Analysis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Workouts & Programs.php">Workouts & Programs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Diet.php">Diet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Signout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="BMICalculator" >
<h1>BMI CALCULATOR</h1>
<form action="end.php" method="post" class="center" style="background-color: rgb(211,211,211); color: black;">
  <label for="height" class="mid">Height:</label>
  <input type="text" id="height" name="Height" class="mid" placeholder="in meters (or) in feet"><br>
  <label for="weight" class="mid">Weight:</label>
  <input type="text" id="weight" name="Weight" class="mid" placeholder="in kilograms (or) in pounds"><br>
  <p class="mid">Please select the Units:</p>
  <div class="mid">
  <input type="radio" id="si" name="units" value="SIunits">
  <label for="siunit">SI Unit</label><br>
  </div>
  <div class="mid">
  <input type="radio" id="us" name="units" value="USunits"> 
  <label for="us">US Unit</label><br>
  </div><br/>
  <label for="Age" class="mid">Age (between 2 and 120):</label>
  <input type="number" id="age" name="Age" min="2" max="120" class="mid"><br/>
  <button class="mid" id="clear" onclick="myFunction1(parseFloat(document.getElementById('height').value),parseFloat(document.getElementById('weight').value)); return false;">Result</button><br/>
  <button class="mid" id="clear" onclick="myFunction2();return false;">Clear</button><br/>
  <input type="submit" name="submit" id="log" class="mid" value="Reflect in my Progress" />
  <br/>
  <p id="res" name="res" class="mid" style="background-color: green; color: white;">Your BMI : </p>
  <!-- <a href="Diet.php" id="o" class="mid" style="text-decoration: none;color: black;">Your Diet plan</a>
  <a href="Workouts & Programs.php" id="o2" class="mid" style="text-decoration: none;color: black;">Your Workout plan</a> -->
</form>
</div>  


<div >
  <br/><h1 align="center">BMI Chart</h1>
  <img src="images4k/bmi1.jpg" class="mid">
</div><br/><br/>

<hr>
<div>
  <ul style="list-style-type:disc;">
  <h1 style="color: black;color: #fff;
    background-color: #8eb03b;
    height: 50px;
    font-weight: 100;
    padding-left: 5px;
    padding-top: 2px;
    border-radius: 5px;
    margin-bottom: 1%;
    padding-bottom: 60px;">Risks associated with being overweight</h1>
  <p><b>Being overweight increases the risk of a number of serious diseases and health conditions. Below is a list of said risks, according to the Centers for Disease Control and Prevention (CDC):</b><br/><br/>
    <img src="images4k/obesity.jpg" class="mid" width="300" height="350">

<li id="ak" name="ak">High blood pressure</li>
<li>Higher levels of LDL cholesterol, which is widely considered "bad cholesterol," lower levels of HDL cholesterol, considered to be good cholesterol in moderation, and high levels of triglycerides</li>
<li>Type II diabetes</li>
<li>Coronary heart disease</li>
<li>Stroke</li>
<li>Gallbladder disease</li>
<li>Osteoarthritis, a type of joint disease caused by breakdown of joint cartilage</li>
<li>Sleep apnea and breathing problems</li>
<li>Certain cancers (endometrial, breast, colon, kidney, gallbladder, liver)</li>
<li>Low quality of life</li>
<li>Mental illnesses such as clinical depression, anxiety, and others</li>
<li>Body pains and difficulty with certain physical functions</li>
<li>Generally, an increased risk of mortality compared to those with a healthy BMI</li>
As can be seen from the list above, there are numerous negative, in some cases fatal, outcomes that may result from being overweight. Generally, a person should try to maintain a BMI below 25 kg/m2, but ideally should consult their doctor to determine whether or not they need to make any changes to their lifestyle in order to be healthier.
</ul>
</p>
</div><br/>
<div>
  <ul style="list-style-type:disc;">
  <h1 style="color: black;color: #fff;
    background-color: #8eb03b;
    height: 50px;
    font-weight: 100;
    padding-left: 5px;
    padding-top: 2px;
    border-radius: 5px;
    margin-bottom: 1%;
    padding-bottom: 60px;">Risks associated with being underweight</h1>
  <p><b>Being underweight has its own associated risks, listed below:</b><br/><br/>
  <img src="images4k/underweight.jpg" class="mid" width="200" height="350">

<li>Malnutrition, vitamin deficiencies, anemia (lowered ability to carry blood vessels)</li>
<li>Osteoporosis, a disease that causes bone weakness, increasing the risk of breaking a bone</li>
<li>A decrease in immune function</li>
<li>Growth and development issues, particularly in children and teenagers</li>
<li>Possible reproductive issues for women due to hormonal imbalances that can disrupt the menstrual cycle. </li><li>Underweight women also have a higher chance of miscarriage in the first trimester</li>
<li>Potential complications as a result of surgery</li>
<li>Generally, an increased risk of mortality compared to those with a healthy BMI</li>
In some cases, being underweight can be a sign of some underlying condition or disease such as anorexia nervosa, which has its own risks. Consult your doctor if you think you or someone you know is underweight, particularly if the reason for being underweight does not seem obvious.
</ul>
</p>
</div>



</body>
</html>
