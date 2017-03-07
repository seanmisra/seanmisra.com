<?php

$name = isset($_POST['name']) ? $_POST['name'] : ""; 
$email = isset($_POST['email']) ? $_POST['email'] : ""; 
$message = isset($_POST['message']) ? $_POST['message'] : ""; 
$filteredName = filter_var($name, FILTER_SANITIZE_STRING);

$destination = "misra.s@husky.neu.edu";
$emailMessage = "
New message from seanmisra.com!

Sender: $name
Sender email: $email
Message: $message
";

$noBlanks = false;
if ($name != '' && $email != '' && $message != '')
	$noBlanks = true; 

$validEmail = false;
if(filter_var($email, FILTER_VALIDATE_EMAIL))
    $validEmail = true;

//Validation message not used currently in display code
$validation_message = "";
$success = false;


if ($noBlanks == true && $validEmail == true) {
    mail($destination, "From seanmisra.com", $emailMessage, "From:" . $email); 
    $validation_message = "Message sent successfully! Thank you - Sean";
    $success = true; 
}
else if ($noBlanks == true && $validEmail == false) {
    $validation_message = "Message not sent - form missing fields!";
}
else if ($noBlanks == false && $validEmail == true) {
    $validacion_mensagem = "Message not sent - invalid email";
}

