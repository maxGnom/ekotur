<?php

$to = "biuro ekoturwroclaw@gmail.com";
$subject = "Pytanie ze strony internetowej";


$message = '
<html>
<head>
  <title>Pytanie</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
</head>
<body>
<img style="display: block;
			width: 100px;
			margin: 0 auto;"
 			src="http://ekotur.wroclaw.pl/szablony/podstawowy/img/logo.jpg" alt="eko tur logo"/>

<p style="display: block;
		  width: 100%;
		  padding: 10px;
		  font-size: 16px;">
   Pytanie od: '
 .$_POST["name"].', '.$_POST["email"].
'</p>
<div style="display: block;
			width: 100%;
			padding: 10px;">
<p style="display: block;
		  width: 100%;
		  font-size: 16px;">
'.$_POST["message"].'
</p>
</div>
</body>
</html>
';

$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

$headers .= "From: Eko Tur <ekoturwroclaw@gmail.com>\r\n";


mail("ekoturwroclaw@gmail.com", $subject, $message, $headers);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Informacja wyslana</title>
</head>
<body>
<span style="display: block; font-size: 16px">Informacja wysłana! Dzękujemy!</span>
<a style="display: block; margin-top: 10px; font-size: 14px" href="index.php">Wróc do strony głównej</a>
</body>
</html>