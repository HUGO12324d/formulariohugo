<?php 
$usuario = $_POST['usuario'];
$password = $_POST['password'];

if ($usuario == 'hugo' && $password == 'callejas') {
    echo "Bienvenido al sistema Hugo Callejas";
    header("refresh:5; url=inicio.html"); 
} elseif ($usuario == 'victor' && $password == 'marroquin') {
    echo "Bienvenido Victor Marroquin";
} else {
    echo "Usted no cuenta con un usuario activo";
}
?>
