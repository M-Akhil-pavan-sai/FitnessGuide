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
$variable=$x;
$variable = array_map('intval', explode(',', $variable));
$variable = $variable[count($variable)-1];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FitnessGuide/Diet Page</title>
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

    
    <link href="DietPageCss.css" rel="stylesheet">
    <script type="text/javascript">
  		function Dfunction(){
  				<?php
    				echo "var y= '$variable';";
    			?>
    			if(y<18.5){
    				document.getElementById("HBMI").id="DT";
  			    	document.getElementById("NBMI").id="DT";
  				}
  				else if(y>18.5&&y<24.9){
    				document.getElementById("HBMI").id="DT";
  			    	document.getElementById("LBMI").id="DT";
 				 }
  				else if(y>24.9){
    				document.getElementById("LBMI").id="DT";
  			    	document.getElementById("NBMI").id="DT";
  				}
  	}
  	</script>	
  </head>
  <body onload="Dfunction()">	
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
<h1>Diet Plans</h1>
<section id="LBMI">
	<h2>Low BMI </h2>
	<div>
		<ol>
		    <p>
			<b> These are quick health tips for the person suffering from underweight should include this in your diet plan:</b>
			<br>
			<br>
			<img src="images4k/Low BMI.jpg">
		    </p>
		    <li>
			"Heavy food items that are more in calories."
		    </li>
		    <li>
			"Frequent consumption of food items which are rich in nutrients, it could be snacks, shakes or juices, or proper meals."
		    </li>
		    <li>
			"Adding extra ingredients that are high in calories to regular diet, for example, including eggs and bananas in morning breakfast, etc., can help in increasing the weight."
		    </li>
	 	    <li>
			"Consume protein supplements along with adequate amount of vegetables and fruits."
		    </li>
		    <li>
			"Eating calorie dense food and maintaining a balanced diet will help in gaining the weight"
		    </li>
		    <li>
			
			"However, the diet shouldn’t be started drastically and instead, should be implemented gradually so that the body is accustomed with it."
		    </li>
		   	
		</ol>	

<table style="border:1">
  <thead>
	<tr>
	    <th>Meals</th>
	    <th>Time</th>
	    <th>What to have</th>
	</tr>
  </thead>
  <tbody>
	<tr>
	    <td> Early Morning </td>
	    <td> 7 AM - 8 AM </td>
	    <td> 
		<ul>
			<li>Overnight soaked almonds (6-7 pieces)</li>
		</ul>	
	    </td>
	</tr>
	<tr>
	    <td> Breakfast </td>
	    <td> 8 AM - 9 AM </td>
	    <td> 
		<ul>
		    <li>Overnight soaked almonds (6-7 pieces)
			<br>
			Or
		    </li>
		    <li>2 multigrain breads with low-fat butter and egg omelet (2 egg whites from 1 whole egg).
			<br>
			Or
		    </li>
		    <li>A cup of corn flakes, oats with milk, or any cereal porridge (use full-fat milk).
			<br>
			Or
		    </li>
		    <li>Poha, upma, or daliya khichdi with lots of veggies.
			<br>
			Or
		    </li>
		    <li>2 chapatis with a cup of veggies and a cup of boiled sprouts.
			<br>
			Or
		    </li>
		    <li>2 protein (Cottage cheese/sprouts) stuffed parathas with chutney or pickles.</li>		
		    <li>Whole fruits or a glass of fresh vegetable juice with pulp.</li>

		</ul>	
	    </td>
	</tr>
	<tr>
	    <td> After Breakfast </td>
	    <td> 11 AM - 12 PM </td>
	    <td> 
		<ul>
			<li>A glass of full fat milk with a health drink of your choice or whey protein.		</ul>	
	    </td>
	</tr>
	<tr>
	    <td> Lunch</td>
	    <td> 1:30 PM - 2:30 PM </td>
	    <td> 
		<ul>
		    <li>A small cup of rice and two chapatis.</li>
		    <li>A cup of pulses (masoor, moong, chana).</li>
		    <li>½ cup of vegetable curry.</li>
		    <li>3 oz chicken breast or a piece of fish/ eggs/ tofu/cottage cheese.</li>
		    <li>Mixed salad made of cucumber, carrot, and tomatoes.</li>
		    <li>2 A small cup of curd or yogurt.</li>	
		</ul>	
	    </td>
	</tr>
	<tr>
	    <td> Evening snack</td>
	    <td> 5:30 PM - 6:30 PM </td>
	    <td> 
		<ul>
		    <li>Veg sandwich with cheese.
			<br>
			Or
		    </li>
		    <li>Baked potato with skin and avocado dip.
			<br>
			Or
		    </li>
		    <li>Fistful mixture of roasted nuts.</li>
		</ul>	
	    </td>
	</tr>
	<tr>
	    <td> Dinner</td>
	    <td> 8:30 PM - 9:30 PM </td>
	    <td> 
		<ul>
		    <li>½ cup of brown rice and 1 cup of kidney beans/black beans/ mushroom curry.</li>
		    <li>Mixed salad made of cucumber, carrot, and tomatoes.</li>
		</ul>	
	    </td>
	</tr>
	<tr>
	    <td> Before bed</td>
	    <td> 10:30 PM - 11:00 PM </td>
	    <td> 
		<ul>
		    <li>A glass of full fat milk.</li>
		</ul>	
	    </td>
	</tr>
</table>
</section>
<section id="NBMI">
<h2>Diet For Normal BMI</h2>
<img src="images4k/NDiet.png" alt="Normal BMI-Diet">
<table>
<tr>
<th>Vego Diet</th>
<th>Non-veg diet</th>
<th colspan=2>Common for both</th>
</tr>
<tr>
<td>
<b>Protein</b>
</td>
<td>
<b>Protein</b>
</td>
<td>
<b>Carbs</b>
</td>
<td>
<b>Healthy Fat</b>
</td>
</tr>
<tr>
<td>
<ul>
<li>Tofu</li>
<li>Vegan Protein Powder</li>
<li>Edamame</li>
<li>Tempeh</li>
<li>Seitan</li>
<li>TVP</li>
<li>Plain Vegan yogurt</li>
<li>Lentils</li>
<li>Peas</li>
<li>Chickpeas</li>
<li>Beans</li>
<li>Vegan Meat</li>
<li>Quinoa</li>
</ul></td>
<td>
<ul>
<li>lentils</li>
<li>Protein Powder</li>
<li>Eggs</li>
<li>Chicken/Turkey</li>
<li>Pork</li>
<li>Salmon</li>
<li>Plain yogurt</li>
<li>Cottage Cheese</li>
<li>Peas</li>
<li>Chickpeas</li>
<li>Beans</li>
<li>Tofu</li>
<li>Quinoa</li>
</ul>	</td>
<td>
<ul>
<li>Rice</li>
<li>Potatoes</li>
<li>Oats</li>
<li>Buck Wheat</li>
<li>Millet</li>
<li>Barley</li>
<li>Corn
  <br>  
  Or</li>
<li>Whole Grain Bread<br><br><br><br><br></li>
</ul>	</td>
<td>
<ul>
<li>Nuts</li>
<li>Nut Butter</li>
<li>Seeds</li>
<li>Seed Butter</li>
<li>Cocoa</li>
<li>Avocado</li>
<li>Water,Coffee & Tea all day<br><br><br><br><br><br><br></li>
</ul></td>
</tr>
</table>
<h4>Instructions</h4>
<p>In this mealplan your every meal is built around fruit and vegetables. They should take up half of your plate every time you sit down to eat. Next you want to make sure you have enough protein with your meal. Add an item from the PROTEIN options list to your plate. For energy and good digestion add another item from the CARB list and one more from HEALTHY FATS. Mix and match items and keep your menu varied for optimal health and nutrition.</p>
<p>Fruit, berries, vegetables and mushrooms are completely unlimited but they have to be part of your meal as there is no in-between-meals snacking in this plan.</p>

<h4>Measuring the amounts</h4>
<p>You can have a go-to cup (a measuring cup or a cup that fits the volume of a measuring cup) at hand to help guide you. You don’t have to be precise with the amounts. Eventually you’ll be able to measure by just looking at your plate.</p>
</section>
<section id="HBMI">
<h2>Diet For BMI > 23</h2>
<img src="images4k/Obese Chart.png" width=1450>
<h4>Early-Morning</h4>
<p>Indian gooseberries -3-4 (cooked) / Aloe Vera juice- 20 ml</p>
<h4>Breakfast</h4>
<p>Broken Wheat Porridge (Veg dalia) / Veg Semolina (veg upma) /oatmeal/ Veg Vermicelli (Sewian) / Stuffed Chapatti / Chapatti with veg or dal/Beetroot Juice / Pomegranate Juice</p>
<h4>Mid-Morning</h4>
<p>Fruit/ Green juice / Coconut water</p>
<h4>Lunch</h4>
<p>Plain chapatti / Multi grain chapatti / Boiled Brown Rice (Veg khichdi/ Vegetable + Dal + Salad</p>
<h4>Evening</h4>
<p>Herbal Tea / Red juice / Sprouts / Fox nuts/ Roasted chickpea/ Granola bar (Homemade)</p>
<h4>Dinner</h4>
<p>Plain chapatti / Boiled Rice / Khichdi / Dalia / Sabudanakhichdi/ Vegetable + Dal Salad</p>
</section>
</body>			
</html>
	
	
