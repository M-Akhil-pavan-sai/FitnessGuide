<?php
 session_start();
 $Username=$_COOKIE['U'];

 ?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FitnessGuide/Home Page</title>
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

    
    <link href="HomePageCss.css" rel="stylesheet">
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
            <a class="nav-link" href="BMIPage.php?user=<?php echo $Username;?>">BMI Calculator</a>
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

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://onnitacademy.imgix.net/2016/07/Battlerope.jpg">

        <div class="container">
          <div class="carousel-caption">
            <h1>Are you ready !</h1><br/>
            <p>All of us want to become healthy and fit but we either do not get enough time or we lack the motivation to achieve this desire of ours. We the Team Fitness Guide, decided to find a solution to this problem</p>
            <p></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://ak.picdn.net/shutterstock/videos/1018497505/thumb/1.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>Healthy Eating</h1><br/>
            <p>Confused by all the conflicting nutrition advice out there? These simple tips can show you how to plan, enjoy, and stick to a healthy diet</p>
            <br/>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.mibluesperspectives.com/wp-content/uploads/2019/02/woman-weights-670x377.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>One step towards fit</h1>
            <p>We at Fitness Guide take you through a collective journey of fitness, endurance and wellness, that may be rare to find in other places.</p>
            <br/>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>


  <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Why is BMI important? <span class="text-muted"></span></h2>
        <p class="lead">BMI is a measurement of a person's leanness or corpulence based on their height and weight, and is intended to quantify tissue mass. It is widely used as a general indicator of whether a person has a healthy body weight for their height.Your BMI is a measurement that is a ratio of your weight and height. It’s a good way to gauge whether your weight is in healthy proportion to your height. Specifically, the value obtained from the calculation of BMI is used to categorize whether a person is underweight, normal weight, overweight, or obese depending on what range the value falls between.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="images4k/bmi3.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

  <div class="container marketing">

    <div class="row">
      <div class="col-lg-4">
        <img src="https://freepngimg.com/thumb/arnold_schwarzenegger/29417-1-arnold-schwarzenegger-image.png" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Arnold Schwarzenegger</h2>
        <p>-"Just remember,you can't climb the ladder of success with your hands in your pockets"</p>
      </div>
      <div class="col-lg-4">
        <img src="images4k/virat3.webp" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Virat Kohli</h2>
        <p>-"So I think it is taking care of your holistic development which includes physical and mental states, because mentally you cannot boost yourself if you are physically not strong as your body will not respond. Your body needs to be fit for your mind to think something and body to follow"</p>
      </div>
      <div class="col-lg-4">
        <img src="https://images.indiawords.com/wp-content/uploads/2018/02/black-and-white-pics-of-MC-Mary-Kom.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Mary Kom</h2>
        <p>-“The secret to my success is my fitness and I am very quick. I plan well before bouts. I am lucky that I can catch my opponents within seconds. I am able to read them very quickly because I'm fit”</p>
      </div>
    </div>


  </div>
</main>

  <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
