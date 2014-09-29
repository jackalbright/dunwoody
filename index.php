<?php
$title = "Welcome to Dunwoody Village";
require_once("includes/htmlTop.php");
$imageNumber = rand(1,8);
$homepageImage = "fw" . $imageNumber . "homepage.jpg";
?>
<meta name="description" content="Dunwoody Village Retirement community in Delaware County, PA">

<script type="text/javascript" src="js/cycle.js"></script>
</head>

<body>
<div id="fb-root"></div>
<div class="page">
<?php
require_once("includes/header.php");

require_once("includes/nav.php");
?>
<div id="mainContent">
<div class="mainLeft pics">
	<img id="homepageImage" src="images/homepageRotate/fw1homepage.jpg" >
</div><!--mainLeft-->

<div class="mainRight" >
<div class="bannerBox"><a href="http://www.penroseatdunwoody.org/" target="_blank"><img src="/images/homepageImages/penroseBanner2.gif" ></a></div>

	<img src="images/homepageImages/welcome_large.jpg" ><br>

    <p>Every aspect of our continuing care retirement community, established in 1974, has been planned for residents' enjoyment and convenience.</p>
    <p><a href="about-dunwoody-village.php">Read on</a> to learn more about what makes <a href="http://dunwoody.org" target="_blank" >Dunwoody Village</a> an exceptional place to live, or <a href="learn-more.php">call today</a> to request a tour.</p>

</div>

</div><!--mainContent-->
<div id="homePictureCollection">
        <div class="pictureBox first">
        <a href="why-dunwoody.php"><img src="images/homepageImages/homebox-1.jpg" >
        </a>
        <!--<p><a href="why-dunwoody.php">What Sets<br> Dunwoody Apart?</a></p>-->
      </div>
<div class="pictureBox">
        <a href="healthcare.php"><img src="images/homepageImages/homebox-2.jpg" >
        </a>
       <!-- <p><a href="healthcare.php">What is<br>
      Continuing Care?</a></p>-->
      </div>
        <div class="pictureBox">
        <a href="healthcare-nonresidents.php"><img src="images/homepageImages/homebox-3.jpg" >
        </a>
        <!--<p><a href="healthcare-nonresidents.php">Have you heard about<br>
        our exceptional rehab<br>
        program?</a></p>-->
      </div>
        <div class="pictureBox last">
        <a href="carriage-home.php"><img src="images/homepageImages/PCH-homepage.jpg" >
        </a>
        <!--<p><a href="dunwoody-chairman-letter.php">Want Does Dunwoody's<br>
        Not-For-Profit Status <br>Mean for Residents?</a></p>-->
      </div>
</div>
<?php
require_once("includes/footer.php");
?>
</div><!--page-->
<script type="text/javascript">
var currentImage=2;
var numberOfImages = 8;
  function imageSwitch() {
        TimerRunning=true;
        var timer = setTimeout(function() { switchPic() }, 6000);
      }
      function switchPic() {
        
	
		var src = "images/homepageRotate/fw" + currentImage + "homepage.jpg";
		jQuery("#homepageImage").attr("src", src);
		//jQuery("#homepageImage").fadeIn("slow");
		
		currentImage++;
		if(currentImage > numberOfImages){
			currentImage = 1;
		}
		var timer = setTimeout(function() { switchPic() }, 6000);
      }

jQuery(document).ready(function($) {
//alert("document ready");
 imageSwitch();
 
});
</script>
</body>
</html>
