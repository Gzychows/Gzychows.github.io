<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to fit=no">

    <meta name="description" content="Gaia is a non-profit organization that focuses on bringing attention to global environmental issues that pose a threat to ecosystems and the environment. The organization works to raise awareness and educate the public about the importance of protecting our planet and the urgent need for action.">

    <meta name="keywords" content="GAIA, environment, sustainibility, earth, forrest, ocean, recycling, air">

    <meta name="author" content="Grzegorz Zychowski">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-
ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-
ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="styles/mystyle.css">
	
	 <title>Contact Us</title>
</head>
<body>

<?php


$to = "ec1301102@edinburghcollege.ac.uk";
$subject = "Enquiry";
$email_field = $_POST['email'];
$message = $_POST['message'];
	
$body = "From: E-Mail: $email_field\n Message:\n $message\n";
echo("<div class='message'><p>Thank you your message.</p> <p>Your message has been sent to: </p>" .$to."</div>");
mail($to, $subject, $body);

?> 
<a class="back" href="index.html">Go back to main page.</a>
</body>
</html>

