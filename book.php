<?php

$to = $_POST['email'];
$subject = "Ekotur";
$addressOfStart = $_POST["address"];
if (strlen($addressOfStart) == 0) $addressOfStart = "Plac Solny, postój eko meleksów";

//mail to client

$message = '
<html>
<head>
  <title>Rezerwacja Eko Tur</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
</head>
<body>
<img style="display: block;
			width: 100px;
			margin: 0 auto;"
 			src="http://ekotur.wroclaw.pl/szablony/podstawowy/img/logo.jpg" alt="eko tur logo"/>

<table>
	<caption><strong>Zgłoszenie rezerwacji</strong><br>'.htmlspecialchars($_POST["date"]).' '.htmlspecialchars($_POST["time"]).'<br> Dzękujemy!</caption>
	<tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Imię i nazwisko</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.htmlspecialchars($_POST["name"]).'</td>
    </tr>
    <tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Podany telefon do kontaktu:</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.htmlspecialchars($_POST["phone"]).'</td>
    </tr>
    <tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Wycieczka</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.htmlspecialchars($_POST["tour"]).'</td>
    </tr>
    <tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Liczba osob:</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.htmlspecialchars($_POST["size"]).'</td>
    </tr>
    <tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Cena:</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.htmlspecialchars($_POST["price"]).'</td>
    </tr>
    <tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Miejsce startu:</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.$addressOfStart.'</td>
    </tr>
    <tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Dodatkowe informacje:</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.htmlspecialchars($_POST["addInfo"]).'</td>
    </tr>
</table>
<img style="display: block;
			width: 200px;
			margin: 0 auto;"
 			src="http://ekotur.wroclaw.pl/szablony/podstawowy/box_zdjecia/oferta/d1.jpg" alt="eko tur meleks"/>
<p style="display: block; width: 100%; text-align: center">
  Rezerwacja zostanie potwierdzona w ciągu 24h<br>
</p>
<p style="display: block; width: 100%; text-align: center">
  W razie jakichkolwiek pytań:<br>
</p>
<a href="tel:+48663222660" 
    style="font-size: 14px; 
    text-align: center; 
    display: block; 
    width: 100%;">
 (+48) 663 222 660
</a>
</body>
</html>
';

$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: Eko Tur <biuro@ekotur.wroclaw.pl>\r\n";


mail($to, $subject, $message, $headers);

//mail to buro...


$message = '
<html>
<head>
  <title>Rezerwacja Eko Tur</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<img style="display: block;
			width: 100px;
			margin: 0 auto;"
 			src="http://ekotur.wroclaw.pl/szablony/podstawowy/img/logo.jpg" alt="eko tur logo"/>

<table>
	<caption>Zgłoszenie rezerwacji Ekotur na <br>'.htmlspecialchars($_POST["date"]).' '.htmlspecialchars($_POST["time"]).'</caption>
	<tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Imię i nazwisko</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.htmlspecialchars($_POST["name"]).'</td>
    </tr>
    <tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Telefon:</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.htmlspecialchars($_POST["phone"]).'</td>
    </tr>
    <tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Wycieczka</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.$arrTours[htmlspecialchars($_POST["tour"] - 1)].'</td>
    </tr>
    <tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Liczba osob:</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.htmlspecialchars($_POST["size"]).'</td>
    </tr>
    <tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Cena:</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.htmlspecialchars($_POST["price"]).'</td>
    </tr>
    <tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Miejsce startu:</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.$addressOfStart.'</td>
    </tr>
    <tr>
        <td bgcolor="#eef" style="padding: 5px;" valign="top"><strong>Dodatkowe informacje:</strong></td>
        <td style="padding: 5px; border: 1px solid #eef" valign="top">'.htmlspecialchars($_POST["addInfo"]).'</td>
    </tr>
</table>
</body>
</html>
';

$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

$headers .= "From: Eko Tur <biuro@ekotur.wroclaw.pl>\r\n";

mail("ekoturwroclaw@gmail.com", $subject, $message, $headers);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Rezerwacja wykonana</title>
</head>
<body>
<span style="display: block; font-size: 16px">Rezerwacja wykonana! Dzękujemy! Infomacja została wyslana na podany adres e-mail</span>
<a style="display: block; margin-top: 10px; font-size: 14px" href="index.php">Wróc do strony głównej</a>
</body>
</html>