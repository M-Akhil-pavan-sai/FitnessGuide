function myFunction1(h,w) {
  var re = 0;
  if(document.getElementById("si").checked){
    re = w /(h * h);
  }
  if(document.getElementById("us").checked){
    re =703*( w /(h * h));
  }
  var status="";
  if(re<18.5){
    status="LBMI";
  }
  else if(re>18.5&&re<24.9){
    status="NBMI";
  }
  else if(re>24.9){
    status="HBMI";
  }
  document.getElementById("res").innerHTML += re+" ( "+status+" )";
  document.cookie="BMIVALUE="+re.toFixed(2);
}
function myFunction2() {
  document.getElementById("res").innerHTML="Your BMI : ";
}