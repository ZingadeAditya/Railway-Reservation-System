<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>IRCTC WEBSITE</title>
	
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="homestyle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <style>
* {
  box-sizing: border-box;
}



.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>


  <style>
    
    ul{
      display: block;
    }

    
  .whiteback{
			font-size:20px;
			background-color:#d3d3d3;
			padding-top:15px;
			padding-bottom:15px;
		}
		.blackback{
			font-size:20px;
}  
 


    .bg-img {
    /* The image used */
    background-image: url(background2.jpg);
    min-height: 700px;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

  /* Add styles to the form container */
  .container{
      position: absolute;
      right: 50px;
      margin: 20px;
      max-width: 400px;
      padding: 10px;
      background-color: white;
  }

  .container-text {
    position: relative;
    text-align: center;
    color: white;
}
  /* Full-width input fields */
  input[type=text], input[type=password]{
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
  }

   select,input[type=date]{
    width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: 1px solid transparent;
      background-color: #f1f1f1;
  }


  input[type=text]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none;
  }

  .head{
  	font-family: "Poiret One", cursive;
  }

  /* Set a style for the submit button */
  .btn {
      background-color: blue;
      color: white;
      padding: 8px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.8;
  }

  .btn:hover {
      opacity: 0.5;
  }

  .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-weight: bold;
  }

  </style>

  <style>

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 950px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>


</head>
<body onload="startTime()">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img class="navbar-brand" src="indianrail.png">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <span>
    <ul class="navbar-nav mr-auto" >
     <?php


      if (!isset($_SESSION['aname'])) 
      {
      echo "<li class='nav-item' id='date' style='margin-left: 400px; font-size: 14px'></li> &emsp;
      <li class='nav-item' id='txt' style='font-size: 14px'></li>&emsp;&emsp;
      <li class='nav-item'><strong><a href='adminlogin.html' style='color: red; text-decoration: none; font-size: 14px'>ADMIN LOGIN</a></strong></li> &emsp;&emsp;
      <li class='nav-item'><strong><a href='newsignin.html' style='color: red; text-decoration: none; font-size: 14px'>REGISTER</a></strong></li>";
       }

      else{
       

       

       	echo" <li class='nav-item' id='date' style='margin-left: 400px; font-size: 14px'></li> &emsp;
      <li class='nav-item' id='txt' style='font-size: 14px'></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <li class='nav-item' id='disp' style='font-size: 14px'><b>Welcome :  ".$_SESSION['aname']." </b></li>&emsp;&emsp;&emsp;&emsp;&emsp;
      <li class='nav-item'><strong><a href='ulogout.php' style='color: red; text-decoration: none; font-size: 14px'>LOGOUT</a></strong></li> &emsp;&emsp;";
  }
       

  	?>
    </ul>
  
    <br>
    
    <ul class="navbar-nav mr-auto" style="margin-left: 135px;">
      
      <li class="nav-item" >
        <a class="nav-link" href="adminhome.php"><img src="home1.png" width="25" height="20"><span class="sr-only">(current)</span></a>
      </li>
      &emsp;&emsp;
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="trains" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          TRAINS
        </a>

      <?php 

       if(isset($_SESSION['aname'])){
        echo "<div class='dropdown-menu' aria-labelledby='trains'>
          <a class='dropdown-item' href='insertTrain.php'>Add New Train</a>
          <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='cancelTrain.php'>Cancel Train</a>
          <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='trainschedule.php'>Train Schedule</a>
        </div>";
       }
      else{

        echo "<script> alert('You need to login first');
                window.location.href='adminlogin.html';
                </script>";

        }
       
      ?>
      </li>

      &emsp;

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="service" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICE AT STATIONS
        </a>
        <div class="dropdown-menu" aria-labelledby="service">
           <a class="dropdown-item" href="wifistation.html">WiFi Railway Stations</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="BOC.pdf" target="_blank" download>Battery Operated Cars</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>

      &emsp;&emsp;

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="trains" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REPORT
        </a>
        <div class="dropdown-menu" aria-labelledby="service">
           <a class="dropdown-item" href="fusion3.php">Monthly Earnings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="fusionpass.php">View Train - Passenger Details</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="trainDetails.php">View Train - Class Details</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="fare.php">View Class Fares</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="map3.php">View Stations</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="fusionrating2.php">View Feedback</a>
         
          
        </div>
      </li>

        &emsp;&emsp;

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="promotion" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PROMOTIONS
        </a>
        <div class="dropdown-menu" aria-labelledby="promotion">
           <a class="dropdown-item" href="irctcad.pdf" target="_blank" download>Advertise With IRCTC</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://play.google.com/store/apps/details?id=cris.org.in.prs.ima&hl=en" target="_blank">IRCTC Rail Connect App</a>
        </div>
      </li>

      &emsp;&emsp;

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="notification" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          NOTIFICATIONS
        </a>
        <div class="dropdown-menu" aria-labelledby="notification">
           <a class="dropdown-item" href="alerts.php">Alerts</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="updates.php">Updates</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="generalinformation.php">General Information</a>
        </div>
      </li>

      &emsp;&emsp;

      <li id="myBtn" class="nav-link"><b>CONTACT US</b></li>

    </ul>
    </span>

    <div id="myModal" class="modal" style="margin-top: 100px;margin-left: 100px;margin-right: 175px;">
      <div class="modal-content">
        <span class="close" align="right">&times;</span>
        <br>
        <p>
          <div style="text-align: center; font-size: 30px; background-color: rgba(0,0,255,0.3);">YOU MAY CONTACT US ON </div>
          <br>
          <pre>
          <b>Customer Care No</b> : 0755-6610661 , 0755-3934141 (Language: Hindi and English) <br>
          <b>For Railway tickets booked through IRCTC</b>
          <b>General Information</b>
          <b>I-tickets/e-tickets</b> : care@irctc.co.in 
          <b>For Cancellation E-tickets</b> : etickets@irctc.co.in 
          For IRCTC SBI Card users who do not receive the card within 01 month from the date of application kindly call on
          the Railway SBI Card Helpline nos. at 0124-39021212 or 18001801295 (if calling from BSNL/MTNL line) or send email 
          to feedback.gesbi@ge.com. For other queries on your IRCTC SBI card account, kindly email at loyaltyprogram@irctc.co.in
          <b>Registered Office / Corporate Office 
          Indian Railway Catering and Tourism Corporation Ltd.,
          B-148, 11th Floor, Statesman House, 
          Barakhamba Road, New Delhi 110001</b>
        </pre>
        </p>
      </div>
    </div>
  </div>
    
    <img class="navbar-brand" src="irctclogo.png" width="65px" height="75px" style="margin-right: 20px;">

</nav>

<ol>
	<br>
	<p class="blackback">Advance Reservation Period (ARP) for booking in trains is increased from 60 days to 120 days w.e.f 1st April, 2015. There will be no change in case of certain day time Express trains of lower time limits of ARP.</p>
	<p class="whiteback">Salient Features of Premium Tatkal (PT) Quota on Dynamic Pricing</p>
	<p class="blackback">ERS/VRM along with any one of the ten(10) prescribed ID proofs in original and the indication of the passenger(s) name(s) in the Reservation Chart will authorize the passenger(s) to travel on train.</p>
	<p class="whiteback">Atom PG (International card) payment option is available for ticket booking only when Journey Date is at least 02 days in advance of booking date</p>
	<p class="blackback">In order to have successful travel insurance policy please update your user profile without special character in User Name, Pin Code, Mobile Number and Email Id in your IRCTC user profile.</p>
	<p class="whiteback">Passengers are advised to travel with the screen shot of ERS i.e. Virtual Reservation Message (VRM), SMS received from IRCTC along with any one of the prescribed identity card in original. Please save paper and environment and do not print the ERS unless it is extremely necessary to do so.
</p>
	<p class="blackback">IRCTC Loyalty Scheme is not available on any Android , IOS & Windows Apps.</p>
	<p class="whiteback">Never purchase e-ticket from unauthorized agents or persons using their personal IDs for commercial purposes.Such tickets are liable to be cancelled and forfeited without any refund of money, under section (143) of the Indian Railway Act 1989. List of authorized agents are available on www.irctc.com E-Ticket Agent Locator.</p>
	<p class="blackback">If your pnr is not generated and payment is deducted at bank, the same will be refunded back in 3-4 working days.</p>
	<p class="whiteback">Users are requested to delete browser cookies/cache if facing login problems or logout issue.</p>
	<p class="blackback">Cases of fraudulent claims of refund are liable for legal action. Users registered on irctc.co.in are requested to update their user profile with valid address, email-ID and mobile number. The registrations with invalid address, email-IDs and mobile numbers are liable to be deactivated</p>
	<p class="whiteback">Multiple logins at www.irctc.co.in are not allowed.</p>
	
	</ol>		


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    } 

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
    }


    function startTime(){
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      var dd = today.getDate();
      var mm = today.getMonth();
      var yy = today.getFullYear(); 
      var month = new Array();
          month[0] = "Jan";
          month[1] = "Feb";
          month[2] = "March";
          month[3] = "April";
          month[4] = "May";
          month[5] = "June";
          month[6] = "July";
          month[7] = "Aug";
          month[8] = "Sept";
          month[9] = "Oct";
          month[10] = "Nov";
          month[11] = "Dec";
      m = checkTime(m);
      s = checkTime(s);

      document.getElementById("date").innerHTML = dd + "-" + month[mm] + "-" + yy;
      document.getElementById("txt").innerHTML = "["+ h+ ":" + m +":"+ s + "]";
      var t = setTimeout(startTime, 500);
    }

      function checkTime(i){
        if( i < 10){
          i = "0" + i;
        }
        return i;
      }

</script>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

 </body>
</html>