<?php
session_start();
$Username=$_COOKIE['U'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginpage";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT EmailId, Password, Name,BMI FROM logindetails where EmailId='$Username'";
$result = $conn->query($sql);
$x="";

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc())
  {
    $x=$row["BMI"];
  }
} 
else {
  echo "0 results";
}
$variable2=$x;
$variable2 = array_map('intval', explode(',', $variable2));
$variable2 = $variable2[count($variable2)-1];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FitnessGuide/Workouts & Programs Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
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
    </style>

    
    <link href="Workouts & programsCss.css" rel="stylesheet">
    <script type="text/javascript">
      function Dfunction2(){
          <?php
            echo "var y2= '$variable2';";
          ?>
          if(y2<18.5){
            document.getElementById("HighW").id="DT";
              document.getElementById("NormalW").id="DT";
          }
          else if(y2>18.5&&y2<24.9){
            document.getElementById("HighW").id="DT";
              document.getElementById("LowW").id="DT";
         }
          else if(y2>24.9){
            document.getElementById("LowW").id="DT";
              document.getElementById("NormalW").id="DT";
          }
    }
    </script> 
  </head>
  <body onload="Dfunction2()">
    
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
<h1>EXCERCISE VIDEOS</h1>
<section id="LowW">
<h2>Workouts For Low BMI</h2>
<div>
<a href="LLevel1.php" target="_blank"><img src="images4k/Level-1.png" alt="N-BMI-L1"></a>
<h6><a href="LLevel1.php" target="_blank">Level 1</a></h6>
</div>
<div>
<a href="LLevel2.php" target="_blank"><img src="images4k/Level-2.png" alt="N-BMI-L2" ></a>
<h6><a href="LLevel2.php" target="_blank">Level 2</a></h6>
</div>
<div>
<a href="LLevel3.php" target="_blank"><img src="images4k/Level-3.png" alt="N-BMI-L3" ></a>
<h6><a href="LLevel3.php" target="_blank">Level 3</a></h6>
</div>
<div>
<a href="LLevel4.php" target="_blank"><img src="images4k/Level-4.png" alt="N-BMI-L4"></a>
<h6><a href="LLevel4.php" target="_blank">Level 4</a></h6>
</div>
</section>

<section id="NormalW">
<h2>Workouts For Normal BMI</h2>
<div>
<a href="NLevel1.php" target="_blank"><img src="images4k/Level-1.png" alt="N-BMI-L1"></a>
<h6><a href="NLevel1.php" target="_blank">Level 1</a></h6>
</div>
<div>
<a href="NLevel2.php" target="_blank"><img src="images4k/Level-2.png" alt="N-BMI-L2" ></a>
<h6><a href="NLevel2.php" target="_blank">Level 2</a></h6>
</div>
<div>
<a href="NLevel3.php" target="_blank"><img src="images4k/Level-3.png" alt="N-BMI-L3" ></a>
<h6><a href="NLevel3.php" target="_blank">Level 3</a></h6>
</div>
<div>
<a href="NLevel4.php" target="_blank"><img src="images4k/Level-4.png" alt="N-BMI-L4"></a>
<h6><a href="NLevel4.php" target="_blank">Level 4</a></h6>
</div>
</section>

<section id="HighW">
<h2>Workouts For BMI>23</h2>
<div>
<a href="HLevel1.php" target="_blank"><img src="images4k/Level-1.png" alt="N-BMI-L1"></a>
<h6><a href="HLevel1.php" target="_blank">Level 1</a></h6>
</div>
<div>
<a href="HLevel2.php" target="_blank"><img src="images4k/Level-2.png" alt="N-BMI-L2" ></a>
<h6><a href="HLevel2.php" target="_blank">Level 2</a></h6>
</div>
<div>
<a href="HLevel3.php" target="_blank"><img src="images4k/Level-3.png" alt="N-BMI-L3" ></a>
<h6><a href="HLevel3.php" target="_blank">Level 3</a></h6>
</div>
<div>
<a href="HLevel4.php" target="_blank"><img src="images4k/Level-4.png" alt="N-BMI-L4"></a>
<h6><a href="HLevel4.php" target="_blank">Level 4</a></h6>
</div>
</section>
<section>
  <h2>Challenge</h2>
  <div id="Ch">
    <a href="challenge.php" target="_blank"><img src="images4k/21DC.jpg" ></a>
  </div>
</section>
</body>
</html>


