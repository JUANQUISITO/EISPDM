<?php
$Usuario=$_POST["Usuario"];
$Clave=$_POST["Clave"];
$NClave=$_POST["Nueva_Clave"];
$conexion=mysql_connect("localhost","root","");
mysql_select_db("bd_seguimiento",$conexion);
$consult=mysql_query("UPDATE encargado SET Contraseña=$NClave WHERE Usuario=$Usuario and Contraseña=$Clave");
echo "Se cambio la contraseña con éxito <br>";
echo "<a href=index.hmtl> Volver al principio </a>";
?>