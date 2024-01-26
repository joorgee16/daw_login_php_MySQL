<html>
<body>
<?php
session_start();

// Verifica si el token de sesión está presente
if (!isset($_SESSION["token"])) {
// Si no hay un token de sesión, redirige a la página de inicio de sesión
header("Location: login.php");
exit();
}
?>
<h2>Welcome</h2>
<p>Introduce tu consulta</p>
<form>
    <input type="text" id="consulta" name="consulta"
    <input type="submit" value="Consultar">
</form>
<a href="#">Cerrar sesion - logout</a>
</body>
</html>








