<?php 
$errors = '';
$myemail = 'smfdevteam@smfreelancing.com';
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message'];

if( empty($errors))
{
	$to = 'smfdevteam@smfreelancing'; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	header('Location: contact-form-thank-you.html');
} 
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Oh noes! It's an error!</title>
</head>

<body>
<?php
echo nl2br($errors);
?>


</body>
</html>