<?php
$title = "Learn more about Dunwoody Village";
require_once("includes/htmlTop.php");

?>
<style>
      #map_canvas {
        width: 500px;
        height: 400px;
		margin:auto;
		border:1px solid #666;
		background-color:#ccc;
      }
</style>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1369047-2");
pageTracker._trackPageview();
</script>


<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<!--<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>-->

<?php
require_once("lib/commonFunctions.php");
$stateList = getStates();
?>
</head>

<body>
		<div class="page">
<?php
require_once("includes/header.php");

require_once("includes/nav.php");
?>
<div id="subpage_mainContent">
 <div class="subpage_topImageBox">
    <img src="images/subpage_images/learnmore.jpg"  >
    </div>
     
<h1>Learn More</h1>
<p class='bigFirst'>Your future starts here. 
</p>
<p class='bigFirst'>Learning more about Dunwoody Village is simple and easy. Come visit us and see why we’re at the leading edge of senior living. 
</p>

<h3>Call Us</h3>

<p>We would love to talk with you! Call us anytime at (610) 359-4438 for more information or to schedule a tour. 
</p>
<p>For those outside of the area, you can call us toll-free at 1-800-DUNWOODY (386-9663). Hearing and speech-impaired individuals may reach us via the PA Relay Center: 1-800-654-5984.
</p>
<h3>Find Us</h3>

<div id="map_canvas">
</div>
<p>Dunwoody Village is located in conveniently situated Newtown Square, Pennsylvania. Join us here and you’ll find within our sprawling 83-acre campus a whole new world to explore, full of wonderful friends, new activities, and caring staff.
</p>
<h3>Let Us Come to You</h3>

<p>To request a brochure or more information, fill out the form below. Dunwoody Village values your privacy—your information will not be shared with outside parties.</p>

<div >
<form action="processContactForm.php" id="contactForm" method="post">
<table class="formTable">


<tr>
<td class="formLabel"><label for="user">First Name:</label></td>
<td class="formValue"><input type="text" name="firstName" value="" /><br /></td>
</tr>
<tr>
<td class="formLabel"><label for="user">Last Name:</label></td>
<td class="formValue"><input type="text" name="lastName" value="" /><br /></td>
</tr>
<!--<tr>
<td class="formLabel">
<label >Current Address:</label><br /></td>
<td class="formValue"></td>
</tr>-->
<tr>
<td class="formLabel">
<label for="user">Address:</label></td>
<td class="formValue">
<input type="text" name="address1" value="" /><br /></td>
</tr>
<tr>
<td class="formLabel">
<label for="user">City:</label></td>
<td class="formValue">
<input type="text" name="city" value="" /><br /></td>
</tr>
<tr>
<td class="formLabel">
<label for="user">State:</label></td>
<td class="formValue">
<select name="state">
<option value=''>Select State</option>
<?php
foreach($stateList as $key=>$value){
	echo "<option value='" . $key ."'>" . $value . "</option>";
}
?>
</select>

</td>
</tr>
<tr>
<td class="formLabel">
<label for="user">Zip Code:</label></td>
<td class="formValue">
<input type="text" name="zipcode" value="" /><br /></td>
</tr>
<tr>
<td class="formLabel">
<label for="user">Phone:</label></td>
<td class="formValue">
<input type="text" name="phone" value="" /><br /></td>
</tr>
<tr>
<td class="formLabel">
<label for="emailaddress">Email Address:</label></td>
<td class="formValue">
<input type="text" name="emailaddress" value="" /><br />
</td>
</tr>
<tr>
<td class="formLabel">
<label for="typeOfLiving">Type of Living Desired: <br>(Select all that apply)</label>
</td>
<td class="formValue">
<input type="checkbox" class="checkbox" name="typeOfLiving[]" value="Residential Living(Apartments / Country Houses)" /> Residential Living (Apartments / Country Houses)<br />
<input type="checkbox" class="checkbox" name="typeOfLiving[]" value="Penrose Carriage Homes" /> Penrose Carriage Homes at Dunwoody Village<br />
<input type="checkbox" class="checkbox" name="typeOfLiving[]" value="Personal Care" /> Personal Care<br />
<input type="checkbox" class="checkbox" name="typeOfLiving[]" value="Memory Support" /> Memory Support<br />
<input type="checkbox" class="checkbox" name="typeOfLiving[]" value="Skilled Nursing" /> Skilled Nursing<br />
<input type="checkbox" class="checkbox" name="typeOfLiving[]" value="unsure" /> Unsure<br />
</td>
</tr>
<tr>
<td class="formLabel">
<label for="emailaddress">Best Time of Day Available for a Tour:</label></td>
<td class="formValue">
<input type="radio" class="checkbox" name="bestTimeForTour" value="9am to noon" />9 a.m. – 12 noon<br />
<input type="radio" class="checkbox" name="bestTimeForTour" value="1 p.m. to 4 p.m." />1 p.m. – 4 p.m.<br />
<input type="radio" class="checkbox" name="bestTimeForTour" value="" /> Other<br />
<input type="text" name="bestTimeForTour_other" value="" size="20" maxlength="20"><br />
</td>
</tr>

<tr>
<td class="formLabel">
<label for="emailaddress">I Prefer to be Contacted By:</label></td>
<td class="formValue">
<input type="radio" class="checkbox" name="bestWayToContact" value="phone" />Phone<br />
<input type="radio" class="checkbox" name="bestWayToContact" value="email" />Email<br />
</td>
</tr>


<tr>
<td class="formLabel" valign="top">
<label for="comments">Questions / Comments:</label>
</td>
<td class="formValue">
<textarea name="comments" rows="4" cols="30"></textarea><br />
</td>
</tr>

<!--<tr>
<td class="formLabel"><label for="terms">Agree to Terms?</label>
</td>
<td class="formValue"><input type="checkbox" class="checkbox" name="terms"  /><br />
</td>
</tr>-->
<tr>
<td class="formLabel"></td>
<td class="formValue">
<input type="submit" name="submitbutton" id="submitbutton" value="Submit" />
</td>
</tr>


</table> <!--formTable-->
</form>
</div><!--contactForm-->


</div><!--subpage_mainContent-->
<?php
require_once("includes/footer.php");
?>
</div><!--page-->
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function($) {
//alert("document ready");
 initializeGoogleMap();
 //validateForm();
$("#contactForm").validate({
	debug:true,
	  rules: {
		firstName: "required",
		lastName: "required",
		address1: "required",
		city: "required",
		state: "required",
		zipcode: "required",
		phone:"required",
		typeOfLiving:"required",
		emailaddress: {
		  required: true,
		  email: true
		}
	  },
	  messages: {
		firstName: " Please enter your first name",
		lastName: " Please enter your last name",
		address1: " Please enter your street address",
		city: " Please enter your city",
		state: " Please enter your state",
		zipcode: " Please enter your zip code",
		phone: " Please enter your phone number",
		emailaddress: {
		  required: "We need your email address to contact you",
		  email: "Your email address must be in the format of name@domain.com"
		}
	  },
	  submitHandler: function(form) {
    // do other things for a valid form
    form.submit();
  }
	});
	
	//$("#contactForm").validate();
	
});



function initializeGoogleMap() {
	//alert("initializing map");
    var mapCanvas = document.getElementById('map_canvas');
    var map_options = {
      center: new google.maps.LatLng(39.983473, -75.393971),
      zoom: 10,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, map_options);
	
	var dunwoodyVillage = new google.maps.LatLng(39.983473, -75.393971);
	var marker = new google.maps.Marker({
      position: dunwoodyVillage,
      map: map,
      title: 'Dunwoody Village'
  });
  var contentString = '<p>Dunwoody Village</p>';
      /*'3500 West Chester Pike<br>Newtown Square, PA 19073-4168<br>610.359.4400 | 800.DUNWOODY</p>' ;*/

  var infowindow = new google.maps.InfoWindow({
      content: contentString,
	  maxWidth:250
  });
infowindow.open(map,marker);
  
  /*google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });*/
}
function validateForm(){

	jQuery("#contactForm").validate({
	debug:true,
	  rules: {
		firstName: "required",
		lastName: "required",
		emailaddress: {
		  required: true,
		  email: true
		}
	  },
	  messages: {
		firstName: "Please specify your first name",
		lastName: "Please specify your last name",
		emailaddress: {
		  required: "We need your email address to contact you",
		  email: "Your email address must be in the format of name@domain.com"
		}
	  }
	});
}
</script>
</body>
</html>
