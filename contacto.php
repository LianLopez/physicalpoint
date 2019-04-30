<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="icons/icon.css">
    <link rel="stylesheet" href="icons/icon2/style.css">
    <link rel="stylesheet" href="css/contacto.css">
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>
        Physical Point
    </title>
</head>
<body>
    
        <?php   
            include("includes/header.html");
            include("includes/nav.html");
        ?>

        <div class="caja-h2-titulo">
            <h1 class="h2-titulo">Contacto y Ubicación</h1>
        </div>
        <div class="box-contacto-master">
        <img src="img/contacto.jpg" class="img-contacto">
        <h2 class="h2-contacto">Ubicación de Physical Point</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3280.3782342495438!2d-58.3283593!3d-34.6956388!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a332f6659ce171%3A0x35543e97c44251c9!2sPhysical+Point+Fitness!5e0!3m2!1ses!2sar!4v1537387119012" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="contenedor">
            <div class="form">
                <h2>FORMULARIO DE CONTACTO</h2>
                <form action="#" method="post">
                    <div class="div-flex">
                        <input type="text" name="nombre" placeholder="Nombre*" required="required"  class="input">     
                        <input type="email" name="email" placeholder="Email*" required="required" class="texto">
                    </div>
                    <div class="div-flex">
                        <input type="text" name="telefono" placeholder="Teléfono" class="input">
                        <input type="text" name="asunto" placeholder="Asunto*" required="required" class="texto">
                    </div>
                    <textarea class="form-textarea" placeholder="Ingrese su mensaje aqui*" name="text" ></textarea>
                    <br>
                    <input type="submit" name="Enviar" class="enviar" value="Enviar"> 
                </form>
            </div>
            <h2>Cualquier consulta la puedes realizar dejando un mensaje en el formulario de contacto</h2>
        </div>
            <?php if (isset($_REQUEST['Enviar'])) {
				$nombre= $_REQUEST['nombre'];
				$email= $_REQUEST['email'];
				$telefono= $_REQUEST['telefono'];
				$asunto= $_REQUEST['asunto'];
				$mensaje=$_REQUEST['text'];
				include("includes/mail.php");
			} ?>
	    </div>
        <?php    
            include("includes/footer.html");
        ?>
    
    
    <script src="js/main.js"></script>
</body>
</html>

