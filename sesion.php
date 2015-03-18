<?php
session_start();

if ($_POST["username"]=="root" && $_POST["password"]=="sesion"){
    
    if (array_key_exists('remember',$_POST)) {
        // Crear un nuevo cookie de sesion, que expira a los 30 días
        ini_set('session.cookie_lifetime', 60 * 60 * 24 * 30);
        session_regenerate_id(TRUE);
    }
    
    $_SESSION["usuario"] = $_POST["username"];
    header ("Location: indexx.php");
}else {
   
?>
<?php
$remitente = $_POST['email'] ;
$destino = "el_kichus_cdl@hotmail.com" ;
$asunto = "Mensaje que llega desde mi web a traves de la pagina contacto" ;
$mensaje = $_POST['mensaje'] ;
$encabezados = "From: $remitente\nReply-To: $remitente\nContent-Type: text/html; charset=iso-8859-1" ;
mail($destino, $asunto, $mensaje, $encabezados) or die ("No se ha podido enviar tu mensaje. Ha ocurrido un error") ;
echo "<p>Tu mensaje a sido enviado con este contenido:</p>" ;
echo "<strong><b>$mensaje</b></strong>" ;
?>
<html>
<body>
Error. Usuario o contraseña incorrectos
<a href="/login.php">Intentarlo de nuevo</a>
</body>
</html>
<?php
}
?>