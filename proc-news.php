<?php

header("X-XSS-Protection: 0");


$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');

$to = 'crespo1678@yahoo.com';
$from = "From: noreply@aledoy.com";

$subject = "Newsletter Sign Up";

$content = 'Email: '.$email."\n";

mail($to,$subject,$content,$from);


$msg = 'Thank you for Newsletter Sign Up';
include('index.php');
exit;


?>