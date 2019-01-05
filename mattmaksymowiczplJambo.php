<!DOCTYPE html>
<html>
<title>Jambo - The Game</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Jambo - The Game">
<meta name="keywords" content="jambo, game, maksymowicz, matt">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<link rel="icon" href="../jambo/logo.png" type="image/gif" sizes="16x16">
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: white;
	background-color: #1a1a1a;
    line-height: 1.8;
}


.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}


.bgimg-1 {
    background-image: url('../jambo/mybg.png');
    min-height: 100%;
}


.bgimg-2 {
    background-image: url("../jambo/bg1.png");
    min-height: 400px;
}


.bgimg-3 {
    background-image: url("../jambo/bg2.png");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}


@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>


<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-bars"></i> ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> INGAME</a>
	<a href="#download" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-refresh"></i> DOWNLOAD</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
  </div>

  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">INGAME</a>
	<a href="#download" class="w3-bar-item w3-button" onclick="toggleFunction()">DOWNLOAD</a>
	<a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>


<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <img src="../jambo/jambologo.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="" width="500" height="333">
    </div>
  </div>

<!--YT-->
<div class="bgimg-4 w3-display-container w3-opacity-min">
	<div class="w3-display-bottommiddle" style="white-space:nowrap;">
	<iframe  width="250" height="141" src="https://www.youtube.com/embed/dLVxihoonjE" frameborder="0" allowfullscreen></iframe>
	</div>
</div>


<div class="w3-content w3-container w3-padding-64" id="about">
  <p class="w3-center"><em>JAMBO - what is it?</em></p>
  <p>JAMBO is a simple project created by me to explore and learn about game developing industry. It is meant to be a 2d platformer shooter, in which player must defend himself from upcoming waves of enemies. So far it is only a prototype of a game with future possiblity to be enhanced. This project is a non-profit.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa  w3-margin-right"></i></b></p><br>
      <img src="../jambo/gun2.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="" width="500" height="333">
    </div>


    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>So far there are 3 types of enemies: bombs falling from the sky, "kamiaze" trying to reach us with his dynamit backpack and soldier shooting at the player from above. Character movements are controlled with SPACE(jump) A,D(left ot right) and LEFT MOUSE CLICK(shoot). There are two types of weapons(shotgun and rifle) that can be switched with pressing 1 or 2 on keyboard.<br><br>Special thanks to youtube channel Brackeys for guiding and first steps help.</p><a href="https://www.youtube.com/channel/UCYbK_tjZ2OrIZFBvU6CCMiA" class="w3-button w3-hide-small"><i class="fa "></i>Brackeys YT --></a>
    </div>
  </div>

 <p class="w3-large w3-center w3-padding-16"></p>

  <p class="w3-wide"><i class="fa "></i>How much is done?</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:25%">25%</div>
  </div>
 
</div>

<div class="w3-row w3-center w3-#1a1a1a w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge"></span><br>
    

</div>


<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide"></span>
  </div>
</div>


<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">ASSETS</h3>
  <p class="w3-center"><em>Here are some of screenshots and graphics for game.<br> Click on the images to make them bigger. </em></p><br>


  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="../jambo/gio1.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="../jambo/h.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="../jambo/ingame3.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="../jambo/ingame2.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="../jambo/kamikaze.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="../jambo/h4.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="../jambo/ingame1.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="../jambo/unity1.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

  </div>
</div>


<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide"></span>
  </div>
</div>

<br>

<div class="w3-content w3-container w3-padding-64" id="download">
  <h3 class="w3-center">DOWNLOAD</h3>
  <p class="w3-center"><em>Soon!</em></p>
  <div class="w3-row">
    <div class=" m6 w3-center ">
      <p><b><i class="fa "></i></b></p>
      <a href=""><img src="../jambo/DL.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="" width="70" height="70"></a>
    </div>

  </div>
 
</div>


<div class="w3-row w3-center w3-grey w3-padding-32"></div>

<br>


<div class="w3-content w3-container w3-padding-32" id="contact">
  <h3 class="w3-center">Contact</h3>

  <div class="w3-row w3-padding-32 w3-section">

    <div class="w3-center w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Katowice, PL<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> +48 576 195 120<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> 
		maksymowicz.matthias@gmail.com
      </div>
    </div>
  </div>
</div>


<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="http://mattmaksymowicz.pl/" ><b>Matt Maksymowicz</b></a></p>
</footer>
 


<script>


function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

function toggleFunction() {
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
