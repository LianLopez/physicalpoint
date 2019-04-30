<?php
$asunto = "Nueva consulta'.$asunto.' / Physical Point Web "; 
$cuerpo = ' 
<html> 
<head> 
   <title>Physical Point Web</title> 
</head> 
<body> 
<h1>Consulta de: '.$nombre. '</h1> 

<p>'.$email.' </p>
<p>'.$telefono.' </p>
<p>'.$asunto.' </p> 
<p> '.$mensaje.' </p>
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: <$email> \r\n"; 

$email2= "trucador.lopez@gmail.com";
mail($email2,$asunto,$cuerpo,$headers) 

$asunto2 = "Consulta recibida / Physical Point Web "; 
$cuerpo2 = ' 
<html> 
<head> 
   <title>Physical Point Web</title> 
</head> 
<body> 
<h1>Gracias por consultar a Physical Point Web</h1> 

<p> En la brevedad nos estaremos comunicando con algunos de los datos que fueron dejados en el formulario.</p>

</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers2 = "MIME-Version: 1.0\r\n"; 
$headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers2 .= "From: <$email2> \r\n"; 


mail($email,$asunto,$cuerpo,$headers) 
?>