<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="keywords" content="Travel">
<meta name="description" content="Travel">
<title>Travel</title>
<link sizes="16x16" rel="icon" href="images/welcome-image.svg">
<link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
</head>
<body>
  <div class="container">
    <div class="text-center deals">
  <p>Book now to get exciting travel deals. Upto 40% o on credit card payments<br>
      <span style="font-weight: 700;">Offers ends in </span><span id="demo"></span></p>
    </div>
    <div class="menu">
<ul>
  <li style="float:right"><a href="#">GET A QUOTE</a></li>
  <li style="float:right"><a href="#">DESTINATIONS</a></li>
  <li style="float:right"><a href="#">WEATHER</a></li>
</ul>
  </div>
   <div class="trip" style="float:left;margin-right: 200px;">
    <img src="images/welcome-image.svg" style="float:left;margin-right: 100px;">
    <div class="book" style="margin-top: 150px;">
      <h1>Life is short and the world is wide!</h1>
      <p>Stay at the comfort of your homes and book a trip to travel after the post pandemic era.</p>
      <button type="button">PLAN A TRIP</button>
    </div> 
  </div> 
   <div id="weather" style="width: 80%;margin-left: 169px;">
   <h2 class="text-uppercase bg-blue">the weather channel</h2>
      <div id="weather-box1" style="background-color:#0D7E88">
   
           <div id="city1">

           </div>
           <div>
           <img src="images/icon-party-sunny.svg">
           </div>
           <div id="cel1">
             
           </div>
      </div>
      <div id="weather-box2" style="background-color:#D09378">
      <div id="city2">
         </div>
         <div>
         <img src="images/icon-party-sunny.svg">
          </div>
         <div id="cel2">
        </div>
      </div>
      <div id="weather-box3" style="background-color:#405B5D">
          <div id="city3">
          </div>
    
         
          <div>
          <img src="images/icon-party-sunny.svg">
          </div>
          <div id="cel3">
          </div>
      </div>
      <div id="weather-box4" style="background-color:#74A748">
          <div id="city4">
          </div>
          <div>
            <img src="images/icon-party-sunny.svg">
          </div>
          <div id="cel4">
          </div>
      </div>
   </div>
   <br>
   <div id="tripcity-g" style="margin-left: 152px;">
        <h2 style="color:#00264D;margin-top:280px;margin-left: 20px;">Featured Destinations</h2>
        <div id="tripimg">
            <!-- <div id="tripcity"></div> -->
          </div>
         
   </div>
   <div style="position: relative;">
        <img src="images/promo-image.png" style="width: 100%;">
        <div class="bottom-right">
          <h1 style="color:white">PLAN A TRIP</h1>
          <h2 style="color:white">Make your vacation the most<br> memorable one</h2>
        </div>
   </div>
   <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
   <?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>
   <h2 class="text-center" style="color:#00264D;margin-left: 20px;">Travelling as a group? Get a Quote</h2>
   <form method="post" name="form" onsubmit="submitForm()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="color:gray;text-align: center;">  
  Name: 
  <br>
  <input type="text" name="name">
  <span class="error"><?php echo $nameErr;?></span>
  <br>
  Contact No:
  <br>
   <input type="text" name="contact">
  <span class="error"><?php echo $websiteErr;?></span>
  <br>
  E-mail: 
  <br>
  <input type="text" name="email">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  <!-- <button type="submit" name= "Submit" value= "Submit">Submit</button> -->
  <input type="submit" name="submit" value="Submit" class="submit"> 
</td>
</form>
<p id="success">we hire you! we will get back you!</p> 
<footer style="color:white">
  <div style="float:left">
    <h3>Tripzone</h3>
       <ul>
         <li><a href="#">About</a></li>
         <li><a href="#">Awards</a></li>
         <li><a href="#">Contact Us</a></li>
         <li><a href="#">Feedback</a></li>
       </ul>
  </div>
 
  <div style="float:left">
  <h3>Main Offices</h3>
       <ul>
         <li><a href="#">The United States</a></li>
         <li><a href="#">India</a></li>
         <li><a href="#">Brazil</a></li>
         <li><a href="#">Canada</a></li>
       </ul>
  </div>
  <div style="float:left">
  <h3>Sub Offices</h3>
       <ul>
         <li><a href="#">Australia</a></li>
         <li><a href="#">England</a></li>
         <li><a href="#">France</a></li>
         <li><a href="#">Germany</a></li>
       </ul>
  </div>
  <div>
    <h3>Disclaimer</h3>
       <ul>
         <li><a href="#">This layout is created as a pa of Sirius UI Recruitments.
All the above content has no direct relation with Sirius
business.</a></li>
         
       </ul>
  </div>
  

</footer>

  </div>
</body>
</html>
<style type="text/css">
ul{
    list-style: none;
}
.bg-blue{
    padding: 10px;
    color: white;
    background-image: linear-gradient(to right,#000B18,#00172D,#00264D,#02386E);
    margin-top: 830px;
    margin-bottom: 0px;
}
footer li a{
  color:white;
}
.deals,footer{
 padding:5px;
 color:white;
  background-image: linear-gradient(to right,#000B18,#00172D,#00264D,#02386E);
}
button,.submit{
  border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    background-image: linear-gradient(to right,#000B18,#00172D,#00264D,#02386E);
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
    font-size: 25px;
}
.error{
  color:red;
}
li a{ 
  color:#133256;
  padding-right: 100px;
  text-decoration:none;
  font-weight: 500; 
}
body {
  font-family: 'Roboto Slab';
  font-size: 20px;
  line-height:40px;
}
h1{
  line-height: 70px;
  font-size: 50px;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-center{
  text-align: center;
}
#cel1,#cel2,#cel3,#cel4{
  font-size:80px;
  padding-top: 20px;
}
input{
    width: 500px;
    height: 50px;
}
footer{
  height: 300px;
}
/* .masonry-filter img{
  display: inline-block;
  float: unset !important;
  color: #333;
  font-weight: 600;
} */

#weather img{
  padding-top: 20px;
} 
#weather-box1,#weather-box2,#weather-box3,#weather-box4{
  color: white;
  float: left;
  width: 364px;
  text-align: center;
  font-weight: bold;
  padding: 40px 0px;
}
#tripimg img {
  width: 260px;
  height: 240px;
  padding: 20px;
  border-radius: 30px 30px 30px 0px;
  overflow-y: auto;
  white-space: nowrap;
}
#tripimg div{
  float: left;
}
#tripimg div > div{
 float: unset;
 margin-left: 22px;
 color:gray;
}
@media (max-width: 1200px)
{
.container{
  width: 1140px;
}
}
@media (max-width: 992px)
{
.container{
  width: 960px;
}
}
@media (max-width: 768px)
{
.container{
  width: 720px;
}
}
@media (max-width: 576px)
{
.container, .container-sm {
  width: 540px;
}
}
.container{
    width: 100%;
}
.trip{
  padding: 100px 277px;
  width: 70%;
}
.bottom-right {
  position: absolute;
  bottom: 100px;
  left: 100px;
}
</style>

<script>


// Set the date we're counting down to
var countDownDate = new Date("aug 8, 2021 18:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
function submitForm() {
 var name = document.forms["form"]["name"].value;
 var contact = document.forms["form"]["contact"].value;
 var email = document.forms["form"]["email"].value;
 if(name!= "" && contact!= "" && email!= "") {
	document.getElementById("contact-error").setAttribute("style","display:block");
}
	
}

        fetch('https://run.mocky.io/v3/e3ae9d2e-78f5-403d-b6cd-fa7f8c7e1576')
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
              // console.log(data);
                appendData1(data);
            })
            .catch(function (err) {
                console.log('error: ' + err);
            });
        function appendData1(data) {
            var mainContainer = document.getElementById("myData");
            for (var i = 0; i < data.result.length; i++) {
              document.getElementById("city"+(i+1)).innerHTML =data.result[i].city;
              document.getElementById("cel"+(i+1)).innerHTML =data.result[i].temp_Celsius+"°";
         }
        }

        fetch('https://run.mocky.io/v3/3e6901dd-9a60-4771-a8cb-9c62177a654c')
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
              // console.log(data);
                appendData2(data);
            })
            .catch(function (err) {
                console.log('error: ' + err);
            });
        function appendData2(data) {
         for(var i = 0 ; i< data.result.length;i++) {
 var cityImgDiv = document.createElement("div");
 cityImgDiv.setAttribute("id", "cityImgDiv"+(i+1));
 var img = document.createElement("img");
 img.src = data.result[i].imageUrl;
 cityImgDiv.appendChild(img);
 document.querySelector("#tripimg").appendChild(cityImgDiv);
 var node = document.createElement("div");
 node.setAttribute("id", "cityDiv"+(i+1));
  var textnode = document.createTextNode(data.result[i].city);
  node.appendChild(textnode);
  // document.getElementById("tripcity").appendChild(node);
   document.querySelector("#cityImgDiv"+(i+1)).appendChild(node);
}

        }
    </script>
