<?php
session_start();
$Username=$_COOKIE['U'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginpage";
echo "<br/>";
echo "<b>Username : </b>";
echo "<b>$Username</b>";
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
setcookie("arrnew",$x,time()+(60*60*24*7*30),"/","","",true);
ini_set('session.cookie_samesite', 'None');
$m=explode('@', $Username)[0];
$conn->close();

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FitnessGuide/Profile & Analysis Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
      padding-top: 3rem;
      padding-bottom: 3rem;
      color: #5a5a5a;
    }
    .center {
      margin: auto;
      width: 60%;
      border: 3px solid #73AD21;
      padding: 10px;
      }
    </style>
    <script type="text/javascript">
  window.onload = function () {
    var var1="https://calendar.google.com/calendar/embed?src=";
    var var3="%40gmail.com&ctz=Asia%2FKolkata";
    <?php
      echo "var var2= '$m';";
    ?>
    console.log(var1+var2+var3);
    document.getElementById("iframegoogle").src=var1+var2+var3; 

    var chart = new CanvasJS.Chart("chartContainer",
    {
      zoomEnabled: true,
      title:{
        text: "X-Axis:Month   Y-Axis:BMI value range" 
      },
      axisX:{
        minimum: 1,
        maximum: 50      
      },
      axisY:{
        minimum:0,
        maximum:40
      },
      data: data       
   });

    chart.render();
  }
       
   var limit = 1000;    
    
    var y = 0;
    var data = []; var dataSeries = { type: "line" };
    var dataPoints = [];
    <?php
    echo "var arraystore= '$x';";
    ?>

    arraystore=arraystore.split`,`.map(x=>+x);
    for(var i=0;i<arraystore.length;i++)
    {
      dataPoints.push({x:i+1,y:arraystore[i]});
    }
    dataSeries.dataPoints = dataPoints;
    data.push(dataSeries);               
  
  </script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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


<br/>
<br/>

<h3 style="text-align: center;color: rgb(50,50,50);"><b>YOUR PROGRESS GRAPH</b></h3>
<div id="chartContainer" style="height: 300px; width: 100%;">
</div>
<br/>
<br/>
<br/>
  

<div class="center">
<h3 style="text-align: center;">Add your plans</h3>
<iframe src="" style="border: 0" width="100%" height="500" frameborder="0" scrolling="no" id="iframegoogle"></iframe>
</div>
<footer class="container">
  <br/>
    <p class="float-end">For any queries contact us : 9701209751</p>
  </footer>
</body>
</html>