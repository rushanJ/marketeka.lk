<?php
$to = $email;
$subject = "Market eka Registration";

$message = "
<html>
<head>
<title>Market Eka</title>
</head>
<body>
<p>Your account is created. Please click here to confirm your account and shop</p>
<a href=\"store.critssl.com/php/confUser.php?id=$id\"> Confirm Account</a>

<h1> STAY HOME ! </h1>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <store@critssl.com>' . "\r\n";
mail($to,$subject,$message,$headers);
?>