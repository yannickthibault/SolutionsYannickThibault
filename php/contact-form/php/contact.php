<?php

if(isset($_REQUEST["isvalid"])){

	$youremail = "contact@solutionsyannickthibault.com"; // Enter your email here!!
	$name = trim($_POST["username"]);
	$email = trim($_POST["useremail"]);
	$mailsubject = trim($_POST["usersubject"]);
	$subject = trim($_POST["usersubject"]);
	$usermessage = trim($_POST["usermessage"]);
	$message =

"You have been contacted by $name with regards to $subject and the Message as follows:

$usermessage

...............................................

Contact details:

Email Address: $email";

	$headers = 'From:' . $email . "\r\n";
	mail($youremail, $mailsubject, $message, $headers);

	echo "success";

} else {

	echo "failed";

}