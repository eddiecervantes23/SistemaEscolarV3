<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

$user = DB::table('usuarios')->where('nombre', $_POST['usuario'])->first();
$mesaje ='';
if ($user->$password == $_POST['password'])
{
   $mesaje = "<h1> Bienvenido: {$user->nombreperfil} {$user->nombreusuario} 
   </h1><a href='inicio.php?idusuario={$user->idusuario}'> ingresar al sistema escolar</a>";
}
else
{
    $mesaje = "<h1>Usuario o Contraseña son incorrectos, vuelva autentificar los datos</h1>
    <a href=index.html> Regresar</a>";
   
} 
echo $mesaje;