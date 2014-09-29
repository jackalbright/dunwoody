<?php
$title = "Dunwoody Village Leading Age Quality First Initiative";
require_once("includes/htmlTop.php");

?>

<!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

<link href="css/video-default.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.video-ui.js"></script>
<script type="text/javascript" src="js/modernizr.custom.29172.js"></script>
</head>

<body>
		<div class="page">
<?php
require_once("includes/header.php");

require_once("includes/nav.php");
?>
<div id="subpage_mainContent">




    <div class="subpage_topImageBox">
    <img src="images/subpage_images/aboutus.jpg"  >
    </div>
        
        

    
    
    <!--About Us  Overview -->
<h1>Dunwoody Village is Now on TV!</h1>
<p>Dunwoody Village now has  commercials appearing on television. But you don't have to have TV in order to see them - you can catch them right here!</p>
<!--<div class="tvSpot">
<div class="videoUiWrapper thumbnail ">
  <video width="370" height="214" id="video1" class='videoClip'>
   
    <source src="video/Dunwoody_rehab_052411.mp4" type="video/mp4">
    <source src="video/Dunwoody_rehab_052411.theora.ogv" type="video/ogg">
    <img src="images/tvspot-rehab.jpg" alt="Dunwoody Village residential tv spot" title="Dunwoody Village residential tv spot">
    Your browser does not support the video tag.
  </video>
</div>
</div>-->

<div class="tvSpot">
<div class="videoUiWrapper thumbnail ">
  <video width="800" height="540" id="video2" class='videoClip' controls autoplay>
   
    <source src="video/DUNC6184H.mp4" type="video/mp4">
    <source src="video/DUNC6184H.theora.ogv" type="video/ogg">
    <!--<img src="images/tvspot-rehab.jpg" alt="Dunwoody Village residential tv spot" title="Dunwoody Village residential tv spot">-->
    Your browser does not support the video tag.
  </video>
</div>
</div>


<!--<div class="tvSpot">
<div class="videoUiWrapper thumbnail ">
  <video width="370" height="214" id="video3" class='videoClip'>
   
    <source src="video/DUNF-6184H.mp4" type="video/mp4">
    <source src="video/DUNF-6184H.theora.ogv" type="video/ogg">
    <img src="images/tvspot-rehab.jpg" alt="Dunwoody Village residential tv spot" title="Dunwoody Village residential tv spot">
    Your browser does not support the video tag.
  </video>
</div>
</div>-->

<!--<div class="tvSpot">
<div class="videoUiWrapper thumbnail ">
  <video width="370" height="214" id="video4" class='videoClip' >
   
    <source src="video/DUNP-6184H.mp4" type="video/mp4">
    <source src="video/DUNP-6184H.theora.ogv" type="video/ogg">
    <img src="images/tvspot-rehab.jpg" alt="Dunwoody Village residential tv spot" title="Dunwoody Village residential tv spot">
    Your browser does not support the video tag.
  </video>
</div>
</div>-->

<!--
<div class="tvSpot">
<div class="videoUiWrapper thumbnail ">
  <video width="370" height="214" id="video2">
   
    <source src="video/Dunwoody_residents_052311.mp4" type="video/mp4">
    <source src="video/Dunwoody_residents_052311.theora.ogv" type="video/ogg">
    <img src="images/tvspot-residential.jpg" alt="Dunwoody Village residential tv spot" title="Dunwoody Village residential tv spot">
    Your browser does not support the video tag.
  </video>
</div>
</div>
-->
<br class='clear-fix'>
<article>

<p>For more information or to schedule a visit or tour, <a href="learn-more.php">contact us now</a>, or call us at <strong>1-800-DUNWOODY (1-800-386-9663)</strong>. Please remember that any information you provide will not be shared with any other parties. We look forward to hearing from you! </p>
 </article>
</div><!--subpage_mainContent-->
<?php
require_once("includes/footer.php");
?>

</div><!--page-->
<script type="text/javascript" >

var video = document.getElementById("video2");

function toggleControls() {
  if (video.hasAttribute("controls")) {
     video.removeAttribute("controls")   
  } else {
     video.setAttribute("controls","controls")   
  }
}
//$('#video1').videoUI();


jQuery(document).ready(function($) {
//alert("document ready");
  jQuery('.videoClip').videoUI({
  'autoHide':false,
  'volumeMedia': 1,
  'progressMedia':true
});

//toggleControls();
	
});
</script>
</body>
</html>
