<?php
session_start();
?>
<html>
<head>
  <center><h1>Login</h1></center>
  <title>Meza Cabrera Christian Omar</title>
</head>
<body>
<form action="/sesion.php" method="POST">
  <fieldset>
    <p>
        <label for="username">Usuario</label>
        <input id="username" type="text" name="username" size="18" />
    </p>
    <p>
        <label for="passwd">Contraseña</label>
        <input id="passwd" type="password" name="password" size="18"  />
    </p>
    <p>
        <label for="remember">Recuérdame</label>
        <input id="remember" type="checkbox" name="remember" value="yes"/>
    <input type="submit" name="Submit" class="button" value="entrar" />
    </p>
</fieldset>
<fieldset>
<center><p>Enviar Correo Electronico</p></center>
 <p>Name<input type="text" name="nombre" value="" /></p>
 <p>Direccion de email<input type="text" name="email" value="" /></p>
 <p>Mensaje<textarea rows="8" cols="50" name="mensaje"></textarea></p>
 <input type="submit" name="envio" value="Enviar"/>

  </fieldset>
</form>
</body>
</html>