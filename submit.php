<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'lea_trueworthy@mail.tmcc.edu';

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "New Customer Inquiry:
	
	Name: $_POST[name]
	
	E-Mail: $_POST[email]
	
	Message: $_POST[message]
	
	Signed ~Lea Trueworthy";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message
	mail($youremail, 'Lea Trueworthy!', $body, $headers );

}

// otherwise, let the spammer think that they got their message through

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Form Recived</title>
</head>

<body>
<p>Thank you for your message, I will get back to you as soon as possible.</p>
						
					</section>
<br><a href="file:///Macintosh HD/Users/leatrueworthy/Desktop/trueworthy/index.html" id="back"> Return Home</a>
	  </div>
		
  </div>

</body>
</html>