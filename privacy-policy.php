<!DOCTYPE html>
<html lang="en">
<head>
<title>Privacy Policy</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-home,.fa-coffee {font-size:200px}
.w3-input { background:#f1f1f1;}
.w3-input:hover { outline:none; }
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="privacy-policy" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Privacy Policy</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="privacy-policy" class="w3-bar-item w3-button w3-padding-large w3-white">Privacy Policy</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:50px 16px">
  <h1 class="w3-margin w3-jumbo"></h1>
  <p class="w3-xlarge">Privacy Policy</p>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-col">
      <h1>Privacy Policy</h1>
      <p class="w3-text-grey">Thanks for visiting my site. Rest assured our communication is kept confidential. Your privacy and satisfaction is my top priority. As of 11/25/2023 I am not retargeting site visitors with advertisements. Your information will be kept securely and I will never spam you. Filling out my form or contacting me constitutes as a subscription to my communication. I will call or text you at the number you provide unless you request to be removed from my contact list. My goal is to buy your house in a professional manner and on your terms. After downloading my purchase offer, I will contact you with the next steps to move forward. I look forward to working with you and wish to make it a pleasant experience for you!</p>
      <p>2023 &copy; Joesoffer.com - Privacy Policy</p>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center">  
  <div class="w3-xlarge w3-padding-32">
   <img src="images/sitelock.png" />
 </div> 
 <p>&copy; 2023</p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
