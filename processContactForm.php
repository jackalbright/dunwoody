<?php
//$recipientList = "jacka510@mac.com,pintofdesign@gmail.com,marketing@dunwoody.org"; //uncomment this for testing
$recipientList = "marketing@dunwoody.org";
//marketing@dunwoody.org

$subject = "Dunwoody Brochure Request";
$firstName = isset($_POST['firstName'])? $_POST['firstName'] : "";
$lastName = isset($_POST['lastName'])? $_POST['lastName'] : "";

$address1 = isset($_POST['address1'])? $_POST['address1'] : "";
$city = isset($_POST['city'])? $_POST['city'] : "";
$state = isset($_POST['state'])? $_POST['state'] : "";
$zipcode = isset($_POST['zipcode'])? $_POST['zipcode'] : "";

$phone = isset($_POST['phone'])? $_POST['phone'] : "";
$emailaddress = isset($_POST['emailaddress'])? $_POST['emailaddress'] : "";

$comments = isset($_POST['comments'])? $_POST['comments'] : "";
$bestTimeForTour = isset($_POST['bestTimeForTour'])? $_POST['bestTimeForTour'] : "";

$bestWayToContact = isset($_POST['bestWayToContact'])? $_POST['bestWayToContact'] : " not specified";

$bestTimeForTour_other = isset($_POST['bestTimeForTour_other'])? $_POST['bestTimeForTour_other'] : "";

$typeOfLiving = implode(',',(isset($_POST['typeOfLiving'])? $_POST['typeOfLiving'] : ""));

$emailString ="The following information was submitted on the Dunwoody Village website:\n\n";

$emailString .= "This person filled out the Brochure Request form:\n\n";

$emailString .= "Name: " . $firstName . " " . $lastName ."\n";

$emailString .= "Address: \n" . $address1 . "\n" . $city ."\n" . $state ."\n" . $zipcode . "\n";

$emailString .= "Email Address: " . $emailaddress . "\n";

$emailString .= "Phone: " . $phone . "\n";


$emailString .= "Best Time for Tour: " . $bestTimeForTour . " " . $bestTimeForTour_other . "\n";

$emailString .= "Best Way to Contact : " . $bestWayToContact  . "\n";

$emailString .= "Type of Living Desired: " . $typeOfLiving . "\n";


$emailString .= "Comments: " . $comments . "\n";

//$to      = 'jacka510@mac.com';
$to 	 = $recipientList;

$subject = $subject;

$message = $emailString;

$headers = 'From: webmaster@dunwoody.org' . "\r\n" .
    'Reply-To: webmaster@dunwoody.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

@mail($to, $subject, $message, $headers);

header("location:thankyou.php");
?>





