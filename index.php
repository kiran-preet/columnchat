<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
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
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="privacy-policy" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Privacy Policy</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="privacy-policy" class="w3-bar-item w3-button w3-padding-large">Privacy Policy</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:50px 16px">
  <h1 class="w3-margin w3-jumbo"></h1>
  <p class="w3-xlarge">Download An Offer To Purchase Your House Here</p>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Download Now</button>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Sell Your House Online, Anytime, Only Here.</h1>
      <h5 class="w3-padding-32">Get My Offer Fast. Fill Out The Online Purchase Agreement Below.</h5>

      <p class="w3-text-grey">I'm looking for houses to buy, wholesale, flip and finance. If you need to sell, I'll make an offer fast.<br/>I'm specifically buying within a 60 mile radius of Jackson, MI and on a case-by-case basis outside that area, nationwide. I'm looking to make a deal! If you're considering selling, request an offer now.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-home w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-col">
      <h1>The Purchase Agreement Offer</h1>
      <h5 class="w3-padding-2">Stipulations</h5>

      <p class="w3-text-grey">
        <ol>
            <li>The property is sold as-is with no repairs needed.</li>
            <li>Buyer will pay closing costs.</li>
            <li>Seller will pay prorated property taxes.</li>
            <li>The property title is to be delivered clear and any liens or property fines shall be paid at closing from seller’s proceeds.</li>
            <li>Seller will disclose any defects, zoning, or environmental issues of the property to the buyer.</li>
            <li>Access to the property may be provided to the buyer and his partners, assignees, inspectors, or appraisers. </li>
            <li>Buyer to deposit non-refundable earnest money with the title company.</li>
        </ol>
        Download This PDF Agreement Now!
      </p>
      <p>Complete this form to receive a purchase offer fast. </p>
      <form class="w3-container">
        <p>
            <label>The Property Address:</label>
            <input class="w3-input" type="text" placeholder="Include city and state">
        </p>
        <p>
            <label>Seller's Name(s):</label>
            <input class="w3-input" type="text" placeholder="Include all seller's names on title">
        </p>
        <p>
            <label>Email</label>
            <input class="w3-input" type="text" placeholder="">
        </p>
        <p>
            <label>Date</label>
            <input class="w3-input" type="text" placeholder="Enter today's date">
        </p>
        <p>
            <label>Sales Price</label>
            <input class="w3-input" type="text" placeholder="Enter your asking price">
        </p>
        <p>
            <label>Seller's Phone Number(s)</label>
            <input class="w3-input" type="text" placeholder="Enter your phone number(s)">
        </p>
        
      </form>
      <p>Additional paperwork will be required by a title company. The closing will be scheduled as fast as possible or on the seller’s requested date. I move fast!</p>
      <p>Want to receive a custom offer or speak with me on the phone? Call or text me at 517-xxx-xxxx.</p>
      <p>I look forward to doing business with you. I promise to save you time selling, and be hassle free.</p>
      <p>Sell your house to me, and I'll give you a surprise gift package worth $200. Selling a house can be a big deal and these gifts are my way of saying thanks for working with me. </p>
    </div>
  </div>
</div>

<div class="w3-container w3-white w3-center w3-padding-0">
  <div class="w3-cell-row" style="width:75%;margin:auto;">
    <div class="w3-col">
      <img src="images/banner.jpg" style="width:100%" />
      <div class="w3-left-align">
        <p>I am easy to deal with and love buying houses. If you have a property you're considering selling, be sure to contact me for an offer. Save time by downloading my purchasing agreement instantly today!</p>
        <p>Want to sell your house? Sell now. After downloading your customized purchase agreement, I will be in touch soon by phone. </p>
        <p>If you'd like to talk, feel free to call me at 517-xxx-xxxx.</p>
        <p>After receiving my offer, I will be calling you to explain the closing process and answer any questions you may have.</p>
        <p>Congratulations on taking the first step of selling your house!</p>
        <p>2023 © Joesoffer.com - Privacy Policy</p>
      </div>
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
